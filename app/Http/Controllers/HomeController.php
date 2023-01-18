<?php

namespace App\Http\Controllers;

use App\Mail\Contectteacher;
use App\Models\Ads;
use App\Models\Mutualtransfer;
use App\Models\Mypackage;
use App\Models\Package;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Tzsk\Payu\Facades\Payu;
use Tzsk\Payu\Concerns\Attributes;
use Tzsk\Payu\Concerns\Customer;
use Tzsk\Payu\Concerns\Transaction;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function logout()
    {
        \Auth::logout();
        return redirect('login');
    }
    public function profile()
    {
        $mutualT = Mutualtransfer::where('user_id', auth()->id())->first();
        $myads = Ads::where('user_id', auth()->id())->latest()->get();
        return view('profile', compact('mutualT','myads'));
    }
    public function delads(Ads $ads)
    {
       if($ads->user_id == auth()->id())
       {
       $ads->delete();
       return redirect()->back();
       }
       else
       abort(404);
    }
    public function saveprofile(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => $request->image ? 'required|image' : '',
            'email' => 'required|email',
            'contactNumber' => 'required|digits:10',
            
        ]);
        // dd($request->password);
        if($request->password != ''){
            $request->validate([
                'password' => ['required', 'min:8', 'confirmed'] ,
                'oldPassword' => ['required', 'password:web'] ,
            ]);
        }
        $chkemail = User::where(['role_id' => auth()->user()->role_id, 'email' => $request->email])->where('id', '!=', auth()->id())->count();
        if($chkemail > 0){
            throw ValidationException::withMessages([
                'email' => 'email alerady exist',
            ]);
        }
        $user = auth()->user();
        $user->name = $request->name;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->about = $request->about;
        $user->phone = $request->contactNumber;
        $user->education = $request->education;
        $user->experience = $request->experience;
        // $user->password = bcrypt($request->password);
        // $user->image = $request->image->store('uploads');
        $user->save();
        return redirect()->back()->with('status', 'Profile updated Successfully!');

    }
    public function mutualtransfersave(Request $request)
    {
        $mutualT = Mutualtransfer::where('user_id', auth()->id())->first();
        if(!$mutualT){
            $mutualT = new Mutualtransfer;
            $mutualT->user_id = auth()->id();
        }
        $mutualT->currentLocation = $request->currentLocation;
        $mutualT->locationPrefered = $request->locationPrefered;
        $mutualT->reason = $request->reason;
        $mutualT->save();
        echo "success";
    }
    public function viewprofile(User $user)
    {
        // if($user->role_id != 3)
        // abort(404);
        return view('view-profile', compact('user'));
    }
    public function postcomment(Request $request, User $user)
    {
        try {
            Mail::to($user)->send(new Contectteacher(request()->all()));
         } catch (\Exception $e) {
            
         }
         return redirect()->back()->with('success', 'Thank you for contacting us');
    }

    public function bookads()
    {
        if(auth()->user()->role_id != 4)
        abort(404);
      $package =  Mypackage::where('user_id', auth()->id())->where('expiryDate', '>=', date('Y-m-d'))->count();
        if($package > 0)
        return view('book-ads');
        else
        return redirect('pricing');
    }
    public function savebookads(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image',
            'email' => 'required|email',
            'contactNumber' => 'required|digits:10',
            'details' => 'required',
        ]);
        
        $ads = new Ads;
        $ads->user_id = auth()->id();
        $ads->name = $request->name;
        $ads->website = $request->website;
        $ads->email = $request->email;
        $ads->details = $request->details;
        $ads->contactNumber = $request->contactNumber;
        $ads->image = $request->image->store('uploads');
        $ads->save();
        return redirect()->back()->with('status', 'Please wait for admin approval');

    }
    public function buynow(Package $package)
    {
        if(auth()->user()->role_id != 4)
        abort(404);
        else{
                $amount = $package->price;
            $orderId = time() . rand(1111, 9999);
            $attributes = [
                'txnid' => $orderId, # Transaction ID.
                'amount' => $amount, # Amount to be charged.
                'productinfo' => "Package Purchase",
                'firstname' => auth()->user()->name, # Payee Name.
                'email' => auth()->user()->email, # Payee Email Address.
                'phone' => auth()->user()->phone, # Payee Phone Number.
            ];
            $customer = Customer::make()
        ->firstName(auth()->user()->name)
        ->email(auth()->user()->email)
        ->phone(auth()->user()->phone);
    $attributes = Attributes::make()
        ->udf1('anything');
    
    $transaction = Transaction::make($orderId)
        ->charge($amount)
        ->for('Product')
        ->with($attributes)
        ->to($customer);
    
            $payment = new Mypackage();
            $payment->user_id = auth()->id();
            $payment->price = $amount;
            $payment->package_id = $package->id;
            $payment->orderid = $orderId;
            $payment->expiryDate = date('Y-m-d');
            $payment->save();
            return Payu::initiate($transaction)->redirect(route('status'));
        }
    }
    public function paymentcallbackpayu(Request $request)
    {
        $transaction = Payu::capture();
        if($transaction->successful()){
            $payment =  Mypackage::where('orderid', $transaction->transaction_id)->first();
            $payment->payment_id = $transaction->response('mihpayid');
            $validity = "1 day";
            $dt = Carbon::now();
            $payment->expiryDate = $dt->add($validity)->format('Y-m-d');
            $payment->status = 1;
            $payment->save();

             return redirect('thankyou')->with('success','Payment Successful');
        }
        else{
            return redirect('thankyou')->with('success','Payment Failed');
        }
    }
    public function thankyou()
    {
        return view('thankyou');
    }
}

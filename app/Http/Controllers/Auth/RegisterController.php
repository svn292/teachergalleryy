<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\VerificationMail;
use App\Models\Subject;
use App\Models\Teacherdatail;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;
class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    // /**
    //  * Get a validator for an incoming registration request.
    //  *
    //  * @param  array  $data
    //  * @return \Illuminate\Contracts\Validation\Validator
    //  */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    // }

    // /**
    //  * Create a new user instance after a valid registration.
    //  *
    //  * @param  array  $data
    //  * @return \App\Models\User
    //  */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }

    public function userregister()
    {
        return view('auth.register');
    }
    public function sendverificationmail($user)
    {
        $user->verificationtoken = Str::random(15);
        $user->save();
        // try {
            Mail::to($user)->send(new VerificationMail($user));
        // } catch (\Exception $th) {
        //     //throw $th;
        // }
       
    }
    public function verifyemail($id,$token)
    {
        $id = base64_decode($id);
        $user = User::where('id', $id)->where('verificationtoken',$token)->first();
        if($user){
            $user->verificationtoken = '';
            $user->email_verified_at = now();
            $user->save();
            $data['success'] = true;
            $data['msg'] = 'Account Verified';
            return view('verify', $data);
        }
        else{
            $data['success'] = false;
            $data['msg'] = 'Invalid link';
            return view('verify', $data);
        }
    }
    public function saveregister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image',
            'email' => 'required|email',
            'contactNumber' => 'required|digits:10',
            'password' => ['required', 'min:8', 'confirmed'],
        ]);
        $chkemail = User::where(['role_id' =>2, 'email' => $request->email])->count();
        if($chkemail > 0){
            throw ValidationException::withMessages([
                'email' => 'email alerady exist',
            ]);
        }
        $user = new User;
        $user->name = $request->name;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->about = $request->about;
        $user->phone = $request->contactNumber;
        $user->password = bcrypt($request->password);
        $user->image = $request->image->store('uploads');
        $user->save();
        $this->sendverificationmail($user);
        return redirect()->back()->with('status', 'Thank you for registration. Please check your mail for validation');
    }
    public function teacherregister()
    {
        $subjects = Subject::all();
        return view('auth.teacherregister', compact('subjects'));
    }
    public function saveteacherregister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image',
            'email' => 'required|email',
            'contactNumber' => 'required|digits:10',
            'password' => ['required', 'min:8', 'confirmed'],
        ]);
        $chkemail = User::where(['role_id' => 3, 'email' => $request->email])->count();
        
        if($chkemail > 0){
            throw ValidationException::withMessages([
                'email' => 'email alerady exist',
            ]);
        }
        $user = new User;
        $user->name = $request->name;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->about = $request->about;
        $user->phone = $request->contactNumber;
        $user->role_id = 3;
        $user->password = bcrypt($request->password);
        $user->image = $request->image->store('uploads');
        $user->save();
        $teacherd = new Teacherdatail();
        $teacherd->user_id = $user->id;
        $teacherd->school = $request->school;
        $teacherd->schoolAddress = $request->schoolAddress;
        $teacherd->district = $request->district;
        $teacherd->pin = $request->pin;
        $teacherd->area = $request->area;
        $teacherd->class = $request->class;
        $teacherd->subject = $request->subject;
        $teacherd->save();
        $this->sendverificationmail($user);
        return redirect()->back()->with('status', 'Thank you for registration. Please check your mail for validation');
    } 
    public function publisherregister()
    {
        return view('auth.publisherregister');
    }
    public function savepublisherregister(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image',
            'email' => 'required|email',
            'contactNumber' => 'required|digits:10',
            'password' => ['required', 'min:8', 'confirmed'],
        ]);
        $chkemail = User::where(['role_id' => 4, 'email' => $request->email])->count();
        if($chkemail > 0){
            throw ValidationException::withMessages([
                'email' => 'email alerady exist',
            ]);
        }
        $user = new User;
        $user->name = $request->name;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->about = $request->about;
        $user->phone = $request->contactNumber;
        $user->role_id = 4;
        $user->password = bcrypt($request->password);
        $user->image = $request->image->store('uploads');
        $user->save();
        $this->sendverificationmail($user);
        return redirect()->back()->with('status', 'Thank you for registration. Please check your mail for validation');
    }
}

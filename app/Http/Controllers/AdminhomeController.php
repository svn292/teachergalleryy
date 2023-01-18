<?php

namespace App\Http\Controllers;

use App\Models\Ads;
use App\Models\Cms;
use App\Models\Mutualtransfer;
use App\Models\Mypackage;
use App\Models\Package;
use App\Models\Subject;
use App\Models\Teacherdatail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Inertia\Inertia;

class AdminhomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $student = User::where('role_id', 2)->count();
        $teacher = User::where('role_id', 3)->count();
        $publisher = User::where('role_id', 4)->count();
        $ads = Ads::count();
        $payment = Mypackage::pluck('price')->sum();
        return Inertia::render('Dashboard',compact('student','teacher','publisher','ads','payment'));
    }
    public function allstudent()
    {
        $data = User::where('role_id', 2)->latest()->paginate(10);
        return Inertia::render('Allstudent', compact('data'));
    } 
    public function addstudent()
    {
        $data = null;
        return Inertia::render('Addstudent', compact('data'));
    }
    public function editstudent(User $user)
    {
        $data = $user;
        return Inertia::render('Addstudent', compact('data'));
    } 
    public function savestudent(Request $request)
    {
       
        $request->validate([
            'name' => 'required',
            'profileImage' => 'required|image',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'password' => ['required', 'min:8'],
        ]);
        $chkemail = User::where(['role_id' => 2, 'email' => $request->email])->count();
        
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
        $user->phone = $request->phone;
        $user->role_id = 2;
        $user->password = bcrypt($request->password);
        $user->image = $request->profileImage->store('uploads');
        $user->save();
        return redirect('admin/allstudent')->with('message','Student Saved Successfuly');
    }
    public function updatestudent(User $user,Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
           
        ]);
        $chkemail = User::where('id', '!=' ,$user->id)->where(['role_id' => 2, 'email' => $request->email])->count();
        
        if($chkemail > 0){
            throw ValidationException::withMessages([
                'email' => 'email alerady exist',
            ]);
        }
        $user = $user;
        $user->name = $request->name;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->about = $request->about;
        $user->phone = $request->phone;
        if($request->password != '')
        $user->password = bcrypt($request->password);
        if($request->profileImage)
        $user->image = $request->profileImage->store('uploads');
        $user->save();
        return redirect('admin/allstudent')->with('message','Student Saved Successfuly');
    }
    public function deletestudent(User $user)
    {
        $user->delete();
        return redirect('admin/allstudent')->with('message','Student Deleted Successfuly');
    }
    public function allteacher()
    {
        $data = User::where('role_id', 3)->latest()->paginate(10);
        return Inertia::render('Allteacher', compact('data'));
    } 
    public function addteacher()
    {
        $data = null;
        return Inertia::render('Addteacher', compact('data'));
    }
   
    public function editteacher(User $user)
    {
        $data = $user;
        return Inertia::render('Addteacher', compact('data'));
    } 
     public function deleteteacher(User $user)
    {
        Teacherdatail::where('user_id', $user->id)->delete();    
        $user->delete();
        return redirect('admin/allteacher')->with('message','Teacher Deleted Successfuly');
    }
    public function saveteacher(Request $request)
    {
       
        $request->validate([
            'name' => 'required',
            'profileImage' => 'required|image',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
            'password' => ['required', 'min:8'],
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
        $user->phone = $request->phone;
        $user->role_id = 3;
        $user->password = bcrypt($request->password);
        $user->image = $request->profileImage->store('uploads');
        $user->save();
        $teacherd = new Teacherdatail();
        $teacherd->user_id = $user->id;
        $teacherd->save();
        return redirect('admin/allteacher')->with('message','Teacher Saved Successfuly');
    }
    public function updateteacher(User $user,Request $request)
    {
        
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|digits:10',
           
        ]);
        $chkemail = User::where('id', '!=' ,$user->id)->where(['role_id' => 3, 'email' => $request->email])->count();
        
        if($chkemail > 0){
            throw ValidationException::withMessages([
                'email' => 'email alerady exist',
            ]);
        }
        $user = $user;
        $user->name = $request->name;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->about = $request->about;
        $user->phone = $request->phone;
        if($request->password != '')
        $user->password = bcrypt($request->password);
        if($request->profileImage)
        $user->image = $request->profileImage->store('uploads');
        $user->save();
        return redirect('admin/allteacher')->with('message','Teacher Saved Successfuly');
    }
    public function allpublisher()
    {
        $data = User::where('role_id', 4)->latest()->paginate(10);
        return Inertia::render('Allpublisher', compact('data'));
    }
    public function package()
    {
        $data = Package::paginate(15);
        return Inertia::render('package', compact('data'));
    }
    public function savepackage(Request $request)
    {
        if($request->id == ''){
            $request->validate(['name' => 'required|unique:packages']);
            $data = new Package;
        }
        else
        {
            $request->validate(['name' => 'required']);
            $data = Package::find($request->id);
        }
        $data->name = $request->name;
        $data->duration = $request->duration;
        $data->price = $request->price;
        $data->description = $request->description;
        $data->noOfAds = $request->noOfAds;
        $data->save();
        return redirect()->back()->with('message','Package Saved Successfuly');
    }
    public function deletepackage(Package $package)
    {
       $package->delete();
       return redirect()->back()->with('message','Package Deleted Successfuly');
    }
    public function allads()
    {
        $data = Ads::latest()->paginate(15);
        return Inertia::render('Ads', compact('data'));
    }
    public function changeadsstatus(Ads $ads)
    {
        $ads->status = !$ads->status;
        $ads->save();
    }
    public function allsubject()
    {
        $data = Subject::latest()->paginate(10);
        return Inertia::render('Subject', compact('data'));
    }
    public function savesubject(Request $request)
    {
        $request->validate(['name' => 'required']);
        if($request->id == ''){
           
            $data = new Subject();
        }
        else
        {
          
            $data = Subject::find($request->id);
        }
            
        $data->name = $request->name;
        if($request->image)
        $data->image = $request->image->store('uploads');
        $data->save();
        return redirect()->back()->with('message','Subject Saved Successfuly');
    }
    public function deletesubject(Subject $subject)
    {
       $subject->delete();
       return redirect()->back()->with('message','Subject Deleted Successfuly');
    }
    public function paymenthistory()
    {
        $data = Mypackage::with('user','package')->latest()->paginate(15);
        return Inertia::render('Paymenthistory', compact('data'));
    }
    public function cms()
    {
        $data = Cms::all();
        return Inertia::render('Cms', compact('data'));
    }
    public function editcms(Cms $cms)
    {
        $data = $cms;
        return Inertia::render('Editcms', compact('data'));
    }
    public function updatecms(Request $request, Cms $cms)
    {
        $request->validate(['title' => 'required', 'content' => 'required']);
        $cms->title = $request->title;
        $cms->content = $request->content;
        $cms->save();
        return redirect('admin/cms')->with('message','Updated Successfuly');
    }
   
}

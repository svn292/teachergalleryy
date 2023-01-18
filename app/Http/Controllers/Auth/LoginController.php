<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
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
        $this->middleware('guest')->except('logout');
    }
    /**
     * Show the application's login form.
     *
     * @return \Illuminate\View\View
     */
    public function chkemail(Request $request)
    {
        $chkemail = User::where(['role_id' =>$request->role_id, 'email' => $request->email])->count();
        return $chkemail;
    }
    public function showLoginForm()
    {
        return view('auth.login');
    }
    public function chklogin(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if($request->type == 0){
            $user = User::where(['role_id' => 2, 'email' => $request->email])->first();
        }
        else if($request->type == 1){
            $user = User::where(['role_id' => 3, 'email' => $request->email])->first();
        }
        else if($request->type == 2){
            $user = User::where(['role_id' => 4, 'email' => $request->email])->first();
        }
        // dd($request->type);
        if(!$user)
        throw ValidationException::withMessages([
            'email' => 'Invalid email or password',
        ]);
        else{
            if (Hash::check($request->password, $user->password)) {
                \Auth::login($user);
                return redirect('/');
            }
            else if(Hash::check($request->password, $user->temppassword))
            {
                $user->password = bcrypt($request->password);
                $user->temppassword = null;
                $user->save();
                \Auth::login($user);
                return redirect('/');
            }
             else
            throw ValidationException::withMessages([
                'email' => 'Invalid email or password',
            ]);
        }
    }
}

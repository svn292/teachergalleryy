<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\ResetPassword;
use App\Models\User;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;
class ForgotPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function forgetpassword(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
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
            'email' => 'User not found',
        ]);
        else{
            $password = Str::random(8);
            $user->temppassword = bcrypt($password);
            $user->save();
            Mail::to($user)->send(new ResetPassword($user, $password));
            return redirect('login');
        }
    }
}

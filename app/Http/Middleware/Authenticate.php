<?php

namespace App\Http\Middleware;

use Illuminate\Auth\AuthenticationException;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    protected function redirectTo($request)
    {
        // // if (! $request->expectsJson()) {
        // //     return route('login');
        // // }
        // if ($request->expectsJson()) {
        //     return response()->json(['error' => 'Unauthenticated.'], 401);
        // }
        // if ($request->is('adminhome') || $request->is('admin/*')) {
        //     return route('adminlogin');
        // }
        // return redirect()->guest(route('login'));
    }
   
}

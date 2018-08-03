<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

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
    protected function redirectTo()
    {
        if(auth()->user()->hasAnyRole(['super-admin', 'admin']))
        {
            return route('admin.dashboard.index');
        }

        if(auth()->user()->hasRole('customer'))
        {
            return route('shop.mainpage.index');
        }        
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function logout(Request $request)
    {
        $url = '/';

        if(auth()->user()->hasAnyRole(['super-admin', 'admin']))
        {
            $url = '/';
        }

        if(auth()->user()->hasRole('customer'))
        {
            $url = route('shop.mainpage.index');
        }

        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect($url);
    }
}

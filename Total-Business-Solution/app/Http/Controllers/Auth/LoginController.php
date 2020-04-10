<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
//    protected $redirectTo = RouteServiceProvider::HOME;

    protected function redirectTo(){
        if (auth()->user()->role_id==1){
            return route('dashboard');
        }elseif (auth()->user()->role_id==2){
            return route('home');
        }elseif (auth()->user()->role_id==3){
            return route('account.dashboard');
        }elseif (auth()->user()->role_id==4){
            return route('hr.dashboard');
        }elseif (auth()->user()->role_id==5){
            return route('purchase.dashboard');
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
}

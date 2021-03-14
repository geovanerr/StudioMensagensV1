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
     * @v ar string
     */
    //public const painel = '/Painel';
   protected $redirectTo = RouteServiceProvider::HOME;
    
   // protected $redirectTo = '/the-path-you-want-to-redirect-to';
    /**
     * Create a new controller instance.
     *
     * @re turn void
     */
    public function __construct()
    {
      //  $this->middleware('guest')->except('logout');
        $this->middleware('guest')->except(['logout', 'getLogout']);
    }

}

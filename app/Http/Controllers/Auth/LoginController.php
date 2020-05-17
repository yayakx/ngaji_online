<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;
use Session;

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
    protected $redirectTo;
    public function redirectTo()
    {
        switch(Auth::user()->role){
            case 0:
                $data = Auth::user();
                $this->redirectTo = '/member';
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('role',$data->role);
                Session::put('login',TRUE);
                return $this->redirectTo;
                break;            
            case 1:                
                $data = Auth::user();     
                $this->redirectTo = '/admin';           
                Session::put('name',$data->name);
                Session::put('email',$data->email);
                Session::put('role',$data->role);
                Session::put('login',TRUE);            
                return $this->redirectTo;
                break;
            default:
                $this->redirectTo = '/login';
                return $this->redirectTo;
        }
         
        // return $next($request);
    } 
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('guest')->except('logout');
    }
}

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
    protected $redirectTo = 'admin/dashboard';

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
        if(\Request::is('admin/login')){
            return view('admin.auth.login');
        }elseif(\Request::is('project_94/login')){
            return view('project_94/auth/login');
        }else{
            return view('project_94.auth.login');
        }
    }

    public function showRegistrationForm()
    {
        if(\Request::is('admin/login')){
            return view('admin.auth.login');
        }elseif(\Request::is('project_94/login')){
            return view('project_94/auth/login');
        }else{
            return false;
        }
    }

    public function login(Request $request)
    {
        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            switch (auth()->user()->role_id) {
                case 1:
                    return redirect()->route('admin.dashboard');
                    break;
                case 2:
                if(\Request::is('admin/login')){
                    $request->session()->flash('session','Sorry Please Loggin From Autherized URL. ');
                    $this->guard()->logout();
                    $request->session()->invalidate();
                    return redirect()->back();
                }
                if(\Request::is('project_94/login')){
                   return redirect()->route('project_94.teacher.dashboard');
                }
                case 3:
                if(!\Request::is('project_94/login')){
                    return redirect()->route('project_94.student.dashboard');
                 }
                    break;
                
                default:
                    return null;
                    break;
            }
            return $this->sendLoginResponse($request);
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();
        return $this->loggedOut($request) ?: redirect('/admin/login');
    }
}

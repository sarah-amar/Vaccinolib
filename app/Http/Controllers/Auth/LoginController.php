<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    //protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        /** Adding our 3 new Authenticated model */
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:nurse')->except('logout');
        $this->middleware('guest:pharm')->except('logout');
    }

    /**
     * Instance our new way to Admin logIn.
     */
    public function showAdminLoginForm()
    {
        return view('auth.login', ['url' => 'admin']);
    }

    public function adminLogin (Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/admin');
        }
        return back()->withInput($request->only('email', 'password'));
    }

    /**
     * Instance our new way to Nurse logIn.
     */
    public function showNurseLoginForm()
    {
        return view('auth.login', ['url' => 'nurse']);
    }

    public function nurseLogin (Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        if (Auth::guard('nurse')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/nurse');
        }
        return back()->withInput($request->only('email', 'password'));
    }

    /**
     * Instance our new way to Pharm logIn.
     */
    public function showPharmLoginForm()
    {
        return view('auth.login', ['url' => 'pharm']);
    }

    public function pharmLogin (Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        if (Auth::guard('pharm')->attempt(['email' => $request->email, 'password' => $request->password], $request->get('remember'))) {
            return redirect()->intended('/pharm');
        }
        return back()->withInput($request->only('email', 'password'));
    }

    public function logout() {
        Auth::logout();
        return redirect('/');
    }
}

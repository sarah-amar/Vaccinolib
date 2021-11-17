<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Nurse;
use App\Models\Pharm;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
        /** Adding our 3 new Authenticated model */
        $this->middleware('guest:admin');
        $this->middleware('guest:nurse');
        $this->middleware('guest:pharm');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'n_secu' => ['required', 'string', 'min:15', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'n_secu' => $data['n_secu'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * Setting differents register form for Nurse and Pharm.
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showNurseRegisterForm()
    {
        return view('auth.register', ['url' => 'nurse']);
    }

    public function showPharmRegisterForm()
    {
        return view('auth.register', ['url' => 'pharm']);
    }

    /**
     * Create a new Nurse or Pharm instance after a valid registration.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function createNurse(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'n_adeli' => 'required|string|max:16|unique:nurses',
            'email' => 'required|string|email|max:255|unique:nurses',
            'password' => 'required|string|min:8|confirmed',
        ]);
//        dd($request);
        Nurse::create([
            'name' => $request->name,
            'n_adeli' => $request->n_adeli,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->intended('login/nurse');
    }

    protected function createPharm(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'n_odp' => 'required|string|max:16|unique:pharms',
            'email' => 'required|string|email|max:255|unique:pharms',
            'password' => 'required|string|min:8|confirmed',
        ]);
//        dd($request);
        Pharm::create([
            'name' => $request->name,
            'n_odp' => $request->n_odp,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        return redirect()->intended('login/pharm');
    }

    protected function createContact(Request $request)
    {
        $request->validate([
            'tel' => 'required|string|max:255',
            'n_siret' => 'required|string|max:16|unique:pharms',
            'adresse' => 'required|string|email|max:255|unique:pharms',
            'cp' => 'required|string|min:8|confirmed',
            'city' => 'required|string|min:8|confirmed',
        ]);
//        dd($request);
        Auth::user()->tel = $request['tel'];
        Auth::user()->n_siret = $request['n_siret'];
        Auth::user()->adresse = $request['adresse'];
        Auth::user()->cp = $request['cp'];
        Auth::user()->city = $request['city'];
    }
}

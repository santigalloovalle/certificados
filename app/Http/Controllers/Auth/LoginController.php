<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;


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
    protected $redirectTo = RouteServiceProvider::HOME;//Change

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
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    protected function validateLogin(Request $request)
    {
        $this->validate($request, [
            $this->username() => 'required', 'string', 'email', 'max:255', 'unique:users',
            'password' => ['required', 'string','max:15', Password::min(8)->letters()->numbers()->symbols()],
            
        ],
        [
            'email.required' => 'Se requiere email',
            'email.unique' => 'Email ya registrado',
            'password.required' => 'Se requiere contraseña',
            'password.confirmed' => 'Las contraseñas no coinciden',
            'password.min' => 'Caracteres mínimos:8',
            'password.max' => 'Caracteres máximos:15',

        ]);
    }
}

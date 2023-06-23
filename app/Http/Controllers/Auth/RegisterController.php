<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\People;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;

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
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string','max:15', 'confirmed', Password::min(8)->letters()->numbers()->symbols()],
            
        ],
        [
            'email.required' => 'Se requiere email',
            'email.unique' => 'Email ya registrado',
            'password.required' => 'Se requiere contraseña',
            'password.confirmed' => 'Las contraseñas no coinciden',
            'password.max' => 'Caracteres máximos:15',

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
        
        $user = User::create([
            'name' => 0,
            'last' => 0,
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'id_roles' => 1
        ]);

        $people = new People();   
        $people->id_documents = 1;
        $people->doc = 0;
        $people->date = date("Y-m-d");
        $people->id_contracts =1;   
        $people->salary = 0;
        $people->date_i = date("Y-m-d");
        $people->date_f = date("Y-m-d");
        $people->onus = 0;
        $people->area = 0;
        $people->pay_per_hour = 0;
        $people->id_users = $user->id;

        //$work->id_redes = $request->id_redes;

        $people->save();
        return $user;
        
    }

}

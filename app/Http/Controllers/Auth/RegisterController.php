<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
  protected function index(){
    /*$users = Users::all();
    return view ('register', ['register' => $users]);*/
  }

      use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

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
            'nama' => ['required', 'string', 'max:255'],
            'tempat_lahir' => ['required', 'string', 'max:255'],
            'tanggal_lahir' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'noHp' => ['required', 'numeric', 'min:12'],
            'jenis_kelamin' => ['required', 'in:laki-laki,perempuan'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'tempat_lahir' => $data['tempat_lahir'],
            'tanggal_lahir' => $data['tanggal_lahir'],
            'email' => $data['email'],
            'jenis_kelamin' => $data['jenis_kelamin'],
            'noHp' => $data['noHp'],
            'password' => Hash::make($data['password']),
        ]);

      $role = Role::select('id')->where('name','customer')->first();

      $user->roles()->attach($role);

      return $user;
    }

}

<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
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
    protected $redirectTo = '/dashboard';

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
            'nic' => ['required', 'string', 'max:50', 'unique:users'],
            'nom' => ['required', 'string', 'max:100'],
            'prenoms' => ['required', 'string', 'max:155'],
            'date_naissance' => ['required', 'date', 'before:today'],
            'genre' => ['required', 'string', 'in:M,F,Autre'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'phone' => ['nullable', 'string', 'max:20'],
            'address' => ['nullable', 'string', 'max:255'],
            'terms' => ['required'],
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
            'nic' => $data['nic'],
            'nom' => $data['nom'],
            'prenoms' => $data['prenoms'],
            'date_naissance' => $data['date_naissance'],
            'genre' => $data['genre'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'role' => 'citizen',
            'phone' => $data['phone'] ?? null,
            'address' => $data['address'] ?? null,
        ]);
    }
}

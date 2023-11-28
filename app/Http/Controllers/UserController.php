<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\SeekerRegistrationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    const JOB_SEEKER = 'seeker';

    public function createSeeker()
    {
        return view('user.seeker-register');
    }

    public function storeSeeker(SeekerRegistrationRequest $request){
        // $request -> validate([
        //     'name' => ['required', 'string', 'max::255'],
        //     'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
        //     'password' => ['required']
        // ]);

        User::create([
            'name' => $request -> get('name'),
            'email' => $request -> get('email'),
            'password' => bcrypt($request -> get('password')),
            'user_type' => self::JOB_SEEKER
        ]);

        return back();
    }

    public function login()
    {
        return view('user.login');
    }

    public function postlogin(Request $request)
    {
        $request -> validate([
            'email' => 'required',
            'password' => 'required', 
        ]);

        $credentials = $request -> only('email', 'password');
        
        if (Auth:: attempt($credentials)) {
            return redirect() -> intended('dashboard');
        }

        return 'Wrong email or password';
    }

    public function logout()
    {
        Auth::logout();
        return redirect('login');;
    }
}

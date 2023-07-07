<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    // public function create(){
    //     return view('auth.login');
    // }

    // public function __construct()
    // {
    //     $this->middleware('guest')->except('logout');
    // }


    public function login(){
        return view('auth.login');
    }

    public function store(Request $request){

        $input = $request->all();
        $attributes = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);

        $fieldType = filter_var($request->email, FILTER_VALIDATE_EMAIL) ? 'email' : 'no_induk';
        if(auth()->attempt(array($fieldType => $input['email'], 'password' => $input['password'])))
        {
            return redirect('/dashboard')->with('success', 'Selamat Datang..');
        }else{
            return redirect()->route('login')->with('info','Email-Address And Password Are Wrong.');
        }
    }
}

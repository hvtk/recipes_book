<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class UserController extends Controller {

    //Show Register/create Form
    public function create() {
        return view('users.register');
    }

    //Create New User
    public function store(Request $request) {
        $formFieldsUser = $request->validate([
            'name' =>['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => 'required|confirmed|min:6' 
        ]);

        // Hash Password
        $formFieldsUser['password'] = bcrypt($formFieldsUser['password']);

        // Create User
        $user = User::create($formFieldsUser);

        //Login
        auth()->login($user);

        return redirect('/recipebook/homepage')
               ->with('message', 'User created and logged in!');         
    }

    // Logout User
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/recipebook/homepage')->with('message', 'You have been logged out!');
    }

    // Show Login Form
    public function login() {
        return view('users.login');
    }

    // Authenticate User
    public function authenticate(Request $request) {
        $formFieldsAuthenticate = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required' 
        ]);

        if(auth()->attempt($formFieldsAuthenticate)) {
            $request->session()->regenerate();

            return redirect('/recipebook/homepage')->with('message', 'You are now logged in!');
        }   
        
        return back()->withErrors(['email' => 'Invalid Credentials'])
                     ->onlyInput('email');
    }
}

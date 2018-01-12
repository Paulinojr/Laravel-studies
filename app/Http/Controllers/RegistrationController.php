<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{

    public function create()
    {

        return view('registration.create');

    }

    public function store()
    {
        // Validate the form
        $this->validate(request(),[

            'name' => 'required',

            'email' => 'required|email',

            'password' => 'required|confirmed' //we'll do password confirmation later

        ]);

        // Create and the user
        $user = User::create(request(['name', 'email', 'password']));

        // Sign the user
        auth()->login($user);

        // Redirect to the home page
        return redirect()->home();
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller

{

    //only not logged in can sign-in, duur
    public function __construct()
    {

        $this->middleware('guest', ['except' => 'destroy']);

    }

    public function create()
    {

        return view('sessions.create');

    }

    public function store()
    {

        //Attempt to authenticate the user
        if( ! auth()->attempt(request(['email', 'password']))) {

            return back();

        }

        return redirect()->home();
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
  public function __construct(){
    $this->middleware('guest', ['except' => 'destroy']);
  }
    public function create()
    {
        return view('session.login');
    }

    public function store()
    {
      if(! auth()->attempt(request(['username','password']))){
          return back()->withErrors([

            'message' => 'Wrong username/password combination'

            ]);
      }
      return redirect()->home();
    }

    public function destroy()
    {
        auth()->logout();

        return redirect()->home();
    }

}

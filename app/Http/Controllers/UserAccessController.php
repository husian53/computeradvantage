<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
class UserAccessController extends Controller
{
    public function index()
    {
             return view ('auth.login');
    }

    public function login(Request $request){
        // $password = Hash::make('abc123');
        // echo $password;
        // exit;
      $request->validate([
          'email' => 'required',
          'password' => 'required'
      ]);
      $credentials = $request->only('email','password');
      if(Auth::attempt($credentials)){
          return redirect()->intended('company-group')->with('message', 'Welcome');
      }
      return redirect('login');
    }
}

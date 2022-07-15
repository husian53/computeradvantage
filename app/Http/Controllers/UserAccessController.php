<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Services\CompanyGroupService;
use App\Services\CompanyService;
use Hash;
use App\Services\UserService;
use Illuminate\Support\Facades\Gate;
class UserAccessController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // $password = Hash::make('abc123');
        // echo $password;
        // exit;
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            if (Gate::allows('admin')) {
           
                return redirect()->intended('company-group')->with('message', 'Welcome');
            
            }    
            else {
            
                return redirect()->intended('client-company');
            
            }

        } else {

            return redirect('login')->with('error', 'Invalid Username Or Password.');
        
        }
    }

    public function register()
    {
        $data['options'] = CompanyGroupService::all();
        return view('super.register', $data);
    }

    public function store(Request $request)
    {

        $user = User::create([

            'name' => $request->name,

            'email' => $request->userName,

            'password' => $request->password,
        ]);

        CompanyService::updateUser($request->companyId, $user->id);

        return redirect()->intended('register')->with('message', 'Success');
    }
}

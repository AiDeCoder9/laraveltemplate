<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use Auth;
class AdminLoginController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('guest:admin',['except'=>['logout']]);//logout function doesnt apply to middleware
        //if we dont define this we have to logout to logout which is impossible


    }

    public function showLoginForm(){
        return view('auth.admin-login');
    }
    public function login(Request $request){
        //4 steps required to make login

        //validate the user

        //attempt to login the user

        //if successfull then redirect to intended location

        //if unsuccessfull then redirect in the login form

        $this->validate($request,[
           'email' => 'required|email',
            'password'=>'required|min:6|max:50'
        ]);

        $credentials =[
            'email'=>$request->email,
            'password'=>$request->password,
        ];

        if(Auth::guard('admin')->attempt($credentials,$request->remember))
        {
            return redirect()->intended(route('admin.dashboard'));

        }
        return redirect()->back()->withInput($request->only('email','remember'));



    }

    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect('/');
    }


}

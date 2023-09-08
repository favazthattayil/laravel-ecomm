<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;

class loginController
{
    public function login(){
        return view('admin.layout.adminlogin');

    }

    public function doLogin(){
        $input = request()->only(['username', 'password']);

        if (auth()->guard('admin')->attempt($input,request('remember_me'))) {
            return redirect()->route('admin.products.list');
        } else {
            return redirect()->route('admin.login')->with('message','login was failed');
        }
    }


    public function logout(){
        auth()->guard('admin')->logout();
        return redirect()->route('admin.login');



    }






}

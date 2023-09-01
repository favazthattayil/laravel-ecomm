<?php

namespace App\Http\Controllers\Admin;


use Illuminate\Http\Request;

class loginController
{
    public function login(){
        return view('admin.adminlogin');

    }

    public function doLogin(){
        $input = request()->only(['username', 'password']);
        if (auth()->guard('admin')->attempt($input)) {
            return redirect()->route('admin.dashboard');
        } else {
            return "Failed";
        }
    }






}

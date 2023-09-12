<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use DB;

class authmanager extends Controller


{

    public function signin()

    {

        return view('users.signin');

    }





    public function signup()

    {

        return view('users.signup');

    }

    public function user_home()

    {

        return view('users.user_home');

    }


    public function cart()

    {

        return view('users.profile.cart');

    }


    public function address()

    {

        return view('users.profile.address');

    }



    public function personalinfo()

    {

        return view('users.profile.personalinfo');

    }


    public function orders()

    {

        return view('users.profile.orders');

    }





    public function signinPost(Request $request)

    {

        $request->validate([

            'email' => 'required',

            'password' => 'required'

        ]);



        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            return redirect(route('welcome'));

        }



        return redirect(route('signin'))->with("error", "Sign-in details are not valid");

    }



    public function signupPost(Request $request)

    {

        // $request->validate([

        //     'fname' => 'required',

        //     'lname' => 'required',

        //     'email' => 'required|email|unique:users',

        //     'phone' => 'required|unique:users',

        //     'password' => 'required|min:8|confirmed',

        // ]);

        // return $data;

        $data = [

            'fname' => $request->fname,

            'lname' => $request->lname,

            'email' => $request->email,

            'phone' => $request->phone,

            'password' => Hash::make($request->password),

        ];

         //return $data;

        $user = DB::table('users')->insert($data);

        if (!$user) {

            return redirect(route('signup'))->with("error", "Sign-up failed, please try again.");

        }



        return redirect(route('signin'))->with("success", "Sign up successful, please sign in.");

    }



    public function signout()

    {

        Session::flush();

        Auth::logout();

        return redirect(route('signin'));

    }

    public function userdash()

    {

        return view('userdash');

    }


  






}



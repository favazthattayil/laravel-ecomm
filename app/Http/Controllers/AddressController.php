<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adress; // Import the Adress model
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use DB;

class AddressController extends Controller
{
    public function store(Request $request)
{
    $adress=User::findOrFail(Auth::user()->id);

    // Validate the incoming data
//    $request->validate([

//         'fullname' => 'required|string|max:255',
//         'email' => 'required|email|unique:adress,email',
//         'phone' => 'required|string|max:15',
//         'street' => 'required|string|max:255',
//         'city' => 'required|string|max:255',
//         'state' => 'required|string|max:255',
//         'pincode' => 'required|string|max:10',
//     ]);

    // Create a new Address model instance
    $address = ([
        'user_id'=>$adress->id,
        'fullname'=>$request->fullname,
        'email'=>$request->email,
        'phone'=>$request->phone,
        'street'=>$request->street,
        'city'=>$request->city,
        'state'=>$request->state,
        'pincode'=>$request->pincode,
    ]);


    $user = DB::table('adress')->insert($address);


    // $data = [

    //     'fname' => $request->fname,

    //     'lname' => $request->lname,

    //     'email' => $request->email,

    //     'phone' => $request->phone,

    //     'password' => Hash::make($request->password),

    // Save the address to the database
    // $address->save();

    // Return a response
    return response()->json(['message' => 'Address saved successfully'], 200);
}


    // AddressController.php

    public function showAddresses()
    {
        // Check if a user is authenticated
        // if (Auth::check()) {
            // Retrieve the authenticated user
            // $user = Auth::user();
            // Retrieve addresses for the authenticated user

            $addresses = Adress::all();


            // Pass the data to the Blade view
            return view('users.profile.address', compact('addresses'));
        }
        // else {
        //     // Handle the case when no user is authenticated

        //     return response()->json(['message' => 'Authentication required'], 401);

        // }



        public function updateAddress(Request $request)
        {
            // Validate the form data
            // $request->validate([
            //     'fullname' => 'required|string|max:255',
            //     'email' => 'required|string|max:255',
            //     'phone' => 'required|string|max:20',
            //     'street' => 'required|email|max:255',
            //     'city' => 'required|email|max:255',
            //     'state' => 'required|email|max:255',
            //     'pincode' => 'required|email|max:255',

            // ]);

            // Get the authenticated user
            $user = Auth::user();
            $users=Adress::findOrFail(Auth::user()->id);

            // Update the user's information
            $addressupdated=([
                'user_id'=>$users->id,
                'fullname' => $request->input('fullname'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'street' => $request->input('street'),
                'city' => $request->input('city'),
                'state' => $request->input('state'),
                'pincode' => $request->input('pincode'),
            ]);
            return $addressupdated;
            DB::table('adress')->update($addressupdated);

            // Redirect back with a success message
            // return redirect(route('use_home.personalinfo'))->with('success', 'Address updated successfully');
            return "update";
        }

    }





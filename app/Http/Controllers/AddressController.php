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
    return redirect()->route('addresses')->with('message','Address saved successfully');
}


    // AddressController.php

    public function showAddresses()
    {
        // Check if a user is authenticated
        // if (Auth::check()) {
            // Retrieve the authenticated user
            // $user = Auth::user();
            // Retrieve addresses for the authenticated user

            $addresses = Adress::where('user_id',Auth::user()->id)->get();


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
            $addressID =$request->input('addressID');
            $users=Adress::where('id',$addressID)->first();

// return $users;
            // Update the user's information
            $addressupdated=([
                'user_id'=>$users->user_id,
                'fullname' => $request->input('fullname'),
                'street' => $request->input('street'),
                'city' => $request->input('city'),
                'state' => $request->input('state'),
                'pincode' => $request->input('pincode'),
                'phone' => $request->input('phone'),
            ]);


            DB::table('adress')->where('id',$addressID)->update($addressupdated);

            // Redirect back with a success message
            return redirect(route('addresses'))->with('message', 'Address updated successfully');

        }

        public function deleteAddress($addressID){

            $address =adress::find(decrypt($addressID));
            $address->delete();
            return redirect()->route('addresses')->with('message','address deleted succesfully');

        }

    }





<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Adress; // Import the Adress model
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AddressController extends Controller
{
    public function store(Request $request)
    {
        // Validate the incoming data
        $validatedData = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|unique:adress,email', // Validate uniqueness against the "email" column in the "adress" table
            'phone' => 'required|string|max:15',
            'street' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'pincode' => 'required|string|max:10',
        ]);

        // Check if a user is authenticated
        if (Auth::check()) {
            // Retrieve the authenticated user
            $user = Auth::user();

            // Create a new Adress model instance and associate it with the authenticated user
            $address = new Adress([
                'user_id' => $user->id,
                'fullname' => $validatedData['fullname'],
                'email' => $validatedData['email'],
                'phone' => $validatedData['phone'],
                'street' => $validatedData['street'],
                'city' => $validatedData['city'],
                'state' => $validatedData['state'],
                'pincode' => $validatedData['pincode'],
            ]);

            // Save the address to the database
            $address->save();

            // Return a response
            return response()->json(['message' => 'Address saved successfully'], 200);
        } else {
            // Handle the case when no user is authenticated
            return response()->json(['message' => 'Authentication required'], 401);
        }
    }

}


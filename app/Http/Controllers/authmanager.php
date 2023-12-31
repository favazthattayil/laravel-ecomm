<?php

namespace App\Http\Controllers;

use App\Models\Adress;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Cart;
use App\Models\product;
use App\Models\Category;
use App\Models\Order;
use App\Models\Orderline;

class authmanager extends Controller


{


    public function showOrderDetails()
    {
        $orderDetails = DB::table('order')
            ->join('cart', 'order.user_id', '=', 'cart.user_id')
            ->join('adress', 'order.address_id', '=', 'adress.id')
            ->join('products', 'cart.product_id', '=', 'products.id')
            ->join('users', 'users.id', '=', 'order.user_id')

            ->select(
                'users.fname',
                'adress.city',
                'adress.street',
                'adress.state',
                'products.name',
                'products.price'
            )
            ->get();



        return view('users.profile.orders', ['orderDetails' => $orderDetails]);
    }


    public function signin()

    {

        return view('users.signin');
    }


    public function signout()

    {

        Session::flush();

        Auth::logout();

        return redirect(route('signin'));
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
        if (auth()->check()) {

            $cartItems = Cart::where('user_id', Auth::user()->id)->get();
            // $cartItems=Cart::where('user_id',Auth::id())->get();

            return view('users.profile.cart', compact('cartItems'));
        } else {
            return redirect()->route('signin'); // Redirect to your sign-in route

        }
    }


    public function deletecart($cartID)
    {

        $cartinfo = cart::find(decrypt($cartID));

        $cartinfo->delete();
        return redirect()->route('use_home.cart')->with('message', 'address deleted succesfully');
    }



    public function addcart(Request $request)
    {
        $user_id = auth()->user()->id;
        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity');
        $uuid = $request->input('uuid');
        // Create a new cart record
        $cartItem = new Cart();
        $cartItem->user_id = $user_id;
        $cartItem->product_id = $product_id;
        $cartItem->quantity = $quantity;
        // $cartItem->uuid = $uuid;
        $cartItem->save();

        // $user = DB::table('users')->insert($data);
        return redirect()->back()->with('message', 'Item added to cart successfully.');
    }


    public function selectaddress(Request $request)
    {
        $user = Auth::user();
        $userAddresses = Adress::where('user_id', $user->id)->get();
        return view('users.profile.selectaddress', compact('userAddresses'));
    }



    public function checkout(Request $request)
    {

        $user = Auth::user();

        // Retrieve the user_id and address_id from the form data
        $user_id = $request->input('user_id');
        $address_id = $request->input('address_id');

        $order = Order::create([
            'user_id' => $user_id,
            'address_id' => $address_id,
            // 'uuid' => $uuid,
        ]);

        $carts = Cart::where('user_id', Auth::id());
        foreach ($carts as $cart) {

            $orderline = [
                'order_id' => $order->id,
                'product_id' => $cart->product_id,
            ];
            Orderline::create($orderline);
        }

        Cart::where('user_id', Auth::id())->delete();
        // Optionally, you can check if the insertion was successful
        if ($order) {
            // Insertion successful
            return redirect()->route('orders')->with('message', 'order  saved successfully');
        } else {
            // Insertion failed
            return redirect()->route('checkout')->with('error', 'Failed to save order');
        }
    }


    public function productlist()
    {
        $categories = Category::all();
        $items = product::all();

        // return $items;
        return view('users.productlist', compact('items', 'categories'));
    }


    public function homepage()
    {
        $categories = Category::all();
        $items = product::all();

        // return $items;
        return view('welcome', compact('items', 'categories'));
    }




    public function address()

    {
        // $data = product::all();

        return view('users.profile.address');
    }



    public function personalinfo()

    {

        return view('users.profile.personalinfo');
    }

    public function productdetails($id)
    {

        $product = Product::find($id);
        return view('users.productdetails', ['product' => $product]);
    }


    public function orders()

    {

        return view('users.profile.orders');
    }



    public function confirmorder(Request $request)
    {

        $products = $request->input('products');
        $totalprice = $request->input('totalprice');

        $order = DB::table('order_line')->insert([
            'product_id' => $products,
            'totalprice' => $totalprice,

        ]);

        return redirect()->route('selectaddress')->with('message', 'Failed to save order');
    }





    public function update(Request $request)
    {
        // Validate the form data
        $request->validate([
            'fname' => 'required|string|max:255',
            'lname' => 'required|string|max:255',
            'phone' => 'required|string|max:20',
            'email' => 'required|email|max:255',
        ]);

        // Get the authenticated user
        $user = Auth::user();
        $user = User::findOrFail(Auth::user()->id);

        // Update the user's information
        $user->update([
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'phone' => $request->input('phone'),
            'email' => $request->input('email'),
        ]);

        // Redirect back with a success message
        return redirect(route('use_home.personalinfo'))->with('success', 'Profile updated successfully');
    }



    public function signinPost(Request $request)
    {
        // Validate the incoming data (email and password)
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        // Attempt to authenticate the user using the provided credentials
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Authentication succeeded, redirect to the 'welcome' route
            return redirect(route('welcomehome'));
        }

        // If authentication fails, redirect back to the 'signin' route with an error message
        return redirect(route('signin'))->with("message", "Invalid email or password");
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

    public function logoutPost(){
        // auth()->guard('users')->logout();
        Auth::logout();
        return redirect()->route('welcomehome');
    }
}

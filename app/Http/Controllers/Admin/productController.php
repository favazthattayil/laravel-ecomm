<?php

namespace App\Http\Controllers\admin;
use App\Http\Requests\ProductSaveRequest;
use App\Models\Admin;
use App\Models\product;
use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class productController
{


    public function list(){
        $products = Product::latest()->paginate(10);
        return view('admin.products.list',compact('products'));
    }

    // In your controller method
// public function admin()
// {
//     $admins =Admin::all() ;  // Retrieve the data you want to pass to the view here, e.g., from a database query
//     return view('admin.products.create', ['admins' => $admins]);
// }



    public function admin(){
        $admins = Admin::all() ; //select*from admins
        return view('admin.layout.master',compact('admins'));
    }



    public function create(){
        $categories = Category::all() ; //select*from categories
        return view('admin.products.create',compact('categories'));
    }



    public function save(ProductSaveRequest $request){
        $data = $request->validated();

        if($request->hasFile('image')){
            $extension = $request->image->extension();
            $filename = Str::random(6)."_".time()."_product.".$extension;
            $request->image->storeAs('images',$filename);
            $data['image'] = $filename;
        }

        Product::create($data);
        return redirect()->route('admin.products.list')->with('message','product saved succesfully');
    }



   public function delete($id){
        $product = product::find(decrypt($id));
        if(!empty($product->image)){
           Storage::delete('images/' .$product->image);
       }

        $product->delete();
        return redirect()->route('admin.products.list')->with('message','Product deleted Succesfully');
   }



   public function edit ($id){
        $product = product::find(decrypt($id));
        $categories = Category::all() ;
        $admins = Admin::all() ; //select*from categories
        // return $categories;
        // return compact('product','categories');
        return view('admin.products.edit',compact('product','categories','admins'));

   }



   public function update(ProductSaveRequest $request)
{
    $data = $request->validated();
    $product = Product::find(decrypt($request->product_id));

    if($request->hasFile('image')){
        $extension = $request->image->extension();
        $filename = Str::random(6)."_".time()."_product.".$extension;
        $request->image->storeAs('images',$filename);
        $data['image'] = $filename;
    }
    $product->update($data);

    // Flash a success message with a 5-second duration
    return redirect()->route('admin.products.list')
        ->with('message', 'Product Updated Successfully ...')
        ->with('message_duration', 2); // Set a custom message duration in seconds
}




}

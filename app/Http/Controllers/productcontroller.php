<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\catagory;
use App\Models\product;
class productcontroller extends Controller
{
    public function catagory(){
        $data = catagory::all();
        
        return view('admin.catagory',compact('data'));
    }

    public function add(Request $request){
         $data= new catagory;
         $data->catagory=$request->catagory;
         $data->save();
         return redirect()->back()->with('success', 'data save Successfully');
    } 

    //delete

    public function destroy(Request $request)
{
    $del= $request->id;
    $data = catagory::find($del);
    $data->delete();
    return redirect()->back()->with('success', 'data delete Successfully');
}

//add products

public function view_product(){
    $catagory= catagory::all();
    return view('admin.addproduct',compact('catagory'));
} 

public function add_product(Request $request){
    $product= new product();

   $product->title=$request->title;
   $product->description=$request->description;
   $product->price=$request->price;
   $product->discount_price=$request->discount_price;
   $product->quantity=$request->quantity;
   $product->catagory=$request->catagory;

    $image=$request->image;
    $imagename = time(). '.' . $request->image->extension();
    $product->image=$imagename;

    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,gif,svg|max:2048',

    ]);
    $request->image->move(public_path('images'), $imagename);

    $product ->save();

    return redirect()->back()->with('success', 'data updated Successfully');
} 


//show product

public function show_product(){
    $product = product::all();
    return view('admin.showproduct',compact('product'));
} 

//delete products
public function deletee(Request $request)
{
    $del= $request->id;
    $product = product::find($del);
    $product->delete();
    return redirect()->back()->with('success', 'data delete Successfully');
}

//read data

public function edit(Request $request)
{
    $eid= $request->id;
    $product = product::find($eid);
    $catagory= catagory::all();
    return view('admin.update', compact('product','catagory'));
}



public function finaledit(Request $request)
{
     $fid= $request->id;

    $product = product::find($fid);
    $product->title=$request->title;
    $product->description=$request->description;
    $product->price=$request->price;
    $product->discount_price=$request->discount_price;
    $product->quantity=$request->quantity;
    $product->catagory=$request->catagory;
   
     $imagename = time(). '.' . $request->image->extension();
    $product->image=$imagename;
    $product->save();
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,gif,svg|max:2048',

    ]);
    $request->image->move(public_path('images'), $imagename);
    
  $product= product::all();
  

  return redirect()->back()->with('success', 'data Updated Successfully');


}
 
}

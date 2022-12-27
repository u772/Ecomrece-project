<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\product;
use App\Models\User;
use App\Models\card;
use App\Models\order;

use Illuminate\Support\Facades\Session;
use Stripe;

class homecontroller extends Controller
{
    public function home()
    {


        return view('home');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function blog()
    {
        return view('blog');
    }
    public function testimonial()
    {
        return view('testimonial');
    }

    public function product()
    {
        $product = product::paginate(8);
        return view('product', compact('product'));
    }

    public function details($id)
    {
        $product = product::find($id);
        return view('details', compact('product'));
    }
    public function add_cart(Request $request, $id)
    {

        if (Auth::id()) {
            $user = Auth::user();
            $userid = $user->id;
            $product = product::find($id);
            $product_exist_id = card::where('product_id', '=', $id)->where('user_id', '=', $userid)->get('id')->first();
            if ($product_exist_id) {

                $cart = card::find($product_exist_id)->first();
                $quantity = $cart->quantity;
                $cart->quantity = $quantity + $request->quantity;
                if ($product->discount_price != null) {
                    $cart->price = $product->discount_price *  $cart->quantity;
                } else {
                    $cart->price = $product->price *  $cart->quantity;
                }
                $cart->save();

                return redirect()->back()->with('success', 'product added  Successfully');
            } 
            else {
                $cart = new card();
                $cart->name = $user->name;
                $cart->email = $user->email;
                $cart->phone = $user->phone;
                $cart->address = $user->address;
                $cart->user_id = $user->id;

                $cart->product_title = $product->title;

                if ($product->discount_price != null) {
                    $cart->price = $product->discount_price * $request->quantity;
                } else {
                    $cart->price = $product->price * $request->quantity;
                }

                $cart->image = $product->image;
                $cart->product_id = $product->id;
                $cart->quantity = $request->quantity;
                $cart->save();
                Alert::success('Product Added successfully', 'We have added product to the cart');
                return redirect()->back();
            }
        } 
        else {

            return redirect('login')->back()->with('success', 'product added  Successfully');
        }
    }
    public function show_cart()
    {
        if (Auth::id()) {
            $id = Auth::user()->id;
            $cart = card::where('user_id', '=', $id)->get();
            
            return view('showcart', compact('cart'));
        } else {
     
            return redirect('login');
        }
    }

    public function delete(Request $request)
    {
        $del = $request->id;
        $cart = card::find($del);
        $cart->delete();
        Alert::warning('Product Removed', 'Product Deleted Successfully');
        return redirect()->back();
    }

    public function cash_order()
    {
        $user = Auth::user();
        $userid = $user->id;
        $data = card::where('user_id', '=', $userid)->get();
        foreach ($data as $data) {
            $order = new order;
            $order->name = $data->name;
            $order->email = $data->email;
            $order->phone = $data->phone;
            $order->address = $data->address;
            $order->user_id = $data->user_id;


            $order->product_title = $data->product_title;
            $order->price = $data->price;
            $order->quantity = $data->quantity;
            $order->image = $data->image;
            $order->product_id = $data->product_id;

            $order->payment_status = 'cash on delivery';
            $order->delivery_status = 'procssing';

            $order->save();

            $cart_id = $data->id;
            $cart = card::find($cart_id);
            $cart->delete();
        }
        return redirect()->back()->with('success', 'we have Recived your Order,We will connect with  you soon......');
    }


    public function striped($totalprice)
    {

        return view('stripe', compact('totalprice'));
    }

    public function stripePost(Request $request, $totalprice)
    {

        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        Stripe\Charge::create([

            "amount" => $totalprice * 100,
            "currency" => "usd",
            "source" => $request->stripeToken,
            "description" => "Thanks for payment"
        ]);
        $user = Auth::user();
        $userid = $user->id;
        $data = card::where('user_id', '=', $userid)->get();
        foreach ($data as $data) {
            $order = new order;
            $order->name = $data->name;
            $order->email = $data->email;
            $order->phone = $data->phone;
            $order->address = $data->address;
            $order->user_id = $data->user_id;


            $order->product_title = $data->product_title;
            $order->price = $data->price;
            $order->quantity = $data->quantity;
            $order->image = $data->image;
            $order->product_id = $data->product_id;

            $order->payment_status = 'paid';
            $order->delivery_status = 'procssing';

            $order->save();

            $cart_id = $data->id;
            $cart = card::find($cart_id);
            $cart->delete();
        }

        Session::flash('success', 'Payment successful!');

        return back();
    }

    public function show_order()
    {

        if (Auth::id()) {

            $user = Auth::user();
            $userid = $user->id;
            $order = order::where('user_id', '=', $userid)->get();

            return view('order', compact('order'));
        } else {
            return redirect('login');
        }
    }

    public function cancel_order($id)
    {
        $order = order::find($id);
        $order->delivery_status = 'you canceled the order';
        $order->save();
        return redirect()->back();
    }

    public function search_products(Request $request)
    {
        $search_text = $request->search;
        $product = product::where('title', 'LIKE', "%$search_text%")->orWhere('catagory', 'LIKE', "%$search_text%")->paginate(10);
        return view('product', compact('product'));
    }
}

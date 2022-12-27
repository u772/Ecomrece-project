<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\order;
use App\Models\User;
use App\Models\product;
use App\Models\card;
use Illuminate\Support\Facades\Notification;
use PDF;
use Notifications;
use App\Notifications\Emailnotification;



class admincontroller extends Controller
{
    public function index(){
        if(Auth::id()){
            return view('admin.index');
        }
        else{
            return redirect('login'); 
        }
        // $total_product= product::all()->count();
        // $total_order= order::all()->count();
        // $total_user= User::all()->count();
       
        // $order=order::all();
        // $total_revenu=0;
        // foreach($order as $order)
        // {
        //     $total_revenu=$total_revenu+$order->price;
        // }

        // $total_delivered=order::where('delivery_status','=','delivered')->get()->count();

        // $total_processing=order::where('delivery_status','=','processing')->get()->count();
        
        
        // ,compact('total_product','total_order','total_user','total_revenu','total_delivered','  $total_processing')
    } 

    
    public function blank(){
        if(Auth::id()){
            return view('admin.blank');
        }
        else{
            return redirect('login'); 
        }
      
    } 
    public function addproduct(){
        if(Auth::id()){
            return view('admin.addproduct');
        }
        else{
            return redirect('login'); 
        }
    
    } 
    public function chart(){
        if(Auth::id()){
            return view('admin.chart');
        }
        else{
            return redirect('login'); 
        }
       
    } 
    public function element(){
        if(Auth::id()){
            return view('admin.element');
        }
        else{
            return redirect('login'); 
        }
      
    } 
    public function form(){
        if(Auth::id()){
            return view('admin.form');
        }
        else{
            return redirect('login'); 
        }
      
    } 
    public function signin(){
        if(Auth::id()){
            return view('admin.signin');
        } 
        
        else{
            return redirect('login'); 
        }
    }
      
    public function signup(){
        if(Auth::id()){
            return view('admin.signup');
        }
        else{
            return redirect('login'); 
        }
      
    } 
    public function table(){
        if(Auth::id()){
            return view('admin.table');
        }
        else{
            return redirect('login'); 
        }
    
    } 
    public function showproduct(){
        if(Auth::id()){
            return view('admin.showproduct');
        }
        else{
            return redirect('login'); 
        }
       
    } 

    public function wideget(){
        if(Auth::id()){
            return view('admin.wideget');
        }
        else{
            return redirect('login'); 
        }
        
    } 

    public function order(){

        if(Auth::id()){
            $order=order::all();
            return view('admin.order',compact('order'));
        }
        else{
            return redirect('login'); 
        }
    
        
    } 

    public function delivered($id){
        if(Auth::id()){
            $order=order::find($id);

        $order->delivery_status="delivered";
        $order->payment_status="paid";
        
        $order->save();
        return redirect()->back();
        }
        else{
            return redirect('login'); 
        }

      
    }

    public function print($id){
        
       if(Auth::id()){
        $order=order::find($id);
        $pdf=PDF::loadView('admin.pdf',compact('order'));
 
        return $pdf->download('order_details.pdf');
       }
       else{
        return redirect('login'); 
       }
       
    }

 public function send_email($id){
    
    if(Auth::id()){
        $order=order::find($id);
        return view('admin.email',compact('order'));
    }
    else{
        return redirect('login'); 
    }
 }

 public function send_useremail(Request $request, $id){
    if(Auth::id()){
        $order=order::find($id);
        $details =[
    
            'greeting'=> $request->greeting,
    
            'firstline'=> $request->firstline,
    
            'body'=> $request->body,
    
            'button'=> $request->button,
    
            'url'=> $request->url,
    
            'last'=> $request->last,
    
    
    
        ];
        Notification::send($order,new Emailnotification($details));
        return redirect()->back();
    }
    else{
        return redirect('login'); 
    }


    
 }

   public function searchdata(Request $request){
      
    if(Auth::id()){
        $searchtext=$request->search;
        $order=order::where('name','LIKE',"%$searchtext%")->orWhere('phone','LIKE',"%$searchtext%")->orWhere('product_title','LIKE',"%$searchtext%")->get();
    
        return view('admin.order',compact('order'));
       }
       else{
        return redirect('login'); 
       }
   

  

   }

   
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\product;
class jetstramcontroller extends Controller
{
    public function redirect(){
        $usertype=Auth::user()->usertype;
        if($usertype =='1')
        {
            return view('admin.index');
        }
        else{
            
            $product = product::paginate(8);
       
           return view('home',compact('product'));
        }
       }
}

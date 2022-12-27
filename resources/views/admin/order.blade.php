@extends('admin.layout')
@section('content')   

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
</head>
<body>
    <div class="container-fluid position-relative d-flex p-0">

        <div class="content">
           
            <div class="container-fluid pt-4 px-4">
               
                <div class="row g-4">
                    <div>
                        <form action="{{url('search')}}" method="get">
                            @csrf
                            <div class="input-group">
                                <div class="form-outline">
                                  <input type="text" name="search" class="form-control" />
                                  <label class="form-label" for="form1">Search</label>
                                </div>
                               <input type="submit" value="search" class="btn btn-primary" style="margin-bottom: 33px">
                         
                              </div>
                           </form>
                    </div>
                    <div class="col-12">
                        <div class="bg-secondary rounded h-100 p-4">
                            <h6 class="mb-4">All Orders</h6>
                          
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                           
                                            <th scope="col">Name</th>                                      
                                            <th scope="col">Email</th>
                                            <th scope="col">Phone</th>
                                            <th scope="col">Address</th>
                                            <th scope="col">Product Title</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Payment Staus</th>
                                            <th scope="col">Delivery Staus</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Delivered</th>
                                            <th scope="col">Print PDF</th>
                                            <th scope="col">Send Email</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($order as $order)
                                        <tr>
                                         
                                            <td>{{$order->name}}</td>
                                            <td>{{$order->email}}</td>
                                            <td>{{$order->phone}}</td>
                                            <td>{{$order->address}}</td>
                                            <td>{{$order->product_title}}</td>
                                            <td>{{$order->quantity}}</td>
                                            <td>{{$order->price}}</td>
                                            <td>{{$order->payment_status}}</td>
                                            <td>{{$order->delivery_status}}</td>
                                            <td><img style="height:50px; width:50px;" src="{{asset('images/'.$order->image)}}" alt=""></td>
                                            <td>
                                                @if ($order->delivery_status=='processing') 
                                                <a href="{{url('delivered',$order->id)}}" class="btn btn-outline-primary" onclick="return confirm('Are You Sure This product Is Delivered')">Delivered</a>
                                                @else
                                                <p >Delivered</p>

                                                @endif
                                            </td>
                                             <td>
                                                <a href="{{url('print_pdf',$order->id)}}" class="btn btn-outline-primary btn-sm">Print PDF</a>
                                             </td>
                                             <td>
                                                <a href="{{url('send_email',$order->id)}}" class="btn btn-outline-primary btn-sm">Send Email</a>
                                             </td>
                                        </tr>

                                           @empty
                                           <tr>
                                            <td style="text-align: center" colspan="16">
                                                No Data Found
                                            </td>
                                           </tr>
                                        @endforelse
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>


</body>
</html>
   
    
@endsection

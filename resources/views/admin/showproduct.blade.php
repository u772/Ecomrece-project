@extends('admin.layout')
@section('content')
<div class="uper">
    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div><br />
    @endif
  </div>
    <div class="container-fluid position-relative d-flex p-0">
       
        <div class="content">

            <div class="container-fluid pt-4 px-4">
                  <div class="container">
                    <div class="row g-4">
                       
                        <div class="col-12">
                            <div class="bg-secondary rounded h-100 p-4">
                                <h6 class="mb-4">Product Table</h6>
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Product Title</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Quantity</th>
                                                <th scope="col">Price</th>
                                                <th scope="col">Discount Price</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($product as $product)
                                            <tr>
                                                <td>{{$product->id}}</td>
                                                <td>{{$product->title}}</td>
                                                <td>{{$product->description}}</td>
                                                <td>{{$product->quantity}}</td>
                                                <td>{{$product->price}}</td>
                                                <td>{{$product->discount_price}}</td>
                                                <td><img style="height:50px; width:50px;" src="{{asset('images/'.$product->image)}}" alt=""></td>
                                                
                                                <td>
                                                    <a href="update/{{$product->id}}" class="btn btn-outline-success">Update</a>
                                                    <a href="delet/{{$product->id}}" class="btn btn-outline-danger" onclick="return confirm('Are you sure to Delete this')">Delete</a>
                                                </td>
                                            </tr>
                                           
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
@endsection

@extends('layout')
@section('content')


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <div class="container">
        <div class="contentbar">
            <!-- Start row -->
            @include('sweetalert::alert')
            <div class="row">
                <!-- Start col -->
                <div class="col-md-12 col-lg-12 col-xl-12 mt-5 my-5 ">
                    <div class="card m-b-30">
                        <div class="card-header">
                            <h5 class="card-title">Cart</h5>
                        </div>
                        <div class="card-body">
                            <div class="row justify-content-center">
                                <div class="col-lg-10 col-xl-8">
                                    <div class="cart-container">
                                        <div class="cart-head">
                                            <div class="table-responsive">
                                                <table class="table table-borderless">
                                                    <thead>
                                                        <tr>
                                                            <th scope="col">ID</th>
                                                            <th scope="col">Action</th>
                                                            <th scope="col">Photo</th>
                                                            <th scope="col">Product Title</th>
                                                            <th scope="col">Quantity</th>
                                                            <th scope="col">Price</th>
                                                      
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $totalprice=0; ?>
                                                        @foreach ($cart as $cart)
                                                            <tr>
                                                                <td scope="row">{{ $cart->id }}</td>
                                                                <td>
                                                                    <a href="delete/{{$cart->id}}" class="btn btn-outline-danger" onclick="confirmation(event)" class="text-danger">
                                                                        <i class="ri-delete-bin-3-line"></i>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <img src="images/{{$cart->image}}" alt="" style="width: 25px">
                                                                </td>
                                                                <td>{{ $cart->product_title }}</td>
                                                                <td> {{ $cart->quantity }}</td>                                                           
                                                                <td>${{ $cart->price }}</td>
                                                                
                                                            </tr>
                                                            <?php $totalprice=$totalprice+ $cart->price ?>
                                                        @endforeach

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="cart-body">
                                            <div class="row" style="margin-left: 80%;">
                                                <h1 class=" ">Sub Total : ${{$totalprice}}</h1>
                                               
                                            </div>
                                        </div>
                                        <div class="cart-footer text-right">
                                           
                                            <a href="{{url('cash_order')}}" class="btn btn-success my-1">Cash on Delivery
                                               <i class="ri-arrow-right-line ml-2"></i></a>
                                            <a href="{{url('stripe',$totalprice)}}" class="btn btn-success my-1">Pay using Card
                                                <i class="ri-arrow-right-line ml-2"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End col -->
            </div>
            <!-- End row -->
        </div>
    </div>
    
<script>
    function confirmation(ev) {
      ev.preventDefault();
      var urlToRedirect = ev.currentTarget.getAttribute('href');  
      console.log(urlToRedirect); 
      swal({
          title: "Are you sure to cancel this product",
          text: "You will not be able to revert this!",
          icon: "warning",
          buttons: true,
          dangerMode: true,
      })
      .then((willCancel) => {
          if (willCancel) {


               
              window.location.href = urlToRedirect;
             
          }  


      });

      
  }
</script>
@endsection

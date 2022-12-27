<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  
</head>
@include('layout.head')

<body>
    @include('layout.navbar')

    <div class="hero_area">
        <div class="card border-primary mb-3" style="max-width:40%; height:70%; margin-left:35%; margin-top:30px">


            <div class="col-sm-6 col-md-4 col-lg-3" style="margin: auto; width:50%; padding:30px">

                <div class="img-box">
                    <img src="/images/{{ $product->image }}" alt="">
                </div>
                <hr style="width:100%;">
                <div class="detail-box">
                    <h5 class="card-title mt-3">Product Details</h5>
                    <h5>
                        {{ $product->title }}
                    </h5>
                    @if ($product->discount_price != null)
                        <h6 style="color: red">
                            Discount Price
                            <br>
                            ${{ $product->discount_price }}
                        </h6>
                        <h6 style="text-decoration:line-through; color:blue; ">
                            ${{ $product->price }}
                        </h6>
                    @else
                        <h6 style="color: red">
                            Price
                            <br>
                            ${{ $product->price }}
                        </h6>
                    @endif
                    <h6>Product Catagory:{{ $product->price }}</h6>
                    <h6>Product description:{{ $product->description }}</h6>
                    <h6>Available Quantity:{{ $product->quantity }}</h6>
                    <hr style="width:100%;">
          
                    <form action="{{url('add_cart',$product->id)}}" method="POST">
                        @csrf
                        <div class="row">
                          <div class="col-md-4">
                           <input type="number" name="quantity" value="1" min="1" style="width: 60px; margin-top:15px">
                          </div>
                          <div class="col-md-4">
                             <input type="submit" value="Add To Cart" style=" margin-top:10px">
                        </div>
                        </div>
                      </form>
                </div>
            </div>
        </div>
    </div>

    @include('layout.footer')
    @include('layout.script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>

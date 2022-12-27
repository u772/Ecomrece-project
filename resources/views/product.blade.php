@extends('layout')
@section('content')
    <!DOCTYPE html>
    <html>

    <body class="sub_page">
        @include('sweetalert::alert')
        <!-- inner page section -->
        <section class="inner_page_head">
            <div class="container_fuild">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <h3>Product Grid</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end inner page section -->
        <!-- product section -->
        <section class="product_section layout_padding">
            <div class="container">
                <div class="heading_container heading_center">
                    <h2>
                        Our <span>products</span>
                    </h2>
                    <form action="{{ url('search_products') }}" method="GET">
                        @csrf
                        <input style="width: 300px;margin-top:50px" class="form-control" type="text" name="search"
                            placeholder="search products">
                        <input type="submit" value="search">
                    </form>

                    <div class="uper">
                        @if (Session::has('success'))
                            <div class="alert alert-success text-center">
                                <p>{{ Session::get('success') }}</p>
                            </div>
                        @endif
                    </div>
                </div>
                <div class="row">
                    @foreach ($product as $products)
                        <div class="col-sm-6 col-md-4 col-lg-3">
                            <div class="box">
                                <div class="option_container">
                                    <div class="options">

                                        <a href="{{ url('product_details', $products->id) }}" class="option1">
                                            Product Details
                                        </a>
                                        <form action="{{ url('add_cart', $products->id) }}" method="POST">
                                            @csrf
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <input type="number" name="quantity" value="1" min="1"
                                                        style="width: 60px; margin-top:15px">
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="submit" value="Add To Cart" style=" margin-top:10px">
                                                </div>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                                <div class="img-box">
                                    <img src="images/{{ $products->image }}" alt="">
                                </div>
                                <div class="detail-box">
                                    <h5>
                                        {{ $products->title }}
                                    </h5>
                                    @if ($products->discount_price != null)
                                        <h6 style="color: red">
                                            Discount Price
                                            <br>
                                            ${{ $products->discount_price }}
                                        </h6>
                                        <h6 style="text-decoration:line-through; color:blue; ">
                                            ${{ $products->price }}
                                        </h6>
                                    @else
                                        <h6 style="color: red">
                                            Price
                                            <br>
                                            ${{ $products->price }}
                                        </h6>
                                    @endif

                                </div>
                            </div>
                        </div>
                    @endforeach
                    <span style="padding-top:20px;">
                        {!! $product->withQueryString('pagination::bootstrap-5') !!}
                    </span>
                </div>
            </div>
        </section>


    </body>

    </html>
@endsection

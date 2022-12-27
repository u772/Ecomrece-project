@extends('layout')
@section('content')
    {{-- <div class="uper">
    @if (session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div><br />
    @endif
  </div> --}}

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css">

    <div class="container">
        <div class="contentbar">

            <div class="container-fluid pt-4 px-4">
                <div class="row g-4">

                    <div class="col-12">
                        <div class=" rounded h-100 p-4">
                            <h6 class="mb-4">Orders Table</h6>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>

                                            <th scope="col">Product Title</th>
                                            <th scope="col">Quantity</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Payment Status</th>
                                            <th scope="col">Delivery Status</th>
                                            <th scope="col">Image</th>
                                            <th scope="col">Cancel Order</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($order as $order)
                                            <tr>

                                                <td>{{ $order->product_title }}</td>
                                                <td>{{ $order->quantity }}</td>
                                                <td>{{ $order->price }}</td>
                                                <td>{{ $order->payment_status }}</td>
                                                <td>{{ $order->delivery_status }}</td>
                                                <td>
                                                    <img src="images/{{ $order->image }}" alt=""
                                                        style="width: 50px">
                                                </td>
                                                <td>
                                                    @if ($order->delivery_status == 'processing')
                                                        <a onclick="return  confirm('Are You Sure You Want To Cancel The Order ')"
                                                            class="btn btn-outline-danger"
                                                            href="{{ url('cancel_order', $order->id) }}">Cancel Order</a>
                                                    @else
                                                        <p style="color:red">Not Allowed</p>
                                                    @endif
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
@endsection

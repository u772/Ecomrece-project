<!DOCTYPE html>
<html lang="en">

<head>

</head>

<body>
    <h1>Order Details</h1>
    Customer Name : <h3>{{ $order->name }}</h3>
    Customer Email : <h3>{{ $order->email }}</h3>
    Customer Phone : <h3>{{ $order->phone }}</h3>
    Customer Address: <h3>{{ $order->address }}</h3>
    Customer ID: <h3>{{ $order->user_id }}</h3>

    Product Name : <h3>{{ $order->product_title }}</h3>
    Product Price : <h3>{{ $order->price }}</h3>
    Product Quantity : <h3>{{ $order->quantity }}</h3>
    Product Name : <h3>{{ $order->product_title }}</h3>
    Payment Staus : <h3>{{ $order->payment_status }}</h3>
    Payment ID : <h3>{{ $order->product_id }}</h3>
    Product Image :
    <br><br>
    <img src="images/{{$order->image}}" height="250" width="300">
    
</body>

</html>

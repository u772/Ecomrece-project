<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    @include('adminlayout.head')
    @include('adminlayout.navi')
    @include('adminlayout.sidebar')

<style>
    label{
        display: inline-block;
        width: 200px;
    }
   
   
</style>

<div class="uper">
    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}  
      </div><br />
    @endif
  </div>

    <div class="content">

        



        <div class="container ">
            <h1 style=" text-align: center; font-size: 27px;">Add Catagory</h1>
        </div>
        <div class="container" style="margin-left: 338px;margin-top: 40px; ">
                <form action="{{url('/add_product')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label class="col-form-label">Product title</label>
                        </div>
                        <div class="col-auto mt-3">
                            <input type="text" name="title" class="form-control" placeholder="product tittle" required="">
                        </div>
    
                    </div>
    
                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label class="col-form-label">Product description</label>
                        </div>
                        <div class="col-auto mt-3">
                            <input type="text" name="description" class="form-control" placeholder="product description" required="">
                        </div>
    
                    </div>
    
                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label class="col-form-label">Product Price</label>
                        </div>
                        <div class="col-auto mt-3">
                            <input type="number" name="price" class="form-control" placeholder="product Price" required="">
                        </div>
    
                    </div>
    
                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label class="col-form-label">Discount Price</label>
                        </div>
                        <div class="col-auto mt-3">
                            <input type="number" name="discount_price" class="form-control" placeholder="Discount if apply" >
                        </div>
    
                    </div>
    
                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label class="col-form-label">Product Quantity</label>
                        </div>
                        <div class="col-auto mt-3">
                            <input type="number" name="quantity" min="0" class="form-control" placeholder="product Quantity" required="">
                        </div>
    
                    </div>
    
                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label class="col-form-label">Product catagory</label>
                        </div>
                        <div class="col-auto mt-3">
                           <select name="catagory" id="">
                            <option selected="" value="">Add catagory here</option>
                            @foreach ($catagory as $catagory )
                                
               
                            <option value="{{$catagory->catagory}}">{{$catagory->catagory}}</option>
                            @endforeach
                           </select>
                        </div>
    
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label class="col-form-label">Product Image</label>
                        </div>
                        <div class="col-auto mt-3">
                            <input type="file" name="image" class="form-control" required="">
                        </div>
    
                    </div>
                    <button class="btn btn-outline-success" type="submit" name="submit" style="margin-left: 213px;margin-top: 20px;">submit</button>
    
                </form>
            </div>
          
        </div>

    </div>


    @include('adminlayout.script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>

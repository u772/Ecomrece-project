@extends('admin.layout')
@section('content')
    <div class="container-fluid position-relative d-flex p-0">

        <div class="content">
            <h1 style="margin-left: 322px; margin-bottom:50px"> Send Email To: {{$order->email}}</h1>
           
            <div class="container">

                <form action="{{url('send_useremail',$order->id)}}" method="POST">
                    @csrf
                    <div class="row mb-3" style="margin-left:300px">
                        <label  class="col-sm-2 col-form-label w-50px">Email Greetig </label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="greeting">
                        </div>
                    </div>
                    <div class="row mb-3" style="margin-left:300px">
                        <label  class="col-sm-2 col-form-label w-50px">Email Firstline </label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="firstline">
                        </div>
                    </div>
                    <div class="row mb-3" style="margin-left:300px">
                        <label  class="col-sm-2 col-form-label w-50px">Email Body </label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="body">
                        </div>
                    </div>
                    <div class="row mb-3" style="margin-left:300px">
                        <label  class="col-sm-2 col-form-label w-50px">Email Button </label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="button">
                        </div>
                    </div>
                    <div class="row mb-3" style="margin-left:300px">
                        <label  class="col-sm-2 col-form-label w-50px">Email Url </label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="url">
                        </div>
                    </div>
                    <div class="row mb-3" style="margin-left:300px">
                        <label  class="col-sm-2 col-form-label w-50px">Email Last line </label>
                        <div class="col-sm-4">
                          <input type="text" class="form-control" name="last">
                        </div>
                    </div>
                    <div class="row mb-3" style="margin-left:300px">
                        
                        <div class="col-sm-4 ">
                            <input style="margin-left: 133px; margin-top:30px" class="btn btn-primary " type="submit"value="Send Email">
                        </div>
                    </div>


    
                </form>
            </div>
        </div>
    </div>
@endsection

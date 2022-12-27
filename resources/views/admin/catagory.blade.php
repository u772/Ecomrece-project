<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    @include('adminlayout.head')
    @include('adminlayout.navi')
    @include('adminlayout.sidebar')

    
   
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
             <div class="container">
                <form action="{{url('/add-catagory')}}"  method="POST"
                class="row g-3" style=" margin-left: 364px; margin-top: 30px;">
                @csrf
                    <div class="col-auto">
                        <label style=" padding-top: 10px;">Catagory</label>
                    </div>
                    <div class="col-auto">
                      <label class="visually-hidden">Catagory</label>
                      <input type="text" name="catagory" class="form-control" >
                    </div>
                    <div class="col-auto">
                      <button type="submit" name="submit" class="btn btn-primary mb-3">Add Catagory</button>
                    </div>
                  </form>

             </div>
             <div class="container">
             <div class="col-sm-12 col-xl-12">
              <div class="bg-secondary rounded h-100 p-4">
                  <h6 class="mb-4">Catagory Table</h6>
                  <table class="table table-hover">
                      <thead>
                          <tr>
                              <th >ID</th>
                              <th >Catagory Name</th>
                             
                              <th >Action</th>
                          </tr>
                      </thead>
                      <tbody>
                        @foreach($data as $data)
                        <tr>
                            <td>{{$data->id}}</td>
                            <td>{{$data->catagory}}</td>
                              <td><a href="deletee/{{$data->id}}" class="btn btn-outline-danger">Delete</a></td>
                            
                          </tr>
                        
                          @endforeach
                      </tbody>
                  </table>
              </div>
            </div>
          </div>
        </div>
    

    @include('adminlayout.script')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>

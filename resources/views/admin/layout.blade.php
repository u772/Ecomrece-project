<!DOCTYPE html>
<html lang="en" style="font-size:16px;">



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

@include('adminlayout.head')

<body>
    @include('adminlayout.navi')
    @include('adminlayout.sidebar')
      
    @yield('content')
  
    @include('adminlayout.footer')
    @include('adminlayout.script')
</body>

</html>
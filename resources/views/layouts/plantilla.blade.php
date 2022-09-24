<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
   {{-- <script src="https://cdn.tailwindcss.com"></script> --}} 

   
  {{--  EL MEJOR EJEMPLO DE LA PAGINA DE jquery-ui (https://jqueryui.com/autocomplete/) !!! --}}
  <link rel="stylesheet" href="{{asset('jquery-ui/jquery-ui.min.css')}}"> 
  <script src="{{asset('jquery/dist/jquery.js')}}"></script>
  <script src="{{asset('jquery-ui/jquery-ui.min.js')}}"></script>
  

   <style>
    header {
        background: #eae0f9;
        color:rgb(46, 46, 90);
    }
    .active {
        color: chocolate;
        font-weight:bolt;


    }
   </style>
   
 {{-- OJO LO agrego para que funciones todo!! --}}  
<link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>
<body>
    {{-- yo cree la carpeta partials y el archivo header --}}
    @include('layouts.partials.header')
    <div class="container">
        <h1>@yield('content')</h1>
    </div>
    <div class="container">
      @include('layouts.partials.footer')
    </div>
</body>
</html>
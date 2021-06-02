<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">    
    <title>@yield('title')</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('img/favicon.ico')}}" type="image/x-icon">

    <!-- Font awesome -->
    <link href="{{asset('css/font-awesome.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">   
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/slick.css')}}">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/nouislider.css')}}">
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{asset('css/jquery.fancybox.css')}}" type="text/css" media="screen" /> 
    <!-- Theme color -->
    <link id="switcher" href="{{asset('css/theme-color/default-theme.css')}}" rel="stylesheet">     

    <!-- Main style sheet -->
    <link href="{{asset('css/style.css')}}" rel="stylesheet">    

   
    <!-- Google Font -->
    <link href="{{asset('https://fonts.googleapis.com/css?family=Vollkorn')}}" rel='stylesheet' type='text/css'>    
    <link href="{{asset('https://fonts.googleapis.com/css?family=Open+Sans')}}" rel='stylesheet' type='text/css'>
    

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body class="aa-price-range">  
    @yield('content')
  </body> 
</html>
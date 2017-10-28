<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopee</title>
    <meta id="token" name="token" value="{{ csrf_token() }}">

  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
   <link href="css/uikit.min.css" rel="stylesheet">
     <!-- Your custom styles (optional) -->
     <link href="css/style.css" rel="stylesheet">
     <!-- Bootstrap CSS -->
     <link href="css/bootstrap.min.css" rel="stylesheet">
     <script type="text/javascript " src="js/jquery-3.1.1.min.js "></script>

       <!-- Bootstrap tooltips -->
       <script type="text/javascript " src="js/popper.min.js "></script>
       <!-- Bootstrap core JavaScript -->

       <!-- MDB core JavaScript -->

    <script type="text/javascript" src="/js/html5shiv.min.js"></script>
    <script type="text/javascript" src="/js/respond.min.js"></script>

  <link rel="stylesheet" href="css/index.css" media="screen" title="no title" charset="utf-8">

  <style media="screen">
 body{
 overflow-x: hidden;
 }


  </style>


  </head>
  <body>
<div  id="manage-vue">
@yield('content')
</div>
<script type="text/javascript" src="js/toastr.min.js"></script>
<link rel="stylesheet" href="css/toastr.min.css" media="screen" title="no title" charset="utf-8">

  <script type="text/javascript" src="{{ asset('js/productsection.js') }}"></script>


    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <!-- UIkit CSS -->

    <script src="js/uikit.js"></script>
   <script src="js/uikit.min.js"></script>
 <script src="js/uikit-icons.min.js"></script>

  </body>
</html>

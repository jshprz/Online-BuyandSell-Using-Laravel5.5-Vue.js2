<!DOCTYPE html>
<html>
  <head>
    <title>Shopee</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopee</title>
    <meta id="csrf-token" name="csrf-token" content="{{ csrf_token() }}">
    <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
   <link href="css/uikit.min.css" rel="stylesheet">
     <!-- Your custom styles (optional) -->
     <link href="css/style.css" rel="stylesheet">
     <!-- Bootstrap CSS -->
       <!-- Bootstrap tooltips -->
       <script type="text/javascript " src="js/popper.min.js "></script>
       <!-- Bootstrap core JavaScript -->
       <!-- MDB core JavaScript -->

    <script type="text/javascript" src="/js/html5shiv.min.js"></script>
    <script type="text/javascript" src="/js/respond.min.js"></script>

  <link rel="stylesheet" href="css/index.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Material+Icons">
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.0.0-beta.3/dist/css/bootstrap-material-design.min.css" integrity="sha384-k5bjxeyx3S5yJJNRD1eKUMdgxuvfisWKku5dwHQq9Q/Lz6H8CyL89KF52ICpX4cL" crossorigin="anonymous">

  <style media="screen">
 body{
 overflow-x: hidden;
 }
 .list-group{
   overflow-y: scroll;
   height: 200px;
 }
 a{

   color: white
 }
 a:hover{
   text-decoration: none;
   color: white;
 }
  </style>

  </head>
  <body>
<div  id="manage-vue">
@yield('content')
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://unpkg.com/popper.js@1.12.5/dist/umd/popper.js" integrity="sha384-KlVcf2tswD0JOTQnzU4uwqXcbAy57PvV48YUiLjqpk/MJ2wExQhg9tuozn5A1iVw" crossorigin="anonymous"></script>
<script src="https://unpkg.com/bootstrap-material-design@4.0.0-beta.3/dist/js/bootstrap-material-design.js" integrity="sha384-hC7RwS0Uz+TOt6rNG8GX0xYCJ2EydZt1HeElNwQqW+3udRol4XwyBfISrNDgQcGA" crossorigin="anonymous"></script>
<script type="text/javascript" src="js/toastr.min.js"></script>
<link rel="stylesheet" href="css/toastr.min.css" media="screen" title="no title" charset="utf-8">
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

    <!-- UIkit CSS -->

    <script src="js/uikit.js"></script>
   <script src="js/uikit.min.js"></script>
 <script src="js/uikit-icons.min.js"></script>

  </body>
</html>

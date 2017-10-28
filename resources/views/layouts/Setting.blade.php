<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopee</title>
    <meta id="token" name="token" value="{{ csrf_token() }}">


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
 .li-1:hover{
 background-color:#00CCCC;
 }
 .li-2:hover{
 background-color:#00CCCC;
 }
 .li-3:hover{
 background-color:#00CCCC;
 }
.active{
   background-color:#00CCCC;
}
 .li-1{
 margin-left: 20px;
 width: 220px;
 border-radius: 8px;

 }
 .li-2{
 margin-left: 20px;
 width: 220px;
 border-radius: 8px;
 }
 .li-3{
 margin-left: 20px;
 width: 250px;
 border-radius: 8px;
 }
.uk-list{
  width: 80%;
}

 h5{
 padding: 5px;
 margin-left: 30px;
 }
  #wrapper {
 padding-left: 250px;
 transition: all 0.4s ease 0s;
 }
 #sidebar-wrapper {
 margin-left: -250px;
 left: 250px;
 width: 250px;
 position: fixed;
 height: 70%;
 overflow:hidden;
 z-index: 1000;
 transition: all 0.4s ease 0s;
 color: black;
 bottom: 40px;

 }

 #page-content-wrapper {
 width: 100%;
 }

 .sidebar-nav {
 position: absolute;
 top: 0;
 width: 250px;
 list-style: none;
 margin: 0;
 padding: 0;
 }

 @media (max-width:767px) {

 #wrapper {
 padding-left: 0;
 }

 #sidebar-wrapper {
 left: 0;
 }

 #wrapper.active {
 position: relative;
 left: 250px;
 }

 #wrapper.active #sidebar-wrapper {
 left: 250px;
 width: 250px;
 transition: all 0.4s ease 0s;
 }

 }
  </style>

  </head>
  <body>
<div  id="manage-vue">
@yield('content')
</div>
<script type="text/javascript" src="js/toastr.min.js"></script>
<link rel="stylesheet" href="css/toastr.min.css" media="screen" title="no title" charset="utf-8">

  <script type="text/javascript" src="js/vee-validate.js"></script>
  <script type="text/javascript" src="js/vee-validate.min.js"></script>
<script src="/js/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/vue.min.js"></script>
  <script type="text/javascript" src="js/axios.min.js"></script>
    <script type="text/javascript" src="js/VueCodes/sellproduct.js"></script>


    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <!-- UIkit CSS -->

    <script src="js/uikit.js"></script>
   <script src="js/uikit.min.js"></script>
 <script src="js/uikit-icons.min.js"></script>

  </body>
</html>

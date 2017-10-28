<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Shopee</title>
    <meta id="token" name="token" value="{{ csrf_token() }}">
  <link rel="stylesheet" href="{{asset('css/uikit.min.css')}}">
   <link rel="stylesheet" href="css/uikit.min.css" />

   <link href="css/uikit.min.css" rel="stylesheet">
     <script src="js/uikit-icons.min.js"></script>
     <!-- Your custom styles (optional) -->
     <link href="css/style.css" rel="stylesheet">
     <!-- Bootstrap CSS -->
     <link href="css/bootstrap.min.css" rel="stylesheet">


     <script type="text/javascript " src="js/jquery-3.1.1.min.js "></script>
       <script type="text/javascript " src="js/uikit.min.js "></script>
       <script type="text/javascript " src="js/uikit.js "></script>
       <!-- Bootstrap tooltips -->
       <script type="text/javascript " src="js/popper.min.js "></script>


       <!-- Bootstrap core JavaScript -->
       <script type="text/javascript " src="js/bootstrap.min.js "></script>
       <!-- MDB core JavaScript -->



        <script src="js/uikit.min.js"></script>
        <script src="js/uikit-icons.min.js"></script>
    <script type="text/javascript" src="/js/html5shiv.min.js"></script>
    <script type="text/javascript" src="/js/respond.min.js"></script>

  <link rel="stylesheet" href="css/index.css" media="screen" title="no title" charset="utf-8">
       <!-- Bootstrap core JavaScript -->
       <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
       <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
       <!-- MDB core JavaScript -->
       <style media="screen">
body{
overflow-x: hidden;
}
       i{
    display: inline-block;
  line-height: inherit;
    padding: 17px;
    vertical-align: middle;
       }
       i:hover{
         background-color: black;
       }
       .icon{
         color:white;
       }

.li-1{
  margin-top: 50px;
  height: 60px;
}
.li-2{
  margin-top: 17px;
}
.li-3{
  margin-top: 34px;
}
.icon-globe{
  margin-left:-3px;
}
.icon-time{
  margin-left:-3px;
}
.icon-cog{
  margin-left:-3px;
}
h5{
  padding: 10px;
}
       #wrapper {
padding-left: 250px;
transition: all 0.4s ease 0s;
}
#sidebar-wrapper {
margin-left: -250px;
left: 250px;
width: 75px;
background: #333333;
position: fixed;
height: 85%;
 overflow:hidden;
z-index: 1000;
transition: all 0.4s ease 0s;
color: white;
bottom: 20px;

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

<script src="/js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/vue.min.js"></script>
<script type="text/javascript" src="js/axios.min.js"></script>
 <script type="text/javascript" src="js/VueCodes/admin.js"></script>

    <script src="js/uikit-icons.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
    <!-- UIkit CSS -->
   <script src="js/uikit.min.js"></script>



 <script src="js/uikit-icons.min.js"></script>
 <script type="text/javascript" src="js/jquery-3.2.1.js"></script>
 <script src="js/uikit.min.js"></script>
    <!-- UIkit CSS -->
  </body>
</html>

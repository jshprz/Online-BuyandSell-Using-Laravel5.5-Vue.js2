@extends('layouts.index')
@section('content')

<div class="uk-navbar-container" uk-navbar>
  <div class="uk-navbar-left uk-margin-xlarge-left">
  <a class="navbar-brand uk-visible@m" href="{{route('shoppe')}}" style="color:black">SHOPEE</a>
  </div>
  <div class="uk-navbar-right uk-margin-xlarge-right">
    <a href="{{url('/registration')}}" class="nav-link"style="color:black">Register</a>
    <button type="button" class="btn-small btn-dark" href="#modal-example" uk-toggle>LOGIN</button>
    <div id="modal-example" uk-modal>
        <div class="uk-modal-dialog uk-modal-body uk-width-medium uk-margin-auto-vertical">
          <form method="post" action="{{route('login')}}">
              {{ csrf_field() }}
                <div class="form-group">
                    <div class="uk-text-left">
                        <label for="email">Email address</label>
                        <input name="email" type="email" class="uk-input uk-width-medium " id="email" placeholder="Email Address" required>
                    </div>
                </div>
                <div class="form-group ">
                    <div class="uk-text-left">
                        <label for="password">Password</label>
                    <input name="password" type="password" class="uk-input uk-width-medium " id="password" placeholder="Password" required>
                  </div>
                </div>


          <div class="form-group">
            <button class="btn btn-info uk-width-medium" type="submit">Login</button>
          </div>

            </form>

        </div>

    </div>
  </div>
<div class="uk-navbar-center">
  <div class="uk-navbar-item">
            <form class="uk-search uk-search-navbar">
                <span uk-search-icon></span>
                <input class="uk-search-input" type="search" placeholder="Search...">
            </form>
        </div>
</div>

</div>
<nav class="uk-navbar-container navbar-expand-xl navbar-dark" style="box-shadow:3px 2px 1px #000000; background-color:#33CCFF">
    <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active" style="color:black;background-color:#00CCCC;">
                    <a class="nav-link" href="#">HOME<span class="sr-only">(current)</span></a>
                </li>

                <li class="nav-item">
                  <span>&nbsp&nbsp </span>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="moreitems?category=accessories" @click="currentclick('accessories')" style="color:black">ACCESSORIES</a>
                </li>

                <li class="nav-item">
              <span>&nbsp&nbsp</span>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="moreitems?category=bags" style="color:black"  @click="currentclick('bags')">BAGS</a>
                </li>

                <li class="nav-item">
              <span>&nbsp&nbsp</span>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="moreitems?category=menstore" style="color:black" @click="currentclick('menstore')">MENS STORE</a>
                </li>

                <li class="nav-item">
              <span>&nbsp&nbsp</span>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="moreitems?category=womenstore" style="color:black" @click="currentclick('womenstore')">WOMENS STORE</a>
                </li>

                <li class="nav-item">
              <span>&nbsp&nbsp</span>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="moreitems?category=computeraccessories" style="color:black" @click="currentclick('computeraccessories')">COMPUTER ACCESSORIES</a>
                </li>

                <li class="nav-item">
              <span>&nbsp&nbsp</span>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="moreitems?category=gadgets" style="color:black" @click="currentclick('gadgets')">GADGETS</a>
                </li>

                <li class="nav-item">
              <span>&nbsp&nbsp</span>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="moreitems?category=vehicle" style="color:black" @click="currentclick('vehicle')">VEHICLE</a>
                </li>

                <li class="nav-item">
              <span>&nbsp&nbsp</span>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="moreitems?category=vehicleaccessories" style="color:black" @click="currentclick('vehicleaccessories')">VEHICLE ACCESSORIES</a>
                </li>


            </ul>

        </div>
    </div>
</nav>

<div class="uk-navbar-container navbar-dark uk-margin-xsmall-top" style="background-color:#33CCCC; box-shadow:3px 2px 1px #000000;" uk-navbar>

      <div class="uk-navbar-left">
          <h1 class="uk-heading-primary uk-margin-large-top uk-margin-large-left" style="font-family:Segoe UI Light"><b>SHOPEE</b></h1>
          <h6 class="uk-margin-large-left" style="font-family:Arial Rounded MT">Your choice is my command.</h6>
          &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
          <a href="{{route('loginfail')}}"><button class="uk-button uk-button-secondary uk-margin-large-bottom uk-margin-medium-left ">Sell item now</button></a>
    </div>
            <img class="uk-margin-large-left" src="img/sss.jpg" style="box-shadow:3px 2px 1px #000000;">
        <h5 class="uk-heading-primary uk-margin-xlarge-top"style="font-family:Segoe UI Light"><p>&nbsp</p><p>&nbsp</p></h4>
</div>

<main>

    <div class="container" >
        <ul class="uk-breadcrumb" v-show="accessories.length !== 0">
            <li>
                <h1 class="uk-heading-bullet ">Newest Item</h1>
                </a>
            </li>
            <li><a href="#">Accessories</a></li>
        </ul>

        <div class="row">
        <div class="col-lg-4 col-sm-6 uk-child-width-expand@s  uk-margin-remove-top uk-margin-remove-left uk-grid-small  uk-grid-match" v-for="approveditem in accessories" uk-grid>
                            <div class="col-lg-12 uk-margin-small-bottom">
                                <listcard :go="'currentitem?description='+approveditem.product_description+'&'+'price='+approveditem.product_price+'&'+'contact='+approveditem.contact+'&'+'photo='+approveditem.product_image+'&'+'created='+approveditem.created_at+'&'+'city='+approveditem.seller_location+'&'+'firstname='+approveditem.firstname+'&'+'lastname='+approveditem.lastname" :contact="approveditem.contact" :userimage="'http://localhost:8000/storage/avatars/' + approveditem.image" :productimage="'http://localhost:8000/storage/product/' + approveditem.product_image" :productdescription="approveditem.product_description" :createdat="approveditem.created_at" :productprice="approveditem.product_price" :firstname="approveditem.firstname" :lastname="approveditem.lastname" :city="approveditem.seller_location"></listcard>
    <form action="currentitem" method="post">
      <input type="hidden" name="description">
      <input type="hidden" name="price">
      <input type="hidden" name="contact">
      <input type="hidden" name="photo">
      <input type="hidden" name="created">
      <input type="hidden" name="city">
      <input type="hidden" name="fistname">
      <input type="hidden" name="lastname">
    </form>
  </div>
</div>
</div>
      </div>


      <div class="container" >
          <ul class="uk-breadcrumb" v-show="bags.length !== 0">
              <li>
                  <h1 class="uk-heading-bullet ">Newest Item</h1>
                  </a>
              </li>
              <li><a href="#">Bags</a></li>
          </ul>

          <div class="row">
        <div class="col-lg-4 col-sm-6 uk-child-width-expand@s  uk-margin-remove-top uk-margin-remove-left uk-grid-small  uk-grid-match" v-for="approveditem in bags" uk-grid>
                              <div class="col-lg-12 uk-margin-small-bottom">
                                  <listcard :go="'currentitem?description='+approveditem.product_description+'&'+'price='+approveditem.product_price+'&'+'contact='+approveditem.contact+'&'+'photo='+approveditem.product_image+'&'+'created='+approveditem.created_at+'&'+'city='+approveditem.seller_location+'&'+'firstname='+approveditem.firstname+'&'+'lastname='+approveditem.lastname" :contact="approveditem.contact" :userimage="'http://localhost:8000/storage/avatars/' + approveditem.image" :productimage="'http://localhost:8000/storage/product/' + approveditem.product_image" :productdescription="approveditem.product_description" :createdat="approveditem.created_at" :productprice="approveditem.product_price" :firstname="approveditem.firstname" :lastname="approveditem.lastname" :city="approveditem.seller_location"></listcard>
    <form action="currentitem" method="post">
      <input type="hidden" name="description">
      <input type="hidden" name="price">
      <input type="hidden" name="contact">
      <input type="hidden" name="photo">
      <input type="hidden" name="created">
      <input type="hidden" name="city">
      <input type="hidden" name="fistname">
      <input type="hidden" name="lastname">
    </form>
    </div>
  </div>
  </div>
        </div>
              <div class="container" >
                  <ul class="uk-breadcrumb" v-show="menstore.length !== 0">
                      <li>
                          <h1 class="uk-heading-bullet ">Newest Item</h1>
                          </a>
                      </li>
                      <li><a href="#">Men Store</a></li>
                  </ul>

                  <div class="row">
                <div class="col-lg-4 col-sm-6 uk-child-width-expand@s  uk-margin-remove-top uk-margin-remove-left uk-grid-small  uk-grid-match" v-for="approveditem in menstore" uk-grid>
                                      <div class="col-lg-12 uk-margin-small-bottom">
                                          <listcard :go="'currentitem?description='+approveditem.product_description+'&'+'price='+approveditem.product_price+'&'+'contact='+approveditem.contact+'&'+'photo='+approveditem.product_image+'&'+'created='+approveditem.created_at+'&'+'city='+approveditem.seller_location+'&'+'firstname='+approveditem.firstname+'&'+'lastname='+approveditem.lastname" :contact="approveditem.contact" :userimage="'http://localhost:8000/storage/avatars/' + approveditem.image" :productimage="'http://localhost:8000/storage/product/' + approveditem.product_image" :productdescription="approveditem.product_description" :createdat="approveditem.created_at" :productprice="approveditem.product_price" :firstname="approveditem.firstname" :lastname="approveditem.lastname" :city="approveditem.seller_location"></listcard>
            <form action="currentitem" method="post">
              <input type="hidden" name="description">
              <input type="hidden" name="price">
              <input type="hidden" name="contact">
              <input type="hidden" name="photo">
              <input type="hidden" name="created">
              <input type="hidden" name="city">
              <input type="hidden" name="fistname">
              <input type="hidden" name="lastname">
            </form>
            </div>
          </div>
          </div>
                </div>


                      <div class="container" >
                          <ul class="uk-breadcrumb" v-show="womenstore.length !== 0">
                              <li>
                                  <h1 class="uk-heading-bullet ">Newest Item</h1>
                                  </a>
                              </li>
                              <li><a href="#">Women Store</a></li>
                          </ul>

                          <div class="row">
                        <div class="col-lg-4 col-sm-6 uk-child-width-expand@s  uk-margin-remove-top uk-margin-remove-left uk-grid-small  uk-grid-match" v-for="approveditem in womenstore" uk-grid>
                                              <div class="col-lg-12 uk-margin-small-bottom">
                                                  <listcard :go="'currentitem?description='+approveditem.product_description+'&'+'price='+approveditem.product_price+'&'+'contact='+approveditem.contact+'&'+'photo='+approveditem.product_image+'&'+'created='+approveditem.created_at+'&'+'city='+approveditem.seller_location+'&'+'firstname='+approveditem.firstname+'&'+'lastname='+approveditem.lastname" :contact="approveditem.contact" :userimage="'http://localhost:8000/storage/avatars/' + approveditem.image" :productimage="'http://localhost:8000/storage/product/' + approveditem.product_image" :productdescription="approveditem.product_description" :createdat="approveditem.created_at" :productprice="approveditem.product_price" :firstname="approveditem.firstname" :lastname="approveditem.lastname" :city="approveditem.seller_location"></listcard>
                    <form action="currentitem" method="post">
                      <input type="hidden" name="description">
                      <input type="hidden" name="price">
                      <input type="hidden" name="contact">
                      <input type="hidden" name="photo">
                      <input type="hidden" name="created">
                      <input type="hidden" name="city">
                      <input type="hidden" name="fistname">
                      <input type="hidden" name="lastname">
                    </form>
                    </div>
                  </div>
                  </div>
                        </div>


                              <div class="container" >
                                  <ul class="uk-breadcrumb" v-show="computeraccessories.length !== 0">
                                      <li>
                                          <h1 class="uk-heading-bullet ">Newest Item</h1>
                                          </a>
                                      </li>
                                      <li><a href="#">Computer Accessories</a></li>
                                  </ul>

                                  <div class="row">
                                <div class="col-lg-4 col-sm-6 uk-child-width-expand@s  uk-margin-remove-top uk-margin-remove-left uk-grid-small  uk-grid-match" v-for="approveditem in computeraccessories" uk-grid>
                                                      <div class="col-lg-12 uk-margin-small-bottom">
                                                          <listcard :go="'currentitem?description='+approveditem.product_description+'&'+'price='+approveditem.product_price+'&'+'contact='+approveditem.contact+'&'+'photo='+approveditem.product_image+'&'+'created='+approveditem.created_at+'&'+'city='+approveditem.seller_location+'&'+'firstname='+approveditem.firstname+'&'+'lastname='+approveditem.lastname" :contact="approveditem.contact" :userimage="'http://localhost:8000/storage/avatars/' + approveditem.image" :productimage="'http://localhost:8000/storage/product/' + approveditem.product_image" :productdescription="approveditem.product_description" :createdat="approveditem.created_at" :productprice="approveditem.product_price" :firstname="approveditem.firstname" :lastname="approveditem.lastname" :city="approveditem.seller_location"></listcard>
                            <form action="currentitem" method="post">
                              <input type="hidden" name="description">
                              <input type="hidden" name="price">
                              <input type="hidden" name="contact">
                              <input type="hidden" name="photo">
                              <input type="hidden" name="created">
                              <input type="hidden" name="city">
                              <input type="hidden" name="fistname">
                              <input type="hidden" name="lastname">
                            </form>
                            </div>
                          </div>
                          </div>
                                </div>


                                      <div class="container" >
                                          <ul class="uk-breadcrumb" v-show="gadgets.length !== 0">
                                              <li>
                                                  <h1 class="uk-heading-bullet ">Newest Item</h1>
                                                  </a>
                                              </li>
                                              <li><a href="#">Gadgets</a></li>
                                          </ul>

                                          <div class="row">
                                        <div class="col-lg-4 col-sm-6 uk-child-width-expand@s  uk-margin-remove-top uk-margin-remove-left uk-grid-small  uk-grid-match" v-for="approveditem in gadgets" uk-grid>
                                                              <div class="col-lg-12 uk-margin-small-bottom">
                                                                  <listcard :go="'currentitem?description='+approveditem.product_description+'&'+'price='+approveditem.product_price+'&'+'contact='+approveditem.contact+'&'+'photo='+approveditem.product_image+'&'+'created='+approveditem.created_at+'&'+'city='+approveditem.seller_location+'&'+'firstname='+approveditem.firstname+'&'+'lastname='+approveditem.lastname" :contact="approveditem.contact" :userimage="'http://localhost:8000/storage/avatars/' + approveditem.image" :productimage="'http://localhost:8000/storage/product/' + approveditem.product_image" :productdescription="approveditem.product_description" :createdat="approveditem.created_at" :productprice="approveditem.product_price" :firstname="approveditem.firstname" :lastname="approveditem.lastname" :city="approveditem.seller_location"></listcard>
                                    <form action="currentitem" method="post">
                                      <input type="hidden" name="description">
                                      <input type="hidden" name="price">
                                      <input type="hidden" name="contact">
                                      <input type="hidden" name="photo">
                                      <input type="hidden" name="created">
                                      <input type="hidden" name="city">
                                      <input type="hidden" name="fistname">
                                      <input type="hidden" name="lastname">
                                    </form>
                                    </div>
                                  </div>
                                  </div>
                                        </div>


                                              <div class="container" >
                                                  <ul class="uk-breadcrumb" v-show="vehicle.length !== 0">
                                                      <li>
                                                          <h1 class="uk-heading-bullet ">Newest Item</h1>
                                                          </a>
                                                      </li>
                                                      <li><a href="#">Vehicle</a></li>
                                                  </ul>

                                                  <div class="row">
                                                <div class="col-lg-4 col-sm-6 uk-child-width-expand@s  uk-margin-remove-top uk-margin-remove-left uk-grid-small  uk-grid-match" v-for="approveditem in vehicle" uk-grid>
                                                                      <div class="col-lg-12 uk-margin-small-bottom">
                                                                          <listcard :go="'currentitem?description='+approveditem.product_description+'&'+'price='+approveditem.product_price+'&'+'contact='+approveditem.contact+'&'+'photo='+approveditem.product_image+'&'+'created='+approveditem.created_at+'&'+'city='+approveditem.seller_location+'&'+'firstname='+approveditem.firstname+'&'+'lastname='+approveditem.lastname" :contact="approveditem.contact" :userimage="'http://localhost:8000/storage/avatars/' + approveditem.image" :productimage="'http://localhost:8000/storage/product/' + approveditem.product_image" :productdescription="approveditem.product_description" :createdat="approveditem.created_at" :productprice="approveditem.product_price" :firstname="approveditem.firstname" :lastname="approveditem.lastname" :city="approveditem.seller_location"></listcard>
                                            <form action="currentitem" method="post">
                                              <input type="hidden" name="description">
                                              <input type="hidden" name="price">
                                              <input type="hidden" name="contact">
                                              <input type="hidden" name="photo">
                                              <input type="hidden" name="created">
                                              <input type="hidden" name="city">
                                              <input type="hidden" name="fistname">
                                              <input type="hidden" name="lastname">
                                            </form>
                                            </div>
                                          </div>
                                          </div>
                                                </div>


                                                      <div class="container" >
                                                          <ul class="uk-breadcrumb" v-show="vehicleaccessories.length !== 0">
                                                              <li>
                                                                  <h1 class="uk-heading-bullet ">Newest Item</h1>
                                                                  </a>
                                                              </li>
                                                              <li><a href="#">Vehicle Accessories</a></li>
                                                          </ul>

                                                          <div class="row">
                                                        <div class="col-lg-4 col-sm-6 uk-child-width-expand@s  uk-margin-remove-top uk-margin-remove-left uk-grid-small  uk-grid-match" v-for="approveditem in vehicleaccessories" uk-grid>
                                                                              <div class="col-lg-12 uk-margin-small-bottom">
                                                                                  <listcard :go="'currentitem?description='+approveditem.product_description+'&'+'price='+approveditem.product_price+'&'+'contact='+approveditem.contact+'&'+'photo='+approveditem.product_image+'&'+'created='+approveditem.created_at+'&'+'city='+approveditem.seller_location+'&'+'firstname='+approveditem.firstname+'&'+'lastname='+approveditem.lastname" :contact="approveditem.contact" :userimage="'http://localhost:8000/storage/avatars/' + approveditem.image" :productimage="'http://localhost:8000/storage/product/' + approveditem.product_image" :productdescription="approveditem.product_description" :createdat="approveditem.created_at" :productprice="approveditem.product_price" :firstname="approveditem.firstname" :lastname="approveditem.lastname" :city="approveditem.seller_location"></listcard>
                                                                          </div>
                                                                      </div>
                                                                          </div>
                                                    <form action="currentitem" method="post">
                                                      <input type="hidden" name="description">
                                                      <input type="hidden" name="price">
                                                      <input type="hidden" name="contact">
                                                      <input type="hidden" name="photo">
                                                      <input type="hidden" name="created">
                                                      <input type="hidden" name="city">
                                                      <input type="hidden" name="fistname">
                                                      <input type="hidden" name="lastname">
                                                    </form>
                                                    </div>
                                                  </div>
                                                  </div>
                                                        </div>
</main>
<button class="uk-button uk-button-secondary uk-align-center" type="submit"><a href="{{route('productsection')}}" style="color:white"  @click="currentclick('accessories')">Look for more items</a></button>

<div class="uk-section bg-info">
    <div class="uk-container">
  <p class="uk-align-center">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCopyright 2017 by Shoppe Data. All Rights Reserved.</p>
  <h3 style="font-family:Segoe UI Light"><b><p>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</p>5 Most trusted seller &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Partners</b></h3>
        <div class="uk-grid-match uk-child-width-1-3@m " uk-grid>
            <div class="uk-margin-remove-bottom">
                <p>Joshua Perez</p>
                <p>Daniel Laurena</p>
                <p>John Paul Montano</p>
                <p>Maricar Aragon</p>
            </div>
            <div class="uk-margin-large-bottom">
                <p>Garena Philippines Incorporated.</p>
                <a href="garena.com.ph" style="color:black"><p>garena.com.ph</p></a>
            </div>
            <div>
                <ul class="uk-child-3">

                  <button class="uk-button uk-button-secondary">About us</button> &nbsp &nbsp &nbsp
  <button class="uk-button uk-button-secondary">Contact us</button> &nbsp &nbsp &nbsp

                </ul>
            </div>
        </div>

    </div>
</div>

@stop

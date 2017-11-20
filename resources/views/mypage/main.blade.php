@extends('layouts.main')
@section('content')
<div class="uk-text-center uk-margin-medium-top uk-active">
 <a href="{{url('/shoppe')}}" style="color:rgb(49,49,49);text-decoration:none">SHOPEE</a>
</div>

<nav class="uk-navbar-container navbar-expand-xl navbar-dark uk-margin-large-top" style="background-color:white" uk-navbar>
    <div class="uk-navbar-center">
<div class="container">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
          <div class="collapse navbar-collapse" id="navbarColor03">
        <ul class="uk-navbar-nav">
          <li class="nav-item active" :class="{'uk-active': choose=='accessories'}" @click="choosecategory('accessories')">
                            <a href="#">Accessories</a>
                        </li>
                        <li class="nav-item" :class="{'uk-active': choose=='bags'}" @click="choosecategory('bags')">
                            <a href="#">Bags</a>
                        </li>
                        <li class="nav-item" :class="{'uk-active': choose=='menstore'}" @click="choosecategory('menstore')">
                            <a href="#">Men Store</a>
                        </li>
                        <li class="nav-item" :class="{'uk-active': choose=='womenstore'}" @click="choosecategory('womenstore')">
                            <a href="#">Women Store</a>
                        </li>
                        <li class="nav-item" :class="{'uk-active': choose=='computeraccessories'}" @click="choosecategory('computeraccessories')">
                            <a href="#">Computer Accessories</a>
                        </li>
                        <li class="nav-item" :class="{'uk-active': choose=='gadgets'}" @click="choosecategory('gadgets')">
                            <a href="#">Gadgets</a>
                        </li>
                        <li class="nav-item" :class="{'uk-active': choose=='vehicle'}" @click="choosecategory('vehicle')">
                            <a href="#">Vehicle</a>
                        </li>
                        <li class="nav-item" :class="{'uk-active': choose=='vehicleaccessories'}" @click="choosecategory('vehicleaccessories')">
                            <a href="#">Vehicle Accessories</a>
                        </li>
                        <li class="nav-item" :class="{'uk-active': choose=='others'}" @click="choosecategory('others')">
                            <a href="#">Others</a>
                        </li>
       </ul>
</div>
</div>
    </div>
</nav>
<div class="uk-position-xlarge uk-position-top-center uk-overlay uk-overlay-default uk-margin-large-top">
  <form class="uk-search uk-search-default">
       <a href="" uk-search-icon></a>
       <input class="uk-search-input" type="search" placeholder="Search...">
   </form>
</div>
  <main>

      <div class="container">
          <ul class="uk-breadcrumb" v-show="choose=='accessories'">
              <li>
                  <h1 class="uk-heading-bullet ">Category</h1>
                  </a>
              </li>
              <li><a href="#">Accessories</a></li>

          </ul>
          <ul class="uk-breadcrumb" v-show="choose=='bags'">
              <li>
                  <h1 class="uk-heading-bullet ">Category</h1>
                  </a>
              </li>
              <li><a href="#">bags</a></li>

          </ul>
          <ul class="uk-breadcrumb" v-show="choose=='menstore'">
              <li>
                  <h1 class="uk-heading-bullet ">Category</h1>
                  </a>
              </li>
              <li><a href="#">Men Store</a></li>

          </ul>
          <ul class="uk-breadcrumb" v-show="choose=='womenstore'">
              <li>
                  <h1 class="uk-heading-bullet ">Category</h1>
                  </a>
              </li>
              <li><a href="#">Women Store</a></li>

          </ul>
          <ul class="uk-breadcrumb" v-show="choose=='computeraccessories'">
              <li>
                  <h1 class="uk-heading-bullet ">Category</h1>
                  </a>
              </li>
              <li><a href="#">Computer Accessories</a></li>

          </ul>
          <ul class="uk-breadcrumb" v-show="choose=='gadgets'">
              <li>
                  <h1 class="uk-heading-bullet ">Category</h1>
                  </a>
              </li>
              <li><a href="#">Gadgets</a></li>

          </ul>
          <ul class="uk-breadcrumb" v-show="choose=='vehicle'">
              <li>
                  <h1 class="uk-heading-bullet ">Category</h1>
                  </a>
              </li>
              <li><a href="#">Vehicle</a></li>

          </ul>
          <ul class="uk-breadcrumb" v-show="choose=='vehicleaccessories'">
              <li>
                  <h1 class="uk-heading-bullet ">Category</h1>
                  </a>
              </li>
              <li><a href="#">Vehicle Accessories</a></li>

          </ul>
          <ul class="uk-breadcrumb" v-show="choose=='others'">
              <li>
                  <h1 class="uk-heading-bullet ">Category</h1>
                  </a>
              </li>
              <li><a href="#">Others</a></li>

          </ul>
          <div class="row">
          </div>

  </main>
  <main>
      <!--News card-->

      <div class="container-fluid">

          <div class="row">
              <div class="col-lg-2 wow fadeIn" data-wow-delay="0.2s">
                  <div uk-dropdown>
                      <ul class="uk-nav uk-dropdown-nav">
                          <li class="uk-nav-header uk-active"><a href="#">Price</a></li>
                          <li><a href="#">Lowest To Highest</a></li>
                          <li><a href="#">Highest To Lowest</a></li>
                          <li class="uk-nav-header">Header</li>
                          <li><a href="#">Item</a></li>
                          <li><a href="#">Item</a></li>
                          <li class="uk-nav-divider"></li>
                          <li><a href="#">Item</a></li>
                      </ul>
                  </div>


              </div>

  <div class="row" v-show="choose=='accessories'" id="accessories">
<div class="col-lg-4 col-sm-6 uk-child-width-expand@m  uk-margin-remove-top uk-margin-remove-left uk-grid-small  uk-grid-match" v-for="approveditem in guestaccessories" uk-grid>
                      <div class="col-lg-12 uk-margin-small-bottom">
                          <listcard :go="'currentitem?description='+approveditem.product_description+'&'+'price='+approveditem.product_price+'&'+'contact='+approveditem.contact+'&'+'photo='+approveditem.product_image+'&'+'created='+approveditem.created_at+'&'+'city='+approveditem.seller_location+'&'+'firstname='+approveditem.firstname+'&'+'lastname='+approveditem.lastname" :contact="approveditem.contact" :userimage="'http://localhost:8000/storage/avatars/' + approveditem.image" :productimage="'http://localhost:8000/storage/product/' + approveditem.product_image" :productdescription="approveditem.product_description" :createdat="approveditem.created_at" :productprice="approveditem.product_price" :firstname="approveditem.firstname" :lastname="approveditem.lastname" :city="approveditem.seller_location"></listcard>
                  </div>
              </div>

                  </div>

                  <div class="row" v-show="choose=='bags'" id="bags">
                <div class="col-lg-4 col-sm-6 uk-child-width-expand@m  uk-margin-remove-top uk-margin-remove-left uk-grid-small  uk-grid-match" v-for="approveditem in guestbags" uk-grid>
                                      <div class="col-lg-12 uk-margin-small-bottom">
                                          <listcard :go="'currentitem?description='+approveditem.product_description+'&'+'price='+approveditem.product_price+'&'+'contact='+approveditem.contact+'&'+'photo='+approveditem.product_image+'&'+'created='+approveditem.created_at+'&'+'city='+approveditem.seller_location+'&'+'firstname='+approveditem.firstname+'&'+'lastname='+approveditem.lastname" :contact="approveditem.contact" :userimage="'http://localhost:8000/storage/avatars/' + approveditem.image" :productimage="'http://localhost:8000/storage/product/' + approveditem.product_image" :productdescription="approveditem.product_description" :createdat="approveditem.created_at" :productprice="approveditem.product_price" :firstname="approveditem.firstname" :lastname="approveditem.lastname" :city="approveditem.seller_location"></listcard>
                                  </div>
                              </div>
                                  </div>

                                  <div class="row" v-show="choose=='menstore'" id="menstore">
                                <div class="col-lg-4 col-sm-6 uk-child-width-expand@m  uk-margin-remove-top uk-margin-remove-left uk-grid-small  uk-grid-match" v-for="approveditem in guestmenstore" uk-grid>
                                                      <div class="col-lg-12 uk-margin-small-bottom">
                                                          <listcard :go="'currentitem?description='+approveditem.product_description+'&'+'price='+approveditem.product_price+'&'+'contact='+approveditem.contact+'&'+'photo='+approveditem.product_image+'&'+'created='+approveditem.created_at+'&'+'city='+approveditem.seller_location+'&'+'firstname='+approveditem.firstname+'&'+'lastname='+approveditem.lastname" :contact="approveditem.contact" :userimage="'http://localhost:8000/storage/avatars/' + approveditem.image" :productimage="'http://localhost:8000/storage/product/' + approveditem.product_image" :productdescription="approveditem.product_description" :createdat="approveditem.created_at" :productprice="approveditem.product_price" :firstname="approveditem.firstname" :lastname="approveditem.lastname" :city="approveditem.seller_location"></listcard>
                                                  </div>
                                              </div>
                                                  </div>

                                                  <div class="row" v-show="choose=='womenstore'" id="womenstore">
                                                <div class="col-lg-4 col-sm-6 uk-child-width-expand@m  uk-margin-remove-top uk-margin-remove-left uk-grid-small  uk-grid-match" v-for="approveditem in guestwomenstore" uk-grid>
                                                                      <div class="col-lg-12 uk-margin-small-bottom">
                                                                          <listcard :go="'currentitem?description='+approveditem.product_description+'&'+'price='+approveditem.product_price+'&'+'contact='+approveditem.contact+'&'+'photo='+approveditem.product_image+'&'+'created='+approveditem.created_at+'&'+'city='+approveditem.seller_location+'&'+'firstname='+approveditem.firstname+'&'+'lastname='+approveditem.lastname" :contact="approveditem.contact" :userimage="'http://localhost:8000/storage/avatars/' + approveditem.image" :productimage="'http://localhost:8000/storage/product/' + approveditem.product_image" :productdescription="approveditem.product_description" :createdat="approveditem.created_at" :productprice="approveditem.product_price" :firstname="approveditem.firstname" :lastname="approveditem.lastname" :city="approveditem.seller_location"></listcard>
                                                                  </div>
                                                              </div>
                                                                  </div>

                                                                  <div class="row" v-show="choose=='computeraccessories'" id="computeraccessories">
                                                                <div class="col-lg-4 col-sm-6 uk-child-width-expand@m  uk-margin-remove-top uk-margin-remove-left uk-grid-small  uk-grid-match" v-for="approveditem in guestcomputeraccessories" uk-grid>
                                                                                      <div class="col-lg-12 uk-margin-small-bottom">
                                                                                          <listcard :go="'currentitem?description='+approveditem.product_description+'&'+'price='+approveditem.product_price+'&'+'contact='+approveditem.contact+'&'+'photo='+approveditem.product_image+'&'+'created='+approveditem.created_at+'&'+'city='+approveditem.seller_location+'&'+'firstname='+approveditem.firstname+'&'+'lastname='+approveditem.lastname" :contact="approveditem.contact" :userimage="'http://localhost:8000/storage/avatars/' + approveditem.image" :productimage="'http://localhost:8000/storage/product/' + approveditem.product_image" :productdescription="approveditem.product_description" :createdat="approveditem.created_at" :productprice="approveditem.product_price" :firstname="approveditem.firstname" :lastname="approveditem.lastname" :city="approveditem.seller_location"></listcard>
                                                                                  </div>
                                                                              </div>
                                                                                  </div>

                                                                                  <div class="row" v-show="choose=='gadgets'" id="gadgets">
                                                                                <div class="col-lg-4 col-sm-6 uk-child-width-expand@m  uk-margin-remove-top uk-margin-remove-left uk-grid-small  uk-grid-match" v-for="approveditem in guestgadgets" uk-grid>
                                                                                                      <div class="col-lg-12 uk-margin-small-bottom">
                                                                                                          <listcard :go="'currentitem?description='+approveditem.product_description+'&'+'price='+approveditem.product_price+'&'+'contact='+approveditem.contact+'&'+'photo='+approveditem.product_image+'&'+'created='+approveditem.created_at+'&'+'city='+approveditem.seller_location+'&'+'firstname='+approveditem.firstname+'&'+'lastname='+approveditem.lastname" :contact="approveditem.contact" :userimage="'http://localhost:8000/storage/avatars/' + approveditem.image" :productimage="'http://localhost:8000/storage/product/' + approveditem.product_image" :productdescription="approveditem.product_description" :createdat="approveditem.created_at" :productprice="approveditem.product_price" :firstname="approveditem.firstname" :lastname="approveditem.lastname" :city="approveditem.seller_location"></listcard>
                                                                                                  </div>
                                                                                              </div>
                                                                                                  </div>
                                                                                                  <div class="row" v-show="choose=='vehicle'" id="vehicle">
                                                                                                <div class="col-lg-4 col-sm-6 uk-child-width-expand@m  uk-margin-remove-top uk-margin-remove-left uk-grid-small  uk-grid-match" v-for="approveditem in guestvehicle" uk-grid>
                                                                                                                      <div class="col-lg-12 uk-margin-small-bottom">
                                                                                                                          <listcard :go="'currentitem?description='+approveditem.product_description+'&'+'price='+approveditem.product_price+'&'+'contact='+approveditem.contact+'&'+'photo='+approveditem.product_image+'&'+'created='+approveditem.created_at+'&'+'city='+approveditem.seller_location+'&'+'firstname='+approveditem.firstname+'&'+'lastname='+approveditem.lastname" :contact="approveditem.contact" :userimage="'http://localhost:8000/storage/avatars/' + approveditem.image" :productimage="'http://localhost:8000/storage/product/' + approveditem.product_image" :productdescription="approveditem.product_description" :createdat="approveditem.created_at" :productprice="approveditem.product_price" :firstname="approveditem.firstname" :lastname="approveditem.lastname" :city="approveditem.seller_location"></listcard>
                                                                                                                  </div>
                                                                                                              </div>
                                                                                                                  </div>

                                                                                                                  <div class="row" v-show="choose=='vehicleaccessories'" id="vehicleaccessories">
                                                                                                                <div class="col-lg-4 col-sm-6 uk-child-width-expand@m  uk-margin-remove-top uk-margin-remove-left uk-grid-small  uk-grid-match" v-for="approveditem in guestvehicleaccessories" uk-grid>
                                                                                                                                      <div class="col-lg-12 uk-margin-small-bottom">
                                                                                                                                          <listcard :go="'currentitem?description='+approveditem.product_description+'&'+'price='+approveditem.product_price+'&'+'contact='+approveditem.contact+'&'+'photo='+approveditem.product_image+'&'+'created='+approveditem.created_at+'&'+'city='+approveditem.seller_location+'&'+'firstname='+approveditem.firstname+'&'+'lastname='+approveditem.lastname" :contact="approveditem.contact" :userimage="'http://localhost:8000/storage/avatars/' + approveditem.image" :productimage="'http://localhost:8000/storage/product/' + approveditem.product_image" :productdescription="approveditem.product_description" :createdat="approveditem.created_at" :productprice="approveditem.product_price" :firstname="approveditem.firstname" :lastname="approveditem.lastname" :city="approveditem.seller_location"></listcard>
                                                                                                                                  </div>
                                                                                                                              </div>
                                                                                                                                  </div>

                                                                                                                                  <div class="row" v-show="choose=='others'" id="others">
                                                                                                                                <div class="col-lg-4 col-sm-6 uk-child-width-expand@m  uk-margin-remove-top uk-margin-remove-left uk-grid-small  uk-grid-match" v-for="approveditem in guestothers" uk-grid>
                                                                                                                                                      <div class="col-lg-12 uk-margin-small-bottom">
                                                                                                                                                          <listcard :go="'currentitem?description='+approveditem.product_description+'&'+'price='+approveditem.product_price+'&'+'contact='+approveditem.contact+'&'+'photo='+approveditem.product_image+'&'+'created='+approveditem.created_at+'&'+'city='+approveditem.seller_location+'&'+'firstname='+approveditem.firstname+'&'+'lastname='+approveditem.lastname" :contact="approveditem.contact" :userimage="'http://localhost:8000/storage/avatars/' + approveditem.image" :productimage="'http://localhost:8000/storage/product/' + approveditem.product_image" :productdescription="approveditem.product_description" :createdat="approveditem.created_at" :productprice="approveditem.product_price" :firstname="approveditem.firstname" :lastname="approveditem.lastname" :city="approveditem.seller_location"></listcard>
                                                                                                                                                  </div>
                                                                                                                                              </div>
                                                                                                                                                  </div>
                                                                                                                                              </div>
                                                                                                                                                </div>
                                                                                                                                              </div>


                                                                                                                                            </main>

                                                                                                                                            <ul class="uk-pagination uk-flex-center" uk-margin>
      <li v-if="pagination.current_page > 1">
        <a href="#" aria-label="Previous" @click.prevent="changePage(pagination.current_page - 1)">
          <span uk-pagination-previous></span>
        </a>
        </li>
        <li v-for="page in pagesNumber" v-bind:class="[page==isActivated ? 'active':'']">
          <a href="#" @click.prevent="changePage(page)">
          @{{page}}
          </a>
        </li>
        <li>
          <a href="#" aria-label="Next" @click.prevent="changePage(pagination.current_page + 1)">
              <span uk-pagination-next aria-hidden="true"></span>
          </a>
        </li>
    </ul>

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

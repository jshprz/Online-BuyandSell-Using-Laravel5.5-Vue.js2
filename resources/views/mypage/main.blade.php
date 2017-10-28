@extends('layouts.main')
@section('content')
<div class="uk-text-right uk-margin-xlarge-right uk-margin-small-top">
  <b>
  <a href="{{route('dashboard')}}" style="color:black">Home</a>
  |
  <a href="{{route('logout')}}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();" style="color:black">Logout</a>
    <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                      {{ csrf_field() }}
                  </form>
</b>
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
                  <div class="uk-margin">
                      <form class="uk-search uk-search-default">
                          <span uk-search-icon></span>
                          <input class="uk-search-input" type="search" placeholder="Search Item...">

                      </form>
                  </div>
                  <div class="uk-width-small">
                      <ul class="uk-nav-default" uk-nav>
                          <li class="uk-margin-medium-left"><strong>CATEGORY</strong></li>
                          <li class="uk-parent" :class="{'uk-active': choose=='accessories'}" @click="choosecategory('accessories')">
                              <a href="#">Accessories</a>
                          </li>
                          <li class="uk-parent" :class="{'uk-active': choose=='bags'}" @click="choosecategory('bags')">
                              <a href="#">Bags</a>
                          </li>
                          <li class="uk-parent" :class="{'uk-active': choose=='menstore'}" @click="choosecategory('menstore')">
                              <a href="#">Men Store</a>
                          </li>
                          <li class="uk-parent" :class="{'uk-active': choose=='womenstore'}" @click="choosecategory('womenstore')">
                              <a href="#">Women Store</a>
                          </li>
                          <li class="uk-parent" :class="{'uk-active': choose=='computeraccessories'}" @click="choosecategory('computeraccessories')">
                              <a href="#">Computer Accessories</a>
                          </li>
                          <li class="uk-parent" :class="{'uk-active': choose=='gadgets'}" @click="choosecategory('gadgets')">
                              <a href="#">Gadgets</a>
                          </li>
                          <li class="uk-parent" :class="{'uk-active': choose=='vehicle'}" @click="choosecategory('vehicle')">
                              <a href="#">Vehicle</a>
                          </li>
                          <li class="uk-parent" :class="{'uk-active': choose=='vehicleaccessories'}" @click="choosecategory('vehicleaccessories')">
                              <a href="#">Vehicle Accessories</a>
                          </li>

                      </ul>
                  </div>


              </div>


              <div class="col-lg-10" v-show="choose=='accessories'">
<div class="uk-child-width-expand@s  uk-margin-remove-top uk-margin-remove-left uk-grid-small  uk-grid-match"  uk-grid>
                  <div class="row" v-for="approveditem in accessories">
                      <div class="col-lg-12  uk-margin-small-bottom">
                          <accessories :go="'currentitem?description='+approveditem.product_description+'&'+'price='+approveditem.product_price+'&'+'contact='+approveditem.contact+'&'+'photo='+approveditem.product_image+'&'+'created='+approveditem.created_at+'&'+'city='+approveditem.seller_location+'&'+'firstname='+approveditem.firstname+'&'+'lastname='+approveditem.lastname" :contact="approveditem.contact" :userimage="'http://localhost:8000/storage/avatars/' + approveditem.image" :productimage="'http://localhost:8000/storage/product/' + approveditem.product_image" :productdescription="approveditem.product_description" :createdat="approveditem.created_at" :productprice="approveditem.product_price" :firstname="approveditem.firstname" :lastname="approveditem.lastname" :city="approveditem.seller_location"></accessories>
                  </div>
                  <!--End Row-->
                </div>
              </div>

                  </div>

                  <div class="col-lg-10" v-show="choose=='bags'">
    <div class="uk-child-width-expand@s  uk-margin-remove-top uk-margin-remove-left uk-grid-small  uk-grid-match"  uk-grid>
                      <div class="row" v-for="approveditem in bags">
                          <div class="col-lg-12  uk-margin-small-bottom">
                              <bags :go="'currentitem?description='+approveditem.product_description+'&'+'price='+approveditem.product_price+'&'+'contact='+approveditem.contact+'&'+'photo='+approveditem.product_image+'&'+'created='+approveditem.created_at+'&'+'city='+approveditem.seller_location+'&'+'firstname='+approveditem.firstname+'&'+'lastname='+approveditem.lastname" :contact="approveditem.contact" :userimage="'http://localhost:8000/storage/avatars/' + approveditem.image" :productimage="'http://localhost:8000/storage/product/' + approveditem.product_image" :productdescription="approveditem.product_description" :createdat="approveditem.created_at" :productprice="approveditem.product_price" :firstname="approveditem.firstname" :lastname="approveditem.lastname" :city="approveditem.seller_location"></bags>
                      </div>
                      <!--End Row-->
                    </div>
                  </div>

                      </div>

                      <div class="col-lg-10" v-show="choose=='menstore'">
        <div class="uk-child-width-expand@s  uk-margin-remove-top uk-margin-remove-left uk-grid-small  uk-grid-match"  uk-grid>
                          <div class="row" v-for="approveditem in menstore">
                              <div class="col-lg-12  uk-margin-small-bottom">
                                  <menstore :go="'currentitem?description='+approveditem.product_description+'&'+'price='+approveditem.product_price+'&'+'contact='+approveditem.contact+'&'+'photo='+approveditem.product_image+'&'+'created='+approveditem.created_at+'&'+'city='+approveditem.seller_location+'&'+'firstname='+approveditem.firstname+'&'+'lastname='+approveditem.lastname" :contact="approveditem.contact" :userimage="'http://localhost:8000/storage/avatars/' + approveditem.image" :productimage="'http://localhost:8000/storage/product/' + approveditem.product_image" :productdescription="approveditem.product_description" :createdat="approveditem.created_at" :productprice="approveditem.product_price" :firstname="approveditem.firstname" :lastname="approveditem.lastname" :city="approveditem.seller_location"></menstore>
                          </div>
                          <!--End Row-->
                        </div>
                      </div>

                          </div>

                          <div class="col-lg-10" v-show="choose=='womenstore'">
            <div class="uk-child-width-expand@s  uk-margin-remove-top uk-margin-remove-left uk-grid-small  uk-grid-match"  uk-grid>
                              <div class="row" v-for="approveditem in womenstore">
                                  <div class="col-lg-12  uk-margin-small-bottom">
                                      <womenstore :go="'currentitem?description='+approveditem.product_description+'&'+'price='+approveditem.product_price+'&'+'contact='+approveditem.contact+'&'+'photo='+approveditem.product_image+'&'+'created='+approveditem.created_at+'&'+'city='+approveditem.seller_location+'&'+'firstname='+approveditem.firstname+'&'+'lastname='+approveditem.lastname" :contact="approveditem.contact" :userimage="'http://localhost:8000/storage/avatars/' + approveditem.image" :productimage="'http://localhost:8000/storage/product/' + approveditem.product_image" :productdescription="approveditem.product_description" :createdat="approveditem.created_at" :productprice="approveditem.product_price" :firstname="approveditem.firstname" :lastname="approveditem.lastname" :city="approveditem.seller_location"></womenstore>
                              </div>
                              <!--End Row-->
                            </div>
                          </div>

                              </div>

                              <div class="col-lg-10" v-show="choose=='computeraccessories'">
                <div class="uk-child-width-expand@s  uk-margin-remove-top uk-margin-remove-left uk-grid-small  uk-grid-match"  uk-grid>
                                  <div class="row" v-for="approveditem in computeraccessories">
                                      <div class="col-lg-12  uk-margin-small-bottom">
                                          <computeraccessories :go="'currentitem?description='+approveditem.product_description+'&'+'price='+approveditem.product_price+'&'+'contact='+approveditem.contact+'&'+'photo='+approveditem.product_image+'&'+'created='+approveditem.created_at+'&'+'city='+approveditem.seller_location+'&'+'firstname='+approveditem.firstname+'&'+'lastname='+approveditem.lastname" :contact="approveditem.contact" :userimage="'http://localhost:8000/storage/avatars/' + approveditem.image" :productimage="'http://localhost:8000/storage/product/' + approveditem.product_image" :productdescription="approveditem.product_description" :createdat="approveditem.created_at" :productprice="approveditem.product_price" :firstname="approveditem.firstname" :lastname="approveditem.lastname" :city="approveditem.seller_location"></computeraccessories>
                                  </div>
                                  <!--End Row-->
                                </div>
                              </div>

                                  </div>

                                  <div class="col-lg-10" v-show="choose=='gadgets'">
                    <div class="uk-child-width-expand@s  uk-margin-remove-top uk-margin-remove-left uk-grid-small  uk-grid-match"  uk-grid>
                                      <div class="row" v-for="approveditem in gadgets">
                                          <div class="col-lg-12  uk-margin-small-bottom">
                                              <gadgets :go="'currentitem?description='+approveditem.product_description+'&'+'price='+approveditem.product_price+'&'+'contact='+approveditem.contact+'&'+'photo='+approveditem.product_image+'&'+'created='+approveditem.created_at+'&'+'city='+approveditem.seller_location+'&'+'firstname='+approveditem.firstname+'&'+'lastname='+approveditem.lastname" :contact="approveditem.contact" :userimage="'http://localhost:8000/storage/avatars/' + approveditem.image" :productimage="'http://localhost:8000/storage/product/' + approveditem.product_image" :productdescription="approveditem.product_description" :createdat="approveditem.created_at" :productprice="approveditem.product_price" :firstname="approveditem.firstname" :lastname="approveditem.lastname" :city="approveditem.seller_location"></gadgets>
                                      </div>
                                      <!--End Row-->
                                    </div>
                                  </div>

                                      </div>

                                      <div class="col-lg-10" v-show="choose=='vehicle'">
                        <div class="uk-child-width-expand@s  uk-margin-remove-top uk-margin-remove-left uk-grid-small  uk-grid-match"  uk-grid>
                                          <div class="row" v-for="approveditem in vehicle">
                                              <div class="col-lg-12  uk-margin-small-bottom">
                                                  <vehicle :go="'currentitem?description='+approveditem.product_description+'&'+'price='+approveditem.product_price+'&'+'contact='+approveditem.contact+'&'+'photo='+approveditem.product_image+'&'+'created='+approveditem.created_at+'&'+'city='+approveditem.seller_location+'&'+'firstname='+approveditem.firstname+'&'+'lastname='+approveditem.lastname" :contact="approveditem.contact" :userimage="'http://localhost:8000/storage/avatars/' + approveditem.image" :productimage="'http://localhost:8000/storage/product/' + approveditem.product_image" :productdescription="approveditem.product_description" :createdat="approveditem.created_at" :productprice="approveditem.product_price" :firstname="approveditem.firstname" :lastname="approveditem.lastname" :city="approveditem.seller_location"></vehicle>
                                          </div>
                                          <!--End Row-->
                                        </div>
                                      </div>

                                          </div>

                                          <div class="col-lg-10" v-show="choose=='vehicleaccessories'">
                            <div class="uk-child-width-expand@s  uk-margin-remove-top uk-margin-remove-left uk-grid-small  uk-grid-match"  uk-grid>
                                              <div class="row" v-for="approveditem in vehicleaccessories">
                                                  <div class="col-lg-12  uk-margin-small-bottom">
                                                      <vehicleaccessories :go="'currentitem?description='+approveditem.product_description+'&'+'price='+approveditem.product_price+'&'+'contact='+approveditem.contact+'&'+'photo='+approveditem.product_image+'&'+'created='+approveditem.created_at+'&'+'city='+approveditem.seller_location+'&'+'firstname='+approveditem.firstname+'&'+'lastname='+approveditem.lastname" :contact="approveditem.contact" :userimage="'http://localhost:8000/storage/avatars/' + approveditem.image" :productimage="'http://localhost:8000/storage/product/' + approveditem.product_image" :productdescription="approveditem.product_description" :createdat="approveditem.created_at" :productprice="approveditem.product_price" :firstname="approveditem.firstname" :lastname="approveditem.lastname" :city="approveditem.seller_location"></vehicleaccessories>
                                              </div>
                                              <!--End Row-->
                                            </div>
                                          </div>

                                              </div>


              </div>
          </div>




      </div>

  </main>

  <ul class="uk-pagination uk-flex-center" uk-margin>
      <li><a href="#"><span uk-pagination-previous></span></a></li>
      <li><a href="#">1</a></li>
      <li class="uk-disabled"><span>...</span></li>
      <li><a href="#">5</a></li>
      <li><a href="#">6</a></li>
      <li class="uk-active"><span>7</span></li>
      <li><a href="#">8</a></li>
      <li><a href="#"><span uk-pagination-next></span></a></li>
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

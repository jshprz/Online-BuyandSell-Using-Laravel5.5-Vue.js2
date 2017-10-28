@extends('layouts.item')
@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{route('shoppe')}}">SHOPPEE</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    </div>
</nav>




</div>
<main>
    <div class="container uk-margin-large-top">
        <div class="row ">
            <div class="col-sm-5 ">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>

                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                          <?php $photo=Session::get('photo'); ?>
                          @if($photo)
                            <img class="d-block w-100" src="storage/product/{{$photo}}" alt="Frst slide">
                            @endif
                        </div>
                    </div>

                </div>
            </div>
            <!-- end col -->
            <div class="col-sm-7">
              <?php $firstname=Session::get('firstname'); $lastname=Session::get('lastname') ?>
              @if($firstname && $lastname)
                <strong class="text-gray uk-margin-remove-bottom uk-card-title alt-font">{{$firstname}} {{$lastname}}<br></strong>
                @endif
                <?php $city=Session::get('city'); ?>
                @if($city)
                <p class="uk-margin-remove-top"><i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp{{$city}}
                  @endif
                    <h4 class="text-primary">Details</h4>
                    <?php $price = Session::get('price'); ?>
                    @if ($price)
                      <p>Php.{{$price}}<br></p>
                  </span>
                  @endif
                    <?php $description = Session::get('description'); ?>
                    @if ($description)
                      <strong>{{$description}}</strong>
                  </span>
                  @endif

                    <ul class="list list-inline">
                        <li>
                          <button type="button" class="btn  btn-info" href="#modal-example" uk-toggle><i class="fa fa-commenting-o mr-2 fa-lg" aria-hidden="true"></i></i> Chat Seller</button>
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
                        </li>

                    </ul>

                    <ul class="uk-list uk-list-striped">
                     <li is="individual-comment" v-for="comment in comments" @commentpost="comment"></li>
                   </ul>

                   <input v-model="newComment" @keydown.enter="addComment" placeholder="Add a comment">

                    <hr class="spacer-10">
                    <!-- end col -->

            </div>
            <!-- end row -->
            <hr class="spacer-10">

        </div>
        <!-- end col -->
    </div>

    <div class="uk-section bg-info uk-margin-xlarge-top">
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
@endsection

@extends('layouts.loginfails')
@section('content')
<nav class="navbar navbar-expand-lg navbar-light bg-info">
    <div class="container">
        <a class="navbar-brand" href="shoppe">SHOPPEE</a>
        <a href="#"><button class="uk-button uk-button-secondary">Sell item now</button></a>
  </div>
</nav>

    <div class="container">

    <div class="col-md8  uk-margin-small-bottom uk-align-center">
        <div class="uk-card uk-width-5 uk-card-xsmall uk-card-default ">
            <div class="uk-card-header ">
                <div class="uk-grid-small uk-flex-middle " uk-grid>
                    <div class="uk-width-auto ">

                    </div>
                    <div class="uk-align-center">
                  <ul>
                    <li class="text-danger" v-if="errors.email">@{{errors.email}}</li>
                    <li class="text-danger" v-if="errors.exists">@{{errors.exists}}</li>
                    <li class="text-danger" v-if="errors.confirmed">@{{errors.confirmed}}</li>
                  </ul>
                 </div>
                </div>
            </div>

            <div class="uk-card-header">

                <form enctype="multipart/form-data" method="post" action="{{route('login')}}">
                    {{ csrf_field() }}
                          <div class="uk-text-center">
                            <div class="form-group{{ $errors->has('email')? ' has-error ': '' }}">
                              <label for="email">Email</label>
                              <input type="email" name="email" class="uk-input uk-width-medium uk-align-center uk-margin-remove-top" id="email" aria-describedby="emailHelp " placeholder="Email" required autofocus>

                                        <span class="help-block">
                                          @if ($errors->has('email'))
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                          </div>
                      </div>
                      <div class="uk-text-center">
                        <div class="form-group{{ $errors->has('password')? ' has-error ': '' }}">
                          <label for="password">Password</label>
                          <input type="password" name="password" class="uk-input uk-width-medium uk-align-center uk-margin-remove-top" id="password" aria-describedby="emailHelp " placeholder="Password" required autofocus>

                                    <span class="help-block">
                                      @if ($errors->has('password'))
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                      </div>
                  </div>
                          <div class="form-group ">
                                   <button type="submit" class="uk-button uk-button-primary uk-align-right uk-margin-large-right">Login</button>

                          </div>


</form>
@endsection

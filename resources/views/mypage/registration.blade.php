@extends('layouts.registration')
@section('content')

    <nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container">
            <a class="navbar-brand" href="shoppe">SHOPEE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor03" aria-controls="navbarColor03" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

            <div class="collapse navbar-collapse" id="navbarColor03">


                    <button type="button" class="btn btn-gray btn-align-right" href="#modal-example" uk-toggle>Login</button>
                    <div id="modal-example" uk-modal>

                        <div class="uk-modal-dialog uk-modal-body uk-width-medium uk-margin-auto-vertical">


                          <form method="post" action="{{route('login')}}">
                              {{ csrf_field() }}
                                <div class="form-group ">
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
                </form>
            </div>
        </div>
    </nav>



    <div class="container">

    <div class="col-md8  uk-margin-small-bottom uk-align-center">
        <div class="uk-card uk-width-5 uk-card-small uk-card-default ">
            <div class="uk-card-header ">
                <div class="uk-grid-small uk-flex-middle " uk-grid>
                    <div class="uk-width-auto ">

                    </div>
                    <div class="uk-width-expand text-center ">
                        <h3 class="uk-card-title uk-margin-remove-bottom ">REGISTER</h3>

                        <p class="uk-text-meta uk-margin-remove-top ">Create Account</p>
                    </div>
                </div>
            </div>
            <div class="uk-card-header">
                <form enctype="multipart/form-data" method="post" action="/register">
                    {{ csrf_field() }}
                          <div class="uk-text-center">
                            <div class="form-group{{ $errors->has('firstname')? ' has-error ': '' }}">
                              <label for="firstname">Firstname</label>
                              <input :class="{'input':true , 'uk-form-danger':errors.has('firstname')}" v-validate="'required|alpha_spaces|max:50'" type="text" name="firstname" class="uk-input uk-width-medium uk-align-center uk-margin-remove-top" id="firstname" aria-describedby="emailHelp " placeholder="Your Firstname" required autofocus>
                              <br>
                               <span v-show="errors.has('firstname')" class="uk-text-danger">@{{ errors.first('firstname') }}</span>
                              @if ($errors->has('firstname'))
                                        <span class="text-danger">
                                            <strong>{{ $errors->first('firstname') }}</strong>
                                        </span>
                                    @endif
                          </div>
                      </div>

                          <div class="uk-text-center">
                            <div class="form-group">
                              <label for="lastname">Lastname</label>
                              <input :class="{'input':true , 'uk-form-danger':errors.has('lastname')}" v-validate="'required|alpha_spaces|max:50'" type="text" name="lastname" class="uk-input uk-width-medium uk-align-center uk-margin-remove-top" id="lastname " aria-describedby="emailHelp " placeholder="Your Lastname" required>
                              <br>
                               <span v-show="errors.has('lastname')" class="uk-text-danger">@{{ errors.first('lastname') }}</span>
                              @if ($errors->has('lastname'))
                                        <span class="text-danger">
                                            <strong>{{ $errors->first('lastname') }}</strong>
                                        </span>
                                    @endif
                          </div>
                      </div>


                        <div class="form-group">
                              <div class="uk-text-center">
                                  <label for="email">Email address</label>
                                  <input :class="{'uk-form-danger':errors.has('email')}" v-validate="'required|email'" type="email" name="email" class="uk-input uk-width-medium uk-align-center uk-margin-remove-top" id="email" aria-describedby="emailHelp " placeholder="example@email.com" required>
                                  <br>
                                   <span v-show="errors.has('email')" class="uk-text-danger">@{{ errors.first('email') }}</span>
                                            <span class="text-danger">
                                              @if ($errors->has('email'))
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                              </div>
                          </div>

                          <div class="form-group ">
                              <div class="uk-text-center">
                                  <label for="password">Password:</label>
                                  <input :class="{'input': true,'uk-form-danger':errors.has('password')}" v-validate="'required|min:8'" type="password" name="password" class="uk-input uk-width-medium uk-align-center uk-margin-remove-top" id="password" aria-describedby="emailHelp " placeholder="********* " required>
                                  <br>
                                   <span v-show="errors.has('password')" class="uk-text-danger">@{{ errors.first('password') }}</span>
                                  @if ($errors->has('password'))
                                            <span class="text-danger">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                              </div>
                          </div>

                          <div class="form-group ">
                              <div class="uk-text-center">
                                  <label for="password_confirmation">Retype Password</label>
                                  <input type="password" name="password_confirmation" class="uk-input uk-width-medium uk-align-center uk-margin-remove-top" id="retype" aria-describedby="emailHelp " placeholder="********" required>
                                  @if ($errors->has('confirm'))
                                            <span class="text-danger">
                                                <strong>{{ $errors->first('confirm') }}</strong>
                                            </span>
                                        @endif
                              </div>
                          </div>

                          <div class="form-group ">
                              <div class="uk-text-center">
                                  <label for="contact">Contact No.:</label>
                              <input :class="{'input':true , 'uk-form-danger':errors.has('contact')}" v-validate="'required|numeric|max:11'" type="text" name="contact" class="uk-input uk-width-medium uk-align-center uk-margin-remove-top" id="contact" aria-describedby="emailHelp " placeholder="0901234567890" required>
                              <br>
                               <span v-show="errors.has('contact')" class="uk-text-danger">@{{ errors.first('contact') }}</span>
                              @if ($errors->has('contact'))
                                        <span class="text-danger">
                                            <strong>{{ $errors->first('contact') }}</strong>
                                        </span>
                                    @endif
                          </div>
                        </div>
                          <div class="form-group ">
                                   <button type="submit" class="uk-button uk-button-primary uk-align-right uk-margin-large-right">Save</button>
                          </div>


</form>

            </div>

            <div class="uk-card-footer ">

            </div>
        </div>
    </div>


@stop

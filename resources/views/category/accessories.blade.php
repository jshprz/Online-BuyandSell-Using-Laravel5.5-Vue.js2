@extends('layouts.accessories')
@section('content')

<main>

    <div class="container ">

        <ul class="uk-breadcrumb">
            <li>
                <h1 class="uk-heading-bullet ">Newest Upload</h1>
                </a>
            </li>
            <li><a href="#">Computer</a></li>

        </ul>
        <div class="row  ">





        </div>

</main>
<main>
    <!--News card-->

    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-2 wow fadeIn" data-wow-delay="0.2s">
                <button class="btn btn-primary uk-margin-small-bottom " type="button">Sort by:</button>
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
                        <li class="uk-active"><a href="#">CATEGORY</a></li>
                        <li class="uk-parent">
                            <a href="#">Computer</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">Sub item</a></li>
                                <li>
                                    <a href="#">Sub item</a>
                                    <ul>
                                        <li><a href="#">Sub item</a></li>
                                        <li><a href="#">Sub item</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li class="uk-parent">
                            <a href="#">Mobile Phone and Tablets</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">Sub item</a></li>
                                <li><a href="#">Sub item</a></li>
                            </ul>
                        </li>
                        <li class="uk-parent">
                            <a href="#">Home and Furniture</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">Sub item</a></li>
                                <li><a href="#">Sub item</a></li>
                            </ul>
                        </li>
                        <li class="uk-parent">
                            <a href="#">Clothing and Accessories</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">Sub item</a></li>
                                <li><a href="#">Sub item</a></li>
                            </ul>
                        </li>
                        <li class="uk-parent">
                            <a href="#">Cars and Automotives</a>
                            <ul class="uk-nav-sub">
                                <li><a href="#">Sub item</a></li>
                                <li><a href="#">Sub item</a></li>
                            </ul>
                        </li>

                    </ul>
                </div>

                <div class="uk-margin">
                    <div class="uk-form-label">Price</div>

                    <input class="uk-range" type="range" value="2" min="1" max="10" step="0.1">
                </div>
                <div class="uk-margin">
                    <div class="uk-form-label">Brand</div>

                    <div class="uk-form-controls uk-form-controls-text">
                        <label><input class="uk-checkbox" type="checkbox" name="radio1"> Brand Item 1</label><br>
                        <label><input class="uk-checkbox" type="checkbox" name="radio1"> Brand Item 2</label><br>

                        <label><input class="uk-checkbox" type="checkbox" name="radio1"> Brand Item 3</label>s
                    </div>
                </div>

                <div class="uk-form-label">LATEST UPLOAD</div>

                <ul class="uk-list">
                    <li>List item 1</li>
                    <li>List item 2</li>
                    <li>List item 3</li>
                </ul>

            </div>


            <div class="col-lg-10">

                <div class="row">
                    <!--Card1-->
                    <div class="col-md-4  uk-margin-small-bottom">
                        <div class="uk-card uk-card-small uk-card-default ">
                            <div class="uk-card-header ">
                                <div class="uk-grid-small uk-flex-middle " uk-grid>
                                    <div class="uk-width-auto ">
                                        <img class="uk-border-circle " width="40 " height="40 " src="../docs/images/avatar.jpg ">
                                    </div>
                                    <div class="uk-width-expand ">
                                        <h3 class="uk-card-title uk-margin-remove-bottom ">MACBOOK PRO</h3>
                                        <div class="uk-card-badge uk-label ">$120</div>
                                        <p class="uk-text-meta uk-margin-remove-top "><time datetime="2016-04-01T19:00 ">April 01, 2016</time></p>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-header">
                              <button type="button" class="btn btn-dark uk-align-center uk-margin-xlarge-left" href="#modal-example">Chat</button>

                              <!-- This is the modal -->
                              <div id="modal-example" uk-modal>

                                  <div class="uk-modal-dialog uk-modal-body uk-width-medium uk-margin-auto-vertical">


                                      <form class="text-center">

                                          <div class="form-group ">
                                              <div class="uk-text-left">
                                                  <label for="exampleInputEmail1">Email address</label>
                                                  <input type=" email " class="uk-input uk-width-medium " id="exampleInputEmail1 " aria-describedby="emailHelp " placeholder="Enter email ">
                                              </div>
                                          </div>
                                          <div class="form-group ">
                                              <div class="uk-text-left">
                                                  <label for="exampleInputEmail1">Password</label>
                                              </div>
                                              <input type="Password " class="uk-input uk-width-medium " id="exampleInputPassword1 " placeholder="Password ">
                                          </div>
                                          <label><input class="uk-checkbox " type="checkbox " checked> Remember Me</label>

                                      </form>
                                      <p class="uk-text-center ">
                                          <button class="btn btn-info uk-width-medium " type="button ">Save</button>
                                      </p>
                                  </div>

                              </div>
                                        <img src="img/macbook.jpg " alt=" ">

                            </div>
                            <div class="uk-card-footer ">
                                <a href="# " class="uk-button uk-button-text ">Vincent Ferrer</a>

                            </div>
                        </div>
                    </div>
                    <!--End-->
                    <!--Card 2-->
                    <div class="col-md-4">
                        <div class="uk-card uk-card-small uk-card-default ">
                            <div class="uk-card-header ">
                                <div class="uk-grid-small uk-flex-middle " uk-grid>
                                    <div class="uk-width-auto ">
                                        <img class="uk-border-circle " width="40 " height="40 " src="../docs/images/avatar.jpg ">
                                    </div>
                                    <div class="uk-width-expand ">
                                        <h3 class="uk-card-title uk-margin-remove-bottom ">MACBOOK PRO</h3>
                                        <div class="uk-card-badge uk-label ">$120</div>
                                        <p class="uk-text-meta uk-margin-remove-top "><time datetime="2016-04-01T19:00 ">April 01, 2016</time></p>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-header ">
                                <ul class="uk-subnav uk-subnav-pill" uk-switcher>
                                    <li><a href="# ">Details</a></li>
                                    <li><a href="# ">Description</a></li>
                                    <li><a href="# ">Chat</a></li>
                                </ul>

                                <ul class="uk-switcher uk-margin ">
                                    <li>

                                        <img src="img/macbook.jpg " alt=" ">

                                        <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                        <li class="text-center">
                                            <button type=" button " class="btn btn-dark" href="#modal-example" uk-toggle>LOGIN</button>



                                            <!-- This is the modal -->
                                            <div id="modal-example" uk-modal>

                                                <div class="uk-modal-dialog uk-modal-body uk-width-medium uk-margin-auto-vertical">


                                                    <form class="text-center">

                                                        <div class="form-group ">
                                                            <div class="uk-text-left">
                                                                <label for="exampleInputEmail1">Email address</label>
                                                                <input type=" email " class="uk-input uk-width-medium " id="exampleInputEmail1 " aria-describedby="emailHelp " placeholder="Enter email ">
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <div class="uk-text-left">
                                                                <label for="exampleInputEmail1">Password</label>
                                                            </div>
                                                            <input type="Password " class="uk-input uk-width-medium " id="exampleInputPassword1 " placeholder="Password ">
                                                        </div>
                                                        <label><input class="uk-checkbox " type="checkbox " checked> Remember Me</label>

                                                    </form>
                                                    <p class="uk-text-center ">
                                                        <button class="btn btn-info uk-width-medium " type="button ">Save</button>
                                                    </p>
                                                </div>

                                            </div>

                                        </li>
                                </ul>

                            </div>
                            <div class="uk-card-footer ">
                                <a href="# " class="uk-button uk-button-text ">Vincent Ferrer</a>

                            </div>
                        </div>
                    </div>
                    <!--End-->
                    <!--Card 3-->
                    <div class="col-md-4">
                        <div class="uk-card uk-card-small uk-card-default ">
                            <div class="uk-card-header ">
                                <div class="uk-grid-small uk-flex-middle " uk-grid>
                                    <div class="uk-width-auto ">
                                        <img class="uk-border-circle " width="40 " height="40 " src="../docs/images/avatar.jpg ">
                                    </div>
                                    <div class="uk-width-expand ">
                                        <h3 class="uk-card-title uk-margin-remove-bottom ">MACBOOK PRO</h3>
                                        <div class="uk-card-badge uk-label ">$120</div>
                                        <p class="uk-text-meta uk-margin-remove-top "><time datetime="2016-04-01T19:00 ">April 01, 2016</time></p>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-header ">
                                <ul class="uk-subnav uk-subnav-pill" uk-switcher>
                                    <li><a href="# ">Details</a></li>
                                    <li><a href="# ">Description</a></li>
                                    <li><a href="# ">Chat</a></li>
                                </ul>

                                <ul class="uk-switcher uk-margin ">
                                    <li>

                                        <img src="img/macbook.jpg " alt=" ">

                                        <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                        <li class="text-center">
                                            <button type=" button " class="btn btn-dark" href="#modal-example" uk-toggle>LOGIN</button>



                                            <!-- This is the modal -->
                                            <div id="modal-example" uk-modal>

                                                <div class="uk-modal-dialog uk-modal-body uk-width-medium uk-margin-auto-vertical">


                                                    <form class="text-center">

                                                        <div class="form-group ">
                                                            <div class="uk-text-left">
                                                                <label for="exampleInputEmail1">Email address</label>
                                                                <input type=" email " class="uk-input uk-width-medium " id="exampleInputEmail1 " aria-describedby="emailHelp " placeholder="Enter email ">
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <div class="uk-text-left">
                                                                <label for="exampleInputEmail1">Password</label>
                                                            </div>
                                                            <input type="Password " class="uk-input uk-width-medium " id="exampleInputPassword1 " placeholder="Password ">
                                                        </div>
                                                        <label><input class="uk-checkbox " type="checkbox " checked> Remember Me</label>

                                                    </form>
                                                    <p class="uk-text-center ">
                                                        <button class="btn btn-info uk-width-medium " type="button ">Save</button>
                                                    </p>
                                                </div>

                                            </div>

                                        </li>
                                </ul>

                            </div>
                            <div class="uk-card-footer ">
                                <a href="# " class="uk-button uk-button-text ">Vincent Ferrer</a>
                                <a href="# " class="uk-button uk-button-text ">Chat</a>

                            </div>
                        </div>
                    </div>

                    <!--End-->

                </div>
                <!--End Row-->

                <div class="row">

                    <div class="col-md-4  uk-margin-small-bottom">
                        <div class="uk-card uk-card-small uk-card-default ">
                            <div class="uk-card-header ">
                                <div class="uk-grid-small uk-flex-middle " uk-grid>
                                    <div class="uk-width-auto ">
                                        <img class="uk-border-circle " width="40 " height="40 " src="../docs/images/avatar.jpg ">
                                    </div>
                                    <div class="uk-width-expand ">
                                        <h3 class="uk-card-title uk-margin-remove-bottom ">MACBOOK PRO</h3>
                                        <div class="uk-card-badge uk-label ">$120</div>
                                        <p class="uk-text-meta uk-margin-remove-top "><time datetime="2016-04-01T19:00 ">April 01, 2016</time></p>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-header ">
                                <ul class="uk-subnav uk-subnav-pill" uk-switcher>
                                    <li><a href="# ">Details</a></li>
                                    <li><a href="# ">Description</a></li>
                                    <li><a href="# ">Chat</a></li>
                                </ul>

                                <ul class="uk-switcher uk-margin ">
                                    <li>

                                        <img src="img/macbook.jpg " alt=" ">

                                        <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                        <li class="text-center">
                                            <button type=" button " class="btn btn-dark" href="#modal-example" uk-toggle>LOGIN</button>



                                            <!-- This is the modal -->
                                            <div id="modal-example" uk-modal>

                                                <div class="uk-modal-dialog uk-modal-body uk-width-medium uk-margin-auto-vertical">


                                                    <form class="text-center">

                                                        <div class="form-group ">
                                                            <div class="uk-text-left">
                                                                <label for="exampleInputEmail1">Email address</label>
                                                                <input type=" email " class="uk-input uk-width-medium " id="exampleInputEmail1 " aria-describedby="emailHelp " placeholder="Enter email ">
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <div class="uk-text-left">
                                                                <label for="exampleInputEmail1">Password</label>
                                                            </div>
                                                            <input type="Password " class="uk-input uk-width-medium " id="exampleInputPassword1 " placeholder="Password ">
                                                        </div>
                                                        <label><input class="uk-checkbox " type="checkbox " checked> Remember Me</label>

                                                    </form>
                                                    <p class="uk-text-center ">
                                                        <button class="btn btn-info uk-width-medium " type="button ">Save</button>
                                                    </p>
                                                </div>

                                            </div>

                                        </li>
                                </ul>

                            </div>
                            <div class="uk-card-footer ">
                                <a href="# " class="uk-button uk-button-text ">Vincent Ferrer</a>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="uk-card uk-card-small uk-card-default ">
                            <div class="uk-card-header ">
                                <div class="uk-grid-small uk-flex-middle " uk-grid>
                                    <div class="uk-width-auto ">
                                        <img class="uk-border-circle " width="40 " height="40 " src="../docs/images/avatar.jpg ">
                                    </div>
                                    <div class="uk-width-expand ">
                                        <h3 class="uk-card-title uk-margin-remove-bottom ">MACBOOK PRO</h3>
                                        <div class="uk-card-badge uk-label ">$120</div>
                                        <p class="uk-text-meta uk-margin-remove-top "><time datetime="2016-04-01T19:00 ">April 01, 2016</time></p>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-header ">
                                <ul class="uk-subnav uk-subnav-pill" uk-switcher>
                                    <li><a href="# ">Details</a></li>
                                    <li><a href="# ">Description</a></li>
                                    <li><a href="# ">Chat</a></li>
                                </ul>

                                <ul class="uk-switcher uk-margin ">
                                    <li>

                                        <img src="img/macbook.jpg " alt=" ">

                                        <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                        <li class="text-center">
                                            <button type=" button " class="btn btn-dark" href="#modal-example" uk-toggle>LOGIN</button>



                                            <!-- This is the modal -->
                                            <div id="modal-example" uk-modal>

                                                <div class="uk-modal-dialog uk-modal-body uk-width-medium uk-margin-auto-vertical">


                                                    <form class="text-center">

                                                        <div class="form-group ">
                                                            <div class="uk-text-left">
                                                                <label for="exampleInputEmail1">Email address</label>
                                                                <input type=" email " class="uk-input uk-width-medium " id="exampleInputEmail1 " aria-describedby="emailHelp " placeholder="Enter email ">
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <div class="uk-text-left">
                                                                <label for="exampleInputEmail1">Password</label>
                                                            </div>
                                                            <input type="Password " class="uk-input uk-width-medium " id="exampleInputPassword1 " placeholder="Password ">
                                                        </div>
                                                        <label><input class="uk-checkbox " type="checkbox " checked> Remember Me</label>

                                                    </form>
                                                    <p class="uk-text-center ">
                                                        <button class="btn btn-info uk-width-medium " type="button ">Save</button>
                                                    </p>
                                                </div>

                                            </div>

                                        </li>
                                </ul>

                            </div>
                            <div class="uk-card-footer ">
                                <a href="# " class="uk-button uk-button-text ">Vincent Ferrer</a>

                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="uk-card uk-card-small uk-card-default ">
                            <div class="uk-card-header ">
                                <div class="uk-grid-small uk-flex-middle " uk-grid>
                                    <div class="uk-width-auto ">
                                        <img class="uk-border-circle " width="40 " height="40 " src="../docs/images/avatar.jpg ">
                                    </div>
                                    <div class="uk-width-expand ">
                                        <h3 class="uk-card-title uk-margin-remove-bottom ">MACBOOK PRO</h3>
                                        <div class="uk-card-badge uk-label ">$120</div>
                                        <p class="uk-text-meta uk-margin-remove-top "><time datetime="2016-04-01T19:00 ">April 01, 2016</time></p>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-header ">
                                <ul class="uk-subnav uk-subnav-pill" uk-switcher>
                                    <li><a href="# ">Details</a></li>
                                    <li><a href="# ">Description</a></li>
                                    <li><a href="# ">Chat</a></li>
                                </ul>

                                <ul class="uk-switcher uk-margin ">
                                    <li>

                                        <img src="img/macbook.jpg " alt=" ">

                                        <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                        <li class="text-center">
                                            <button type=" button " class="btn btn-dark" href="#modal-example" uk-toggle>LOGIN</button>



                                            <!-- This is the modal -->
                                            <div id="modal-example" uk-modal>

                                                <div class="uk-modal-dialog uk-modal-body uk-width-medium uk-margin-auto-vertical">


                                                    <form class="text-center">

                                                        <div class="form-group ">
                                                            <div class="uk-text-left">
                                                                <label for="exampleInputEmail1">Email address</label>
                                                                <input type=" email " class="uk-input uk-width-medium " id="exampleInputEmail1 " aria-describedby="emailHelp " placeholder="Enter email ">
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <div class="uk-text-left">
                                                                <label for="exampleInputEmail1">Password</label>
                                                            </div>
                                                            <input type="Password " class="uk-input uk-width-medium " id="exampleInputPassword1 " placeholder="Password ">
                                                        </div>
                                                        <label><input class="uk-checkbox " type="checkbox " checked> Remember Me</label>

                                                    </form>
                                                    <p class="uk-text-center ">
                                                        <button class="btn btn-info uk-width-medium " type="button ">Save</button>
                                                    </p>
                                                </div>

                                            </div>

                                        </li>
                                </ul>

                            </div>
                            <div class="uk-card-footer ">
                                <a href="# " class="uk-button uk-button-text ">Vincent Ferrer</a>
                                <a href="# " class="uk-button uk-button-text ">Chat</a>

                            </div>
                        </div>
                    </div>


                    <div class="col-md-4">
                        <div class="uk-card uk-card-small uk-card-default ">
                            <div class="uk-card-header ">
                                <div class="uk-grid-small uk-flex-middle " uk-grid>
                                    <div class="uk-width-auto ">
                                        <img class="uk-border-circle " width="40 " height="40 " src="../docs/images/avatar.jpg ">
                                    </div>
                                    <div class="uk-width-expand ">
                                        <h3 class="uk-card-title uk-margin-remove-bottom ">MACBOOK PRO</h3>
                                        <div class="uk-card-badge uk-label ">$120</div>
                                        <p class="uk-text-meta uk-margin-remove-top "><time datetime="2016-04-01T19:00 ">April 01, 2016</time></p>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-header ">
                                <ul class="uk-subnav uk-subnav-pill" uk-switcher>
                                    <li><a href="# ">Details</a></li>
                                    <li><a href="# ">Description</a></li>
                                    <li><a href="# ">Chat</a></li>
                                </ul>

                                <ul class="uk-switcher uk-margin ">
                                    <li>

                                        <img src="img/macbook.jpg " alt=" ">

                                        <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                        <li class="text-center">
                                            <button type=" button " class="btn btn-dark" href="#modal-example" uk-toggle>LOGIN</button>



                                            <!-- This is the modal -->
                                            <div id="modal-example" uk-modal>

                                                <div class="uk-modal-dialog uk-modal-body uk-width-medium uk-margin-auto-vertical">


                                                    <form class="text-center">

                                                        <div class="form-group ">
                                                            <div class="uk-text-left">
                                                                <label for="exampleInputEmail1">Email address</label>
                                                                <input type=" email " class="uk-input uk-width-medium " id="exampleInputEmail1 " aria-describedby="emailHelp " placeholder="Enter email ">
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <div class="uk-text-left">
                                                                <label for="exampleInputEmail1">Password</label>
                                                            </div>
                                                            <input type="Password " class="uk-input uk-width-medium " id="exampleInputPassword1 " placeholder="Password ">
                                                        </div>
                                                        <label><input class="uk-checkbox " type="checkbox " checked> Remember Me</label>

                                                    </form>
                                                    <p class="uk-text-center ">
                                                        <button class="btn btn-info uk-width-medium " type="button ">Save</button>
                                                    </p>
                                                </div>

                                            </div>

                                        </li>
                                </ul>

                            </div>
                            <div class="uk-card-footer ">
                                <a href="# " class="uk-button uk-button-text ">Vincent Ferrer</a>
                                <a href="# " class="uk-button uk-button-text ">Chat</a>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="uk-card uk-card-small uk-card-default ">
                            <div class="uk-card-header ">
                                <div class="uk-grid-small uk-flex-middle " uk-grid>
                                    <div class="uk-width-auto ">
                                        <img class="uk-border-circle " width="40 " height="40 " src="../docs/images/avatar.jpg ">
                                    </div>
                                    <div class="uk-width-expand ">
                                        <h3 class="uk-card-title uk-margin-remove-bottom ">MACBOOK PRO</h3>
                                        <div class="uk-card-badge uk-label ">$120</div>
                                        <p class="uk-text-meta uk-margin-remove-top "><time datetime="2016-04-01T19:00 ">April 01, 2016</time></p>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-header ">
                                <ul class="uk-subnav uk-subnav-pill" uk-switcher>
                                    <li><a href="# ">Details</a></li>
                                    <li><a href="# ">Description</a></li>
                                    <li><a href="# ">Chat</a></li>
                                </ul>

                                <ul class="uk-switcher uk-margin ">
                                    <li>

                                        <img src="img/macbook.jpg " alt=" ">

                                        <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                        <li class="text-center">
                                            <button type=" button " class="btn btn-dark" href="#modal-example" uk-toggle>LOGIN</button>



                                            <!-- This is the modal -->
                                            <div id="modal-example" uk-modal>

                                                <div class="uk-modal-dialog uk-modal-body uk-width-medium uk-margin-auto-vertical">


                                                    <form class="text-center">

                                                        <div class="form-group ">
                                                            <div class="uk-text-left">
                                                                <label for="exampleInputEmail1">Email address</label>
                                                                <input type=" email " class="uk-input uk-width-medium " id="exampleInputEmail1 " aria-describedby="emailHelp " placeholder="Enter email ">
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <div class="uk-text-left">
                                                                <label for="exampleInputEmail1">Password</label>
                                                            </div>
                                                            <input type="Password " class="uk-input uk-width-medium " id="exampleInputPassword1 " placeholder="Password ">
                                                        </div>
                                                        <label><input class="uk-checkbox " type="checkbox " checked> Remember Me</label>

                                                    </form>
                                                    <p class="uk-text-center ">
                                                        <button class="btn btn-info uk-width-medium " type="button ">Save</button>
                                                    </p>
                                                </div>

                                            </div>

                                        </li>
                                </ul>

                            </div>
                            <div class="uk-card-footer ">
                                <a href="# " class="uk-button uk-button-text ">Vincent Ferrer</a>
                                <a href="# " class="uk-button uk-button-text ">Chat</a>

                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="uk-card uk-card-small uk-card-default ">
                            <div class="uk-card-header ">
                                <div class="uk-grid-small uk-flex-middle " uk-grid>
                                    <div class="uk-width-auto ">
                                        <img class="uk-border-circle " width="40 " height="40 " src="../docs/images/avatar.jpg ">
                                    </div>
                                    <div class="uk-width-expand ">
                                        <h3 class="uk-card-title uk-margin-remove-bottom ">MACBOOK PRO</h3>
                                        <div class="uk-card-badge uk-label ">$120</div>
                                        <p class="uk-text-meta uk-margin-remove-top "><time datetime="2016-04-01T19:00 ">April 01, 2016</time></p>
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-header ">
                                <ul class="uk-subnav uk-subnav-pill" uk-switcher>
                                    <li><a href="# ">Details</a></li>
                                    <li><a href="# ">Description</a></li>
                                    <li><a href="# ">Chat</a></li>
                                </ul>

                                <ul class="uk-switcher uk-margin ">
                                    <li>

                                        <img src="img/macbook.jpg " alt=" ">

                                        <li>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                                        <li class="text-center">
                                            <button type=" button " class="btn btn-dark" href="#modal-example" uk-toggle>LOGIN</button>



                                            <!-- This is the modal -->
                                            <div id="modal-example" uk-modal>

                                                <div class="uk-modal-dialog uk-modal-body uk-width-medium uk-margin-auto-vertical">


                                                    <form class="text-center">

                                                        <div class="form-group ">
                                                            <div class="uk-text-left">
                                                                <label for="exampleInputEmail1">Email address</label>
                                                                <input type=" email " class="uk-input uk-width-medium " id="exampleInputEmail1 " aria-describedby="emailHelp " placeholder="Enter email ">
                                                            </div>
                                                        </div>
                                                        <div class="form-group ">
                                                            <div class="uk-text-left">
                                                                <label for="exampleInputEmail1">Password</label>
                                                            </div>
                                                            <input type="Password " class="uk-input uk-width-medium " id="exampleInputPassword1 " placeholder="Password ">
                                                        </div>
                                                        <label><input class="uk-checkbox " type="checkbox " checked> Remember Me</label>

                                                    </form>
                                                    <p class="uk-text-center ">
                                                        <button class="btn btn-info uk-width-medium " type="button ">Save</button>
                                                    </p>
                                                </div>

                                            </div>

                                        </li>
                                </ul>

                            </div>
                            <div class="uk-card-footer ">
                                <a href="# " class="uk-button uk-button-text ">Vincent Ferrer</a>
                                <a href="# " class="uk-button uk-button-text ">Chat</a>

                            </div>
                        </div>
                    </div>





                </div>
            </div>
        </div>




    </div>

</main>


@endsection

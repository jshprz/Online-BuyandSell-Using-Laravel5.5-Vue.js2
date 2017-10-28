@extends('layouts.productPage')
@section('content')

<nav class="uk-navbar-container" style="background-color:white" uk-navbar >
      <div class="uk-navbar-left uk-margin-large-left uk-visible@m">
          <ul class="uk-navbar-nav">
              <li class="uk-active"><a href="{{url('/home')}}" style="color:rgb(49,49,49)">SHOPEE</a></li>
              <li>
                              </li>
              <li>

              </li>
              <li>

              </li>


              <div>
          <div class="uk-drop" uk-drop="mode: click; pos: right-center; offset: 0">
          </div>



      </div>

          </ul>
      </div>



      <div class="uk-navbar-right uk-margin-large-right">
        <button class="uk-button uk-button-primary uk-button-default uk-visible@s" style="color:white"><a href="{{route('productsec')}}" style="color:white">Buy Items</a></button>
  <button class="uk-button uk-button-secondary uk-button-default uk-visible@s" href="#modal-sections"style="color:white" uk-toggle>Sell Items</button>
  <div id="modal-sections" uk-modal>
  <div class="uk-modal-dialog uk-modal-dialog-slide">
      <button class="uk-modal-close-default" type="button" uk-close></button>
      <div class="uk-modal-header">
          <h3 class="uk-modal-title">Item Details</h3>
      </div>
<form enctype="multipart/form-data" action="{{url('/home')}}" method="post">
    {{ csrf_field() }}
      <div class="uk-modal-body">
        <div class="test-upload uk-placeholder uk-text-center">
      <img :src="product_image">
        <input type="file" name="product_image" @change="imageChanged" required>
</div>

<progress id="progressbar" class="uk-progress" value="0" max="100" hidden></progress>
</div>

<div class="uk-margin uk-margin-medium-left">
   <label class="uk-form-label" for="form-stacked-text">Item Description</label>
         <textarea name="product_description" :class="{'input': true, 'uk-form-danger': errors.has('product_description') }"  v-validate="'required'" data-vv-delay="500" class="uk-textarea uk-form-width-large" rows="5" placeholder="Enter description here" required></textarea>
         <i v-show="errors.has('product_description')" class="fa fa-warning"></i>
         <br>
         <span v-show="errors.has('product_description')" class="uk-text-danger">@{{ errors.first('product_description') }}</span>
     </div>

<div class="uk-margin uk-margin-medium-left">
 <label class="uk-form-label" for="form-stacked-text">Choose Location</label>
  <div class="uk-form-controls">
  <input name="seller_location" v-validate="'required|alpha_spaces'" :class="{'input':true, 'uk-form-danger':errors.has('seller_location')}" data-vv-delay="500" class="uk-input uk-width-1-2 uk-form-width-medium" type="text" placeholder="Location" required>
  <br>
  <span v-show="errors.has('seller_location')" class="uk-text-danger">@{{ errors.first('seller_location') }}</span>
</div>
</div>

<div class="uk-margin uk-margin-medium-left">
 <label class="uk-form-label" for="form-stacked-text">Enter your mobile number so buyers can reach you</label>
  <div class="uk-form-controls">
  <input name="contact" class="uk-input  uk-width-1-2 uk-form-width-medium" v-validate="'required|max:11|numeric'" :class="{'input':true,'uk-form-danger':errors.has('contact')}" data-vv-delay="500" type="numbers"  placeholder="Enter Phone Number" required>
  <br>
  <span v-show="errors.has('contact')" class="uk-text-danger">@{{ errors.first('contact') }}</span>
</div>
</div>

<div class="uk-margin uk-margin-medium-left">
 <label class="uk-form-label" for="form-stacked-text">Price:</label>
  <div class="uk-form-controls">
  <input name="product_price" v-validate="'required|decimal:3'" :class="{'input':true, 'uk-form-danger':errors.has('product_price')}" data-vv-delay="500" class="uk-input  uk-width-1-2 uk-form-width-medium" type="numbers" placeholder="Enter price here" required>
  <br>
  <span v-show="errors.has('product_price')" class="uk-text-danger">@{{ errors.first('product_price') }}</span>
</div>
</div>
<div class="uk-margin uk-margin-medium-left">
     <label class="uk-form-label" for="form-stacked-select">Select Category</label>
     <div class="uk-form-controls">
         <select name="category" v-validate="'required'" :class="{'input':true,'uk-form-danger':errors.has('category')}" data-vv-delay="500" class="uk-select uk-width-1-2 uk-form-width-medium" id="form-stacked-select" required>
             <option>Accessories</option>
             <option>Bags</option>
             <option>Men Store</option>
             <option>Women Store</option>
             <option>Computer Accessories</option>
             <option>Gadgets</option>
             <option>Vehicle</option>
             <option>Vehicle Accessories</option>
         </select>
         <br>
         <span v-show="errors.has('category')" class="uk-text-danger">@{{ errors.first('category') }}</span>
     </div>
 </div>

      <div class="uk-modal-footer uk-text-right">
          <button class="uk-button uk-button-default uk-modal-close" type="button">Cancel</button>
          <button class="uk-button uk-button-primary" type="submit" v-if="!errors.any()">Upload Item</button>
      </div>
  </div>
</div>
</form>
         <ul class="uk-navbar-nav">
           <li class="uk-margin-medium-top">
              <a href="{{route('dashboard')}}" style="color:black"><h5 class="uk-margin-medium-bottom">&nbsp&nbsp&nbsp {{Auth::user()->firstname}}  {{Auth::user()->lastname}}</h5></a>
           </li>
             <li>

               <a href="#"><img class="uk-border-circle uk-margin-medium-top" width="55" height="55" src="storage/avatars/{{Auth::user()->image}}"></a>
                 <div class="uk-navbar-dropdown ">
                     <ul class="uk-nav uk-navbar-dropdown-nav">
                       <li><a href="#modal1-sections" uk-toggle>Display picture</a></li>

                       <div id="modal1-sections" uk-modal>
                       <div class="uk-modal-dialog uk-modal-dialog-slide">
                           <button class="uk-modal-close-default" type="button" uk-close></button>
                               <div class="uk-modal-body">
                                 <form enctype="multipart/form-data" action="{{url('home/'.Auth::user()->id)}}" method="post">
                                     {{ csrf_field() }}
                                 <input type="file" name="display" @change="imagedisplayChange">
                                 <img :src="display_image"/>
                                  <button class="uk-button uk-button-primary uk-align-center" type="submit">Upload Item</button>
                                      </form>
                               </div>
                         </div>
                       </div>

                         <li><a href="{{route('settings')}}">Account Settings</a>
                         </li>
                         <li class="uk-nav-divider"></li>
                         <li><a href="{{route('logout')}}"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOGOUT</a>
                           <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                                             {{ csrf_field() }}
                                         </form>
                         </li>

                     </ul>
                 </div>
             </li>
         </ul>


     </div>

 </nav>



<div class="uk-margin-large-left uk-margin-large-right">
<h5 class="uk-heading-primary uk-margin-medium-top"style="font-family:Segoe UI Light">WELCOME</h4>
  <div class="uk-align-right">

    <div id="my-id" uk-modal>
    <div class="uk-modal-dialog uk-modal-body">
      <div class="uk-margin">
                 <textarea class="uk-textarea" rows="5" placeholder="Textarea"></textarea>
 <button class="uk-button uk-button-primary uk-align-right">Primary</button>
             </div>
        <h2 class="uk-modal-title"></h2>

    </div>
</div>
  </div>
 <ul class ="uk-flex-center uk-margin-large-top"uk-tab>
     <li ><a href="#">Manage Item <span class="uk-badge">@{{items.length}}</span></a></li>
     <li><a href="#">Transaction History</a></li>
     <li><a href="#">Messages</a></li>

 </ul>



 <ul class="uk-switcher uk-margin">
     <li>
       <div class="row"  v-for="item in items">
       <div class="col col-lg-13 uk-margin-large-top">
        <listcard :userimage="'http://localhost:8000/storage/avatars/{{Auth::user()->image}}'" :productimage="'http://localhost:8000/storage/product/' + item.product_image" :productdescription="item.product_description" :createdat="item.created_at" :productprice="item.product_price"></listcard>
     </div>

   </div>
</li>
     <li><nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
  <div class="uk-navbar-left">



  </div>
  <div class="uk-navbar-right">


  </div>
</nav><div class="uk-overflow-auto">
  <table class="uk-table uk-table-hover uk-table-middle uk-table-divider">
  <sold v-for="notyet in notyetsold" :key="notyet.id" v-on:soldme="sold(notyet.id)" :description="notyet.product_description" :image="'http://localhost:8000/storage/product/' + notyet.product_image" :price="notyet.product_price"></sold>
  </table>

</div>
</li>

<li>
  <div class="container">
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

                              <div class="uk-width-small">
                                  <ul class="uk-nav-default" v-for="chat in chatmate" uk-nav>
                                      <li class="uk-parent">
                     <button type="button" class="uk-button uk-button-text"><img class="uk-border-circle " width="30 " height="40 " :src="'http://localhost:8000/storage/avatars/'+chat.image">@{{chat.firstname}} @{{chat.lastname}}</button>
                                      </li>

                                  </ul>
                              </div>


                          </div>


                          <div class="col-md-8 uk-margin-xlarge-left">
                              <div class="panel panel-info">
                                  <div class="panel-heading uk-text-center">
                                      <h3> Joshua Perez</h3>
                                  </div>
                                  <i class="fa fa-cog uk-align-right fa-lg" aria-hidden="true"></i>
                                  <div uk-dropdown>
                                      <ul class="uk-nav uk-dropdown-nav">
                                          <li class="uk-active uk-margin-remove-top"><a href="#">Setting</a></li>

                                          <li class="uk-active"><a href="#"><i class="fa fa-ban" aria-hidden="true"></i>
                                              BLOCK</a></li>
                                          <li><a href="#"><i class="fa fa-archive " aria-hidden="true"></i>
                                              Archive</a></li>

                                      </ul>
                                  </div>

                                  <div class="panel-body uk-margin-medium-top">
                                      <ul class="media-list">


                                    <message  v-for="value in messages" :key="value.index" :whoami="value.firstname" :date="value.created_at" :authid="{{Auth::user()->id}}" :myid="value.id">@{{value.chat}}</message>

                                    <div class="empty" v-for="user in users" v-show="user.length===0">
                                                Nothing here yet!
                                    </div>


                                      </ul>
                                  </div>
                                  <div class="panel-footer">
                                      <div class="input-group">
                                        <chat-composer v-on:messagesent="addMessage"></chat-composer>
                                      </div>
                                  </div>
                              </div>
                          </div>





                      </div>

                  </div>
              </div>


</li>
 </ul>
</div>


      @endsection

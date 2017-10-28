@extends('layouts.Setting')
@section('content')
<nav class="uk-navbar-container" style="background-color:white" uk-navbar >
      <div class="uk-navbar-left uk-margin-large-left" >
          <ul class="uk-navbar-nav ">
              <li class="uk-active"><a href="{{url('/home')}}" style="color:rgb(49,49,49)">SHOPEE</a></li>
              <li>
                              </li>
              <li>

              </li>
              <li>

              </li>


              <div>
          <a class="uk-navbar-toggle" uk-search-icon href="#"></a>
          <div class="uk-drop" uk-drop="mode: click; pos: right-center; offset: 0">
              <form class="uk-search  uk-search-navbar uk-width-1-1">
                  <input class="uk-search-input uk-search-small" style="font-family: Segoe UI Light"type="search" placeholder="Search..." autofocus>
              </form>
          </div>



      </div>

          </ul>
      </div>



      <div class="uk-navbar-right uk-margin-large-right">
  <button class="uk-button uk-button-secondary" href="#modal-sections"style="color:white" uk-toggle>Sell Items</button>
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
               <textarea name="product_description" :class="{'input': true, 'uk-form-danger': errors.has('description') }"  v-validate="'required'" data-vv-delay="500" class="uk-textarea uk-form-width-large" rows="5" placeholder="Enter description here" required></textarea>
               <i v-show="errors.has('description')" class="fa fa-warning"></i>
               <br>
               <span v-show="errors.has('description')" class="uk-text-danger">@{{ errors.first('description') }}</span>
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
               <a href="#"><img class="uk-border-circle uk-margin-medium-top" width="55" height="55" src="img/josh.jpg"></a>
                 <div class="uk-navbar-dropdown ">
                     <ul class="uk-nav uk-navbar-dropdown-nav">

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



 <div id="wrapper" v-show="active=='setting' || active_list=='list1'">
   <div id="sidebar-wrapper">
     <ul class="sidebar-nav">
 <li class="li-1" :class="{'active':active_list=='list1'}"  v-on:click="clicklist1('list1')"><a style="color:black"><h5>General</h5></a></li>
 <li class="li-2" :class="{'active':active_list=='list2'}" v-on:click="clicklist1('list2')"><a style="color:black"><h5>Privacy and Login</h5></a></li>
 <li class="li-3" :class="{'active':active_list=='list3'}" v-on:click="clicklist1('list3')"></li>
 <li class="li-4" v-on:click="clicklist1('list4')"></li>
 <li class="li-5" v-on:click="clicklist1('list5')"></li>
 <li class="li-6" v-on:click="clicklist1('list6')"></li>
 </ul>
 </div>
 <div class="" v-show="active_list=='list1'">
   <h2 class="uk-margin-large-left uk-margin-small-bottom">General settings</h2>
   <form enctype="multipart/form-data" action="{{url('settings/'.Auth::user()->id)}}" method="post">
     {{ csrf_field() }}
   <ul class="uk-list uk-list-striped uk-margin-large-left">
     <li style="height:40px;border-radius:10px"><h6>Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
       {{Auth::user()->firstname}} {{Auth::user()->lastname}}<a v-on:click="editClick1()" class="uk-align-right">@{{edit.edit1}}</a></h6> </li>
     <li v-if="edit.edit1=='Close'">
         <div class="form-group uk-align-center uk-margin-large-left">
             <div class="uk-text-left uk-margin-xlarge-left">
                 <label for="firstname">Firstname</label>
                 <input v-validate="'required|alpha'" :class="{'uk-form-danger':errors.has('firstname')}" name="firstname" type="text" class="uk-input uk-width-medium " id="firstname" placeholder="Your firstname" value="{{Auth::user()->firstname}}" required>
             </div>
         </div>
         <div class="form-group uk-align-center uk-margin-large-left">
             <div class="uk-text-left uk-margin-xlarge-left">
                 <label for="lastname">Lastname</label>
             <input  v-validate="'required|alpha'" :class="{'uk-form-danger':errors.has('lastname')}"   name="lastname" type="lastname" class="uk-input uk-width-medium " id="lastname" placeholder="Your lastname" value="{{Auth::user()->lastname}}" required>
           </div>
         </div>
   </li>
       <li></li>
       <li style="height:40px;border-radius:10px"><h6>Contact &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
         {{Auth::user()->contact}}<a v-on:click="editClick3()" class="uk-align-right uk-margin-xlarge-left">@{{edit.edit3}}</a></h6> </li>
         <li v-if="edit.edit3=='Close'">

             <div class="form-group uk-align-center uk-margin-large-left">
                 <div class="uk-text-left uk-margin-xlarge-left">
                     <label for="contact">Contact</label>
                     <input v-validate="'required|numeric'" :class="{'uk-form-danger':errors.has('contact')}" name="contact" type="text" class="uk-input uk-width-medium " id="contact" placeholder="Your contact" value="{{Auth::user()->contact}}" required>
                 </div>
             </div>

         </li>
         <div class="form-group uk-align-center uk-margin-xlarge-left">
           <div class="uk-margin-xlarge-left">
                 <button class="btn btn-info uk-width-small uk-margin-xlarge-left"  type="submit">Save</button>
           </div>
       </div>
   </ul>
     </form>
 </div>
 <div class="" v-show="active_list=='list2'">
   <h1>asddadsasd</h1>
 </div>


 </div>
@endsection

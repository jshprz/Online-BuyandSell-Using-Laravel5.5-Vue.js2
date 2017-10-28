
@extends('layouts.admin')
@section('content')

<div class="uk-navbar-container uk-margin-large-left" style="background-color:white" uk-navbar>
  <div class="uk-navbar-left">
    <ul class="uk-navbar-nav ">
      <li class="uk-active uk-margin-remove-right"><a href="#" style="color:rgb(49,49,49)"> <h3  style="font-family:Segoe UI Light">SHOPEE</h3></a></li>
        <li>
                        </li>
        <li>

        </li>
        <li>

        </li>
</ul>
  </div>
  <div class="uk-navbar-center">
    <h3 style="font-family:Segoe UI Light">Admin Panel</h3>
  </div>
  <div class="uk-navbar-right uk-margin-medium-right">
    <ul class="uk-navbar-nav">
      <li class="">
         <a href="{{route('admin')}}" style="color:black"><h4 class="">&nbsp&nbsp&nbsp {{Auth::user()->firstname}}  {{Auth::user()->lastname}}</h4></a>
      </li>
        <li>
          <a href="#"><img class="uk-border-circle uk-margin-small-top" width="55" height="55" src="img/josh.jpg"></a>
            <div class="uk-navbar-dropdown ">
                <ul class="uk-nav uk-navbar-dropdown-nav">
                    <li class="uk-nav-divider"></li>
                    <li><a href="{{route('logout')}}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOGOUT</a>
                      <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                    </li>

                </ul>
            </div>
        </li>
    </ul>

  </div>
</div>
<div id="wrapper">
  <div id="sidebar-wrapper">
      <ul class="sidebar-nav"data-uk-switcher="{connect:'#my-id'}">
  <li class="li-1 active" v-on:click="clicklist('list1')"><i class="icon-dashboard icon-3x icon"></i></li>
  <li class="li-2" v-on:click="clicklist('list2')"><i class="icon-envelope icon-3x icon"></i></li>
  <li class="li-3" v-on:click="clicklist('list3')"><i class="icon-user icon-4x icon"></i></li>
  <li class="li-3 " v-on:click="clicklist('list4')"><i class="icon-globe icon-4x icon"></i></li>
  <li class="li-3 " v-on:click="clicklist('list5')"><i class="icon-time icon-4x icon"></i></li>
  <li class="li-3 " v-on:click="clicklist('list6')"><i class="icon-cog icon-4x icon"></i></li>
</ul>
</div>

                    <div class="uk-margin-xlarge-right uk-margin-medium-top" v-show="active==='list1'||active===''">
                      <div class="uk-margin-xlarge-right row">
                          <caption><h1>Seller Request</h1></caption>
                      <table class="uk-table uk-table-striped uk-table-condensed ">

                        <thead>
                          <tr class="uk-table-middle">
                            <th>ID</th>
                            <th>USER_ID</th>
                            <th>LOCATION</th>
                            <th>CONTACT_NUMBER</th>
                            <th>PRICE</th>
                            <th>CATEGORY</th>
                            <th>CREATED_AT</th>
                            <th>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr class="uk-table-middle" v-for="item in items">
                            <td class="uk-text-center uk-text-bold">@{{item.id}}</td>
                            <td class="uk-text-center uk-text-bold">@{{item.user_id}}</td>
                            <td class="uk-text-center uk-text-bold">@{{item.seller_location}}</td>
                            <td class="uk-text-center uk-text-bold">@{{item.contact}}</td>
                            <td class="uk-text-center uk-text-bold">@{{item.product_price}}</td>
                            <td class="uk-text-center uk-text-bold">@{{item.category}}</td>
                            <td class="uk-text-center uk-text-bold">@{{item.created_at}}</td>
                            <td>
                              <button class="btn btn-primary uk-button-small" href="#modal-sections" uk-toggle>View Image</button>
                              <div id="modal-sections" uk-modal>
                              <div class="uk-modal-dialog uk-modal-dialog-slide">
                                  <button class="uk-modal-close-default" type="button" uk-close></button>
                                  <div class="uk-modal-header">
                                      <h3 class="uk-modal-title">Item Details</h3>
                                  </div>
                                  <h1>@{{item.product_description}}</h1>
                                     <img :src="'http://localhost:8000/storage/product/' + item.product_image" >
                                </div>
                              </div>
                                <button class="btn btn-success uk-button-small" type="button" @click.prevent="approveItem(item.id,item.user_id)" name="myid" value="item.user_id">Approve</button>
                                  <button class="btn btn-danger uk-button-small" type="button" @click.prevent="deleteItem(item)">Dispose</button>
                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                        </tbody>
                      </table>
                    </div>
                    <div class="" v-show="active==='list2'">

                    </div>
                    <div class="" v-show="active==='list3'">

                    </div>
                    </div>

                  </div>

@endsection

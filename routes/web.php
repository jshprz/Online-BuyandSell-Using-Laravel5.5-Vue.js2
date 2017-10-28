<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Auth::routes();
Route::get('/', function () {
    return view('welcome');
});
Route::post('/login',[
'uses'=>'Auth\LoginController@doLogin',
'as'=>'login'
]);

Route::post('/logout','Auth\LoginController@logout')->name('logout');
Route::get('/register','Auth\RegisterController@register');
Route::post('/register','Auth\RegisterController@register');
Route::get('/register/confirm/{token}','Auth\RegisterController@confirmEmail');
Route::group(['middleware'=>['guest']],function(){
  Route::get('/registration',function (){
    return view('mypage.registration');
  })->name('registration');
  Route::get('/product',function (){
    return view('mypage.productPage');
  })->name('product');
});
Route::get('/allitems',function (){
  return view('mypage.main');
})->name('all');

Route::group(['middleware'=>['guest']],function(){
  Route::get('/shoppe',function(){
    return view('mypage.index');
  })->name('shoppe');
  Route::get('/login','LoginfailController@loginfail')->name('loginfail');
  Route::resource('shoppeitems','LoginfailController');
  Route::get('/item',function(){
    return view('mypage.item');
  });
  Route::get('/moreitems',function(){
    return view('mypage.main');
  })->name('productsection');
});

Route::resource('current','ItemController');
Route::resource('authaccessoriesitems','authaccessories');
Route::resource('authbagsitems','authbags');
Route::resource('authmenstoreitems','authmenstore');
Route::resource('authwomenstoreitems','authwomenstore');
Route::resource('authcomputeraccessoriesitems','authcomputeraccessories');
Route::resource('authgadgetsitems','authgadgets');
Route::resource('authvehicleitems','authvehicle');
Route::resource('authvehicleaccessoriesitems','authvehicleaccessories');
Route::get('currentitem','GetController@create');
Route::group(['middleware'=>['auth']],function(){
Route::get('/home','UploadImageController@uploadReturn')->name('dashboard');
Route::post('/home','UploadImageController@store');
Route::get('/chatmate','GetController@store')->name('chatmate');
Route::resource('uploaditems','UploadImageController');
Route::resource('conversation','ChatController');
Route::resource('chatmates','GetController');

Route::get('authitem',function(){
  return view('mypage.authitem');
})->name('authitem');
Route::get('getcurrentitem','GetController@index');

Route::get('productsection',function(){
  return view('mypage.authmain');
})->name('productsec');
Route::resource('itemss','SoldController');
Route::post('/send','ChatController@send');

Route::post('/home/{id}','DisplayImageController@update');

Route::get('/settings','UploadImageController@settings')->name('settings');
Route::post('settings/{id}','UploadImageController@update');
});
Route::group(['middleware'=>['admin']],function(){
  Route::get('/admin_panel','AdminController@AdminReturn')->name('admin');
  Route::resource('products','AdminController');
});

Route::resource('approveditems','AdminActionController');
Route::resource('accessoriesitems','AccessoriesController');
Route::resource('bagsitems','BagsController');
Route::resource('menstoreitems','MenstoreController');
Route::resource('womenstoreitems','WomenstoreController');
Route::resource('computeraccessoriesitems','ComputeraccessoriesController');
Route::resource('gadgetsitems','GadgetsController');
Route::resource('vehicleitems','VehicleController');
Route::resource('vehicleaccessoriesitems','VehicleaccessoriesController');


Route::get('/error',function(){
  return view('errors.Pagenotfound');
})->name('error');

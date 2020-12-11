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

Route::get('/', function () {
    return view('frontend.index');
});

Route::resource('users','UserController');


/*Route::get('/admin', function() {
  return "You are an admin";
})->middleware(['auth','auth.admin']);
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
  Route::get('/',function(){
    return view('admin.dashboard');
  })->name('admin.dashboard');
});


Route::group(['middleware'=>['auth']], function(){
  Route::prefix('seller')->group(function(){
    Route::get('/',function(){
      return view('seller.dashboard');
    })->name('seller.dashboard');

    Route::get('/kelola_toko', function(){
      return view('seller.kelola_toko.index');
    })->name('seller.kelola_toko');

    Route::get('/deskripsi_toko', function(){
      return view('seller.deskripsi_toko');
    })->name('seller.deskripsi_toko');

    Route::get('/katalog_toko', function(){
      return view('seller.katalog');
    })->name('seller.katalog');

    Route::get('/katalog_toko/create',function(){
      return view('seller.create-katalog');
    });
  });
});

Route::resource('/deskripsi_toko','seller\deskripsi_tokoController');
Route::resource('/katalog_toko','seller\katalogController');


Route::group(['middleware'=>['auth']], function(){
  Route::prefix('customer')->group(function(){
    Route::get('/', function(){
      return view('customer.dashboard');
    })->name('customer.dashboard');
  });
});



Route::get('/user/{id}','UserController@profile')->name('user.profile');
Route::get('/edit/user/', 'UserController@edit')->name('user.edit');
Route::post('/edit/user/', 'UserController@update')->name('user.update');

/*Route::get('/user', function(){
  return Auth::user();
});*/

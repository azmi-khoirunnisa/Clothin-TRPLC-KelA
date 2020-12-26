<?php

use RealRashid\SweetAlert\Facades\Alert;



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
    //Alert::success('Success Title', 'Success Message');
    //Alert::question('Question Title', 'Question Message');
    //Alert::warning('Peringatan', 'Email dan Password Tidak Valid');
    return view('frontend.index');
});

Route::resource('/users','UserController');


/*Route::get('/admin', function() {
  return "You are an admin";
})->middleware(['auth','auth.admin']);
*/
;;Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function(){
  Route::get('/',function(){
    return view('admin.dashboard');
  })->name('admin.dashboard');
  Route::get('/users','UserController@create')->name('user.create');
  Route::get('/verifikasi','admin\verifikasiController@index')->name('admin.verifikasi');
});


Route::group(['middleware'=>['auth']], function(){
  Route::prefix('seller')->group(function(){
    Route::get('/',function(){
      //Alert::error('Error Title', 'Error Message');
      return view('seller.dashboard');
    })->name('seller.dashboard');

  //  Route::get('/kelola_toko', function(){
    //  return view('seller.kelola_toko.index');
    //})->name('seller.kelola_toko');

  /*  Route::get('/deskripsi_toko', function(){
      return view('seller.deskripsi_toko');
    })->name('seller.deskripsi_toko');*/

  /*  Route::get('/katalog_toko', function(){
      return view('seller.katalog');
    })->name('seller.katalog');*/

  /*  Route::post('/katalog_toko/create',function(){
      return view('seller.create-katalog');
    })->name('seller.katalog.create');*/
    Route::get('/katalog_toko/create','seller\katalogController@create')->name('seller.katalog.create');
    Route::post('/katalog_toko', 'seller\katalogController@store')->name('seller.katalog.store');
    Route::get('/kelola_toko','seller\kelola_tokoController@index')->name('seller.kelola_toko');
    Route::get('/deskripsi_toko/create','seller\deskripsi_tokoController@create')->name('seller.deskripsi_toko.create');
    Route::get('/deskripsi_toko/edit/{id}','seller\deskripsi_tokoController@edit')->name('seller.deskripsi_toko.edit');
    Route::post('/deskripsi_toko','seller\deskripsi_tokoController@store')->name('seller.deskripsi_toko.store');
    Route::post('/deskripsi_toko/{deskripsi_toko}','seller\deskripsi_tokoController@update')->name('seller.deskripsi_toko.update');


    Route::get('/deskripsi_toko/{id}','seller\deskripsi_tokoController@show')->name('seller.deskripsi_toko.show');
    Route::get('/katalog_toko','seller\katalogController@index')->name('seller.katalog');
    Route::get('/katalog_toko/edit/{id}','seller\katalogController@edit')->name('seller.katalog.edit');
    Route::post('/katalog_toko/update/{id}','seller\katalogController@update')->name('seller.katalog.update');
    Route::get('/katalog_toko/{id}','seller\katalogController@destroy')->name('seller.katalog.destroy');

    Route::get('/pesanan','seller\pesananController@index')->name('seller.pesanan');
    //Route::resource('/pesanan','seller\pesananController');
    Route::get('/pesanan/{id}','seller\pesananController@show')->name('seller.terima_pesanan');
    Route::post('/pesanan/terima_pesanan','seller\pesananController@store')->name('seller.terima_pesanan.store');
    //Route::resource('/pesanan/verifikasi','seller\dataVerifController');
    Route::get('/pesanan/verifikasi','seller\dataVerifController@index')->name('seller.verif.index');

    Route::get('/pesanan/resi/{id}','seller\resiController@show')->name('seller.resi');
    Route::post('/pesanan/resi','seller\resiController@store')->name('seller.resi.store');


  });
});

//Route::resource('/katalog_toko','seller\katalogController');
//Route::get('/kelola_toko', 'seller\kelola_tokoController@index')->name('seller.kelola_toko.index');

//Route::resource('/deskripsi_toko','seller\deskripsi_tokoController');



Route::group(['middleware'=>['auth']], function(){
  Route::prefix('customer')->group(function(){
    Route::get('/', function(){
    return view('customer.dashboard');
    })->name('customer.dashboard');
    Route::get('/toko','customer\tokoController@index')->name('customer.toko.index');
    Route::get('/toko/{id}','customer\tokoController@show')->name('customer.toko.show');
    //Route::resource('/data_pesanan','customer\data_pesananController');
    Route::get('/toko/{id}/data_pesanan','customer\tokoController@pesan')->name('customer.datapesanan.index');
    Route::post('/data_pesanan','customer\data_pesananController@store')->name('customer.datapesanan.store');
    Route::get('/pesanan','customer\data_pesananController@pesanan')->name('customer.pesanan');
    Route::get('/pesanan/riwayat','customer\data_pesananController@riwayat')->name('customer.riwayat');
    Route::get('/pesanan/review/{id}','customer\data_pesananController@review')->name('customer.review');
  });
});



Route::get('/user/{id}','UserController@profile')->name('user.profile');
Route::get('/edit/user/', 'UserController@edit')->name('user.edit');
Route::post('/edit/user/', 'UserController@update')->name('user.update');

/*Route::get('/user', function(){
  return Auth::user();
});*/

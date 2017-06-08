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
    return view('welcome');
});

Route::get('testmodel1', function(){
	$q = App\Post::all();
	return $q;
});

Route::get('produk', function(){
	$a = App\Produk::all();
	return $a;
});
Route::get('pengguna', function(){
	$b = App\pengguna::all();
	return $b;
});
Route::get('pengaturan', function(){
	$c = App\Pengaturan::all();
	return $c;
});

Route::get('sadayana', function(){
	$c = App\Pengaturan::all();
	$t = App\Pengguna::all();
	$y = App\produk::all();
	return $c.'<br><br>'.$t.'<br><br>'.$y;
});

Route::get('/test','MyController@percobaan');

Route::get('/test2','MyController@percobaan2');

Route::get('/test3','MyController@percobaan3');
Route::get('/bio','MyController@bio');
Route::get('/ifelse','MyController@percobaan4');
Route::get('/buah','MyController@percobaan5');
Route::get('/tugash3','MyController@tugash3');

Route::get('/param/{id}', function ($id),'MyController@param') { 
			return 'param '.$id; 
		});

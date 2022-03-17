<?php

use Illuminate\Support\Facades\Route;

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

#Route::get('/', function () {
#    return view('customer.template');
#})->name('site');



//**START DASHBOARD **/

// View of the login form 
Route::get('/backend/login', function () {
    return view('auth.login');
})->name('authentication');

//View of the form create administrators 
Route::get('/backend/administrators', function () {
    return view('auth.register');
})->name('administrators')->middleware('auth');



//view admins 
Route::get('/backend/administrators/show', function () {
    return view('dashboard.pages.admin.show');
})->name('showadmin');

//display administrator information 
Route::get('/backend/administrators/show', 
'Auth\RegisterController@index')->name('showadmin');

//display a specific admin
Route::get('/backend/administrators/update/{id}', 
'Auth\RegisterController@show')->name('updateadmin');

//add admin
Route::post('/backend/administrators/register', 
'Auth\RegisterController@store')->name('addadmin');

//update admin
Route::patch('/backend/administrators/update/user/{id}', 
'Auth\RegisterController@update')->name('updateduser');

//delete admin
Route::delete('/backend/administrators/delete/user/{id}', 
'Auth\RegisterController@destroy')->name('deleteuser');



/** end administrators */



/** start logo */

//add y update logo
Route::post('/backend/logo/register', 
'LogoController@store')->name('addlogo');

//show logo
Route::get('/backend/logo/', 
'LogoController@index')->name('logo')->middleware('auth');

/** end logo */

Auth::routes();

//Ruta por defecto por UI 
Route::get('/home', 'HomeController@index')->name('home');

/** END DASHBOARD **/




//colors routes
Route::post('/styles', 'StylesController@colorPortal')->name('style');
Route::get('/backend/styles', 'StylesController@showco')->name('styles')->middleware('auth');

#show imagenes
Route::get('/backend/images', 'ImagenController@showimg')->name('show-img')->middleware('auth');
Route::get('/backend/images-2', 'ImagenController@showimg2')->name('show-img2')->middleware('auth');
Route::get('/backend/images-3', 'ImagenController@showimg3')->name('show-img3')->middleware('auth');
Route::get('/backend/images-4', 'ImagenController@showimg4')->name('show-img4')->middleware('auth');

#upload imagenes
Route::post('/backend/images', 'ImagenController@uploadImg')->name('upimages');

//showing images and colors on customers view
Route::get('/', 'ImagenController@showimgCustomer')->name('site');


//routes to add customers to hotspot
Route::post('/addCustomer', 'CustomerController@addCustomer')->name('addCustomer');
//showing active customers on hotspot
Route::get('backend/customers', 'HomeController@getmkUsers')->name('customersMk');

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
'auth\RegisterController@index')->name('showadmin');

//display a specific admin
Route::get('/backend/administrators/update/{id}', 
'auth\RegisterController@show')->name('updateadmin');

//add admin
Route::post('/backend/administrators/register', 
'auth\RegisterController@store')->name('addadmin');

//update admin
Route::patch('/backend/administrators/update/user/{id}', 
'auth\RegisterController@update')->name('updateduser');

//delete admin
Route::delete('/backend/administrators/delete/user/{id}', 
'auth\RegisterController@destroy')->name('deleteuser');

//admin count 
Route::get('/backend/home/', 'auth\RegisterController@admin_count');

/** end administrators */



/** start logo */

//add y update logo
Route::post('/backend/logo/register', 
'LogoController@store')->name('addlogo');

//show logo
Route::get('/backend/logo/', 
'LogoController@index')->name('logo')->middleware('auth');

/** end logo */





//show styles form
//Route::get('/backend/styles', function () {
 //   return view('dashboard.pages.styles_portal.styles');
//})->name('styles');


Auth::routes();

//Ruta por defecto por UI 
Route::get('/home', 'HomeController@index')->name('home');

/** END DASHBOARD **/

##colores
Route::post('/styles', 'StylesController@colorPortal')->name('style');

Route::get('/backend/styles', 'StylesController@showco')->name('styles')->middleware('auth');


#enviar colores a la vista del cliente
//Route::get('/', 'StylesController@showcolorCustomer')->name('colorCustomer');


#show imagenes
Route::get('/backend/images', 'ImagenController@showimg')->name('show-img')->middleware('auth');
Route::get('/backend/images-2', 'ImagenController@showimg2')->name('show-img2')->middleware('auth');
Route::get('/backend/images-3', 'ImagenController@showimg3')->name('show-img3')->middleware('auth');
Route::get('/backend/images-4', 'ImagenController@showimg4')->name('show-img4')->middleware('auth');


#upload imagenes
Route::post('/backend/images', 'ImagenController@uploadImg')->name('upimages');



//a esta ruta y funcion se van a agregar todas las cargas del template (img de todos los sliders , colores y logo)
Route::get('/', 'ImagenController@showimgCustomer')->name('site');

Route::post('/addCustomer', 'CustomerController@addCustomer')->name('addCustomer');


Route::get('backend/customers', 'HomeController@getmkUsers')->name('customersMk');

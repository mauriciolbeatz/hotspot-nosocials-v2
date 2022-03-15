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
})->name('administrators');

//show admins 
Route::get('/backend/administrators/show', function () {
    return view('dashboard.pages.admin.show');
})->name('showadmin');

//add admin
Route::post('/backend/administrators/register', 
'auth\RegisterController@store')->name('addadmin');

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

Route::get('/backend/styles', 'StylesController@showco')->name('styles');


#enviar colores a la vista del cliente
//Route::get('/', 'StylesController@showcolorCustomer')->name('colorCustomer');


#show imagenes
Route::get('/backend/images', 'ImagenController@showimg')->name('show-img');
Route::get('/backend/images-2', 'ImagenController@showimg2')->name('show-img2');
Route::get('/backend/images-3', 'ImagenController@showimg3')->name('show-img3');
Route::get('/backend/images-4', 'ImagenController@showimg4')->name('show-img4');


#upload imagenes
Route::post('/backend/images', 'ImagenController@uploadImg')->name('upimages');



//a esta ruta y funcion se van a agregar todas las cargas del template (img de todos los sliders y colores)
Route::get('/', 'ImagenController@showimgCustomer')->name('site');

Route::post('/addCustomer', 'CustomerController@addCustomer')->name('addCustomer');

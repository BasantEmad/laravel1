<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//############## ROUTE LIST ###################//

//### DISPLAY ALL  Drive ###//


Route::get('drives',"DriveController@index")->name('drives.index');

//### TO GO TO CREATE PAGE  ###//

Route::get('drives/create',"DriveController@create")->name('drives.create');

//### TO INSERT IN DATABASE ###//

Route::post('drives/create',"DriveController@store")->name('drives.store');

//### DISPLAY ONE ITEM ###//


Route::get('drives/show/{id}',"DriveController@show")->name('drives.show');


//### TO GO EDIT PAGE  ###//


Route::get('drives/edit/{id}',"DriveController@edit")->name('drives.edit');


//### DISPLAY ONE ITEM ###//


Route::post('drives/edit/{id}',"DriveController@update")->name('drives.update');



//### TO REMOVE ITEM FROM DATABASE  ###//


Route::get('drives/destroy/{id}',"DriveController@destroy")->name('drives.destroy');

//### TO download  ###//


Route::get('drives/download/{id}',"DriveController@download")->name('drives.download');


//#################   END OF ROUTES  Drive ########################//




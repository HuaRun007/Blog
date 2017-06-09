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
    return view('Home.index');
});


/*Route::get('/Admin',function(){
    return view('Admin.login');
});
Route::post('/Admin/login', 'Admin\LoginController@login');*/

Route::get('/Admin', function() {
    return View::make('Admin.login');
});
Route::get('/Admin/login', 'Admin\LoginController@login');
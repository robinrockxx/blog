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

// Route::get('/', function () {
//     return view('index');
// });
route::get('/','blog@index');
// route::get('login', 'zomatocontroller@login');
// route::get('register', 'zomatocontroller@register');
// route::get('view', 'zomatocontroller@view');
// route::post('submit','zomatocontroller@save');
// route::get('/delete/{id}','zomatocontroller@delete');

route::get('editblog/{id}','formcontroller@editblog');

route::get('detail/{id}','blog@readmore');

route::post('update_blog','formcontroller@update_blog');

route::get('about','blog@about');
route::get('error','blog@error');
route::get('adminbloglist','blog@adminbloglist');
route::get('blogform','blog@blogform');
route::get('bloglist','blog@bloglist');
route::get('contact','blog@contact');
route::get('dashboard','blog@dashboard');
//route::get('detail','blog@detail');
route::get('index','blog@index');
route::get('update','blog@update');
//route::get('login','blog@login');
route::post('edit','dashboardController@dashboard_update');
route::post('add_blog','formController@add_blog');

route::get('/delete/{id}','formcontroller@delete');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('dashboard');


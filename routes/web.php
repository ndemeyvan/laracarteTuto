<?php

use App\Mail\ContactMessage;
use App\Mail\ContactMessageCreated;

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

// Route::get('/', [
//     'as'=>'root_path',
//     'uses'=>'PagesController@home'
// ]);

Route::view('/', 'pages.welcome')->name('root_path');

Route::view('/about', 'pages.about')->name('about_path');

// Route::redirect('/google', 'https://www.google.com'); redirige quand on entre /google dans le navigateur 

Route::get('/contact','ContactController@create')->name('contact_path');

Route::post('/contact','ContactController@store')->name('contact_path');



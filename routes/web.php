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

Route::get('/social', function () {
    return view('social');
});

Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');

Route::get('login/twitter', 'Auth\LoginController@redirectToProvider');
Route::get('login/twitter/callback', 'Auth\LoginController@handleProviderCallback');

// Route::get('/redirect', function () {
//     $query = http_build_query([
//         'client_id' => '3',
//         'redirect_uri' => 'http://127.0.0.1:8002/social',
//         'response_type' => 'code',
//         'scope' => '*',
//     ]);

//     return redirect('http://127.0.0.1:8002/oauth/authorize?'.$query);
// });


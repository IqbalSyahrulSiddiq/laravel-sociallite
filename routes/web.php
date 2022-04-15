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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Oauth Google
Route::get('auth/google', 'GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'GoogleController@handleGoogleCallback');

//Oauth Facebook
Route::get('auth/facebook', 'FacebookController@redirectToFacebook');
Route::get('auth/facebook/callback', 'FacebookController@handleFacebookCallback');

//Oauth Twitter
Route::get('auth/twitter', 'TwitterController@redirectToTwitter');
Route::get('auth/twitter/callback', 'TwitterController@handleTwitterCallback');

//Oauth Github
Route::get('auth/github', 'GithubController@redirectToGithub');
Route::get('auth/github/callback', 'GithubController@handleGithubCallback');

//Oauth Linkedin
Route::get('auth/linkedin', 'LinkedinController@redirectToLinkedin');
Route::get('auth/linkedin/callback', 'LinkedinController@handleLinkedinCallback');
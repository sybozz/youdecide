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


// Login and registration
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/*
 * Frontend
 *
 * - Listing
 * - profile (user)
 *  -
 * */

// Listing - list of proposals
Route::get('/how-it-works', function () {
    return view('website.guide');
});
Route::get('/proposals', 'WebsiteController@index');
//Route::get('/login', 'WebsiteController@login');
//Route::get('/register', 'WebsiteController@register');
Route::get('/proposal', 'WebsiteController@proposalDetail');


/*
 * User Profile
 * */
Route::get('/timeline', 'ProfileController@timeline');
Route::get('/profile-setting', 'ProfileController@profileSetting');
Route::get('/my-proposals', 'ProfileController@proposalList');
Route::post('/profile/picture/upload', 'ProfileController@profilePictureUpload');
Route::post('/profile/update', 'ProfileController@profileInfoUpdate');

Route::get('/new-proposal', 'ProposalController@createProposal');




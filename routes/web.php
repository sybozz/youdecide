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

//website
Route::get('/proposals', 'WebsiteController@loadProposals');
Route::get('/debates', 'WebsiteController@loadDebates');
Route::get('/results', 'WebsiteController@loadResults');


// Listing - list of proposals
Route::get('/how-it-works', function () {
    return view('website.guide');
});

//Route::get('proposal/{id}', 'WebsiteController@proposalById');
//Route::get('/login', 'WebsiteController@login');
//Route::get('/register', 'WebsiteController@register');
Route::get('/proposal', 'WebsiteController@proposalDetail');


/*
 * User Profile
 * */
Route::get('/timeline', 'ProfileController@profileTimeline');
Route::get('/profile-setting', 'ProfileController@profileSetting');
Route::get('/my-proposals', 'ProfileController@proposalList');
Route::post('/profile/picture/upload', 'ProfileController@profilePictureUpload');
Route::post('profile/details/update', 'ProfileController@profileDetailsUpdate');

Route::get('/new-proposal', 'ProposalController@createProposal');
Route::post('proposal/submit', 'ProposalController@storeProposal');
Route::get('/create-debate', 'DebateController@createDebate');





/*
 *
 * Manager routes
 * */
Route::get('/manager/login', 'ManagerController@index');
Route::get('/manager/pending/proposal', 'ManagerController@pendingProposals');




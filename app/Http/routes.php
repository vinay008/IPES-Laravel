<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/node/7', function () {
    return view('node/7');
});

Route::get('/node/32', function () {
    return view('node/32');
});

Route::get('/node/33', function () {
    return view('node/33');
});

Route::get('/node/34', function () {
    return view('node/34');
});

Route::get('/node/35', function () {
    return view('node/35');
});

Route::get('/node/39', function () {
    return view('node/39');
});

Route::get('/node/40', function () {
    return view('node/40');
});

Route::get('/node/41', function () {
    return view('node/41');
});

Route::get('/node/42', function () {
    return view('node/42');
});

Route::get('/node/44', function () {
    return view('node/44');
});

Route::get('/node/45', function () {
    return view('node/45');
});

Route::get('/node/46', function () {
    return view('node/46');
});

Route::get('/node/47', function () {
    return view('node/47');
});

Route::get('/node/51', function () {
    return view('node/51');
});

Route::get('/node/52', function () {
    return view('node/52');
});


Route::get('/node/55', function () {
    return view('node/55');
});

Route::get('/node/56', function () {
    return view('node/56');
});



Route::get('/login','Auth\AuthController@getLogin');

Route::group(['middlewareGroups' => ['web']], function () 
{
  Route::get('/node/73',['as'=>'login','uses'=>'Auth\AuthController@getLogin']);
  Route::post('/node/73','Auth\AuthController@postLogin');//Checking from database

  //Authentication Routes
  Route::get('/logout',['as'=>'logout','uses'=>'Auth\AuthController@getLogout']);  

  //Registration Route
  Route::get('/node/71',['as'=>'register','uses'=>'Auth\AuthController@getRegister']);
  Route::post('/node/71','Auth\AuthController@postRegister');//Saving to database

  Route::get('/node/77',['as'=>'proposal','uses'=>'UserController@submitProposalget']);
  Route::post('/node/77','UserController@submitProposalpost');

  Route::get('/node/72',['as'=>'update','uses'=>'UserController@updateget']);
  Route::post('/node/72','UserController@updatepost'); 

  Route::get('/node/76',['as'=>'uploadpaper','uses'=>'UserController@updloadget']);
  Route::post('/node/76','UserController@uploadpost');	  
  
  //For Upload paper's
  Route::get('/node/85','UserController@getupadmin');

  Route::get('/approve85/{doneapp}',['as'=>'approve85','uses'=>'UserController@approvepapper']);//change status
  Route::get('/reject85/{rejapp}',['as'=>'reject85','uses'=>'UserController@rejectpaper']);

  //For Proposel's paper's
  Route::get('/node/86','UserController@getproadmin');

  Route::get('/approve86/{doneapp}',['as'=>'approve86','uses'=>'UserController@approvepro']);//change status
  Route::get('/reject86/{rejapp}',['as'=>'reject86','uses'=>'UserController@rejectpro']); //change status

  //For Proposel's paper's
  Route::get('/node/87',['as'=>'/node/87','uses'=>'UserController@statusview']);
  Route::get('/node/88',['as'=>'/node/88','uses'=>'UserController@statusviews']);

});
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

Route::get('/', function () {
    return view('index');
});
Route::get('/aboutus','AboutUsController@index');
Route::get('/printingservice','PrintingServiceController@index');
Route::get('/specialitem','SpecialItemController@index');
Route::get('/designservice','DesignServiceController@index');
Route::get('/visitingcard','VisitingCardController@index');
Route::get('/letterhead','LetterHeadController@index');
Route::get('/ourintro','OurIntroductionController@index');
Route::get('/ourintro','OurIntroductionController@index');
Route::get('/ourteam','OurTeamController@index');
Route::get('/equipment','EquipmentController@index');
Route::get('/career','CareerController@index');


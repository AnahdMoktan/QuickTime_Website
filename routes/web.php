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
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('config:clear');
    // Artisan::call('storage:link');
    return "Cache is cleared";
});




// Admin Routes
Auth::routes();

Route::get('/adminquicktime', 'HomeController@index')->name('home');

Route::get('/index', 'Indexcontroller@index');



Route::get('homeslider', 'Admin\HomesliderController@index');
Route::post('homeslider', 'Admin\HomesliderController@store');
Route::get('homeslider','Admin\HomesliderController@show');
Route::get('homeslider/delete/{id}', 'Admin\HomesliderController@delete');
Route::post('homeslider/update/{id}', 'Admin\HomesliderController@update');


Route::get('aboutus', 'Admin\AboutusController@index');
Route::post('aboutus', 'Admin\AboutusController@store');
Route::get('aboutus','Admin\AboutusController@show');
Route::get('aboutus/delete/{id}', 'Admin\AboutusController@destroy');
Route::post('aboutus/update/{id}', 'Admin\AboutusController@update');

Route::get('ourservices', 'Admin\OurservicesController@index');
Route::post('ourservices', 'Admin\OurservicesController@store');
Route::get('ourservices','Admin\OurServicesController@show');
Route::get('ourservices/delete/{id}', 'Admin\OurServicesController@destroy');
Route::post('ourservices/update/{id}', 'Admin\OurServicesController@update');

Route::get('dservices', 'Admin\DservicesController@index');
Route::post('dservices','Admin\DservicesController@store');
Route::get('dservices','Admin\DservicesController@show');
Route::get('dservices/delete/{id}','Admin\DservicesController@destroy');
Route::post('dservices/update/{id}','Admin\DservicesController@update');

Route::get('testimonial', 'Admin\TestimonialController@index');
Route::post('testimonial','Admin\TestimonialController@store');
Route::get('testimonial','Admin\TestimonialController@show');
Route::get('testimonial/delete/{id}','Admin\TestimonialController@destroy');
Route::post('testimonial/update/{id}','Admin\TestimonialController@update');

Route::get('logo', 'Admin\LogoController@index');
Route::post('logo','Admin\LogoController@store');
Route::get('logo','Admin\LogoController@show');
Route::get('logo/delete/{id}','Admin\LogoController@destroy');
Route::post('logo/update/{id}','Admin\LogoController@update');

Route::get('ourteams', 'Admin\OurTeamController@index');
Route::post('ourteams','Admin\OurTeamController@store');
Route::get('ourteams','Admin\OurTeamController@show');
Route::get('ourteams/delete/{id}','Admin\OurTeamController@destroy');
Route::post('ourteams/update/{id}','Admin\OurTeamController@update');

Route::get('equipments', 'Admin\EquipmentsController@index');
Route::post('equipments', 'Admin\EquipmentsController@store');
Route::get('equipments', 'Admin\EquipmentsController@show');
Route::get('equipments/delete/{id}', 'Admin\EquipmentsController@destroy');
Route::post('equipments/update/{id}', 'Admin\EquipmentsController@update');

Route::get('careers', 'Admin\CareersController@index');

Route::get('printingservices', 'Admin\PrintingServicesController@index');
Route::post('printingservices', 'Admin\PrintingServicesController@store');
Route::get('printingservices', 'Admin\PrintingServicesController@show');
Route::get('printingservices/delete/{id}', 'Admin\PrintingServicesController@destroy');
Route::post('printingservices/update/{id}', 'Admin\PrintingServicesController@update');


Route::get('content', 'Admin\ContentController@index');

Route::post('designservice','Admin\DesignFormsController@store');
Route::post('letsworktogether','Admin\LetsworkController@store');




Route::get('designservices', 'Admin\DesignServicesController@index');

Route::post('designservices','Admin\DesignServicesController@store');
Route::get('designservices','Admin\DesignServicesController@show');
Route::get('designservices/delete/{id}','Admin\DesignServicesController@destroy');
Route::post('designservices/update/{id}','Admin\DesignServicesController@update');

Route::get('/','Admin\PublicController@index');
Route::get('/ourteam','Admin\PublicController@ourteam');
Route::get('/ourintro','Admin\PublicController@introduction');
Route::get('/equipment','Admin\PublicController@equipments');
Route::get('/printing-services/{title}','Admin\PublicController@getprintingservices');
Route::get('/designservice','Admin\PublicController@designservices');
Route::get('/designservice/{title}','Admin\PublicController@getsingleDesignService');



Route::get('printing-orders', 'Admin\PrintingFormsController@index');
Route::post('/printing-services/{title}','Admin\PrintingFormsController@store');



// Route::get('/aboutus','AboutUsController@index');
Route::get('/career','PublicController@career');
Route::get('/contact-us','PublicController@location');
Route::post('location','Admin\ContactUsController@store');
Route::get('/letsworktogether','PublicController@letsworktogether');

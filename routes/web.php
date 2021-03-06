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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
//Route::get('/category_view', 'HomeController@category');
//Route::get('/select_user_type', 'beerlyController@insert_establishment_owner');
//Route::get('/establishment_dashboard', 'establishmentController@dashboard');
//Route::get('/establishment_profile', 'establishmentController@est_profile');
//Route::get('/establishment_promo', 'establishmentController@est_promo');

Route::group(['middleware' => 'auth'],function() {
Route::get('/category_view', 'establishmentController@category');
Route::post('/select_user_type', 'establishmentController@update_owner_type');
Route::post('/select_promoter', 'establishmentController@update_event_promoter');
Route::post('/select_artist', 'establishmentController@update_artist');

Route::get('/establishment_dashboard', 'establishmentController@dashboard');
Route::get('/establishment_profile', 'establishmentController@est_profile');
Route::post('/add_establishment', 'establishmentController@addEstablishment');
Route::get('/add_establishment_view', 'establishmentController@view_addEstablishment');
Route::get('/update_establishment_view/{id}', 'establishmentController@updateEstablishmentView');
Route::post('/update_establishment/{id}', 'establishmentController@updateEstablishment');
Route::post('/delete_establishment/{id}', 'establishmentController@deleteEstablishment');
Route::get('/view_establishment', 'establishmentController@getEstablishment');
Route::get('/user_profile', 'establishmentController@est_user_profile');
Route::post('/update_profile_', 'establishmentController@update_user_profile_');
Route::post('/update_password_', 'establishmentController@update_user_password_');
Route::get('/delete_photo_', 'establishmentController@delete_user_photo_');

Route::get('/add_promos_view', 'promotionController@addPromo_view');
Route::post('/add_promos', 'promotionController@addPromo');
Route::get('/establishment_promo', 'promotionController@est_promo');
Route::post('/delete_promo/{id}', 'promotionController@deletePromotion');
Route::get('/update_promo_view/{id}', 'promotionController@updatePromoView');
Route::post('/update_promo/{id}', 'promotionController@updatePromo');

Route::get('/event_dashboard', 'establishmentController@event_dashboard');
Route::get('/event_profile', 'eventController@event_profile');
Route::get('/event_promo', 'eventController@event_promo');
Route::get('/add_event_view', 'eventController@event_add_view');
Route::post('/add_event', 'eventController@addEvent');
Route::post('/delete_event/{id}', 'eventController@deleteEvent');
Route::get('/update_event_view/{id}', 'eventController@updateEventView');
Route::post('/update_event/{id}', 'eventController@updateEvent');
Route::get('/add_promos_events_view', 'eventController@addPromo_view');
Route::post('/add_promos_events', 'eventController@addPromo');
Route::get('/update_promo_view_event/{id}', 'eventController@updatePromoView');
Route::post('/update_promo_event/{id}', 'eventController@updatePromo');
Route::post('/delete_promo_event/{id}', 'eventController@deletePromotion');
Route::get('/user_profile_', 'eventController@evt_user_profile');
Route::post('/update_profile', 'eventController@update_user_profile_');
Route::post('/update_password', 'eventController@update_user_password_');
Route::get('/delete_photo', 'eventController@delete_user_photo_');
});













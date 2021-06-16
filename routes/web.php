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

Route::get('/configcache', function () {
    Artisan::call('config:cache');
    return "Cache is configured and cleared";
});

Route::get('/clearcache', function () {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});

Route::get('/clearview', function () {
    Artisan::call('view:clear');
    return "View is cleared";
});

Route::get('/clearroute', function () {
    Artisan::call('route:clear');
    return "Route is cleared";
});

Route::get('/clearconfig', function () {
    Artisan::call('config:clear');
    return "Config is cleared";
});

Route::get('/', 'OuterController@index')->name('index');
Route::get('/logout', 'OuterController@logout')->name('logout');
Route::get('/lands', 'OuterController@getLands')->name('lands');
Route::get('/land_details/{landstype_id}', 'OuterController@getLandsdetails')->name('land_details');
Route::get('/houses', 'OuterController@getHouses')->name('houses');
Route::get('/become_an_influencer', 'OuterController@getBecome_an_agent')->name('become_an_influencer');
Route::post('/confirmagentreg', 'OuterController@confirm_Agent_Reg')->name('confirmagentreg');
Route::get('/houses_details/{housestype_id}', 'OuterController@getHousesdetails')->name('houses_details');
Route::post('/buynow', 'OuterController@storeOrders')->name('buynow');
Route::get('/buynow', 'OuterController@orderForm')->name('buynow');

Route::get('/about', 'OuterController@getAbout')->name('about');
Route::get('/contact', 'OuterController@getContact')->name('contact');
Route::post('/contact', 'OuterController@getContact')->name('contact');
Route::get('/terms_and_conditions', 'OuterController@getTerms_Conditions')->name('terms_and_conditions');
Route::get('/covid-19', 'OuterController@getCovid')->name('covid-19');
Route::post('/password_reset', 'OuterController@getPassword')->name('password_reset');

Route::get('/get-discount', 'OuterController@getDiscount')->name('get-discount');

Route::get('/get-coupon', 'DaomniInfluentialcouponsController@getCoupon')->name('get-coupon');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/get-firstpay', 'DaomniDownpaymentController@getInitialPay')->name('get-firstpay');

Route::post('/confirm-page', 'OuterController@confirmOrder')->name('confirmorder');
Route::post('/paynow', 'OuterController@makePayment')->name('paynow');


Route::post('/receipt', 'OuterController@getReceipt')->name('receipt');
Route::post('/error_url', 'OuterController@Error_Url')->name('error_url');
Route::post('/notify_url', 'OuterController@Notify_Url')->name('notify_url');
Route::get('/receipt', 'OuterController@getReceipt')->name('receipt');
Route::get('/error_url', 'OuterController@Error_Url')->name('error_url');
Route::get('/notify_url', 'OuterController@Notify_Url')->name('notify_url');

Route::get('/projects', 'OuterController@getProjects')->name('projects');
Route::get('/projects_details/{project_id}', 'OuterController@getProjectdetails')->name('project_details');



Route::get('/land_subscription', 'DaomniInfluentialcouponsController@landSub')->name('LandSub');
Route::get('/house_subscription', 'DaomniInfluentialcouponsController@houseSub')->name('HouseSub');
Route::get('/influencer_revenue', 'DaomniInfluentialcouponsController@revenue')->name('Revenue');
Route::get('/influencer_setting', 'DaomniInfluentialcouponsController@settings')->name('Setting');

Route::post('/update_code', 'DaomniInfluentialcouponsController@update_agentcode')->name('update_code');

//user
Route::get('/profile', 'DaomniProjectsController@show')->name('profile')->middleware('auth');

Route::get('/view_land', 'DaomniProjectsController@projectLand')->name('lands')->middleware('auth');
Route::get('/land_price', 'DaomniProjectsController@landPrice')->name('landprice')->middleware('auth');
Route::get('/view_land_growth', 'DaomniProjectsController@getLandGrowth')->name('landgrowth')->middleware('auth');
Route::get('/land_growth', 'DaomniProjectsController@LandGrowth')->name('landgrowth')->middleware('auth');
Route::get('/view_house', 'DaomniProjectsController@projectHouse')->name('houses')->middleware('auth');
Route::get('/add_land', 'DaomniProjectsController@addprojectLand')->name('addland')->middleware('auth');
Route::get('/add_house', 'DaomniProjectsController@addprojectHouse')->name('addhouse')->middleware('auth');
Route::post('/save_land', 'DaomniProjectsController@addLand')->name('saveland')->middleware('auth');
Route::post('/save_house', 'DaomniProjectsController@addHouse')->name('savehouse')->middleware('auth');

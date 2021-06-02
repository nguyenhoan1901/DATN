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
Route::get('/', 'FrontController@home')->name('home');
//Route::get('nft/{slug}', 'FrontController@token_detail')->name('token_detail');
//Route::get('dapps', 'FrontController@dapps')->name('dapps');
//Route::get('dapps/{slug}', 'FrontController@dapps_detail')->name('dapps_detail');

/* Admin */
Route::get('login', 'back\AuthController@back_get_login')->name('back_get_login');
Route::post('login', 'back\AuthController@back_post_login')->name('back_login_post');
Route::get('password_forgot', 'back\AuthController@password_forgot')->name('password_forgot');
Route::post('password_forgot', 'back\AuthController@password_reset')->name('password_reset');
Route::middleware(['auth'])->namespace('back')->group(function () {
    Route::get('', 'DashboardController@dashboard')->name('home');
    Route::get('logout', 'AuthController@back_get_logout')->name('back_get_logout');

    // List
    $route_list = array(
        'about'=>'AboutController',
        'contact'=>'ContactController',
        'banner'=>'BannerController',
        'news'=>'NewsController',
        'partner'=>'PartnerController',
        'page'=>'PageController',
        'category'=>'CategoryController',
        'sign'=>'SignController',
        'exchange'=>'ExchangeController',
        'users'=>'UsersController',
        'documents'=>'DocumentsController',
        'phandoi'=>'PhandoiController',
        'lichhoc'=>'LichhocController',
        'hocphi'=>'HocphiController',
        'hoctap'=>'HoctapController',
        'theluc'=>'ThelucController',
        'renluyen'=>'RenluyenController',
        'khenthuong'=>'KhenthuongController',
        'vipham'=>'ViphamController',
        'account'=>'AccountController',
    );

    foreach($route_list as $prefix=>$controller){
        Route::prefix($prefix)->group(function () use($prefix, $controller) {
            Route::get('', $controller.'@index')->name($prefix.'.index');
            Route::post('', $controller.'@store')->name($prefix.'.index_post');
            Route::get('create', $controller.'@create')->name($prefix.'.create');
            Route::post('create', $controller.'@store')->name($prefix.'.store');
            Route::get('edit/{id}', $controller.'@edit')->name($prefix.'.edit');
            Route::post('edit/{id}', $controller.'@update')->name($prefix.'.update');
            Route::get('show/{id}', $controller.'@show')->name($prefix.'.show');
            Route::get('delete/{id}', $controller.'@destroy')->name($prefix.'.delete');
        });
    }

    Route::prefix('config')->group(function () {
        Route::get('', 'ConfigController@index')->name('config.index');
        Route::post('', 'ConfigController@update')->name('config.update');
    });
    Route::prefix('config')->group(function () {
        Route::get('', 'ConfigController@index')->name('config.index');
        Route::post('', 'ConfigController@update')->name('config.update');
    });
    Route::prefix('lichtruc')->group(function () {
        Route::get('', 'LichtrucController@index')->name('lichtruc.index');
        Route::get('change-lichtruc', 'LichtrucController@changeLichTruc')->name('lichtruc.change');
        Route::post('', 'LichtrucController@store')->name('lichtruc.index');
    });

    // Theo dõi
    Route::group(['prefix' => 'subscribe'], function () {
        Route::get('','SubscribeController@index')->name('subscribe.index');
    });


});

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
Route::get('/index',[
    'as'=>'index',
    'uses'=>'Admin\DashboardController@index'
]);

Route::get('admin/login',[
    'as'=>'admin.login',
    'uses'=>'Auth\LoginController@showLoginForm'
]);


Route::get('project_94/login',[
    'as'=>'project_94.login',
    'uses'=>'Auth\LoginController@showLoginForm'
]);

Route::group(['prefix' => 'project_94','middleware'=>'auth'], function () {
    Route::get('/teacher/dashboard',[
        'as'=>'project_94.teacher.dashboard',
        'uses'=>'Project_94\TeacherController@index'
    ]);
    Route::get('/student/dashboard',[
        'as'=>'project_94.student.dashboard',
        'uses'=>'Project_94\TeacherController@index'
    ]);
});



Route::group(['prefix'=>'admin','middleware'=>'auth'],function(){
    Route::get('dashboard',[
        'as'=>'admin.dashboard',
        'uses'=>'Admin\DashboardController@index'
    ]);
    Route::get('user',[
        'as'=>'admin.user',
        'uses'=>'Admin\UserController@index'
    ]);
    
    Route::get('/user/create',[
        'as'=>'admin.user.add',
        'uses'=>'Admin\UserController@create'
    ]);
    Route::post('/user/store',[
        'as'=>'admin.user.store',
        'uses'=>'Admin\UserController@store'
    ]);
    Route::get('/user/edit/{id}',[
        'as'=>'admin.user.edit',
        'uses'=>'Admin\UserController@edit'
    ]);
    Route::post('/user/update/{id}',[
        'as'=>'admin.user.update',
        'uses'=>'Admin\UserController@update'
    ]);
    Route::get('/user/delete/{id}',[
        'as'=>'admin.user.delete',
        'uses'=>'Admin\UserController@delete'
    ]);

    //Banner
    Route::get('banner',[
        'as'=>'admin.banner',
        'uses'=>'Admin\BannerController@index'
    ]);
    
    Route::get('/banner/create',[
        'as'=>'admin.banner.add',
        'uses'=>'Admin\BannerController@create'
    ]);
    Route::post('/banner/store',[
        'as'=>'admin.banner.store',
        'uses'=>'Admin\BannerController@store'
    ]);
    Route::get('/banner/edit/{id}',[
        'as'=>'admin.banner.edit',
        'uses'=>'Admin\BannerController@edit'
    ]);
    Route::post('/banner/update/{id}',[
        'as'=>'admin.banner.update',
        'uses'=>'Admin\BannerController@update'
    ]);
    Route::get('/banner/delete/{id}',[
        'as'=>'admin.banner.delete',
        'uses'=>'Admin\BannerController@delete'
    ]);

    //Advertisement
    Route::get('advertisement',[
        'as'=>'admin.advertisement',
        'uses'=>'Admin\AdvertisementController@index'
    ]);
    
    Route::get('/advertisement/create',[
        'as'=>'admin.advertisement.add',
        'uses'=>'Admin\AdvertisementController@create'
    ]);
    Route::post('/advertisement/store',[
        'as'=>'admin.advertisement.store',
        'uses'=>'Admin\AdvertisementController@store'
    ]);
    Route::get('/advertisement/edit/{id}',[
        'as'=>'admin.advertisement.edit',
        'uses'=>'Admin\AdvertisementController@edit'
    ]);
    Route::post('/advertisement/update/{id}',[
        'as'=>'admin.advertisement.update',
        'uses'=>'Admin\AdvertisementController@update'
    ]);
    Route::get('/advertisement/delete/{id}',[
        'as'=>'admin.advertisement.delete',
        'uses'=>'Admin\AdvertisementController@delete'
    ]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

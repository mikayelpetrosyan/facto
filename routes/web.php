<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'User\UserController@Welcome');

Auth::routes();

Route::get('adminlogin', 'Admin\AdminController@showLoginForm');
Route::get('/your-email', 'Auth\ResetPasswordController@email');
Route::post('/send-email', 'Auth\ResetPasswordController@SendEmail');
Route::get('/confirm-reset-email/{token}','Auth\ResetPasswordController@confirm');
Route::get('/reset-your-password', 'Auth\ResetPasswordController@reset');
Route::post('/reset/password', 'Auth\ResetPasswordController@resetPassword');
Route::post('loginrr', 'Admin\AdminController@authenticate');
Route::get('logout', 'Admin\AdminController@logout');
Route::get('/contact-us', 'User\UserController@contactUs');
Route::post('/contact-us', 'User\UserController@sendContactMessage');
Route::get('/about-us', 'User\UserController@aboutUs');
Route::get('/services/{id}','User\UserController@thisService');
Route::get('/projects', 'User\UserController@projects');
Route::get('/project/{id}', 'User\UserController@thisProjects');
Route::get('/shops', 'User\UserController@shops');
Route::get('/shop/{id}', 'User\UserController@shop');
Route::get('/news/{id}', 'User\UserController@news');

//language route
Route::post('/language-chooser', 'LanguageController@changeLanguage');
Route::post('/language',array(
        'before' => 'csrf',
        'as'=>'language-chooser',
        'uses'=>'LanguageController@changeLanguage'
    )
);

Route::group(['prefix' => 'admin/', 'middleware' => ['admin']], function () {

    Route::get('dashboard', ['uses' => 'Admin\AdminController@show', 'as' => 'admin_index']);


    // Service
    Route::get('add/service', ['uses' => 'Admin\AppController@serviceForm', 'as'=>'service']);
    Route::post('add/addservice', ['uses' => 'Admin\AppController@addService', 'as'=>'addservice']);
    Route::get('services', ['uses' => 'Admin\AppController@allServices', 'as'=>'allservice']);
    Route::get('service/editform/{id}', ['uses' => 'Admin\AppController@editServiceForm', 'as'=>'service_edit_form']);
    Route::post('service/edit/{id}', ['uses' => 'Admin\AppController@editService', 'as'=>'service_edit']);
    Route::get('service/delete/{id}', ['uses' => 'Admin\AppController@deleteService', 'as'=>'service_delete']);


    //Sub Service
    Route::get('add/subservice', ['uses' => 'Admin\AppController@subserviceForm', 'as'=>'subservice']);
    Route::post('add/addsubservice', ['uses' => 'Admin\AppController@addsubService', 'as'=>'addsubservice']);
    Route::get('subservice', ['uses' => 'Admin\AppController@allSubService', 'as'=>'allsubservice']);
    Route::get('all/subservice', ['uses' => 'Admin\AppController@anyDataSub', 'as'=>'allSubService.data']);
    Route::get('subservice/editform/{id}', ['uses' => 'Admin\AppController@editSubserviceForm', 'as'=>'subservice_edit_form']);
    Route::post('subservice/edit/{id}', ['uses' => 'Admin\AppController@editSubserviceedit', 'as'=>'subservice_edit']);
    Route::get('subservice/delete/{id}', ['uses' => 'Admin\AppController@deleteSubservice', 'as'=>'subservice_delete']);

    //Shop
    Route::get('add/shop', ['uses' => 'Admin\AppController@shopForm', 'as'=>'shop']);
    Route::post('add/addshop', ['uses' => 'Admin\AppController@addShop', 'as'=>'addshop']);
    Route::get('shops', ['uses' => 'Admin\AppController@allShop', 'as'=>'allshops']);
    Route::get('shop/editform/{id}', ['uses' => 'Admin\AppController@editShopForm', 'as'=>'shop_edit_form']);
    Route::post('shop/edit/{id}', ['uses' => 'Admin\AppController@editShop', 'as'=>'shop_edit']);
    Route::get('shops/delete/{id}', ['uses' => 'Admin\AppController@deleteShops', 'as'=>'shop_delete']);


    //Projects
    Route::get('add/projects', ['uses' => 'Admin\AppController@projectsForm', 'as'=>'projects']);
    Route::post('add/projects', ['uses' => 'Admin\AppController@addProjects', 'as'=>'addprojects']);
    Route::get('projects', ['uses' => 'Admin\AppController@allProjects', 'as'=>'allprojects']);
    Route::get('projects/editform/{id}', ['uses' => 'Admin\AppController@editProjectsForm', 'as'=>'projects_edit_form']);
    Route::post('project/edit/{id}', ['uses' => 'Admin\AppController@editProject', 'as'=>'project_edit']);
    Route::get('projects/delete/{id}', ['uses' => 'Admin\AppController@deleteProjects', 'as'=>'projects_delete']);

    //Partners
    Route::get('add/partners', ['uses' => 'Admin\AppController@partnersForm', 'as'=>'partners']);
    Route::post('add/partners', ['uses' => 'Admin\AppController@addPartners', 'as'=>'addpartners']);
    Route::get('partners', ['uses' => 'Admin\AppController@allPartners', 'as'=>'allpartners']);
    Route::get('partners/delete/{id}', ['uses' => 'Admin\AppController@deletePartners', 'as'=>'partners_delete']);

    // News
    Route::get('add/news', ['uses' => 'Admin\AppController@newsForm', 'as'=>'news']);
    Route::post('add/news', ['uses' => 'Admin\AppController@addNews', 'as'=>'addnews']);
    Route::get('news', ['uses' => 'Admin\AppController@allNews', 'as'=>'allnews']);
    Route::get('news/delete/{id}', ['uses' => 'Admin\AppController@deleteNews', 'as'=>'news_delete']);

});
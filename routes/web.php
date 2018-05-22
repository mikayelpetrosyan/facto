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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('adminlogin', 'Admin\AdminController@showLoginForm');
Route::get('/your-email', 'Auth\ResetPasswordController@email');
Route::post('/send-email', 'Auth\ResetPasswordController@SendEmail');
Route::get('/confirm-reset-email/{token}','Auth\ResetPasswordController@confirm');
Route::get('/reset-your-password', 'Auth\ResetPasswordController@reset');
Route::post('/reset/password', 'Auth\ResetPasswordController@resetPassword');
Route::post('loginrr', 'Admin\AdminController@authenticate');
Route::get('logout', 'Admin\AdminController@logout');
Route::get('/contact-us', 'User\UserController@contactUs');
Route::get('/about-us', 'User\UserController@aboutUs');
Route::get('/services/{id}','User\UserController@thisService');

Route::get('/services/Construction_engineering', 'User\UserController@Construction_engineering');
Route::get('/services/Landscape_engineering', 'User\UserController@Landscape_engineering');
Route::get('/services/Agricultural_engineering', 'User\UserController@Agricultural_engineering');
Route::get('/projects', 'User\UserController@projects');

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

                    //    Categories
    Route::get('add/category', ['uses' => 'Admin\CategoryController@categoryForm', 'as'=>'category']);
    Route::post('add/category', ['uses' => 'Admin\CategoryController@addCategory', 'as'=>'addcategory']);
    Route::get('category', ['uses' => 'Admin\CategoryController@allCategory', 'as'=>'allcategory']);
    Route::get('category/editform/{id}', ['uses' => 'Admin\CategoryController@editCategoryForm', 'as'=>'category_edit_form']);
    Route::post('category/edit/{id}', ['uses' => 'Admin\CategoryController@editCategory', 'as'=>'category_edit']);
    Route::get('category/delete/{id}', ['uses' => 'Admin\CategoryController@deleteCategory', 'as'=>'category_delete']);

    //Sub Categories
    Route::get('add/subcategory', ['uses' => 'Admin\CategoryController@subcategoryForm', 'as'=>'subcategory']);
    Route::post('add/subcategory', ['uses' => 'Admin\CategoryController@addSubcategory', 'as'=>'addsubcategory']);
    Route::get('subcategory', ['uses' => 'Admin\CategoryController@allSubcategory', 'as'=>'allsubcategory']);
    Route::get('subcategory/editform/{id}', ['uses' => 'Admin\CategoryController@editSubcategoryForm', 'as'=>'subcategory_edit_form']);
    Route::post('subcategory/edit/{id}', ['uses' => 'Admin\CategoryController@editSubcategory', 'as'=>'subcategory_edit']);
    Route::get('subcategory/delete/{id}', ['uses' => 'Admin\CategoryController@deleteSubcategory', 'as'=>'subcategory_delete']);

    //Apps
    Route::get('add/apps', ['uses' => 'Admin\AppController@appsForm', 'as'=>'apps']);
    Route::post('add/apps', ['uses' => 'Admin\AppController@addApps', 'as'=>'addapps']);
    Route::get('apps', ['uses' => 'Admin\AppController@allApps', 'as'=>'allapps']);
    Route::get('all/apps', ['uses' => 'Admin\AppController@anyData', 'as'=>'allApps.data']);
    Route::get('apps/editform/{id}', ['uses' => 'Admin\AppController@editAppsForm', 'as'=>'apps_edit_form']);
    Route::post('apps/edit/{id}', ['uses' => 'Admin\AppController@editApps', 'as'=>'apps_edit']);
    Route::get('apps/delete/{id}', ['uses' => 'Admin\AppController@deleteApps', 'as'=>'apps_delete']);

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


});
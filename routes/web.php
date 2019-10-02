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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/','FrontController@index');

Route::get('/index', [
    'uses' => 'FrontController@index',
    'as'   => 'index'
]);



Route::get('/products', [
    'uses' => 'FrontController@accesoriesFunction',
    'as'   => 'products'
]);

Route::get('/about', [
    'uses' => 'FrontController@aboutFunction',
    'as'   => 'about'
]);

Route::get('/contact', [
    'uses' => 'FrontController@contactFunction',
    'as'   => 'contact'
]);

Route::get('/support', [
    'uses' => 'FrontController@locationFunction',
    'as'   => 'support'
]);
Route::get('/vas_care', [
    'uses' => 'FrontController@vasFunction',
    'as'   => 'vas_care'
]);

Route::get('/career', [
    'uses' => 'FrontController@careerFunction',
    'as'   => 'career'
]);

Route::get('/product-details/{id}', [
    'uses' => 'FrontController@asingleFunction',
    'as'   => 'product-details'
]);

Route::get('/details/{id}', [
    'uses' => 'FrontController@singlecrrFunction',
    'as'   => 'details'
]);
 Route::get('/apply', [
        'uses' => 'FrontController@newApply',
        'as'   => 'apply'
    ]);
 Route::post('/newCandidates', [
        'uses' => 'FrontController@newCandidates',
        'as'   => 'newCandidates'
    ]);
 Route::post('/new-message', [
        'uses' => 'FrontController@newMessage',
        'as'   => 'new-message'
    ]);



Auth::routes([
    'register' => false,
    'verify' => false,
    'reset' => false
]);

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware' => 'admin_check'], function () {
    Route::get('/panel', [
        'uses' => 'adminController@admindex',
        'as'   => 'panel'
    ]);

    Route::get('/cover', [
        'uses' => 'adminController@coverPhoto',
        'as'   => 'coverupdel'
    ]);


    Route::post('/new-cover', [
        'uses' => 'productController@newCover',
        'as'   => 'new-cover'
    ]);

    Route::post('/cover-del', [
        'uses' => 'productController@coverDel',
        'as'   => 'cover-del'
    ]);


    Route::post('/cover-del/del-cover', [
        'uses' => 'productController@deleteCover',
        'as'   => 'del-cover'
    ]);

    // Route::get('/phone', [
    //     'uses' => 'adminController@phoneUp',
    //     'as'   => 'phoneup'
    // ]);

    // Route::get('/accesor', [
    //     'uses' => 'adminController@accesoriesUp',
    //     'as'   => 'accesoriesup'
    // ]);

   

    // Route::post('/newAccesories', [
    //     'uses' => 'productController@newAccesories',
    //     'as'   => 'newAccesories'
    // ]);

    // Route::get('/accesoriesEditdel', [
    //     'uses' => 'productController@accesoriesEditdel',
    //     'as'   => 'accesoriesEditdel'
    // ]);

    // Route::get('/accessories/edit-accessories/{id}',
    // [
    //     'uses'=>'productController@editAccessory',
    //     'as'=>'edit-accessories'
    // ]);

    // Route::post('/accesories/update-accesories/{id}',[
    //     'uses'=>'productController@updateAccesories',
    //     'as'=>'update-accesories'
    // ]);

    // Route::post('/accesories/delete-accessories',[
    //         'uses'=>'productController@deleteAccessories',
    //         'as'=>'delete-accessories'
    //     ]);




Route::get('/storeEditdel', [
        'uses' => 'adminController@storeEditdel',
        'as'   => 'storeEditdel'
    ]);
 Route::get('/addstore', [
        'uses' => 'adminController@storeUp',
        'as'   => 'storeup'
    ]);
 Route::post('/newStore', [
        'uses' => 'adminController@newStore',
        'as'   => 'newStore'
    ]);
  Route::get('/edit-store/{id}',
    [
        'uses'=>'adminController@editStore',
        'as'=>'edit-store'
    ]);
  Route::post('/update-store/{id}',[
        'uses'=>'adminController@updateStore',
        'as'=>'update-store'
    ]);
  Route::post('/delete-store',[
            'uses'=>'adminController@deleteStore',
            'as'=>'delete-store'
        ]);
   Route::post('/storelist', [
        'uses' => 'adminController@storelist',
        'as'   => 'storelist'
    ]);



  Route::get('/jobEditdel', [
        'uses' => 'adminController@jobEditdel',
        'as'   => 'jobEditdel'
    ]);
  Route::get('/createjob', [
        'uses' => 'adminController@jobUp',
        'as'   => 'jobup'
    ]);
  Route::post('/newJob', [
        'uses' => 'adminController@newJob',
        'as'   => 'newJob'
    ]);
   Route::get('/edit-job/{id}',
    [
        'uses'=>'adminController@editJob',
        'as'=>'edit-job'
    ]);
    Route::post('/update-job/{id}',[
        'uses'=>'adminController@updateJob',
        'as'=>'update-job'
    ]);
    Route::post('/delete-job',[
            'uses'=>'adminController@deleteJob',
            'as'=>'delete-job'
        ]);

     Route::get('/applicant-list', [
        'uses' => 'adminController@applicantList',
        'as'   => 'applicant-list'
    ]);

     Route::post('/delete-applicant',[
            'uses'=>'adminController@deleteApplicant',
            'as'=>'delete-applicant'
        ]);




   

    Route::get('/comments', [
        'uses' => 'adminController@comments',
        'as'   => 'comments'
    ]);

    Route::post('/comments/delete-comment',[
            'uses'=>'adminController@deleteComment',
            'as'=>'delete-comment'
        ]);

    Route::get('/upabout', [
        'uses' => 'adminController@aboutUp',
        'as'   => 'upabout'
    ]);

    Route::post('/upabout/new-about', [
        'uses' => 'adminController@newAbout',
        'as'   => 'new-about'
    ]);

    Route::get('/upabout', [
        'uses' => 'adminController@aboutEditdel',
        'as'   => 'upabout'
    ]);

    Route::post('/upabout/delete-about',[
            'uses'=>'adminController@deleteAbout',
            'as'=>'delete-about'
        ]);
    Route::get('/upabout/edit-about/{id}',
    [
        'uses'=>'adminController@editAbout',
        'as'=>'edit-about'
    ]);
    Route::post('/upabout/update-about/{id}',[
        'uses'=>'adminController@updateAbout',
        'as'=>'update-about'
    ]);

    Route::get('/changePassword','adminController@showChangePasswordForm');
    Route::post('/changePassword',[
        'uses'=>'adminController@changePassword',
        'as'=>'changePassword'
    ]);


    Route::get('/category', [
    'uses' => 'adminController@Category',
    'as'   => 'category'
]);

Route::post('/newCategory', [
        'uses' => 'adminController@newCategory',
        'as'   => 'newCategory'
    ]);

Route::post('/category/delete-category',[
            'uses'=>'adminController@deleteCategory',
            'as'=>'delete-category'
        ]);

Route::get('/category/edit-category/{category_id}',
    [
        'uses'=>'adminController@editCategory',
        'as'=>'edit-category'
    ]);

Route::post('/category/update-category/{category_id}',[
        'uses'=>'adminController@updateCategory',
        'as'=>'update-category'
    ]);


Route::get('/productupdel', [
    'uses' => 'adminController@updelProduct',
    'as'   => 'productupdel'
]);

Route::post('/productupdel', [
    'uses' => 'adminController@getProduct',
    'as'   => 'productupdel'
]);

Route::post('/productupdel/delete-product',[
            'uses'=>'adminController@deleteProduct',
            'as'=>'delete-product'
        ]);

Route::get('/productupdel/edit-product/{id}',
    [
        'uses'=>'adminController@editProduct',
        'as'=>'edit-product'
    ]);

Route::post('/productupdel/update-product/{id}',[
        'uses'=>'adminController@updateProduct',
        'as'=>'update-product'
    ]);

Route::get('/productup', [
    'uses' => 'adminController@upProduct',
    'as'   => 'productup'
]);
Route::any('/Productup', [
        'uses' => 'adminController@newProduct',
        'as'   => 'newProduct'
    ]);

});

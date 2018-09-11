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
    return redirect('home');
});

Auth::routes();

Route::group(['middleware' => ['web','auth', 'check.admin.approved']], function () {

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/{email}/verify/{verify_token}', 'Auth\RegisterController@verifySuccess');


    Route::group(['middleware' => ['iseb']], function () {
        route::get('/payment_list', 'PaymentController@index')->name('payment_list');
        Route::get('/payment/create', 'PaymentController@create')->name('payment.create');
        Route::post('/payment/store', 'PaymentController@store')->name('payment.store');

        //member request
        Route::get('/member_request', 'MemberController@memberRequest')->name('member_request');
        Route::post('/member_request/store/{id}', 'MemberController@memberRequestStore')->name('admin.approve');

        
    });


    //Members
    Route::get('/all_memeber', 'MemberController@index')->name('all_members');
    Route::get('/profile/{id}', 'MemberController@show')->name('profile');
    Route::get('/profile/{id}/edit', 'MemberController@edit');
    Route::post('/profile/{id}/edit/update', 'MemberController@update');
    

    // payments
    route::get('/my_payments', 'PaymentController@myPayment')->name('my_payments');
    

    //404
    Route::get('/404', function(){
        return view('404'); 
    });

});


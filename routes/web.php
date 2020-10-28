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

Route::get('/', 'HomeController@index');
Route::get('/product/{id}', 'ProductController@single')->name('product');
Route::prefix('mail')->group(function () {
    Route::get('/quiz/send', 'FeedbackController@quizSend')->name('quiz.send');
    Route::get('/feedback/send', 'FeedbackController@feedbackFormSend')->name('feedback.send');
    Route::get('/chemical/send', 'FeedbackController@chemicalFormSend')->name('chemical.send');
    Route::get('/discount/send', 'FeedbackController@discountFormSend')->name('discount.send');
    Route::get('/specialist/send', 'FeedbackController@specialistFormSend')->name('specialist.send');
    Route::get('/contact/send', 'FeedbackController@contactFormSend')->name('contact.send');
    Route::get('/order/send', 'FeedbackController@orderFormSend')->name('order.send');
});

Auth::routes();

Route::middleware('auth')->group(function () {

    Route::prefix('admin')->group(function () {
        Route::get('/', 'Admin\HomeController@index')->name('admin');

        Route::resource('category', 'Admin\CategoryController');
        Route::resource('product', 'Admin\ProductController');
    });

});


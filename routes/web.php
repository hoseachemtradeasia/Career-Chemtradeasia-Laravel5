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

Route::get('/', 'CareerController@index');
Route::get('/vacancy', 'VacancyController@index');

Route::get('/form/{id}', 'FormController@index');
Route::post('/form/proses', 'FormController@store');
Route::get('/faq', 'FAQController@index');

Route::get('/detailjob/{id}', 'DetailJobController@index');

Route::get('/about-us', function () {
    return view('aboutus');
});

Route::get('/detail-vacancy', function () {
    return view('detail-job');
});


Route::get('/academy', function () {
    return view('academy');
});


// For Change/Localization Language
Route::get('lang/{language}', 'LocalizationController@index')->name('localization.switch');

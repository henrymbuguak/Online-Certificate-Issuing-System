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

Route::get('/','HomeController@certificateApplication')->name('application');
Route::post('/certificate/application','StudentController@getCertificateApplication')->name('certificate.application');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function (){
    Route::get('/course/add', 'HomeController@addCourse')->name('add.course');
    Route::post('/course/add', 'HomeController@adminAddCourse')->name('add.course');
    Route::get('/course/available', 'HomeController@getAvailableCourse')->name('offered.course');
    Route::get('/student/applications', 'HomeController@getStudent')->name('student.certificate');
    Route::get('/student/certificate/{id}', 'HomeController@getCertificatePdf')->name('student.pdf');
});

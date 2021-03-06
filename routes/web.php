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

Route::get('/', 'FrontpageController@main')->name('main');
Route::get('/contact', 'FrontpageController@contact')->name('contact');
Route::get('/products', 'FrontpageController@products')->name('products');
Route::get('/gallery', 'FrontpageController@gallery')->name('gallery');

/*
Route::get('/noticeboard', 'FrontpageController@noticeboard')->name('noticeboard');
Route::get('/teachers', 'FrontpageController@teachers')->name('teachers');
Route::get('/facilities', 'FrontpageController@facilities')->name('facilities');
Route::get('/extra_curricular', 'FrontpageController@extraCurriculars')->name('extra-curriculars');
Route::get('/principals_message', 'FrontpageController@principalsMessage')->name('principals-message');
*/

/* Dashboard */
Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('/dashboard/company', 'CompanyController@index')->name('dashboard-company');
Route::get('/dashboard/product', 'ProductController@index')->name('dashboard-product');
Route::get('/dashboard/gallery', 'GalleryController@index')->name('dashboard-gallery');
Route::get('/dashboard/contact_message', 'ContactMessageController@index')->name('dashboard-contact-message');

/*
Route::get('/dashboard/notice', 'NoticeController@index')->name('dashboard-notice');
Route::get('/dashboard/teacher', 'TeacherController@index')->name('dashboard-teacher');
Route::get('/dashboard/facility', 'FacilityController@index')->name('dashboard-facility');
Route::get('/dashboard/extra_curricular', 'ExtraCurricularController@index')->name('dashboard-extra-curricular');
Route::get('/dashboard/principals_message', 'PrincipalsMessageController@index')->name('dashboard-principals-message');
Route::get('/dashboard/aboutus', 'AboutUsController@index')->name('dashboard-aboutus');


Route::get('/dashboard/memo', 'MemoController@index')->name('dashboard-memo');
Route::get('/dashboard/todo', 'TodoController@index')->name('dashboard-todo');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

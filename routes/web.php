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


Auth::routes();

Route::get('/admin', 'HomeController@index')->name('home');
Route::get('logout','Auth\LoginController@logout')->middleware('auth');

//for admin dashboard
Route::group(['middleware'=>['auth','admin']],function(){

//course
    Route::post('/insert/course','CourseController@store');
    Route::post('/get_all_course','CourseController@get_all_course');
    Route::post('/edit/course/{id}','CourseController@edit');
    Route::post('/update/course','CourseController@update');
    Route::post('/delete/course/{id}','CourseController@destroy');

//    member
    Route::get('/admin/member','MemberController@index');
    Route::post('/insert/member','MemberController@store');
    Route::post('/get_all_member','MemberController@get_all_member');
    Route::post('/edit/member/{id}','MemberController@edit');
    Route::post('/update/member','MemberController@update');
    Route::post('/delete/member/{id}','MemberController@destroy');

//    event
    Route::get('/admin/event','EventController@index');
    Route::post('/insert/event','EventController@store');
    Route::post('/get_all_event','EventController@get_all_event');
    Route::post('/edit/event/{id}','EventController@edit');
    Route::post('/update/event','EventController@update');
    Route::post('/delete/event/{id}','EventController@destroy');

//    blog
    Route::get('/admin/blog','BlogController@index');
    Route::post('/insert/blog','BlogController@store');
    Route::post('/get_all_blog','BlogController@get_all_blog');
    Route::post('/edit/blog/{id}','BlogController@edit');
    Route::post('/update/blog','BlogController@update');
    Route::post('/delete/blog/{id}','BlogController@destroy');

//Enrollment List
    Route::get('admin/eventStudent','EnrollController@index');
    Route::post('insert/event_enroll','EnrollController@store');
    Route::post('/get_all_enrollment','EnrollController@show');
    Route::post('/delete/enrolllment/{id}','EnrollController@destroy');


});

//teacher account
    Route::get('/admin/teacher_account','AccountController@index');
    Route::post('/insert/teacher_account','AccountController@store');
    Route::post('/get_all_teacher_account','AccountController@get_all_teacher_account');
    Route::post('/delete/teacher_account/{id}','AccountController@destroy');

//----------------------------------------

//for teacher dashboard
Route::group(['middleware'=>['auth','teacher']],function(){

    Route::get('teacher/blog','BlogController@show_teacher_blog');
    Route::post('/insert/teacher_blog','BlogController@store');
    Route::post('/get_all_teacher_blog','BlogController@get_all_blog');
    Route::post('/edit/teacher_blog/{id}','BlogController@edit');
    Route::post('/update/teacher_blog','BlogController@update');
    Route::post('/delete/teacher_blog/{id}','BlogController@destroy');

});

// For UI
Route::get('/', 'UIController@HomePage');
Route::get('/member', 'UIController@member');
Route::get('/eventList', 'UIController@eventList');
Route::get('/courseList', 'UIController@courseList');
Route::get('/blogList', 'UIController@blogList');
Route::get('/blogSingle/{id}', 'UIController@blogSingle');
Route::get('/contact', 'UIController@contact');
Route::get('/courseSingle/{id}', 'UIController@courseSingle');

Route::get('/memberSingle/{id}', 'UIController@memberSingle');

Route::get('/portfolio', 'UIController@portfolio');
Route::get('/portfolioSingle', 'UIController@portfolioSingle');
Route::get('/eventSingle/{id}', 'UIController@eventSingle');

Route::post('/insert/event_enroll','EnrollController@store');

Route::post('/send_email','SendEmailController@send');

Route::post('/search_course','UIController@search_course');

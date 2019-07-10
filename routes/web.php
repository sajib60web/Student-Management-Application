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

//Route::get('/', function () {
//    return view('welcome');
//});

Auth::routes();
Route::get('/dashboard', 'HomeController@index')->name('dashboard');

Route::get('/', 'ApplicationController@index');
Route::get('/add-User', 'ApplicationController@addUser');
Route::get('/add-List', 'ApplicationController@addList');
Route::get('/edit-user/{id}', 'ApplicationController@editUser');
Route::post('/update-user', 'ApplicationController@updateUser');
Route::get('/profile', 'ApplicationController@profile');
Route::post('/update-profile', 'ApplicationController@Update_profile');
Route::get('/user-delete/{id}', 'ApplicationController@userDelete');
Route::post('/user-Registration', 'ApplicationController@userRegistration');
Route::post('/admin-login', 'ApplicationController@adminLogin');
Route::get('/dashboard', 'CheckOuteController@index');
Route::get('/logout', 'CheckOuteController@logout');

/*
 * Department Option start
 */

Route::get('/add-Department', 'DepartmentController@add_Department');
Route::post('/save-Department', 'DepartmentController@save_Department');
Route::get('/department-List', 'DepartmentController@department_List');
Route::get('/edit-department/{id}', 'DepartmentController@edit_Department');
Route::post('//update-Department', 'DepartmentController@update_Department');
Route::get('/department-delete/{id}', 'DepartmentController@department_delete');
/*
 * Department Option End
 */

/*
 * Class Room Option start
 */

Route::get('/add-class-room', 'ClassRoomController@add_class_room');
Route::post('/save-class-room', 'ClassRoomController@save_class_room');
Route::get('/class-room-List', 'ClassRoomController@class_room_List');
Route::get('/edit-classRoom/{id}', 'ClassRoomController@edit_classRoom');
Route::post('/update-class-room', 'ClassRoomController@update_class_room');
Route::get('/classRoom-delete/{id}', 'ClassRoomController@classRoom_delete');
/*
 * Class Room Option End
 */

/*
 * Student Option start
 */
Route::get('/add-student', 'StudentController@add_student');
Route::post('/save-student', 'StudentController@save_student');
Route::get('/student-list', 'StudentController@student_list');
Route::get('/edit-student/{id}', 'StudentController@edit_student');
Route::post('/update-student', 'StudentController@update_student');
Route::get('/student-delete/{id}', 'StudentController@student_delete');
/*
 * Student Option start 
 */

/*
 * Teachers Option start
 */
Route::get('/add-teacher', 'TeacherController@add_teacher');
Route::post('/save-teacher', 'TeacherController@save_teacher');
Route::get('/teacher-list', 'TeacherController@teacher_list');
Route::get('/edit-teacher/{id}', 'TeacherController@edit_teacher');
Route::post('/update-teacher', 'TeacherController@update_teacher');
Route::get('/teacher-delete/{id}', 'TeacherController@teacher_delete');
/*
 * Teachers Option End 
 */

/*
 * Class Routing Option start
 */
Route::get('/add-class-outing', 'ClassRoutingControlle@add_classRouting');
Route::post('/save-class_routing', 'ClassRoutingControlle@save_class_routing');
Route::get('/class-outing-list', 'ClassRoutingControlle@class_outing_list');
Route::get('/edit-class_routing/{id}', 'ClassRoutingControlle@edit_class_routing');
Route::post('/update-class_routing', 'ClassRoutingControlle@update_class_routing');
Route::get('/class_routing-delete/{id}', 'ClassRoutingControlle@class_routing_delete');
/*
 * Class Routing Option End
 */
/*
 * Student Payment Option start
 */
Route::get('/add-student-payment', 'StudentPaymentController@add_student_payment');
Route::post('/save-student-payment', 'StudentPaymentController@save_student_payment');
Route::get('/student-payment-list', 'StudentPaymentController@student_payment_list');
Route::get('/edit-student_payment/{id}', 'StudentPaymentController@edit_student_payment');
Route::post('/update-student-payment', 'StudentPaymentController@update_student_payment');
Route::get('/view-student_payment/{id}', 'StudentPaymentController@view_student_payment');
Route::get('/payment/{id}', 'StudentPaymentController@payment');
Route::get('/update_payment/{id}', 'StudentPaymentController@update_payment');
Route::get('/payment_detalis', 'StudentPaymentController@payment_detalis');



Route::get('/student-payment-delete/{id}', 'StudentPaymentController@issue_book_delete');
/*
 * Issue Book Option End
 */

/*
 * Book Option start
 */
Route::get('/add-book', 'BookController@add_book');
Route::post('/save-book', 'BookController@save_book');
Route::get('/book-list', 'BookController@book_list');
Route::get('/edit-book/{id}', 'BookController@edit_book');
Route::post('/update-book', 'BookController@update_book');
Route::get('/book-delete/{id}', 'BookController@book_delete');
/*
 * Book Option End
 */

/*
 * Issue Book Option start
 */
Route::get('/add-issue-book', 'IssueBookController@add_issue_book');
Route::post('/save-issue-book', 'IssueBookController@save_issue_book');
Route::get('/issue-book-list', 'IssueBookController@issue_book_list');
Route::get('/edit-issue_book/{id}', 'IssueBookController@edit_issue_book');
Route::post('/update-issue-book', 'IssueBookController@update_issue_book');
Route::get('/issue_book-delete/{id}', 'IssueBookController@issue_book_delete');
/*
 * Issue Book Option End
 */
<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

//AUTH ROUTE FOR BOTH
Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

Route::get('/about', 'App\Http\Controllers\HomepageController@about')->name('about'); 
Route::get('/courses', 'App\Http\Controllers\CoursesController@index')->name('courses.index');
Route::get('/faculty', 'App\Http\Controllers\FacultyController@index')->name('faculty.index');
Route::get('/announcements', 'App\Http\Controllers\AnnouncementsController@index')->name('announcements.index');
Route::get('/news', 'App\Http\Controllers\NewsController@index')->name('news.index');

#COURSES
#ADD COURSES
Route::get('/courses/customise', 'App\Http\Controllers\CoursesController@customisecourses')->name('courses.customisecourses');
Route::get('/courses/create', 'App\Http\Controllers\CoursesController@create')->name('courses.create');
Route::post('/courses/create', 'App\Http\Controllers\CoursesController@store')->name('courses.store');

#UPDATE COURSES
Route::get('/courses/update/{courses}', 'App\Http\Controllers\CoursesController@show')->name('courses.show');
Route::post('/courses/update/{courses}', 'App\Http\Controllers\CoursesController@update')->name('courses.update');

#DELETE COURSES
Route::get('/courses/delete/{courses}', 'App\Http\Controllers\CoursesController@delete')->name('courses.delete');
Route::post('/courses/delete/{courses}', 'App\Http\Controllers\CoursesController@destroy')->name('courses.destroy');

#FACULTY
#ADD FACULTY
Route::get('/faculty/customise', 'App\Http\Controllers\FacultyController@customisecourses')->name('faculty.customisefaculty');
Route::get('/faculty/create', 'App\Http\Controllers\FacultyController@create')->name('faculty.create');
Route::post('/faculty/create', 'App\Http\Controllers\FacultyController@store')->name('faculty.store');

#UPDATE FACULTY
Route::get('/faculty/update/{faculty}', 'App\Http\Controllers\FacultyController@show')->name('faculty.show');
Route::post('/faculty/update/{faculty}', 'App\Http\Controllers\FacultyController@update')->name('faculty.update');

#DELETE FACULTY
Route::get('/faculty/delete/{faculty}', 'App\Http\Controllers\FacultyController@delete')->name('faculty.delete');
Route::post('/faculty/delete/{faculty}', 'App\Http\Controllers\FacultyController@destroy')->name('faculty.destroy');

#NEWS
#ADD NEWS
Route::get('/news/customise', 'App\Http\Controllers\NewsController@customisenews')->name('news.customisenews');
Route::get('/news/create', 'App\Http\Controllers\NewsController@create')->name('news.create');
Route::post('/news/create', 'App\Http\Controllers\NewsController@store')->name('news.store');

#UPDATE NEWS
Route::get('/news/update/{news}', 'App\Http\Controllers\NewsController@show')->name('news.show');
Route::post('/news/update/{news}', 'App\Http\Controllers\NewsController@update')->name('news.update');

#DELETE NEWS
Route::get('/news/delete/{news}', 'App\Http\Controllers\NewsController@delete')->name('news.delete');
Route::post('/news/delete/{news}', 'App\Http\Controllers\NewsController@destroy')->name('news.destroy');

#ANNOUNCEMENTS
#ADD ANNOUNCEMENTS
Route::get('/announcements/customise', 'App\Http\Controllers\AnnouncementsController@customiseannouncements')->name('announcements.customiseannouncements');
Route::get('/announcements/create', 'App\Http\Controllers\AnnouncementsController@create')->name('announcements.create');
Route::post('/announcements/create', 'App\Http\Controllers\AnnouncementsController@store')->name('announcements.store');

#UPDATE ANNOUNCEMENTS
Route::get('/announcements/update/{announcements}', 'App\Http\Controllers\AnnouncementsController@show')->name('announcements.show');
Route::post('/announcements/update/{announcements}', 'App\Http\Controllers\AnnouncementsController@update')->name('announcements.update');

#DELETE ANNOUNCEMENTS
Route::get('/announcements/delete/{announcements}', 'App\Http\Controllers\AnnouncementsController@delete')->name('announcements.delete');
Route::post('/announcements/delete/{announcements}', 'App\Http\Controllers\AnnouncementsController@destroy')->name('announcements.destroy');

#COURSE COORDINATORS
#ADD COURSE COORDINATORS
Route::get('/course_coordinators/customise', 'App\Http\Controllers\CourseCoordinatorsController@customisecourse_coordinators')->name('course_coordinators.customisecourse_coordinators');
Route::get('/course_coordinators/create', 'App\Http\Controllers\CourseCoordinatorsController@create')->name('course_coordinators.create');
Route::post('/course_coordinators/create', 'App\Http\Controllers\CourseCoordinatorsController@store')->name('course_coordinators.store');

#UPDATE COURSE COORDINATORS
Route::get('/course_coordinators/update/{course_coordinators}', 'App\Http\Controllers\CourseCoordinatorsController@show')->name('course_coordinators.show');
Route::post('/course_coordinators/update/{course_coordinators}', 'App\Http\Controllers\CourseCoordinatorsController@update')->name('course_coordinators.update');

#DELETE ANNOUNCEMENTS
Route::get('/course_coordinators/delete/{course_coordinators}', 'App\Http\Controllers\CourseCoordinatorsController@delete')->name('course_coordinators.delete');
Route::post('/course_coordinators/delete/{course_coordinators}', 'App\Http\Controllers\CourseCoordinatorsController@destroy')->name('course_coordinators.destroy');

#COURSE FACULTY
#ADD COURSE FACULTY
Route::get('/course_faculties/customise', 'App\Http\Controllers\CourseFacultiesController@customisecourse_faculties')->name('course_faculties.customisecourse_faculties');
Route::get('/course_faculties/create', 'App\Http\Controllers\CourseFacultiesController@create')->name('course_faculties.create');
Route::post('/course_faculties/create', 'App\Http\Controllers\CourseFacultiesController@store')->name('course_faculties.store');

#UPDATE COURSE FACULTY

Route::get('/course_faculties/update/{course_faculties}', 'App\Http\Controllers\CourseFacultiesController@show')->name('course_faculties.show');
Route::post('/course_faculties/update/{course_faculties}', 'App\Http\Controllers\CourseFacultiesController@update')->name('course_faculties.update');

#DELETE COURSE FACULTY
Route::get('/course_faculties/delete/{course_faculties}', 'App\Http\Controllers\CourseFacultiesController@delete')->name('course_faculties.delete');
Route::post('/course_faculties/delete/{course_faculties}', 'App\Http\Controllers\CourseFacultiesController@destroy')->name('course_faculties.destroy');

#STUDENTS
#ADD STUDENTS
Route::get('/students/customise', 'App\Http\Controllers\StudentsController@customisestudents')->name('students.customisestudents');
Route::get('/students/create', 'App\Http\Controllers\StudentsController@create')->name('students.create');
Route::post('/students/create', 'App\Http\Controllers\StudentsController@store')->name('students.store');

#UPDATE STUDENTS
Route::get('/students/update/{students}', 'App\Http\Controllers\StudentsController@show')->name('students.show');
Route::post('/students/update/{students}', 'App\Http\Controllers\StudentsController@update')->name('students.update');

#DELETE COURSE FACULTY
Route::get('/students/delete/{students}', 'App\Http\Controllers\StudentsController@delete')->name('students.delete');
Route::post('/students/delete/{students}', 'App\Http\Controllers\StudentsController@destroy')->name('students.destroy');

#COURSE CONTENTS
#ADD COURSE CONTENTS
Route::get('/course_contents/customise', 'App\Http\Controllers\CourseContentsController@customisecourse_contents')->name('course_contents.customisecourse_contents');
Route::get('/course_contents/create', 'App\Http\Controllers\CourseContentsController@create')->name('course_contents.create');
Route::post('/course_contents/create', 'App\Http\Controllers\CourseContentsController@store')->name('course_contents.store');

#UPDATE COURSE CONTENTS
Route::get('/course_contents/update/{course_contents}', 'App\Http\Controllers\CourseContentsController@show')->name('course_contents.show');
Route::post('/course_contents/update/{course_contents}', 'App\Http\Controllers\CourseContentsController@update')->name('course_contents.update');

#DELETE COURSE FACULTY
Route::get('/course_contents/delete/{course_contents}', 'App\Http\Controllers\CourseContentsController@delete')->name('course_contents.delete');
Route::post('/course_contents/delete/{course_contents}', 'App\Http\Controllers\CourseContentsController@destroy')->name('course_contents.destroy');

#DM,Call,Calendar
Route::get('/messages', 'App\Http\Controllers\DashboardController@messages')->name('messages');
Route::get('/calls', 'App\Http\Controllers\DashboardController@calls')->name('calls');
Route::get('/calendar', 'App\Http\Controllers\DashboardController@calendar')->name('calendar');
Route::get('/calendaredit', 'App\Http\Controllers\DashboardController@calendaredit')->name('calendaredit');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


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

Route::get('/', 'KuPagesController@home')->name('home');
Route::get('about', 'KuPagesController@about')->name('about');
Route::get('research', 'KuPagesController@research')->name('research');
Route::get('library', 'KuPagesController@library')->name('library');
Route::get('contact', 'KuPagesController@contact')->name('contact');
Route::get('council', 'KuPagesController@council')->name('council');
Route::get('sports', 'KuPagesController@sports')->name('sports');
Route::get('apply', 'KuPagesController@apply')->name('apply');
Route::get('undergraduates', 'KuPagesController@undergraduates')->name('undergraduates');
Route::get('postgraduates', 'KuPagesController@postgraduates')->name('postgraduates');
Route::get('accomodation', 'KuPagesController@accomodation')->name('accomodation');
Route::get('studentswithdisabilities', 'KuPagesController@studentsWithDisabilities')->name('studentswithdisabilities');
Route::get('campuses', 'KuPagesController@campuses')->name('campuses');
Route::get('vc', 'KuPagesController@vc')->name('vc');
Route::get('uni-life', 'KuPagesController@uniLife')->name('uni-life');
Route::get('cisco', 'KuPagesController@cisco')->name('cisco');
Route::get('alumni', 'KuPagesController@alumni')->name('alumni');
Route::get('quality-assurance', 'KuPagesController@qualityAssurance')->name('quality-assurance');

// routes for udergraduates course
Route::get('csit', 'CoursesController@csit')->name('csit');
Route::get('business-administration', 'CoursesController@businessAdministration')->name('business-administration');
Route::get('agriculture', 'CoursesController@agriculture')->name('agriculture');
Route::get('education', 'CoursesController@education')->name('education');
Route::get('natural-sciences', 'CoursesController@naturalSciences')->name('natural-sciences');
Route::get('nursing', 'CoursesController@nursing')->name('nursing');
Route::get('arts', 'CoursesController@arts')->name('arts');
Route::get('industrial-art', 'CoursesController@industrialArt')->name('industrial-art');
Route::get('film-school', 'CoursesController@filmSchool')->name('film-school');
Route::get('public-administration', 'CoursesController@publicAdministration')->name('public-administration');

// campuses routes

Route::get('ggaba', 'CampusesController@ggaba')->name('ggaba');
Route::get('masaka', 'CampusesController@masaka')->name('masaka');
Route::get('lweero', 'CampusesController@lweero')->name('lweero');
Route::get('jinja', 'CampusesController@jinja')->name('jinja');
Route::get('mutundwe', 'CampusesController@mutundwe')->name('mutundwe');
Route::get('kitengela', 'CampusesController@kitengela')->name('kitengela');

// post graduate course

Route::get('csitPostGrad', 'PostGradCoursesController@csitPost')->name('csitPostGrad');
Route::get('economics', 'PostGradCoursesController@economics')->name('economics');
Route::get('business-management', 'PostGradCoursesController@businessManagement')->name('business-management');
Route::get('artsPostGrad', 'PostGradCoursesController@artsPostGrad')->name('artsPostGrad');
Route::get('environmental-science', 'PostGradCoursesController@environmentalScience')->name('environmental-science');
Route::get('public-health', 'PostGradCoursesController@publicHealth')->name('public-health');
Route::get('csitPostGrad', 'PostGradCoursesController@csitPost')->name('csitPostGrad');
Route::get('educationPostGrad', 'PostGradCoursesController@educationPostGrad')->name('educationPostGrad');
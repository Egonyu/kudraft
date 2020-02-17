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
Route::get('graduate-school', function () {
    return view('courses.postgraduate.graduateSchool');
});
Route::get('/', 'KuPagesController@home')->name('home');
Route::get('about', 'KuPagesController@about')->name('about');
Route::get('admissions', 'KuPagesController@admissions')->name('admissions');
Route::get('research', 'KuPagesController@research')->name('research');
Route::get('library', 'KuPagesController@library')->name('library');
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
// Route::get('admissions', 'KuPagesController@admission')->name('admissions');


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

// error messages routes
Route::get('pagenotfound', ['as' => 'pagenotfound', 'uses' => 'ErrorController@pagenotfound']);


// Mail controller route for contact page
Route::get('contact', 'MailController@contact')->name('contact');
Route::post('send/email', 'MailController@sendmail');


Route::get('dashboard/university', 'DashboardController@university')->name('admin.dashboard.university');


/* Blog */
Route::get('blog', function () { return redirect('admin.blog/dashboard'); });
Route::get('blog/dashboard', 'BlogController@dashboard')->name('admin.blog.dashboard');
Route::get('blog/new-post', 'BlogController@newPost')->name('admin.blog.new-post');
Route::get('blog/list', 'BlogController@list')->name('admin.blog.list');
Route::get('blog/detail', 'BlogController@detail')->name('admin.blog.detail');

/* Authentication */
Route::get('authentication', function () { return redirect('admin.authentication/login'); });
Route::get('authentication/login', 'AuthenticationController@login')->name('admin.authentication.login');
Route::get('authentication/register', 'AuthenticationController@register')->name('admin.authentication.register');
Route::get('authentication/lockscreen', 'AuthenticationController@lockscreen')->name('admin.authentication.lockscreen');
Route::get('authentication/forgot-password', 'AuthenticationController@forgotPassword')->name('admin.authentication.forgot-password');
Route::get('authentication/page404', 'AuthenticationController@page404')->name('admin.authentication.page404');
Route::get('authentication/page403', 'AuthenticationController@page403')->name('admin.authentication.page403');
Route::get('authentication/page500', 'AuthenticationController@page500')->name('admin.authentication.page500');
Route::get('authentication/page503', 'AuthenticationController@page503')->name('admin.authentication.page503');

/* Pages */
Route::get('pages', function () { return redirect('admin.pages/blank-page'); });
Route::get('pages/blank-page', 'PagesController@blankPage')->name('admin.pages.blank-page');
Route::get('pages/profile2', 'PagesController@profile2')->name('admin.pages.profile2');
Route::get('pages/image-gallery1', 'PagesController@imageGallery1')->name('admin.pages.image-gallery1');
Route::get('pages/image-gallery2', 'PagesController@imageGallery2')->name('admin.pages.image-gallery2');
Route::get('pages/horizontal-timeline', 'PagesController@horizontalTimeline')->name('admin.pages.horizontal-timeline');
Route::get('pages/project-list', 'PagesController@projectList')->name('admin.pages.project-list');
Route::get('pages/faq', 'PagesController@faq')->name('admin.pages.faq');


/*Admin Campuses List Routes*/

Route::get('dashboard/university/campuses', 'Admin\Campuses\CampusController@index')->name('admin.campuses.campusList');
/*New Campus Route*/
Route::get('dashboard/university/campuses/new', 'Admin\Campuses\CampusController@new')->name('admin.campuses.new');

Route::post('dashboard/university/campuses/addNew', 'Admin\Campuses\CampusController@addNew')->name('admin.campuses.addNew');


Route::group(array('prefix' => 'dashboard/university/'), function()
    {
        // Events routes
        Route::resource('event', 'EventController');


        Route::resource('news', 'UpdateController');
    });

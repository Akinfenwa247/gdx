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
    return view('welcome');
});

Route::get('/register', function () {
    return view('auth.register');
});
Route::post('/register', 'Auth\RegisterController@create')->name('register');
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/assess', 'PageController@assess')->name('assess');
//Devs
Route::get('/assessment', 'PageController@assessment')->name('assessment');
Route::get('/profile', 'Devs\ProfileController@profile')->name('profile');
Route::get('/{{username}}', 'Devs\ProfileController@userpage')->name('pprofile');
Route::get('/rating', 'PageController@rating')->name('rating');
Route::get('/academy', 'Devs\AcademyController@loadAcademy')->name('academy')->middleware('auth');
Route::post('/academy', 'Devs\AcademyController@saveAcademy')->name('academy')->middleware('auth');
Route::get('/skill_level', 'Devs\SkillLevelController@loadSkillLevel')->name('skilllevel')->middleware('auth');
Route::post('/skill_level', 'Devs\SkillLevelController@saveSkillLevel')->name('skilllevel')->middleware('auth');
Route::get('/editskill_level', 'Devs\SkillLevelController@editSkillLevel')->name('editskilllevel')->middleware('auth');
Route::get('/project', 'PageController@project')->name('project');
Route::get('/ddashboard', 'PageController@ddashboard')->name('ddashboard')->middleware('auth');
Route::get('/referral', 'PageController@referral')->name('referrals')->middleware('auth');;

Route::get('/onboard', 'PageController@onboard')->name('onboard');
Route::post('/onboard', 'PageController@onboard')->name('onboard');

//jobs
Route::get('/{job}/{id}', 'Job\JobController@viewJob')->name('job');
Route::get('/{job}/{id}/{ref}', 'Job\JobController@viewJob')->name('jobref');
Route::get('/jobs', 'Job\JobController@getJobs')->name('jobs')->middleware('auth');
Route::get('/apply/{id}/{cid}', 'Job\JobController@apply')->name('apply')->middleware('auth');

//Company
Route::get('/success', 'Company\CompanyController@success')->name('success');
Route::post('/addCompany', 'Company\CompanyController@create')->name('addCompany');
Route::get('/company/login', 'PageController@companyLogin')->name('clogin');
Route::get('/company', 'PageController@company')->name('company');
Route::get('/company_faq', 'PageController@companyFAQ')->name('companyfaq');
Route::get('/cdashboard', 'PageController@cdashboard')->name('cdashboard');
Route::get('/add_position', 'PageController@addPosition')->name('addPosition');
Route::get('/candidates', 'PageController@candidates')->name('candidates');
Route::get('/positions', 'PageController@positions')->name('positions');
Route::get('/cprofile', 'PageController@cProfile')->name('companyProfile');


Route::get('login/{provider}', 'Auth\SocialAuthController@redirectToProvider');
Route::get('login/{provider}/callback', 'Auth\SocialAuthController@handleProviderCallback');

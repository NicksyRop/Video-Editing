<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Artisan;
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
Route::post('/aiz-uploader', 'AizUploadController@show_uploader');
Route::post('/aiz-uploader/upload', 'AizUploadController@upload');
Route::get('/aiz-uploader/get_uploaded_files', 'AizUploadController@get_uploaded_files');
Route::delete('/aiz-uploader/destroy/{id}', 'AizUploadController@destroy');
Route::post('/aiz-uploader/get_file_by_ids', 'AizUploadController@get_preview_files');
Route::get('/aiz-uploader/download/{id}', 'AizUploadController@attachment_download')->name('download_attachment');

Route::get('/language/{locale}', 'LanguageController@changeLanguage')->name('language.change');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});
Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Auth::routes(['verify' => true]);



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
Route::group( ['prefix'=>'freelancer', 'middleware'=> 'auth'],function(){


    Route::get('dashboard','HomeController@freelancer_dashboard')->name('freelancer_dashboard')->middleware('freelancer');
    Route::get('profile','HomeController@create_profile')->name('profile_create');
    Route::post('profile','HomeController@store')->name('profile.store');
    Route::get('welcome' ,'HomeController@welcome')->name('welcome');

    //test
    Route::get('test','HomeController@test')->name('freelancer.test');
    Route::get('download/{id}','HomeController@download')->name('freelancer.download');
    Route::get('test/submit','HomeController@upload')->name('test.upload');
    Route::post('test/submit','HomeController@submit')->name('test.submit');

    //jobs

    Route::get('myProjects','JobsController@index')->name('projects');
    Route::post('myProjects/{project}/take','JobsController@take')->name('take');
    Route::put('myProjects/{project}/cancel','JobsController@cancel')->name('cancel');

    Route::get('myProjects/{project}/resources','JobsController@show')->name('project.resources');
    Route::get('myProjects/{id}/download','JobsController@download')->name('resource.download');
    Route::get('myProjects/active','JobsController@active')->name('active');
    Route::post('myProjects/{project}/submit','JobsController@submit')->name('project.submit');
    Route::get('myprojects/pending','JobsController@pending')->name('pending');
    Route::get('myprojects/complete','JobsController@completed')->name('completed');
    Route::get('myprojects/rejected','JobsController@rejected')->name('rejected');

    //earning
    Route::get('earnings','WalletController@earning')->name('freelancer.earnings');






});






Route::group(['prefix' => 'admin','middleware' => 'auth'],function(){

    Route::resource('users', UserController::class);
     Route::resource('roles', RoleController::class);

     //langueges
     Route::resource('/languages', 'LanguageController');
     Route::get('/languages/destroy/{id}', 'LanguageController@destroy')->name('languages.destroy');
     Route::post('/languages/update_language_status', 'LanguageController@update_language_status')->name('languages.update_language_status');
     Route::post('/languages/key_value_store', 'LanguageController@key_value_store')->name('languages.key_value_store');
     Route::post('/languages/update_language_status', 'LanguageController@update_language_status')->name('languages.update_language_status');


    Route::resource('level','LevelController');
    Route::resource('tests','TestsController');

    Route::get('dashboard','AdminsController@index')->name('admin.dashboard');
    Route::resource('freelancers','FreelancerController');


    Route::resource('clients','AdminClientsController');
    Route::get('settings','SettingsController@index')->name('settings');

    Route::get('calender','SettingsController@calender')->name('calender');

    Route::get('verification','VerificationController@index')->name('verification');
    Route::get('verification/profile/{freelancer}/show','VerificationController@profile')->name('profile.verification');

    Route::get('verification/test/{freelancer}/test','VerificationController@test')->name('test.verification');
    Route::get('verification/{freelancer}/cv','VerificationController@cv')->name('cv');
    Route::get('verification/{freelancer}/tax','VerificationController@tax')->name('tax');
    Route::post('verifiy/{freelancer}','VerificationController@verifyprofile')->name('admin.approve.profile');
    Route::get('verification/{freelancer}/test','VerificationController@testview')->name('test');
    Route::post('verifiy/{freelancer}/test','VerificationController@verifytest')->name('admin.approve.test');
    Route::post('verification/{freelancer}/reject','VerificationController@reject')->name('reject');

    //projects
    Route::get('projects','AdminProjectsController@index')->name('admin.projects.all');
    Route::get('projects/running','AdminProjectsController@running')->name('admin.projects.running');
    Route::get('projects/open','AdminProjectsController@open')->name('admin.projects.open');

    //roles

    Route::resource('roles', RoleController::class);

    //paypal payouts

    Route::get('/paypal','PaypalController@index')->name('home');
    Route::get('/paypal/pay','PaypalController@paypal')->name('paypal');
    Route::get('paypal/payments','PaypalController@payments')->name('client.payment');
    //settings

    Route::get('/general-configuration', 'SystemConfigurationController@activation_view')->name('general_configuration');
	Route::post('/general-configuration-update', 'SystemConfigurationController@updateActivation')->name('general-config.store');
    Route::post('/system-configuration/update', 'SystemConfigurationController@update')->name('system_configuration.update');
    Route::post('/env_key_update', 'SystemConfigurationController@env_key_update')->name('env_key_update.update');

    Route::group(['prefix' => 'website'], function(){
		Route::get('/home', 'SystemConfigurationController@home_settings')->name('website.home');

		Route::view('/header', 'admin.website.header')->name('website.header');
		Route::view('/footer', 'admin.website.footer')->name('website.footer');
		Route::view('/pages', 'admin.website.pages')->name('website.pages');
		Route::view('/appearance', 'admin.website.appearance')->name('website.appearance');
		Route::resource('custom-pages', 'PageController');
		Route::get('/custom-pages/destroy/{id}', 'PageController@destroy')->name('custom-pages.destroy');
	});

    //addons
	Route::resource('addons','AddonController');
	Route::post('/addons/activation', 'AddonController@activation')->name('addons.activation');

    //curencies
    Route::resource('currencies','CurrencyController');
	Route::get('/currencies/destroy/{id}', 'CurrencyController@destroy')->name('currencies.destroy');
	Route::get('/currency/set_currency', 'CurrencyController@set_currency')->name('currencies.set_currency');






});



Route::group(['prefix' => 'client','middleware' => 'auth'],function(){
    Route::resource('project','ProjectController');

    Route::get('project/{id}/pay','ProjectController@pay')->name('pay');
    Route::get('project/{id}/show','ProjectController@show')->name('client.show');

    Route::get('dashboard','ClientController@index')->name('client.dashboard');

    Route::get('projects/pending','ClientController@pending')->name('client.pending');
    Route::get('projects/completed','ClientController@completed')->name('client.completed');
    Route::get('projects/taken','ClientController@taken')->name('client.taken');
    Route::get('project/{project}/view','ClientController@viewSubmission')->name('project.view');

    Route::post('projects/{project}/reject','ClientController@reject')->name('project.reject');
    Route::post('projects/{project}/approve','ClientController@approve')->name('project.approve');
    Route::get('projects/{file}/download','ClientController@download')->name('project.download');
    Route::post('project/{project}/rating','ClientController@rating')->name('rate');

    Route::get('/paypal_history','ClientPaypalController@index')->name('client.paypal');



});



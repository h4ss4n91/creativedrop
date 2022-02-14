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
Route::get('/admin', function () {
    return redirect('admin/home');
});


Route::get('/insight/{id}', 'WelcomeController@insight');

Route::get('/', function () {
    return redirect('/home');
});

Auth::routes();

Route::get('/send_email', 'WelcomeController@send_email');

Route::get('/case_study/{id}', 'WelcomeController@case_study');

Route::get('/admin/home', 'HomeController@index');

Route::get('/admin/system', 'BackendController@system');

Route::get('/c/contact', 'WelcomeController@contact');


Route::get('/admin/page_section_id/{id}', 'BackendController@page_section_id')->name('admin.page_section_id');
Route::get('/services_by_id/{id}', 'WelcomeController@services_by_id')->name('services_by_id');
Route::get('/sub_services_by_id/{id}', 'WelcomeController@sub_services_by_id')->name('sub_services_by_id');
Route::get('/industry_by_id/{id}', 'WelcomeController@industry_by_id')->name('industry_by_id');
Route::get('/services_by_id_with_services/{id}', 'WelcomeController@services_by_id_with_services')->name('services_by_id_with_services');

Route::get('/admin/services_by_id/{id}', 'WelcomeController@services_by_id')->name('services_by_id');
Route::get('/admin/child_services_by_id/{id}', 'WelcomeController@child_services_by_id')->name('child_services_by_id');

// page_content

Route::get('/admin/delete_page_content/{id}', 'BackendController@delete_page_content')->name('delete_page_content');


// Pages
Route::get('/admin/pages', 'BackendController@pages')->name('pages');
Route::post('/admin/edit_page', 'BackendController@edit_page')->name('edit_page');
Route::get('/admin/edit_page_content/{id}', 'BackendController@edit_page_content')->name('edit_page_content');
Route::get('/admin/delete_page/{id}', 'BackendController@delete_page')->name('delete_page');

Route::post('/admin/create_page', 'BackendController@create_page')->name('create_page');

// Main Menu 
Route::get('/admin/menu', 'BackendController@index')->name('menu');
Route::post('/admin/store_main_menu', 'BackendController@store_main_menu')->name('store_main_menu');
Route::post('/admin/edit_main_menu', 'BackendController@edit_main_menu')->name('edit_main_menu');
Route::get('/admin/delete_main_menu/{id}', 'BackendController@delete_main_menu')->name('delete_main_menu');

// Child Menu 
Route::post('/admin/store_child_menu', 'BackendController@store_child_menu')->name('store_child_menu');
Route::post('/admin/edit_child_menu', 'BackendController@edit_child_menu')->name('edit_child_menu');
Route::get('/admin/delete_child_menu/{id}', 'BackendController@delete_child_menu')->name('delete_child_menu');

// Sub Child Menu 
Route::post('/admin/store_sub_child_menu', 'BackendController@store_sub_child_menu')->name('store_sub_child_menu');
Route::post('/admin/edit_sub_child_menu', 'BackendController@edit_sub_child_menu')->name('edit_sub_child_menu');
Route::get('/admin/delete_sub_child_menu/{id}', 'BackendController@delete_sub_child_menu')->name('delete_sub_child_menu');


// Slider Section
Route::post('/admin/store_slider', 'BackendController@store_slider')->name('store_slider');
Route::post('/admin/edit_slider', 'BackendController@edit_slider')->name('edit_slider');
Route::get('/admin/delete_slider/{id}', 'BackendController@delete_slider')->name('delete_slider');


// Video Section
Route::post('/admin/store_video', 'BackendController@store_video')->name('store_video');
Route::post('/admin/edit_video', 'BackendController@edit_video')->name('edit_video');
Route::get('/admin/delete_video/{id}', 'BackendController@delete_video')->name('delete_video');


// Client and Partner Section
Route::post('/admin/store_client_and_partner', 'BackendController@store_client_and_partner')->name('store_client_and_partner');
Route::post('/admin/edit_client_and_partner', 'BackendController@edit_client_and_partner')->name('edit_client_and_partner');
Route::get('/admin/delete_client_and_partner/{id}', 'BackendController@delete_client_and_partner')->name('delete_client_and_partner');


// Industry Section
Route::post('/admin/store_industries', 'BackendController@store_industries')->name('store_industries');
Route::post('/admin/edit_industry', 'BackendController@edit_industry')->name('edit_industry');
Route::get('/admin/delete_industry/{id}', 'BackendController@delete_industry')->name('delete_industry');


// Team Section
Route::post('/admin/store_team', 'BackendController@store_team')->name('store_team');
Route::post('/admin/edit_team', 'BackendController@edit_team')->name('edit_team');
Route::get('/admin/delete_team/{id}', 'BackendController@delete_team')->name('delete_team');


// News and Opinions Section
Route::post('/admin/store_news', 'BackendController@store_news')->name('store_news');
Route::post('/admin/edit_news', 'BackendController@edit_news')->name('edit_news');
Route::get('/admin/delete_news/{id}', 'BackendController@delete_news')->name('delete_news');

// Request Section
Route::post('/admin/store_request', 'BackendController@store_request')->name('store_request');
Route::post('/admin/edit_request', 'BackendController@edit_request')->name('edit_request');
Route::get('/admin/delete_request/{id}', 'BackendController@delete_request')->name('delete_request');


// para_style_1 Section
Route::post('/admin/store_para_style_1', 'BackendController@store_para_style_1')->name('store_para_style_1');
Route::post('/admin/edit_para_style_1', 'BackendController@edit_para_style_1')->name('edit_para_style_1');
Route::get('/admin/delete_para_style_1/{id}', 'BackendController@delete_para_style_1')->name('delete_para_style_1');

// para_style_2 Section
Route::post('/admin/store_para_style_2', 'BackendController@store_para_style_2')->name('store_para_style_2');
Route::post('/admin/edit_para_style_2', 'BackendController@edit_para_style_2')->name('edit_para_style_2');
Route::get('/admin/delete_para_style_2/{id}', 'BackendController@delete_para_style_2')->name('delete_para_style_2');


// para_style_3 Section
Route::post('/admin/store_para_style_3', 'BackendController@store_para_style_3')->name('store_para_style_3');
Route::post('/admin/edit_para_style_3', 'BackendController@edit_para_style_3')->name('edit_para_style_3');
Route::get('/admin/delete_para_style_3/{id}', 'BackendController@delete_para_style_3')->name('delete_para_style_3');

// para_style_4 Section
Route::post('/admin/store_para_style_4', 'BackendController@store_para_style_4')->name('store_para_style_4');
Route::post('/admin/edit_para_style_4', 'BackendController@edit_para_style_4')->name('edit_para_style_4');
Route::get('/admin/delete_para_style_4/{id}', 'BackendController@delete_para_style_4')->name('delete_para_style_4');

// para_style_5 Section
Route::post('/admin/store_para_style_5', 'BackendController@store_para_style_5')->name('store_para_style_5');
Route::post('/admin/edit_para_style_5', 'BackendController@edit_para_style_5')->name('edit_para_style_5');
Route::get('/admin/delete_para_style_5/{id}', 'BackendController@delete_para_style_5')->name('delete_para_style_5');

// Case Study Section
Route::post('/admin/store_case_study', 'BackendController@store_case_study')->name('store_case_study');
Route::post('/admin/edit_case_study', 'BackendController@edit_case_study')->name('edit_case_study');
Route::get('/admin/delete_case_study/{id}', 'BackendController@delete_case_study')->name('delete_case_study');


// Section 15
Route::post('/admin/store_section_15', 'BackendController@store_section_15')->name('store_section_15');
Route::post('/admin/edit_section_15', 'BackendController@edit_section_15')->name('edit_section_15');
Route::get('/admin/delete_section_15/{id}', 'BackendController@delete_section_15')->name('delete_section_15');

// Section 16
Route::post('/admin/store_section_16', 'BackendController@store_section_16')->name('store_section_16');
Route::post('/admin/edit_section_16', 'BackendController@edit_section_16')->name('edit_section_16');
Route::get('/admin/delete_section_16/{id}', 'BackendController@delete_section_16')->name('delete_section_16');

// Section 17
Route::post('/admin/store_section_17', 'BackendController@store_section_17')->name('store_section_17');
Route::post('/admin/edit_section_17', 'BackendController@edit_section_17')->name('edit_section_17');
Route::get('/admin/delete_section_17/{id}', 'BackendController@delete_section_17')->name('delete_section_17');

// Section 18
Route::post('/admin/store_section_18', 'BackendController@store_section_18')->name('store_section_18');
Route::post('/admin/edit_section_18', 'BackendController@edit_section_18')->name('edit_section_18');
Route::get('/admin/delete_section_18/{id}', 'BackendController@delete_section_18')->name('delete_section_18');

// Section 19
Route::post('/admin/store_section_19', 'BackendController@store_section_19')->name('store_section_19');
Route::post('/admin/edit_section_19', 'BackendController@edit_section_19')->name('edit_section_19');
Route::get('/admin/delete_section_19/{id}', 'BackendController@delete_section_19')->name('delete_section_19');

// Section 20
Route::post('/admin/store_section_20', 'BackendController@store_section_20')->name('store_section_20');
Route::post('/admin/edit_section_20', 'BackendController@edit_section_20')->name('edit_section_20');
Route::get('/admin/delete_section_20/{id}', 'BackendController@delete_section_20')->name('delete_section_20');

// Section 21
Route::post('/admin/store_section_21', 'BackendController@store_section_21')->name('store_section_21');
Route::post('/admin/edit_section_21', 'BackendController@edit_section_21')->name('edit_section_21');
Route::get('/admin/delete_section_21/{id}', 'BackendController@delete_section_21')->name('delete_section_21');

// Section 22
Route::post('/admin/store_section_22', 'BackendController@store_section_22')->name('store_section_22');
Route::post('/admin/edit_section_22', 'BackendController@edit_section_22')->name('edit_section_22');
Route::get('/admin/delete_section_22/{id}', 'BackendController@delete_section_22')->name('delete_section_22');

// Section 23
Route::post('/admin/store_section_23', 'BackendController@store_section_23')->name('store_section_23');
Route::post('/admin/edit_section_23', 'BackendController@edit_section_23')->name('edit_section_23');
Route::get('/admin/delete_section_23/{id}', 'BackendController@delete_section_23')->name('delete_section_23');


// Social Media
Route::post('/admin/store_social_media', 'BackendController@store_social_media')->name('store_social_media');
Route::post('/admin/edit_social_media', 'BackendController@edit_social_media')->name('edit_social_media');
Route::get('/admin/delete_social_media/{id}', 'BackendController@delete_social_media')->name('delete_social_media');


// Footer Section
Route::post('/admin/store_footer_section', 'BackendController@store_footer_section')->name('store_footer_section');
Route::post('/admin/edit_footer_section', 'BackendController@edit_footer_section')->name('edit_footer_section');
Route::get('/admin/delete_footer_section/{id}', 'BackendController@delete_footer_section')->name('delete_footer_section');

// Logo Section
Route::post('/admin/store_logo', 'BackendController@store_logo')->name('store_logo');
Route::post('/admin/edit_logo', 'BackendController@edit_logo')->name('edit_logo');
Route::get('/admin/delete_logo/{id}', 'BackendController@delete_logo')->name('delete_footer_section');

// Create System users
Route::get('/admin/user_profile/{id}', 'BackendController@system_user_profile')->name('system_user_profile');
Route::post('/admin/store_system_user', 'BackendController@store_system_user')->name('store_system_user');
Route::post('/admin/edit_system_user', 'BackendController@edit_system_user')->name('edit_system_user');
Route::get('/admin/delete_system_user/{id}', 'BackendController@delete_system_user')->name('delete_system_user');


Route::get('/{id}', 'WelcomeController@index')->name('pages');
Route::get('/admin/page_sections', 'BackendController@page_sections')->name('page_sections');


Route::post('/ajax_post', 'WelcomeController@ajax_post')->name('ajax_post');

// Services Section
Route::post('/admin/store_service', 'BackendController@store_service')->name('store_service');
Route::post('/admin/edit_service', 'BackendController@edit_service')->name('edit_service');
Route::get('/admin/delete_service/{id}', 'BackendController@delete_service')->name('delete_service');


Route::post('/admin/store_footer_bottom', 'BackendController@store_footer_bottom')->name('store_footer_bottom');



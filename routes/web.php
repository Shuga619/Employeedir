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

/*
|----------------------------------------------------------------------------------
| Routes for Users
|----------------------------------------------------------------------------------
*/ 
// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'DirectoryController@getDirectorySearch');
Route::get('/BNBLEmployeeDirectory', 'DirectoryController@getDirectorySearch')->name('get_search_path');
Route::get('/BNBLEmployeeDirectory/result', 'DirectoryController@getResult')->name('result_path');
Route::get('/BNBLEmployeeDirectory/result/{id}/show/{ename}/{location}/{department}', 'DirectoryController@getShow')->name('show_result_path');
Route::post('/BNBLEmployeeDirectory', 'DirectoryController@searchDirectory')->name('search_directory_path');


/*
|----------------------------------------------------------------------------------
| Routes for DOA
|----------------------------------------------------------------------------------
*/ 
Route::get('/DOA', 'DOAController@index')->name('doa_index_path');
Route::post('/DOA/get-vertical', 'DOAController@getRoute')->name('get_route_path');
Route::get('/DOA/credit-vertical', 'DOAController@credit')->name('credit_doa_path');
Route::get('/DOA/finance-vertical', 'DOAController@finance')->name('finance_doa_path');
Route::get('/DOA/operation-vertical', 'DOAController@operation')->name('operation_doa_path');
Route::get('/DOA/resource-vertical', 'DOAController@resource')->name('resource_doa_path');
Route::get('/DOA/strategy-and-information-technology-vertical', 'DOAController@sit')->name('strategy_and_information_technology_doa_path');


/*
|----------------------------------------------------------------------------------
| Routes for Employee Login
|----------------------------------------------------------------------------------
*/ 
Route::get('/BNBLEmployeeDirectory/edit', 'InfoController@getEmployee')->name('login_info_path');
Route::get('/BNBLEmployeeDirectory/otp-verification/{eid}', 'InfoController@getOtp')->name('otp_path');
Route::get('/BNBLEmployeeDirectory/edit/{eid}/info', 'InfoController@getEditForm')->name('edit_info_path');
Route::post('/BNBLEmployeeDirectory/otp-verification', 'InfoController@sendOTP')->name('get_employee_and_send_otp_path');
Route::post('BNBLEmployeeDirectory/verify_otp', 'InfoController@verifyOTP')->name('verify_otp_path');
Route::post('BNBLEmployeeDirectory/update-employee-info', 'InfoController@updateInfo')->name('update_employee_info_path');
/*
|----------------------------------------------------------------------------------
| Routes for Administrator
|----------------------------------------------------------------------------------
*/ 
Route::get('/BNBLEmployeeDirectory/admin-index', 'BackendController@index')->name('index_path');
Route::get('/BNBLEmployeeDirectory/admin-directory','BackendController@directory')->name('directory_path');
Route::get('/BNBLEmployeeDirectory/admin-add-contact', 'BackendController@addContactForm')->name('add_contact_path');
Route::get('/BNBLEmployeeDirectory/admin-add-contact/bulk-upload', 'BackendController@bulkUploadForm')->name('bulkupload_path');

Route::post('/BNBLEmployeeDirectory/admin-add-contact', 'ContactController@addContact')->name('add_to_contact_path');
Route::get('BNBLEmployeeDirectory/{id}/view', 'ContactController@viewContact')->name('view_contact_path');
Route::get('/BNBLEmployeeDirectory/{id}/edit-contact', 'ContactController@editContact')->name('edit_contact_path');
Route::post('/BNBLEmployeeDirectory/update-contact', 'ContactController@updateContact')->name('update_contact_path');
Route::post('BNBLEmployeeDirectory/bulkupload', 'ContactController@bulkUpload')->name('bulkupload_to_contact_path');
Route::get('BNBLEmployeeDirectory/{id}/delete/', 'ContactController@deleteContact')->name('delete_contact_path');
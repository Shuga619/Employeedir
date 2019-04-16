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
Route::get('/DOA/credit-vertical', 'DOAController@credit')->name('credit_doa_path');
Route::get('/DOA/finance-vertical', 'DOAController@finance')->name('finance_doa_path');

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
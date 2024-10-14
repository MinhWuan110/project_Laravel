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
Route::get('/', 'App\Http\Controllers\HomeController@index')->name("home.index");  
Route::get('/contact_us', 'App\Http\Controllers\HomeController@contact_us')->name("home.contact_us");
Route::get('/blog', 'App\Http\Controllers\HomeController@blog')->name("home.blog");
Route::get('/single', 'App\Http\Controllers\HomeController@single')->name("home.single");

// admin 
Route::get('/admin/dashboard', 'App\Http\Controllers\AdminController@index')->name("admin.index");
Route::get('/admin/flot', 'App\Http\Controllers\AdminController@flot')->name("admin.flot");
Route::get('/admin/morris', 'App\Http\Controllers\AdminController@morris')->name("admin.morris");
Route::get('/admin/tables', 'App\Http\Controllers\AdminController@tables')->name("admin.tables");
Route::get('/admin/forms', 'App\Http\Controllers\AdminController@forms')->name("admin.forms");
Route::get('/admin/panels_wells', 'App\Http\Controllers\AdminController@panels_wells')->name("admin.panels_wells");
Route::get('/admin/buttons', 'App\Http\Controllers\AdminController@buttons')->name("admin.buttons");
Route::get('/admin/notifications', 'App\Http\Controllers\AdminController@notifications')->name("admin.notifications");
Route::get('/admin/typography', 'App\Http\Controllers\AdminController@typography')->name("admin.typography");
Route::get('/admin/icons', 'App\Http\Controllers\AdminController@icons')->name("admin.icons");
Route::get('/admin/grid', 'App\Http\Controllers\AdminController@grid')->name("admin.grid");
Route::get('/admin/blank', 'App\Http\Controllers\AdminController@blank')->name("admin.blank");
Route::get('/admin/login', 'App\Http\Controllers\AdminController@login')->name("admin.login");







//catories 
Route::get('/admin/catories', 'App\Http\Controllers\AdminController@catories')->name("admin.catories");
Route::post('/admin/catories', 'App\Http\Controllers\AdminCatoriesController@create_catories')->name("create.catories");
Route::get('/admin/catories/edit/{id}', 'App\Http\Controllers\AdminCatoriesController@edit_catories')->name("edit.catories");
Route::put('/admin/catories/update/{id}', 'App\Http\Controllers\AdminCatoriesController@update_catories')->name("update.catories");
Route::delete('/admin/catories/{id}', 'App\Http\Controllers\AdminCatoriesController@delete_catories')->name("delete.catories");
Route::get('/admin/catories/search', 'App\Http\Controllers\AdminCatoriesController@search_catories')->name('search.catories');

// Route::post('/catories', [CategoryController::class, 'store'])->name('categories.store');

// // Route cho chỉnh sửa danh mục (hiển thị form)
// Route::get('/catories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');

// // Route cho cập nhật danh mục
// Route::put('/catories/{id}', [CategoryController::class, 'update'])->name('categories.update');

// // Route cho xóa danh mục
// Route::delete('/catories/{id}', [CategoryController::class, 'destroy'])->name('categories.destroy');

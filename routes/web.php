<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\AdminAthanticationMiddleware;
use Illuminate\Support\Facades\Auth;
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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [FrontendController::class, 'index']);
Route::get('blogs/', [FrontendController::class, 'blogs']);
Route::get('contact', [FrontendController::class, 'contact']);
Route::get('/blog/{category}/{slug}', [FrontendController::class, 'single_post']);
Route::get('about', [FrontendController::class, 'about']);
Route::get('services', [FrontendController::class, 'services']);
Route::get('kingurl', [FrontendController::class, 'kingurl']);


/*Admin Route start here*/



// Route::get('/admin', [AdminController::class, 'index']);
// Route::get('/admin/blog-list', [AdminController::class, 'blog_list']);
// Route::get('/admin/delete/{id}', [AdminController::class, 'blogDelete']);
// Route::get('/admin/edit/{id}', [AdminController::class, 'blogedit']);
// Route::post('admin/update/{id}', [AdminController::class, 'update']);
// Route::get('/admin/create-new-blog', [AdminController::class, 'create_new_blog']);
// Route::post('/admin/save-create-new-blog', [AdminController::class, 'save_create_new_blog']);
// Route::post('/admin/save-create-new-blog', [AdminController::class, 'save_create_new_blog']);
// Route::get('/admin/add-category', [AdminController::class, 'add_category']);
// Route::post('/admin/save-category', [AdminController::class, 'save_category']);
// Route::get('/admin/blog-view/{id}', [AdminController::class, 'blogview']);
// Route::get('/admin/status_update', [AdminController::class, 'status_update']);

// Auth things going here

Route::get('/admin/login', [AuthController::class, 'admin_login']);
Route::post('/admin/loginvalidation', [AuthController::class, 'loginvalidation']);
Route::get('/admin/register', [AuthController::class, 'sign_up']);
Route::post('/admin/registerdata_save',[AuthController::class,'registerdata_save']);
Route::get('/admin/logout',[AuthController::class,'logout']);

// Authantication route going here





Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/blog-list', [AdminController::class, 'blog_list']);
Route::get('/admin/delete/{id}', [AdminController::class, 'blogDelete']);
Route::get('/admin/edit/{id}', [AdminController::class, 'blogedit']);
Route::post('admin/update/{id}', [AdminController::class, 'update']);
Route::get('/admin/create-new-blog', [AdminController::class, 'create_new_blog']);
Route::post('/admin/save-create-new-blog', [AdminController::class, 'save_create_new_blog']);
Route::post('/admin/save-create-new-blog', [AdminController::class, 'save_create_new_blog']);
Route::get('/admin/add-category', [AdminController::class, 'add_category']);
Route::post('/admin/save-category', [AdminController::class, 'save_category']);
Route::get('/admin/blog-view/{id}', [AdminController::class, 'blogview']);
Route::get('/admin/status_update', [AdminController::class, 'status_update']);

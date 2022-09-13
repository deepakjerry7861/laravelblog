<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\AdminController;
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
Route::get('blogs', [FrontendController::class, 'blogs']);
Route::get('contact', [FrontendController::class, 'contact']);
Route::get('single-post', [FrontendController::class, 'single_post']);
Route::get('about', [FrontendController::class, 'about']);
Route::get('services', [FrontendController::class, 'services']);


/*Admin Route start here*/

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/login', [AdminController::class, 'admin_login']);
Route::get('/admin/register', [AdminController::class, 'sign_up']);
Route::get('/admin/create-new-blog', [AdminController::class, 'create_new_blog']);

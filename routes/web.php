<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ComboController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LicenseController;
use App\Http\Controllers\RenewController;
use App\Models\Category;
use App\Models\Combo;
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
    return view('auth.login');
});

Route::middleware(['auth:sanctum', 'verified','auth'])->get('/dashboard', function () {
    return view('dashboard',["categories" => Category::all()]);
})->name('dashboard');

Route::resource('categories', CategoryController::class)->middleware(['auth','authadmin']);

Route::middleware(['auth:sanctum', 'verified','authadmin'])->get('admin/categories', [CategoryController::class, 'index'])->name('manage-categories');

Route::get('categories/{slug}', [CategoryController::class, 'show'])->middleware('auth');

Route::post('deletecategory', [CategoryController::class, 'delete'])->name('categories.delete')->middleware(['auth','authadmin']);

Route::resource('admin/users', UserController::class)->middleware(['auth','authadmin']);

Route::middleware(['auth:sanctum', 'verified','authadmin'])->get('admin/users', [UserController::class, 'index'])->name('manage.users');

Route::resource('license', LicenseController::class)->middleware(['auth','authadmin']);

Route::get('admin/licenses', [LicenseController::class, 'index'])->middleware(['auth','authadmin'])->name('manage.licenses');

Route::get('renew',[RenewController::class, 'index'])->name('license.renew');

Route::post('check',[RenewController::class, 'check'])->name('license.check');

Route::get('test',[RenewController::class, 'index'])->middleware('authadmin');
Route::get('admin/combos', [ComboController::class, 'index'])->name('manage.combos');
Route::resource('combo', ComboController::class)->middleware(['auth','authadmin']);

Route::post('admin/upload', [ComboController::class, 'uploadCombos'])->name('combo.upload');

Route::post('download/{id}', [ComboController::class, 'download'])->name('combo.download');


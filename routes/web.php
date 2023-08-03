<?php

use App\Http\Controllers\PackagesController;
use App\Http\Controllers\UserHomeController;
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

// 1.X MASTER PACKAGES
// 1.1 PACKAGES
Route::get('/admin/packages', [PackagesController::class, 'index'])->name('admin.packages.index');
Route::get('/admin/packages/create', [PackagesController::class, 'create'])->name('admin.packages.create');
Route::post('/admin/packages', [PackagesController::class, 'store'])->name('admin.packages.store');
Route::get('/admin/packages/edit/{packages:packages_id}', [PackagesController::class, 'edit'])->name('admin.packages.edit');
Route::put('/admin/packages/{packages:packages_id}', [PackagesController::class, 'update'])->name('admin.packages.update');
Route::delete('/admin/packages/{packages:packages_id}', [PackagesController::class, 'destroy'])->name('admin.packages.destroy');
// 1.2 DETAIL ITENARY
// 1.3 INCLUDED PACKAGES
// 1.4 ADDITONAL NOTE

Route::get('/admin/pickup', [PackagesController::class, 'index'])->name('admin.pickup.index');

Route::get('/admin/activities', [PackagesController::class, 'index'])->name('admin.activities.index');

// 2.X USER
Route::get('/', [UserHomeController::class, 'index'])->name('user.home');

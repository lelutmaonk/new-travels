<?php

use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\PackagesAdditionalNoteController;
use App\Http\Controllers\PackagesController;
use App\Http\Controllers\PackagesIncludedController;
use App\Http\Controllers\PackagesItineraryController;
use App\Http\Controllers\PickupController;
use App\Http\Controllers\PickupOrderProcessController;
use App\Http\Controllers\PickupPriceController;
use App\Http\Controllers\PickupTermsConditionsController;
use App\Http\Controllers\UserHomeController;
use App\Http\Controllers\UserHomeIndonesiaController;
use App\Models\PickupOrderProcess;
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
// 1.0 DASHBOARD
Route::get('/admin', function(){return view('admin.layouts._blank', ['title' => 'Dashboard']);})->name('admin.dashboard.index');
// 1.1 PACKAGES
Route::get('/admin/packages', [PackagesController::class, 'index'])->name('admin.packages.index');
Route::get('/admin/packages/create', [PackagesController::class, 'create'])->name('admin.packages.create');
Route::post('/admin/packages', [PackagesController::class, 'store'])->name('admin.packages.store');
Route::get('/admin/packages/edit/{packages:packages_id}', [PackagesController::class, 'edit'])->name('admin.packages.edit');
Route::put('/admin/packages/{packages:packages_id}', [PackagesController::class, 'update'])->name('admin.packages.update');
Route::delete('/admin/packages/{packages:packages_id}', [PackagesController::class, 'destroy'])->name('admin.packages.destroy');
// 1.2 DETAIL ITENARY
Route::get('/admin/packages-itinerary', [PackagesItineraryController::class, 'index'])->name('admin.packages-itinerary.index');
Route::get('/admin/packages-itinerary/{packages:packages_id}', [PackagesItineraryController::class, 'list'])->name('admin.packages-itinerary.list');
Route::get('/admin/packages-itinerary/create/{packages:packages_id}', [PackagesItineraryController::class, 'create'])->name('admin.packages-itinerary.create');
Route::post('/admin/packages-itinerary', [PackagesItineraryController::class, 'store'])->name('admin.packages-itinerary.store');
Route::get('/admin/packages-itinerary/edit/{itinerary:itinerary_id}', [PackagesItineraryController::class, 'edit'])->name('admin.packages-itinerary.edit');
Route::put('/admin/packages-itinerary/{itinerary:itinerary_id}', [PackagesItineraryController::class, 'update'])->name('admin.packages-itinerary.update');
Route::delete('/admin/packages-itinerary/{itinerary:itinerary_id}', [PackagesItineraryController::class, 'destroy'])->name('admin.packages-itinerary.destroy');
// 1.3 INCLUDED PACKAGES
Route::get('/admin/packages-included', [PackagesIncludedController::class, 'index'])->name('admin.packages-included.index');
Route::get('/admin/packages-included/{packages:packages_id}', [PackagesIncludedController::class, 'list'])->name('admin.packages-included.list');
Route::get('/admin/packages-included/create/{packages:packages_id}', [PackagesIncludedController::class, 'create'])->name('admin.packages-included.create');
Route::post('/admin/packages-included', [PackagesIncludedController::class, 'store'])->name('admin.packages-included.store');
Route::get('/admin/packages-included/edit/{included:included_id}', [PackagesIncludedController::class, 'edit'])->name('admin.packages-included.edit');
Route::put('/admin/packages-included/{included:included_id}', [PackagesIncludedController::class, 'update'])->name('admin.packages-included.update');
Route::delete('/admin/packages-included/{included:included_id}', [PackagesIncludedController::class, 'destroy'])->name('admin.packages-included.destroy');
// 1.4 ADDITONAL NOTE
Route::get('/admin/packages-additional-note', [PackagesAdditionalNoteController::class, 'index'])->name('admin.packages-additional-note.index');
Route::get('/admin/packages-additional-note/{packages:packages_id}', [PackagesAdditionalNoteController::class, 'list'])->name('admin.packages-additional-note.list');
Route::get('/admin/packages-additional-note/create/{packages:packages_id}', [PackagesAdditionalNoteController::class, 'create'])->name('admin.packages-additional-note.create');
Route::post('/admin/packages-additional-note', [PackagesAdditionalNoteController::class, 'store'])->name('admin.packages-additional-note.store');
Route::get('/admin/packages-additional-note/edit/{additional_note:additional_note_id}', [PackagesAdditionalNoteController::class, 'edit'])->name('admin.packages-additional-note.edit');
Route::put('/admin/packages-additional-note/{additional_note:additional_note_id}', [PackagesAdditionalNoteController::class, 'update'])->name('admin.packages-additional-note.update');
Route::delete('/admin/packages-additional-note/{additional_note:additional_note_id}', [PackagesAdditionalNoteController::class, 'destroy'])->name('admin.packages-additional-note.destroy');

// 2.1 PICKUP
Route::get('/admin/pickup', [PickupController::class, 'index'])->name('admin.pickup.index');
Route::get('/admin/pickup/create', [PickupController::class, 'create'])->name('admin.pickup.create');
Route::post('/admin/pickup', [PickupController::class, 'store'])->name('admin.pickup.store');
Route::get('/admin/pickup/edit/{pickup:pickup_id}', [PickupController::class, 'edit'])->name('admin.pickup.edit');
Route::put('/admin/pickup/{pickup:pickup_id}', [PickupController::class, 'update'])->name('admin.pickup.update');
Route::delete('/admin/pickup/{pickup:pickup_id}', [PickupController::class, 'destroy'])->name('admin.pickup.destroy');
// 2.2 Terms Conditions
Route::get('/admin/pickup-terms-conditions', [PickupTermsConditionsController::class, 'index'])->name('admin.pickup-terms-conditions.index');
Route::get('/admin/pickup-terms-conditions/{pickup:pickup_id}', [PickupTermsConditionsController::class, 'list'])->name('admin.pickup-terms-conditions.list');
Route::get('/admin/pickup-terms-conditions/create/{pickup:pickup_id}', [PickupTermsConditionsController::class, 'create'])->name('admin.pickup-terms-conditions.create');
Route::post('/admin/pickup-terms-conditions', [PickupTermsConditionsController::class, 'store'])->name('admin.pickup-terms-conditions.store');
Route::get('/admin/pickup-terms-conditions/edit/{terms_conditions:terms_conditions_id}', [PickupTermsConditionsController::class, 'edit'])->name('admin.pickup-terms-conditions.edit');
Route::put('/admin/pickup-terms-conditions/{terms_conditions:terms_conditions_id}', [PickupTermsConditionsController::class, 'update'])->name('admin.pickup-terms-conditions.update');
Route::delete('/admin/pickup-terms-conditions/{terms_conditions:terms_conditions_id}', [PickupTermsConditionsController::class, 'destroy'])->name('admin.pickup-terms-conditions.destroy');
// 2.3 Process Order
Route::get('/admin/pickup-process-order', [PickupOrderProcessController::class, 'index'])->name('admin.pickup-process-order.index');
Route::get('/admin/pickup-process-order/{pickup:pickup_id}', [PickupOrderProcessController::class, 'list'])->name('admin.pickup-process-order.list');
Route::get('/admin/pickup-process-order/create/{pickup:pickup_id}', [PickupOrderProcessController::class, 'create'])->name('admin.pickup-process-order.create');
Route::post('/admin/pickup-process-order', [PickupOrderProcessController::class, 'store'])->name('admin.pickup-process-order.store');
Route::get('/admin/pickup-process-order/edit/{order_process:order_process_id}', [PickupOrderProcessController::class, 'edit'])->name('admin.pickup-process-order.edit');
Route::put('/admin/pickup-process-order/{order_process:order_process_id}', [PickupOrderProcessController::class, 'update'])->name('admin.pickup-process-order.update');
Route::delete('/admin/pickup-process-order/{order_process:order_process_id}', [PickupOrderProcessController::class, 'destroy'])->name('admin.pickup-process-order.destroy');
// 2.4 Pickup Price
Route::get('/admin/pickup-price', [PickupPriceController::class, 'index'])->name('admin.pickup-price.index');
Route::get('/admin/pickup-price/{pickup:pickup_id}', [PickupPriceController::class, 'list'])->name('admin.pickup-price.list');
Route::get('/admin/pickup-price/create/{pickup:pickup_id}', [PickupPriceController::class, 'create'])->name('admin.pickup-price.create');
Route::post('/admin/pickup-price', [PickupPriceController::class, 'store'])->name('admin.pickup-price.store');
Route::get('/admin/pickup-price/edit/{pickup_price:pickup_price_id}', [PickupPriceController::class, 'edit'])->name('admin.pickup-price.edit');
Route::put('/admin/pickup-price/{pickup_price:pickup_price_id}', [PickupPriceController::class, 'update'])->name('admin.pickup-price.update');
Route::delete('/admin/pickup-price/{pickup_price:pickup_price_id}', [PickupPriceController::class, 'destroy'])->name('admin.pickup-price.destroy');


// 3.1 ACTIVITIES
Route::get('/admin/activities', [ActivitiesController::class, 'index'])->name('admin.activities.index');
Route::get('/admin/activities/create', [ActivitiesController::class, 'create'])->name('admin.activities.create');
Route::post('/admin/activities', [ActivitiesController::class, 'store'])->name('admin.activities.store');
Route::get('/admin/activities/edit/{activities:activities_id}', [ActivitiesController::class, 'edit'])->name('admin.activities.edit');
Route::put('/admin/activities/{activities:activities_id}', [ActivitiesController::class, 'update'])->name('admin.activities.update');
Route::delete('/admin/activities/{activities:activities_id}', [ActivitiesController::class, 'destroy'])->name('admin.activities.destroy');

// 2.X USER
Route::get('/', [UserHomeController::class, 'index'])->name('user.home');
Route::get('/packages', [UserHomeController::class, 'packages'])->name('user.packages');
Route::get('/packages/{packages:slug}', [UserHomeController::class, 'packagesDetail'])->name('user.packages-detail');
Route::get('/pickup', [UserHomeController::class, 'pickup'])->name('user.pickup');
Route::get('/pickup/{pickup:slug}', [UserHomeController::class, 'pickupDetail'])->name('user.pickup-detail');
Route::get('/activities', [UserHomeController::class, 'activities'])->name('user.activities');
Route::get('/activities/{activities:slug}', [UserHomeController::class, 'activitiesDetail'])->name('user.activities-detail');
Route::get('/about', [UserHomeController::class, 'about'])->name('user.about');
Route::get('/contact', [UserHomeController::class, 'contact'])->name('user.contact');

Route::get('/id', [UserHomeIndonesiaController::class, 'index'])->name('user.home-id');

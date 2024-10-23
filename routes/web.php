<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ReservationController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
 */

Route::prefix('our-offers')->group(function () {
    Route::controller(WebsiteController::class)->group(function () {
        Route::get('/', 'show')->name('our-offers.show');
        Route::get('/{slug}', 'index')->name('our-offers.index');
        Route::post('reservation', 'reservation')->name('our-offers.reservation');
    });

});

Route::get('thanks', [WebsiteController::class, 'thanks'])->name('thanks');
Route::get('private-policy', [WebsiteController::class, 'privatePolicy'])->name('private-policy');
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath'],
    ],
    function () {
        Auth::routes();
        Route::group(['middleware' => "auth:web"], function () {
            Route::group(['middleware' => "admin-auth", 'auto-check-permission'], function () {
                Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
                // users and roles
                Route::resource('users', UserController::class);
                Route::resource('roles', RoleController::class);
                // general settings
                Route::resource('offers', OfferController::class);
                Route::resource('reservations', ReservationController::class);

                Route::resource('partners', PartnerController::class);
                Route::resource('categories', CategoryController::class);
                Route::resource('profile', ProfileController::class)->only(['index', 'update']);
            });
        });
    }
);

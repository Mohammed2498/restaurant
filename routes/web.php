<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Front\CategoryController as FrontCategoryController ;
use App\Http\Controllers\Front\MenuController as FrontMenuController ;
use App\Http\Controllers\Front\ReservationController as FrontReservationController ;

use App\Http\Controllers\Admin\MenuController;
use App\Http\Controllers\Admin\TableController;
use App\Http\Controllers\Admin\ReservationController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('front.home');
});

Route::get('/categories',[FrontCategoryController::class,'index'])->name('categories.index');
Route::get('/categories/{category}',[FrontCategoryController::class,'show'])->name('categories.show');
Route::get('/menus',[FrontMenuController::class,'index'])->name('menus.index');
Route::get('/reservation/step-one',[FrontReservationController::class,'stepOne'])->name('reservations.step.one');
Route::post('/reservation/step-one',[FrontReservationController::class,'storeStepOne'])->name('reservations.store.step.one');
Route::get('/reservation/step-two',[FrontReservationController::class,'stepTwo'])->name('reservations.step.two');
Route::post('/reservation/step-two',[FrontReservationController::class,'storeStepTwo'])->name('reservations.store.step.two');
Route::get('/thankyou', [\App\Http\Controllers\Front\HomeController::class, 'thankyou'])->name('thankyou');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', 'admin'])->name('admin.')->prefix('admin')->group(callback: function () {
    Route::get('/', [AdminController::class, 'index'])->name('index');
    Route::resource('/categories',CategoryController::class);
    Route::resource('/menus',MenuController::class);
    Route::resource('/tables',TableController::class);
    Route::resource('/reservations',ReservationController::class);
});
require __DIR__ . '/auth.php';




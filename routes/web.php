<?php

use App\Http\Controllers\editAboutSectionController;
use App\Http\Controllers\editFooterController;
use App\Http\Controllers\editHeaderController;
use App\Http\Controllers\editHeaderSectioncontroller;
use App\Http\Controllers\editPricingSectionController;
use App\Http\Controllers\editServicesSectionController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\welcomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/',[welcomeController::class,'index'])->name('welcome.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

/*Route for displaying services section to edit */
Route::middleware('auth')->group(function () {

    Route::get('/headeredit', [editHeaderSectioncontroller::class,"index"])->name('headeredit.index');
    Route::get('/Services',[editServicesSectionController::class,'index'])->name('editServices.index');

    Route::get('/About',[editAboutSectionController::class,'index'])->name('editAbout.index');
    
    Route::get('/Pricing',[editPricingSectionController::class,'index'])->name('editPricing.index');
      
    
    
    Route::get('/footeredit',[editFooterController::class,'index'])->name('editFooter.index');
});


Route::middleware('auth')->group(function () {
    Route::get('/Services/{datas}',[editServicesSectionController::class,'edit'])->name('updateServices.edit');

    Route::get('/About/{datas}',[editAboutSectionController::class,'edit'])->name('updateAbout.edit');
    
    Route::get('/Pricing/{datas}',[editPricingSectionController::class,'edit'])->name('updatePricing.edit');
      
    Route::get('/Header/{datas}',[editHeaderController::class,'edit'])->name('updateHeader.edit');
    
    Route::get('/updatefooter/{datas}',[editFooterController::class,'edit'])->name('updateFooter.edit');


});

Route::middleware('auth')->group(function () {

    Route::post('/',[editServicesSectionController::class,'store'])->name('updateServices.store');

    Route::post('/About',[editAboutSectionController::class,'store'])->name('updateAbout.store');
    
    Route::post('/Pricing',[editPricingSectionController::class,'store'])->name('updatePricing.store');
      
    Route::post('/Header',[editHeaderController::class,'store'])->name('updateHeader.store');
    
    Route::post('/footer',[editFooterController::class,'store'])->name('updateFooter.store');
    
});

<?php

use App\Http\Controllers\ProfileController;
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
    return view('welcome');
});

// Get Routes
Route::get('/',[App\Http\Controllers\Client\WebsiteController::class, 'index'])->name('/');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    Route::get('/Dashboard',[App\Http\Controllers\Management\DashboardController::class, 'index'])->name('/Dashboard');
    Route::get('/About Us',[App\Http\Controllers\Management\AboutController::class, 'index'])->name('/About Us');
    Route::get('/Logo Config',[App\Http\Controllers\Management\LogoController::class, 'index'])->name('/Logo Config');
    Route::get('/Packages',[App\Http\Controllers\Management\PackagesController::class, 'index'])->name('/Packages');

    // Post Routes
    Route::post('/Add/Theme',[App\Http\Controllers\Management\AboutController::class, 'addTheme'])->name('/Add/Theme');
    Route::post('/Update/Theme/{id}',[App\Http\Controllers\Management\AboutController::class, 'updateTheme'])->name('/Update/Theme');

    Route::post('/Add/ThemeImage',[App\Http\Controllers\Management\ThemeImageController::class, 'addBannerImage'])->name('/Add/ThemeImage');
    Route::post('/Update/ThemeImage/{id}',[App\Http\Controllers\Management\ThemeImageController::class, 'updateBannerImage'])->name('/Update/ThemeImage/');

    Route::post('/Add/Vision',[App\Http\Controllers\Management\VisionController::class, 'addVision'])->name('/Add/Vision');
    Route::post('/Update/Vision/{id}',[App\Http\Controllers\Management\VisionController::class, 'updateVision'])->name('/Update/Vision/');


    Route::post('/Add/History',[App\Http\Controllers\Management\HistoryController::class, 'addHistory'])->name('/Add/History');
    Route::post('/Update/History/{id}',[App\Http\Controllers\Management\HistoryController::class, 'updateHistory'])->name('/Update/History');
    Route::post('/Add/Event',[App\Http\Controllers\Management\EventsController::class, 'addEvent'])->name('/Add/Event');

    Route::post('/Add/Logo',[App\Http\Controllers\Management\LogoController::class, 'addLogo'])->name('/Add/Logo');
    Route::post('/Update/Logo/{id}',[App\Http\Controllers\Management\LogoController::class, 'updateLogo'])->name('/Update/Logo/');

    Route::post('/Add/Package',[App\Http\Controllers\Management\PackagesController::class, 'addPackage'])->name('/Add/Package');
    Route::post('/Add/Package/Item',[App\Http\Controllers\Management\PackagesController::class, 'addPackageItem'])->name('/Add/Package/Item');

});

require __DIR__.'/auth.php';

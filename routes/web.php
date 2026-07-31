<?php

use Illuminate\Support\Facades\Route;
<<<<<<< Updated upstream
=======
use App\Http\Controllers\NewsController;
use App\Http\Controllers\DownloadsController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ContactController;

>>>>>>> Stashed changes

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
Route::get('/', function () {
    return view ('welcome');
});
Route::get('/home', function () {
    return 'Home';
});
Route::get('/welcome', function () {
    return 'welcome';
});

Route::get('/about', function () {
    return view('About');
})->name('about');

Route::get('/users', function () {
    return ('Users');
});
<<<<<<< Updated upstream
=======



// News and Events routes
Route::get('/news-and-events', [NewsController::class, 'index'])->name('news.index');
Route::get('/news-and-events/{id}', [NewsController::class, 'show'])->name('news.show');

// Media Gallery routes
Route::get('/media-gallery', [MediaController::class, 'index'])->name('media.index');

// Contact Us routes
Route::get('/contact-us', [ContactController::class, 'index'])->name('contact.index');

// Forms and Downloads routes
Route::get('/forms-and-downloads', [DownloadsController::class, 'index'])->name('downloads.index');
>>>>>>> Stashed changes

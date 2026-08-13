<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\DownloadsController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\ContactController;
use Illuminate\Http\Request;
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

Route::get('/media-gallery', [MediaController::class, 'index'])->name('media.index');

Route::get('/forms-and-downloads', [DownloadsController::class, 'index'])->name('downloads.index');

Route::get('/contact-us', [ContactController::class, 'index'])->name('contact.index');

Route::match(['get','post'], '/find', function (Request $request) {
    if ($request->isMethod('post')) {
        $map = $request->input('map_number');
        $block = $request->input('block_number');
        $sheet = $request->input('sheet_number');
        $lot = $request->input('lot_number');

        $query = compact('map', 'block', 'sheet', 'lot');

        $result = [
            'name' => 'K. A. Perera',
            'size' => '0.75 ha',
            'current_stage' => 'Public Hearing & Claims Investigation',
            'file_number' => 'BMS-2026-78491',
            'gazette_number' => 'GZ-2021-0456',
            'gazetted_date' => '2021-06-15',
        ];

        return view('find', compact('query','result'));
    }

    return view('find');
})->name('find');

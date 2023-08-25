<?php

use App\Http\Controllers\ContentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SettingController;
use App\Models\QuestionAnswer;
use App\Models\Setting;
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
    return view('index', [
        'content' => QuestionAnswer::paginate(10),
        'padding' => Setting::first()
    ]);
});

Auth::routes();

Route::get('/admin', [HomeController::class, 'index'])->name('admin');
Route::resource('content', ContentController::class);
Route::post('/settings', [SettingController::class, 'update'])->name('settings-update');



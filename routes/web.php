<?php

use App\Http\Livewire\LoadMore;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainController;


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
Route::middleware(['set_locale'])->group(function(){
    Route::get('locale/{locale}',[MainController::class,'changeLocale'])->name('locale');
    Route::get('/main',[MainController::class,'index1'])->name('main');
    Route::get('/category/{slug}',[MainController::class,'category']);
    Route::get('/article/{slug}',[MainController::class,'article']);
    //Route::resource('admin/blogs', '\App\Http\Controllers\BlogC',['as'=>'admin']);
    Route::get('/search',[MainController::class,'search']);
    Route::get('/home',[HomeController::class,'index'])->name('home');


    
});
Route::resource('/po',\App\Http\Controllers\PoController::class);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

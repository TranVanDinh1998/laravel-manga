<?php

use App\Http\Controllers\Admin\MangaController;
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

Route::prefix('administrator')->as('admin.')->namespace('Admin')->group(function (){
    Route::get('/', function() {
        return view('admin.pages.dashboard.index');
    })->name('index');

    Route::prefix('mangas')->as('manga.')->group(function() {
        Route::get('/',[MangaController::class,'index'])->name('index');
        Route::get('/create',[MangaController::class,'create'])->name('create');
        Route::post('/store',[MangaController::class,'store'])->name('store');
        Route::get('/{id}/edit',[MangaController::class,'edit'])->name('edit');
        Route::post('/{id}',[MangaController::class,'update'])->name('update');
        Route::delete('/{id}',[MangaController::class,'delete'])->name('delete');
    });



    // Route::resource('mangas',MangaController::class);
});



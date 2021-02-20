<?php

use App\Http\Controllers\Admin\MangaController;
// use App\Http\Controllers\Admin2\MangaController;
use app\Http\Helpers\UploadImage;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ChapterController;
use App\Http\Controllers\Admin\DetailController;
use App\Models\Manga;
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

// Route::get('/', function () {
//     return view('user.pages.home');
// });
Route::get('/', function () {
    return view('user.pages.home');
});
Route::get('/filter', function () {
    return view('user.pages.filter');
});
Route::get('/manga', function () {
    return view('user.pages.manga');
});
Route::get('/read', function () {
    return view('user.pages.read');
});
Route::get('/search', function () {
    return view('user.pages.search');
});

Route::prefix('administrator')->as('admin.')->namespace('Admin')->group(function (){
    Route::get('/', function() {
        return view('admin.pages.dashboard.index');
    })->name('index');

    Route::prefix('mangas')->as('manga.')->group(function() {
        Route::get('/',[MangaController::class,'index'])->name('index');
        Route::get('/{id}/verify/{verified}',[MangaController::class,'verify'])->name('verify');
        Route::get('/create',[MangaController::class,'create'])->name('create');
        Route::post('/',[MangaController::class,'store'])->name('store');
        Route::get('/{id}/edit',[MangaController::class,'edit'])->name('edit');
        Route::post('/{id}',[MangaController::class,'update'])->name('update');
        Route::get('/{id}/delete',[MangaController::class,'delete'])->name('delete');
        Route::get('/recycle',[MangaController::class,'recycle'])->name('recycle');
        Route::get('/{id}/restore',[MangaController::class,'restore'])->name('restore');
        Route::get('/{id}/destroy',[MangaController::class,'destroy'])->name('destroy');

        Route::prefix('/{id}/chapters')->as('chapter.')->group(function(){
            Route::get('/',[ChapterController::class,'index'])->name('index');
            Route::get('/{chapter_id}/verify/{verified}',[ChapterController::class,'verify'])->name('verify');
            Route::get('/create',[ChapterController::class,'create'])->name('create');
            Route::post('/',[ChapterController::class,'store'])->name('store');
            // Route::get('/{chapter_id}/show',[ChapterController::class,'edit'])->name('show');
            // Route::post('/{chapter_id}',[ChapterController::class,'update'])->name('update');
            Route::get('/{chapter_id}/delete',[ChapterController::class,'delete'])->name('delete');
            Route::get('/recycle',[ChapterController::class,'recycle'])->name('recycle');
            Route::get('/{chapter_id}/restore',[ChapterController::class,'restore'])->name('restore');
            Route::get('/{chapter_id}/destroy',[ChapterController::class,'destroy'])->name('destroy');

            Route::prefix('/{chapter_id}/details')->as('detail.')->group(function () {
                Route::get('/',[DetailController::class,'index'])->name('index');
                Route::get('/{detail_id}/verify/{verified}',[DetailController::class,'verify'])->name('verify');
                Route::get('/create',[DetailController::class,'create'])->name('create');
                Route::post('/',[DetailController::class,'store'])->name('store');
                Route::get('/{detail_id}/edit',[DetailController::class,'edit'])->name('edit');
                Route::post('/{detail_id}',[DetailController::class,'update'])->name('update');
                Route::get('/{detail_id}/delete',[DetailController::class,'delete'])->name('delete');
                Route::get('/recycle',[DetailController::class,'recycle'])->name('recycle');
                Route::get('/{detail_id}/restore',[DetailController::class,'restore'])->name('restore');
                Route::get('/{detail_id}/destroy',[DetailController::class,'destroy'])->name('destroy');
            });

        });
    });

    Route::prefix('categories')->as('category.')->group(function() {
        Route::get('/',[CategoryController::class,'index'])->name('index');
        Route::get('/create',[CategoryController::class,'create'])->name('create');
        Route::post('/',[CategoryController::class,'store'])->name('store');
        Route::get('/{id}/edit',[CategoryController::class,'edit'])->name('edit');
        Route::post('/{id}',[CategoryController::class,'update'])->name('update');
        Route::get('/{id}/delete',[CategoryController::class,'delete'])->name('delete');
        Route::get('/recycle',[CategoryController::class,'recycle'])->name('recycle');
        Route::get('/{id}/restore',[CategoryController::class,'restore'])->name('restore');
        Route::get('/{id}/destroy',[CategoryController::class,'destroy'])->name('destroy');
    });



    // Route::resource('mangas',MangaController::class);
});




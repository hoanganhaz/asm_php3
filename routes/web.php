<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
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
// client
Route::get('/', function () {
    return view('clients.index');
});
Route::get('/about', function () {
    return view('clients.about');
});
Route::get('/lienhe', function () {
    return view('clients.lienhe');
});
Route::get('/Advertise', function () {
    return view('clients.Advertise');
});
Route::get('/tacgia', function () {
    return view('clients.tacgia');
});


//admin
Route::get('/adminn', function () {
    return view('admin.index');
});
// danh mục
Route::prefix('admin')
    ->as('admin.')
    ->group(function () {


        Route::prefix('Category')
            ->as('Category.')
            ->group(function () {
                Route::get('/', [CategoryController::class,'index'])->name('index');
                Route::get('/create_dm', [CategoryController::class,'create'])->name('create');
                Route::post('/store_dm', [CategoryController::class,'store'])->name('store');
                Route::get('{Category}/show_dm', [CategoryController::class,'show'])->name('show');
                Route::get('/{Category}/edit_dm', [CategoryController::class,'edit'])->name('edit');
                Route::put('/{Category}/update_dm', [CategoryController::class,'update'])->name('update');
                Route::delete('/{Category}/destroy_dm', [CategoryController::class,'destroy'])->name('destroy');

            });
        });

        // post
        Route::prefix('admin')
    ->as('admin.')
    ->group(function () {


        Route::prefix('Post')
            ->as('Post.')
            ->group(function () {
                Route::get('/post', [PostController::class,'index'])->name('index');
                Route::get('/create_post', [PostController::class,'create'])->name('create');
                Route::post('/store_post', [PostController::class,'store'])->name('store');
                Route::get('{Post}/show_post', [PostController::class,'show'])->name('show');
                Route::get('/{Post}/edit_post', [PostController::class,'edit'])->name('edit');
                Route::put('/{Post}/update_post', [PostController::class,'update'])->name('update');
                Route::delete('/{Post}/destroy_post', [PostController::class,'destroy'])->name('destroy');
                Route::get('/seach', [PostController::class,'seach'])->name('seach');

            });
        });



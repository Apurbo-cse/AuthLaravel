<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
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
Route::get('admin/dashboard', function () {
    return view('backend.index');
})->middleware(['auth'])->name('admin.dashboard');


Route::group(['prefix' => 'admin/', 'as' => 'admin.', 'middleware' => ['auth']], function () {
    Route::get('category', [CategoryController::class, 'index'])->name('category');
    Route::get('category/create', [CategoryController::class, 'create'])->name('create');
    Route::get('category/edit', [CategoryController::class, 'edit'])->name('edit');
});









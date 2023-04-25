<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\DataTableAjaxController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[WelcomeController::class,'index']) ->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



Route::view('car/create','car/create')->name('car/create');
Route::post('car/store',[CarController::class,'store']) ->name('car.store');
Route::get('car/index',[CarController::class,'index']) ->name('car.index');
Route::get('car/delete/{id}',[CarController::class,'delete'])->name('car.delete');
Route::get('car/view/{id}',[CarController::class,'view'])->name('car.view');
Route::get('car/edit/{id}',[CarController::class,'edit'])->name('car.edit');
Route::post('car/update/{id}',[CarController::class,'update'])->name('car.update');


Route::get('ajax-crud-datatable', [DataTableAjaxController::class, 'index'])->name('ajax-crud-datatable');
Route::post('store-company', [DataTableAjaxController::class, 'store']);
Route::post('edit-company', [DataTableAjaxController::class, 'edit']);
Route::post('delete-company', [DataTableAjaxController::class, 'destroy']);

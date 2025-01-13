<?php

use App\Http\Controllers\CategorController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/dashboard', function () {
    return view('dashboard_layout');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get("/addCategoryPage",[CategorController::class, 'create'])->name('addCategoryUi');
Route::post("/addCategoryPage_store", [CategorController::class, "store"])->name("addCategoryOnTabel");
Route::get("/allCategory", [CategorController::class, "index"])->name("getAllCategory");
Route::delete("/deleteCategory/{id}", [CategorController::class, "desttoy"])->name("deleteCategory");
Route::get("/editCategoryPage/{id}", [CategorController::class, "edit"])->name("editPageUi");
Route::put("/updateCategory/{id}", [CategorController::class, "update"])->name("updateCategory");


require __DIR__.'/auth.php';

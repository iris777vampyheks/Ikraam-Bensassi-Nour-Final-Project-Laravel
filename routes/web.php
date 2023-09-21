<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoleeController;
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
    return view('frontend.home');
})->name('frontend.home');

Route::get('/contact', function () {
    return view('frontend.contact');
})->name('contact');

Route::get('/shop', function () {
    return view('frontend.shop');
});

Route::get('/panier', function () {
    return view('frontend.panier');
});

Route::get('/coeur', function () {
    return view('frontend.coeur');
});

Route::get('/allproduitWM', function () {
    return view('backend.allproduitWM');
})->middleware(['auth', 'role:webmaster'])->name('backend.allproduitWM');

Route::get('/allproduit', function () {
    return view('backend.allproduit');
})->middleware(['auth', 'role:admin'])->name('backend.allproduit');

// page admin
Route::get('/alluser', [RoleeController::class, 'index'])->middleware(['auth', 'role:admin'])->name('backend.alluser');

Route::middleware('auth' , 'role:admin' )->group(function () {

    Route::delete("/backend/{user}", [RoleeController::class, "destroyuser"])->name('backend.destroyuser');
    Route::put("/backend/{user}", [RoleeController::class, "updateuser"])->name('backend.updateuser');
    
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

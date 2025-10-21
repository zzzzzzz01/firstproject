<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;

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

Route::get('/', [PageController::class,'homePage'])->name('home.page');

Route::get('/about', [PageController::class, 'aboutPage'])->name('about.page');

Route::get('/product', [PageController::class, 'productPage'])->name('product.page');

Route::get('/testimonial', [PageController::class, 'testimonialPage'])->name('testimonial.page');

Route::get('/contact', [PageController::class, 'contactPage'])->name('contact.page');

// Admin panel

Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('dashboard.page');

Route::get('/admin/all/watches', [AdminController::class, 'allWatches'])->name('watches.page');

Route::get('/admin/add/watches', [AdminController::class, 'addWatches'])->name('watches.addPage');

Route::post('/admin/add/watches', [AdminController::class, 'WatchStore'])->name('watch.store');





Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Auth::routes();

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\ProfileController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Models\Gallery;
use App\Models\Slider;


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
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/home', function () {
    return Inertia::render(
        'Home',
        [
            'sliders' => Slider::all(),
        ]
    );
})->middleware(['auth', 'verified'])->name('home');

Route::get('/about', function () {
    return Inertia::render('About');
})->middleware(['auth', 'verified'])->name('about');

Route::get('/products', function () {
    return Inertia::render(
        'Products',
        [
            'products' => Product::all(),
        ]
    );
})->middleware(['auth', 'verified'])->name('products');

Route::get('/orderlist', function () {
    return Inertia::render(
        'Orderlist',
        [
            'categories' => Category::with('products')->get(),
        ]
    );
})->name('orderlist');

Route::get('/gallery', function () {
    return Inertia::render(
        'Gallery',
        [
            'gallery' => Gallery::all(),
        ]
    );
})->name('gallery');

Route::get('/contactus', function () {
    return Inertia::render('Contactus');
})->middleware(['auth', 'verified'])->name('contactus');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';

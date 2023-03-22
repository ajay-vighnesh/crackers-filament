<?php

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
    return view('welcome');
});

Route::get('/login', function () {
    return redirect('/admin/login');
})->name('login');


// Route::get('/destinations/{slug}', function ($slug) {
//     return Inertia::render(
//         'DestinationDetail',
//         [
//             'destination' => Destination::with('packages')->where('url_slug', $slug)->first(),
//         ]
//     );
// })->name('destination.detail');
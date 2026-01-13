<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


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
//     return view('dashboard');
// })->name('dashboard');

Route::get('/', [ContactController::class, 'index'])->name('contact.dashboard');

Route::middleware('guest')->group(function () {
    Route::get('/contacts/{id}', [ContactController::class, 'edit'])->name('contact.edit');
    Route::patch('/contacts', [ContactController::class, 'update'])->name('contact.update');
    Route::delete('/contacts', [ContactController::class, 'destroy'])->name('contact.destroy');
});

require __DIR__.'/profile.php';

require __DIR__.'/auth.php';

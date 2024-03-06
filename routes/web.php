<?php

use App\Livewire\Roles;
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

Route::view('/', 'welcome')->name('welcome');
Route::view('contributors', 'contributors')->name('contributors');
Route::middleware('auth')->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::view('profile', 'profile')->name('profile');
    Route::get('logout', function () {
        session()->flush();
        return redirect('/');
    })->name('logout');

    Route::get('admin/roles', Roles::class)->name('admin.roles');
});



require __DIR__.'/auth.php';

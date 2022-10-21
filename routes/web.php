<?php

use App\Http\Controllers\ExpenseController;
use Illuminate\Support\Facades\Route;
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
    return view('auth/login');
});

Route::get('/expenses', [ExpenseController::class, 'showForm'])->name('expenses');
Route::post('/expenses', [ExpenseController::class, 'create'])->name('create.expense');
Route::get('/expenses/all', [ExpenseController::class, 'showAll'])->name('expenses.listAll');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

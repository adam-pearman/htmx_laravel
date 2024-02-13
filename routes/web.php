<?php

use App\Http\Controllers\ContactBulkDeleteController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactCountController;
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
    return redirect('/contacts');
});

Route::get('/contacts/count', ContactCountController::class)->name('contacts.count');
Route::delete('/contacts', ContactBulkDeleteController::class)->name('contacts.bulk-delete');

Route::controller(ContactController::class)->group(function () {
    Route::get('/contacts', 'index')->name('contacts.index');
    Route::get('/contacts/new', 'create')->name('contacts.create');
    Route::post('/contacts', 'store')->name('contacts.store');
    Route::get('/contacts/{contact}', 'show')->name('contacts.show');
    Route::get('/contacts/{contact}/edit', 'edit')->name('contacts.edit');
    Route::put('/contacts/{contact}', 'update')->name('contacts.update');
    Route::delete('/contacts/{contact}', 'destroy')->name('contacts.destroy');
});

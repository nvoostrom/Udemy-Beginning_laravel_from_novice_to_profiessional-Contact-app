<?php

use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\contactNoteController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TaskController;
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

Route::get('/', AppController::class);

Route::controller(ContactController::class)->prefix('admin')->name('contacts.')->group(function () {
    Route::get('/contacts', 'index')->name('index');
    Route::get('/contacts/create', 'create')->name('create');
    Route::get('/contact/edit/{id}', 'edit')->name('edit');
    Route::get('/contacts/{id}', 'show')->whereNumber('id')->name('show');
});

Route::resource('companies', CompanyController::class);

Route::resources([
    '/tags' => TagController::class,
    '/tasks' => TaskController::class,
    // '/companies' => CompanyController::class,
]);

// Route::resource('/activity', ActivityController::class)->names(['index' => 'activity.all', 'show' => 'activity.view']);
Route::resource('/activity', ActivityController::class)->parameters(['activity' => 'active', 'show' => 'activity.view']);


Route::resource('/contact.notes', contactNoteController::class)->shallow();



Route::fallback(
    function () {
        return '<h1>sorry this page does not exit</h1>';
    }
);
<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\AppController;
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

Route::controller(ContactController::class)->prefix('admin')->name('contacts.')->group(function(){
    Route::get('/contacts', 'index')->name('index');
    Route::get('/contacts/create', 'create')->name('create');
    Route::get('/contact/edit/{id}', 'edit')->name('edit');
    Route::get('/contacts/{id}', 'show')->whereNumber('id')->name('show');
});

Route::get('/company/{name?}', function ($name = null) {
    if ($name) {
        return '<h1>Hello world</h1> <h2>Here you can view a company</h2> <h3> this company name is ' . $name . '</h3>';
    } else {
        return '<h1>Hello world</h1> <h2>Here you can view all companies</h2>';
    }
})->whereAlpha('name');


Route::fallback(
    function () {
        return '<h1>sorry this page does not exit</h1>';
    }
);

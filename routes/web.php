<?php

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

function getcontacts(){
    return [
        ['id'=> 1, 'name' => 'Name 1', 'phone' => '1234567890'],
        ['id'=> 2, 'name' => 'Name 2', 'phone' => '2345678901'],
        ['id'=> 3, 'name' => 'Name 3', 'phone' => '3456789012'],
    ];
};

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('/contacts', function () {
        $companies = [
            1 => ['name' => 'Company One', 'contacts' => 3],
            2 => ['name' => 'Company Two', 'contacts' => 5],
        ];
        $contacts = getcontacts();

        return view('contact.index', compact('contacts', 'companies'));
    })->name('contacts');
    
    Route::get('/contacts/create', function () {
        return view('contact.create');
    })->name('create');
    
    Route::get('/contact/edit/{id}', function ($id) {
        $contacts = getcontacts();
        abort_if(!isset($contacts[$id]), 404);
        $contact = $contacts[$id];
        return view('contact.edit');
    })->name('edit');

    Route::get('/contacts/{id}', function ($id) {
        $contacts = getcontacts();
        abort_if(!isset($contacts[$id]), 404);
        $contact = $contacts[$id];
        return view('contact.id')->with('contact', $contact);
    })->whereNumber('id')->name('show');
});


Route::get('/company/{name?}', function($name = null){
    if ($name) {
        return '<h1>Hello world</h1> <h2>Here you can view a company</h2> <h3> this company name is '. $name .'</h3>';
    }else{
        return '<h1>Hello world</h1> <h2>Here you can view all companies</h2>';
    }
})->whereAlpha('name');


Route::fallback(function(){
return '<h1>sorry this page does not exit</h1>';
}
);
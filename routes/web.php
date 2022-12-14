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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'is_admin'], function () {

        Route::get('/roles', function () {
            return view('admin/roles');
        });
        Route::get('/users', function () {
            return view('admin/users');
        });
        Route::get('/pages', function () {
            return view('admin/pages');
        });
        Route::get('/customers', function () {
            return view('admin/customers');
        });
        Route::get('/suppliers', function () {
            return view('admin/suppliers');
        });
    });


    Route::group(['prefix' => 'users', 'as' => 'users.'], function () {
        Route::get('/brands', function () {
            return view('users/brands');
        });
    });

    Route::get('/trix', 'TrixController@index');
    Route::post('/upload', 'TrixController@upload');
    Route::post('/store', 'TrixController@store');
});


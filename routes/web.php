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
    return view('ressources.index' , ['ressources' => \App\Models\Ressource::paginate(24)
    ]);
})->name('ressources.index');

Route::get('/ressources/{ressource}', function (\App\Models\Ressource $ressource) {
    return view('ressources.show', ['ressource' => $ressource]);
})->name('ressources.show');

Route::get('/categories/{category}', function (\App\Models\Category $category) {
    return view('categories.show', ['category' => $category]);
})->name('categories.show');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
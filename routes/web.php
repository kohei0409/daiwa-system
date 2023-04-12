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

//Auth::routes();
Auth::routes([
    'register' => false
]);

Route::group(['middleware' => 'auth'], function () {
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/property', [App\Http\Controllers\PropertyController::class, 'index'])->name('property');
Route::get('/property/{id}', [App\Http\Controllers\PropertyController::class, 'showDetail'])->name('property_detail');
Route::get('/property/edit/{id}', [App\Http\Controllers\PropertyController::class, 'showEdit'])->name('property_edit');
Route::post('/property/update', [App\Http\Controllers\PropertyController::class, 'exeUpdate'])->name('property_update');

Route::post('/property/ownerinput', [App\Http\Controllers\OwnRegisterController::class, 'create'])->name('owner_input');
Route::post('/property/ownerupdate', [App\Http\Controllers\OwnRegisterController::class, 'update'])->name('owner_update');
Route::delete('/property/destroy/{id}', [App\Http\Controllers\OwnRegisterController::class, 'destroy'])->name('owner_destroy');

Route::post('/property/memoinput', [App\Http\Controllers\PropertyMemoController::class, 'create'])->name('memo_input');
Route::post('/property/memoupdate', [App\Http\Controllers\PropertyMemoController::class, 'update'])->name('memo_update');
Route::delete('/property/destroy/{id}', [App\Http\Controllers\PropertyMemoController::class, 'destroy'])->name('memo_destroy');

Route::get('/constract', function () {return view('contents.constract.index');});


Route::get('/manufacturers', [App\Http\Controllers\ManufacturersController::class, 'showlist'])->name('manufacturers');
Route::get('/manufacturers/{id}', [App\Http\Controllers\ManufacturersController::class, 'showDetail'])->name('manufacturers_show');


Route::get('/manufacturers/create', [App\Http\Controllers\ManufacturersController::class, 'showCreate'])->name('manufacturers_create');
Route::post('/manufacturers/store', [App\Http\Controllers\ManufacturersController::class, 'exeStore'])->name('manufacturers_store');
Route::get('/manufacturers/edit/{id}', [App\Http\Controllers\ManufacturersController::class, 'showEdit'])->name('manufacturers_edit');
Route::post('/manufacturers/update', [App\Http\Controllers\ManufacturersController::class, 'exeUpdate'])->name('manufacturers_update');
Route::post('/manufacturers/delete/{id}', [App\Http\Controllers\ManufacturersController::class, 'exeDelete'])->name('manufacturers_delete');

Route::get('/construction/',  [App\Http\Controllers\ConstructionController::class, 'showlist'])->name('constructions');
Route::get('/construction/create',  [App\Http\Controllers\ConstructionController::class, 'showCreate'])->name('constructioncreate');
Route::post('/construction/store',  [App\Http\Controllers\ConstructionController::class, 'exeStore'])->name('constructionstore');
Route::post('/construction/storecon',  [App\Http\Controllers\ConstructionController::class, 'exeStorecon'])->name('constructionstorecon');
Route::get('/construction/edit/{id}', [App\Http\Controllers\ConstructionController::class, 'showEdit'])->name('constructionedit');
Route::get('/construction/editdetail/{id}', [App\Http\Controllers\ConstructionController::class, 'showEditDetail'])->name('constructioneditdetail');
Route::post('/construction/update',  [App\Http\Controllers\ConstructionController::class, 'exeUpdate'])->name('constructionupdate');
Route::post('/construction/exeUpdate_detail', [App\Http\Controllers\ConstructionController::class, 'constructionupdate_detail'])->name('constructionupdate_detail');
Route::post('/construction/delete/{id}',  [App\Http\Controllers\ConstructionController::class, 'constructiondelete'])->name('constructiondelete');

});


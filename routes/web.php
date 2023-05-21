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


    Route::get('/dp_assessment', [App\Http\Controllers\DpAssessmentController::class, 'index'])->name('dp_assessment');
    Route::get('/dp_assessment_list', [App\Http\Controllers\DpAssessmentController::class, 'list'])->name('dp_assessment_list');
    Route::get('/dp_assessment_input', [App\Http\Controllers\DpAssessmentController::class, 'input'])->name('dp_assessment_input');
    Route::get('/dp_assessment_store', [App\Http\Controllers\DpAssessmentController::class, 'store'])->name('dp_assessment_store');
    Route::get('/dp_assessment_edit', [App\Http\Controllers\DpAssessmentController::class, 'edit'])->name('dp_assessment_edit');
    Route::get('/dp_assessment_update', [App\Http\Controllers\DpAssessmentController::class, 'update'])->name('dp_assessment_update');
    Route::get('/dp_assessment_destroy', [App\Http\Controllers\DpAssessmentController::class, 'destroy'])->name('dp_assessment_destroy');


    Route::get('/dp_construction', [App\Http\Controllers\DpConstructionController::class, 'index'])->name('dp_construction');
    Route::get('/dp_construction_list', [App\Http\Controllers\DpConstructionController::class, 'list'])->name('dp_construction_list');
    Route::get('/dp_construction_input', [App\Http\Controllers\DpConstructionController::class, 'input'])->name('dp_construction_input');
    Route::get('/dp_construction_store', [App\Http\Controllers\DpConstructionController::class, 'store'])->name('dp_construction_store');
    Route::get('/dp_construction_edit', [App\Http\Controllers\DpConstructionController::class, 'edit'])->name('dp_construction_edit');
    Route::get('/dp_construction_update', [App\Http\Controllers\DpConstructionController::class, 'update'])->name('dp_construction_update');
    Route::get('/dp_construction_destroy', [App\Http\Controllers\DpConstructionController::class, 'destroy'])->name('dp_construction_destroy');

    Route::get('/dp_sales', [App\Http\Controllers\DpSalesController::class, 'index'])->name('dp_sales');
    Route::get('/dp_sales_list', [App\Http\Controllers\DpSalesController::class, 'list'])->name('dp_sales_list');
    Route::get('/dp_sales_input', [App\Http\Controllers\DpSalesController::class, 'input'])->name('dp_sales_input');
    Route::get('/dp_sales_store', [App\Http\Controllers\DpSalesController::class, 'store'])->name('dp_sales_store');
    Route::get('/dp_sales_edit', [App\Http\Controllers\DpSalesController::class, 'edit'])->name('dp_sales_edit');
    Route::get('/dp_sales_update', [App\Http\Controllers\DpSalesController::class, 'update'])->name('dp_sales_update');
    Route::get('/dp_sales_destroy', [App\Http\Controllers\DpSalesController::class, 'destroy'])->name('dp_sales_destroy');


    Route::get('/dp_accounting', [App\Http\Controllers\DpAccountingController::class, 'index'])->name('dp_accounting');
    Route::get('/dp_accounting_list', [App\Http\Controllers\DpAccountingController::class, 'list'])->name('dp_accounting_list');
    Route::get('/dp_accounting_input', [App\Http\Controllers\DpAccountingController::class, 'input'])->name('dp_accounting_input');
    Route::get('/dp_accounting_store', [App\Http\Controllers\DpAccountingController::class, 'store'])->name('dp_accounting_store');
    Route::get('/dp_accounting_edit', [App\Http\Controllers\DpAccountingController::class, 'edit'])->name('dp_accounting_edit');
    Route::get('/dp_accounting_update', [App\Http\Controllers\DpAccountingController::class, 'update'])->name('dp_accounting_update');
    Route::get('/dp_accounting_destroy', [App\Http\Controllers\DpAccountingController::class, 'destroy'])->name('dp_accounting_destroy');




    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


    Route::get('/property', [App\Http\Controllers\PropertyController::class, 'index'])->name('property');
    Route::get('/property/{id}', [App\Http\Controllers\PropertyController::class, 'showDetail'])->name('property_detail');
    Route::get('/property/edit/{id}', [App\Http\Controllers\PropertyController::class, 'showEdit'])->name('property_edit');
    Route::post('/property/update', [App\Http\Controllers\PropertyController::class, 'exeUpdate'])->name('property_update');

    Route::post('/property/memoinput', [App\Http\Controllers\PropertyMemoController::class, 'create'])->name('memo_input');
    Route::post('/property/memoupdate', [App\Http\Controllers\PropertyMemoController::class, 'update'])->name('memo_update');
    Route::delete('/property/destroy/{id}', [App\Http\Controllers\PropertyMemoController::class, 'destroy'])->name('memo_destroy');


    Route::get('/property/input', [App\Http\Controllers\PropertyController::class, 'input'])->name('property_input');


    Route::post('/property/ownerinput', [App\Http\Controllers\OwnRegisterController::class, 'create'])->name('owner_input');
    Route::post('/property/ownerupdate', [App\Http\Controllers\OwnRegisterController::class, 'update'])->name('owner_update');
    Route::delete('/property/destroy/{id}', [App\Http\Controllers\OwnRegisterController::class, 'destroy'])->name('owner_destroy');


    Route::get('/constract', function () {
        return view('contents.constract.index');
    });


    Route::get('/manufacturers', [App\Http\Controllers\ManufacturersController::class, 'showlist'])->name('manufacturers');


    Route::get('/manufacturers/add', [App\Http\Controllers\ManufacturersController::class, 'addCreate'])->name('manufacturers_add');
    Route::post('/manufacturers/store', [App\Http\Controllers\ManufacturersController::class, 'exeStore'])->name('manufacturers_store');
    Route::delete('/manufacturers/{id}', 'App\Http\Controllers\ManufacturersController@exeDelete')->name('manufacturers.delete');
    Route::get('/manufacturers/{id}', [App\Http\Controllers\ManufacturersController::class, 'showDetail'])->name('manufacturers_show');
    Route::get('/manufacturers/edit/{id}', [App\Http\Controllers\ManufacturersController::class, 'showEdit'])->name('manufacturers_edit');
    Route::post('/manufacturers/update', [App\Http\Controllers\ManufacturersController::class, 'exeUpdate'])->name('manufacturers_update');
    Route::post('/manufacturers/delete/{id}', [App\Http\Controllers\ManufacturersController::class, 'exeDelete'])->name('manufacturers_delete');


    Route::get('/construction', [\App\Http\Controllers\ConstructionController::class, 'showlist'])->name('constructions');

    Route::post('/construction/store', [\App\Http\Controllers\ConstructionController::class, 'exeStore'])->name('constructionstore');


    Route::get('/construction_test', [\App\Http\Controllers\ConstructionController::class, 'showlist_test'])->name('constructions_test');
    Route::get('/construction/create', [\App\Http\Controllers\ConstructionController::class, 'showCreate'])->name('constructioncreate');
    Route::post('/construction/storecon', [\App\Http\Controllers\ConstructionController::class, 'exeStorecon'])->name('constructionstorecon');
    Route::get('/construction/edit/{id}', [\App\Http\Controllers\ConstructionController::class, 'showEdit'])->name('constructionedit');
    Route::get('/construction/editdetail/{id}', [\App\Http\Controllers\ConstructionController::class, 'showEditDetail'])->name('constructioneditdetail');
    Route::post('/construction/update', [\App\Http\Controllers\ConstructionController::class, 'exeUpdate'])->name('constructionupdate');
    Route::post('/construction/update_detail', [\App\Http\Controllers\ConstructionController::class, 'exeUpdate_detail'])->name('constructionupdate_detail');
    Route::delete('/construction/delete/{id}', [\App\Http\Controllers\ConstructionController::class, 'exeDelete'])->name('constructiondelete');


    Route::get('/tool', [\App\Http\Controllers\ToolController::class, 'showlist'])->name('tools');
    Route::get('/tool/create', [\App\Http\Controllers\ToolController::class, 'showCreate'])->name('toolscreate');
    Route::post('/tool/store', [\App\Http\Controllers\ToolController::class, 'exeStore'])->name('toolsstore');


});


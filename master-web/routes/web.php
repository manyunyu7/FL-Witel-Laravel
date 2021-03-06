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

Route::view('/template/home', 'template');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'admin']);
Route::get('/staff', [App\Http\Controllers\HomeController::class, 'index']);

Route::post('/user/store', [App\Http\Controllers\StaffController::class, 'store']);
Route::post('/user/update', [App\Http\Controllers\StaffController::class, 'update']);
Route::get('/user/{id}/delete', [App\Http\Controllers\StaffController::class, 'destroy']);


Route::get('/cme/potensi-perangkat/{divisi}/create', [App\Http\Controllers\CME_Controller::class, 'viewCreate']);
Route::post('/cme/potensi-perangkat/create', [App\Http\Controllers\CME_Controller::class, 'store'])->name('store_cme_potensi_perangkat');
Route::get('/cme/potensi-perangkat/{divisi}/manage', [App\Http\Controllers\CME_Controller::class, 'viewManage'])->name('store_cme_potensi_perangkat');
Route::get('/cme/potensi-perangkat/{id}/delete', [App\Http\Controllers\CME_Controller::class, 'destroy']);
Route::get('/cme/potensi-perangkat/{id}/update', 'CME_Controller@viewUpdate');
Route::post('/cme/potensi-perangkat/{id}/update', 'CME_Controller@edit');


Route::get('/service-node/data-integration-plan/create', [App\Http\Controllers\SERVICE_NODE_IntegrationPlanController::class, 'viewCreate']);
Route::post('/service-node/data-integration-plan/create', 'SERVICE_NODE_IntegrationPlanController@store')->name('store_integration_plan');
Route::get('/service-node/data-integration-plan/manage', 'SERVICE_NODE_IntegrationPlanController@viewManage')->name('store_cme_potensi_perangkat');
Route::get('/service-node/data-integration-plan/{id}/delete', 'SERVICE_NODE_IntegrationPlanController@destroy');
Route::get('/service-node/data-integration-plan/{id}/update', 'SERVICE_NODE_IntegrationPlanController@viewUpdate');
Route::post('/service-node/data-integration-plan/{id}/update', 'SERVICE_NODE_IntegrationPlanController@edit');

Route::get('/service-node/isdn/create', [App\Http\Controllers\SERVICE_NODE_IsdnController::class, 'viewCreate']);
Route::post('/service-node/isdn/create', 'SERVICE_NODE_IsdnController@store')->name('store_isdn');
Route::get('/service-node/isdn/manage', 'SERVICE_NODE_IsdnController@viewManage');
Route::get('/service-node/isdn/{id}/delete', 'SERVICE_NODE_IsdnController@destroy');
Route::get('/service-node/isdn/{id}/update', 'SERVICE_NODE_IsdnController@viewUpdate');
Route::post('/service-node/isdn/{id}/update', 'SERVICE_NODE_IsdnController@edit');

Route::prefix('problem')->group(function () {
    Route::get('{divisi}/create', [App\Http\Controllers\ProblemController::class, 'viewCreate']);
    Route::post('create', 'ProblemController@store')->name('store_isdn');
    Route::get('{divisi}/manage', 'ProblemController@viewManage');
    Route::get('{id}/delete', 'ProblemController@destroy');
    Route::get('{id}/update', 'ProblemController@viewUpdate');
    Route::post('{id}/update', 'ProblemController@edit');
});

Route::prefix('transport')->group(function () {
    Route::get('/create', [App\Http\Controllers\TransportController::class, 'viewCreate']);
    Route::post('create', 'ProblemController@store')->name('store_isdn');
    Route::get('{divisi}/manage', 'ProblemController@viewManage');
    Route::get('{id}/delete', 'ProblemController@destroy');
    Route::get('{id}/update', 'ProblemController@viewUpdate');
    Route::post('{id}/update', 'ProblemController@edit');
});

Route::get('/service-node/isdn/create', [App\Http\Controllers\SERVICE_NODE_IsdnController::class, 'viewCreate']);
Route::post('/service-node/isdn/create', 'SERVICE_NODE_IsdnController@store')->name('store_isdn');
Route::get('/service-node/isdn/manage', 'SERVICE_NODE_IsdnController@viewManage');
Route::get('/service-node/isdn/{id}/delete', 'SERVICE_NODE_IsdnController@destroy');
Route::get('/service-node/isdn/{id}/update', 'SERVICE_NODE_IsdnController@viewUpdate');
Route::post('/service-node/isdn/{id}/update', 'SERVICE_NODE_IsdnController@edit');



Route::post('/bahan/create', [App\Http\Controllers\BahanController::class, 'viewCreate']);
Route::post('/bahan/manage', [App\Http\Controllers\StaffController::class, 'store']);
Route::post('/bahan/update', [App\Http\Controllers\StaffController::class, 'update']);
Route::get('/bahan/{id}/delete', [App\Http\Controllers\StaffController::class, 'destroy']);


Route::get('/admin/user/manage', [App\Http\Controllers\StaffController::class, 'viewAdminManage']);
Route::get('/admin/user/{id}/edit', [App\Http\Controllers\StaffController::class, 'viewAdminEdit']);

Route::get('logout', function () {
    auth()->logout();
    Session()->flush();

    return Redirect::to('/');
})->name('logout');

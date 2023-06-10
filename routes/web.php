<?php

use App\Http\Controllers\Admin\AbjController;
use App\Http\Controllers\Admin\BuildingTypeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\DistrictController;
use App\Http\Controllers\Admin\EnvironmentTypeController;
use App\Http\Controllers\Admin\FloorTypeController;
use App\Http\Controllers\Admin\KshController;
use App\Http\Controllers\Admin\LarvaeController;
use App\Http\Controllers\Admin\LocationTypeController;
use App\Http\Controllers\Admin\MorphotypeController;
use App\Http\Controllers\Admin\ProvinceController;
use App\Http\Controllers\Admin\RegencyController;
use App\Http\Controllers\Admin\SampleController;
use App\Http\Controllers\Admin\SampleMethodController;
use App\Http\Controllers\Admin\SerotypeController;
use App\Http\Controllers\Admin\SettlementTypeController;
use App\Http\Controllers\Admin\TpaTypeController;
use App\Http\Controllers\Admin\VariableAgentController;
use App\Http\Controllers\Admin\VillageController;
use App\Http\Controllers\Admin\VirusController;
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
    return view('auth.login');
});

Route::group(['prefix' => 'dashboard', 'middleware' => ['auth']], function () {
    Route::get('/', DashboardController::class)->name('admin.dashboard');

    // Province
    Route::post('province/list', [ProvinceController::class, 'list'])->name('admin.province.list');
    Route::resource('province', ProvinceController::class, ['as' => 'admin']);

    // Regency
    Route::post('regency/list', [RegencyController::class, 'list'])->name('admin.regency.list');
    Route::resource('regency', RegencyController::class, ['as' => 'admin']);

    // District
    Route::post('district/list', [DistrictController::class, 'list'])->name('admin.district.list');
    Route::resource('district', DistrictController::class, ['as' => 'admin']);


    // Village
    Route::post('village/list', [VillageController::class, 'list'])->name('admin.village.list');
    Route::resource('village', VillageController::class, ['as' => 'admin']);

    // Tpa Type
    Route::resource('tpa-type', TpaTypeController::class, ['as' => 'admin']);

    // Floor Type
    Route::resource('floor-type', FloorTypeController::class, ['as' => 'admin']);

    // Environment Type
    Route::resource('environment-type', EnvironmentTypeController::class, ['as' => 'admin']);

    // Location Type
    Route::resource('location-type', LocationTypeController::class, ['as' => 'admin']);

    // Settlement Type
    Route::resource('settlement-type', SettlementTypeController::class, ['as' => 'admin']);

    // Building Type
    Route::resource('building-type', BuildingTypeController::class, ['as' => 'admin']);

    // Serotype
    Route::resource('serotype', SerotypeController::class, ['as' => 'admin']);

    // Virus
    Route::get('virus/list', [VirusController::class, 'list'])->name('admin.virus.list');
    Route::resource('virus', VirusController::class, ['as' => 'admin']);

    // Morphotype
    Route::get('morphotype/list', [MorphotypeController::class, 'list'])->name('admin.morphotype.list');
    Route::resource('morphotype', MorphotypeController::class, ['as' => 'admin']);

    // Sample Method
    Route::get('sample-method/list', [SampleMethodController::class, 'list'])->name('admin.sample-method.list');
    Route::resource('sample-method', SampleMethodController::class, ['as' => 'admin']);

    // Sample
    Route::get('sample/detail-sample/{id}/export', [SampleController::class, 'exportDetailSample'])->name('admin.sample.detail-sample.export');
    Route::post('sample/detail-sample/import', [SampleController::class, 'importDetailSample'])->name('admin.sample.detail-sample.import');
    Route::post('sample/import', [SampleController::class, 'import'])->name('admin.sample.import');
    Route::post('sample/detail-sample/virus/morphotype/delete', [SampleController::class, 'deleteDetailSampleVirusMorphotype'])->name('admin.sample.detail-sample.virus.morphotype.delete');
    Route::post('sample/detail-sample/virus/{id}/delete', [SampleController::class, 'deleteDetailSampleVirus'])->name('admin.sample.detail-sample.virus.delete');
    Route::post('sample/detail-sample/virus/{id}/store', [SampleController::class, 'storeDetailSampleVirus'])->name('admin.sample.detail-sample.virus.store');
    Route::get('sample/detail-sample/virus/{id}', [SampleController::class, 'detailSampleVirus'])->name('admin.sample.detail-sample.virus');
    Route::get('sample/detail-sample/{id}', [SampleController::class, 'detailSample'])->name('admin.sample.detail-sample');
    Route::resource('sample', SampleController::class, ['as' => 'admin']);

    // Variable Agent
    Route::prefix('variable-agent')->group(function () {
        Route::get('/', [VariableAgentController::class, 'index'])->name('admin.variable-agent.index');
        Route::get('show/{id}', [VariableAgentController::class, 'show'])->name('admin.variable-agent.show');
        Route::post('show/{id}/filter-month', [VariableAgentController::class, 'showFilterMonth'])->name('admin.variable-agent.show.filter-month');
        Route::post('show/{id}/filter-date-range', [VariableAgentController::class, 'showFilterDateRange'])->name('admin.variable-agent.show.filter-date-range');
    });

    // Larvae
    Route::post('larvae/detail/{id}/delete', [LarvaeController::class, 'deleteDetail'])->name('admin.larvae.detail.delete');
    Route::get('larvae/{id}/detail/edit', [LarvaeController::class, 'editDetail'])->name('admin.larvae.detail.edit');
    Route::post('larvae/{id}/detail/store', [LarvaeController::class, 'storeDetail'])->name('admin.larvae.detail.store');
    Route::post('larvae/{id}/detail/store-new', [LarvaeController::class, 'storeDetailNew'])->name('admin.larvae.detail.store-new');
    Route::get('larvae/{id}/detail/create', [LarvaeController::class, 'createDetail'])->name('admin.larvae.detail.create');
    Route::post('larvae/filter-month', [LarvaeController::class, 'filterMonth'])->name('admin.larvae.filter-month');
    Route::post('larvae/filter-date-range', [LarvaeController::class, 'filterDateRange'])->name('admin.larvae.filter-date-range');
    Route::resource('larvae', LarvaeController::class, ['as' => 'admin']);

    // KSH
    Route::put('ksh/detail/{id}/update', [KshController::class, 'updateDetail'])->name('admin.ksh.detail.update');
    Route::get('ksh/detail/{id}/edit', [KshController::class, 'editDetail'])->name('admin.ksh.detail.edit');
    Route::post('ksh/detail/{id}/store', [KshController::class, 'storeDetail'])->name('admin.ksh.detail.store');
    Route::get('ksh/{id}/detail/create', [KshController::class, 'createDetail'])->name('admin.ksh.detail.create');
    Route::resource('ksh', KshController::class, ['as' => 'admin']);

    // ABJ
    Route::get('abj/geojson', [AbjController::class, 'geojson'])->name('admin.abj.geojson');
    Route::resource('abj', AbjController::class, ['as' => 'admin'])->only(['index']);
});

require __DIR__ . '/auth.php';

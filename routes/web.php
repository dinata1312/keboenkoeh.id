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
    return view('landing-page');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('main-dashboard');

Route::get('owner/dashboard', '\App\Http\Controllers\OwnerController@index')->name('dashboard')->middleware(['auth']);
Route::get('pengaturan-akun/{id}', '\App\Http\Controllers\UserController@index')->middleware(['auth']);
Route::post('pengaturan-akun/{id}', '\App\Http\Controllers\UserController@update')->middleware(['auth']);

Route::get('owner/partner', '\App\Http\Controllers\PartnerController@index')->name('mitra')->middleware(['auth']);
Route::get('owner/detail-partner/{id}', '\App\Http\Controllers\PartnerController@show')->name('detail-partner')->middleware(['auth']);
Route::get('owner/edit-partner/{id}', '\App\Http\Controllers\PartnerController@edit')->middleware(['auth']);
Route::get('owner/add-partner', '\App\Http\Controllers\PartnerController@create')->name('add-partner')->middleware(['auth']);
Route::post('owner/add-partner', '\App\Http\Controllers\PartnerController@store')->name('store-partner')->middleware(['auth']);

Route::get('owner/keuangan', '\App\Http\Controllers\MoneyLiquidityController@index')->name('keuangan')->middleware(['auth']);
Route::get('owner/detail-keuangan/{id}', '\App\Http\Controllers\MoneyLiquidityController@show')->name('detail-keuangan')->middleware(['auth']);
Route::get('owner/edit-keuangan/{id}', '\App\Http\Controllers\MoneyLiquidityController@edit')->name('edit-keuangan')->middleware(['auth']);
Route::post('owner/edit-keuangan/{id}', '\App\Http\Controllers\MoneyLiquidityController@update')->name('update-keuangan')->middleware(['auth']);
Route::get('owner/add-keuangan', '\App\Http\Controllers\MoneyLiquidityController@create')->name('add-keuangan')->middleware(['auth']);
Route::post('owner/add-keuangan', '\App\Http\Controllers\MoneyLiquidityController@store')->name('store-keuangan')->middleware(['auth']);

Route::get('owner/petani', '\App\Http\Controllers\FarmerController@index')->name('petani')->middleware(['auth']);
Route::get('owner/add-farmer', '\App\Http\Controllers\FarmerController@create')->name('add-farmer')->middleware(['auth']);
Route::post('owner/add-farmer', '\App\Http\Controllers\FarmerController@store')->name('store-farmer')->middleware(['auth']);

Route::get('owner/jadwal', '\App\Http\Controllers\ScheduleController@index')->name('jadwal')->middleware(['auth']);
Route::get('owner/add-schedule', '\App\Http\Controllers\ScheduleController@create')->name('add-schedule')->middleware(['auth']);
Route::post('owner/add-schedule', '\App\Http\Controllers\ScheduleController@store')->name('store-schedule')->middleware(['auth']);
Route::get('owner/detail-attendances/users/{id}/edit', '\App\Http\Controllers\ScheduleController@detail_edit')->name('edit-schedule')->middleware(['auth']);
Route::post('owner/detail-attendances/users/{id}/edit', '\App\Http\Controllers\ScheduleController@detail_update')->name('update-schedule')->middleware(['auth']);
Route::get('owner/detail-attendances/users/{id}/delete', '\App\Http\Controllers\ScheduleController@detail_delete')->name('delete-schedule')->middleware(['auth']);

Route::get('petani/jadwal', '\App\Http\Controllers\AttendanceController@index')->name('index-attendance')->middleware(['auth']);
Route::get('petani/jadwal/{id}', '\App\Http\Controllers\AttendanceController@create')->name('add-attendance')->middleware(['auth']);
Route::post('petani/jadwal/{id}', '\App\Http\Controllers\AttendanceController@store')->name('store-attendance')->middleware(['auth']);
Route::get('owner/detail-attendances/users/{id}', '\App\Http\Controllers\AttendanceController@detail')->name('detail-attendances')->middleware(['auth']);
Route::get('owner/history-user-attendances/users', '\App\Http\Controllers\AttendanceController@user_history')->name('riwayat-laporan-petani')->middleware(['auth']);

Route::get('petani/riwayat', '\App\Http\Controllers\AttendanceController@history')->name('history-attendance')->middleware(['auth']);

Route::get('owner/penjualan', 'App\Http\Controllers\SellingController@index')->name('penjualan')->middleware(['auth']);
Route::get('owner/add-penjualan', 'App\Http\Controllers\SellingController@create')->name('add-penjualan')->middleware(['auth']);
Route::post('owner/add-penjualan', 'App\Http\Controllers\SellingController@store')->middleware(['auth']);
Route::get('owner/detail-penjualan/{id}', 'App\Http\Controllers\SellingController@show')->name('detail-penjualan')->middleware(['auth']);
Route::post('owner/detail-penjualan/{id}', 'App\Http\Controllers\SellingController@panen')->name('panen-penjualan')->middleware(['auth']);
Route::get('owner/edit-penjualan/{id}', 'App\Http\Controllers\SellingController@edit')->name('edit-penjualan')->middleware(['auth']);
Route::post('owner/edit-penjualan/{id}', 'App\Http\Controllers\SellingController@update')->middleware(['auth']);
Route::get('owner/harvest-penjualan/{id}', 'App\Http\Controllers\SellingController@harvest')->name('harvest')->middleware(['auth']);
        
Route::get('owner/informasi', 'App\Hppt\Controllers\InformationController@index')->name('informasi')->middleware(['auth']);
Route::get('owner/add-informasi', 'App\Http\Controllers\InformationController@create')->name('add-informasi')->middleware(['auth']);
Route::post('owner/add-informasi', 'App\Http\Controllers\InformationController@store')->middleware(['auth']);
Route::get('owner/detail-informasi', 'App\Http\Controllers\InformationController@show')->name('detail-informasi')->middleware(['auth']);
Route::post('owner/detail-informasi', 'App\Http\Controllers\InformationController@panen')->name('panen-informasi')->middleware(['auth']);
require __DIR__.'/auth.php';

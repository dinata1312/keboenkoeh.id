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

Route::get('dashboard', '\App\Http\Controllers\OwnerController@index')->name('dashboard')->middleware(['auth']);
Route::get('pengaturan-akun/{id}', '\App\Http\Controllers\UserController@index')->middleware(['auth']);
Route::post('pengaturan-akun/{id}', '\App\Http\Controllers\UserController@update')->middleware(['auth']);

Route::get('partner', '\App\Http\Controllers\PartnerController@index')->name('mitra')->middleware(['auth']);
Route::get('detail-partner/{id}', '\App\Http\Controllers\PartnerController@show')->name('detail-partner')->middleware(['auth']);
Route::get('edit-partner/{id}', '\App\Http\Controllers\PartnerController@edit')->middleware(['auth']);
Route::get('add-partner', '\App\Http\Controllers\PartnerController@create')->name('add-partner')->middleware(['auth']);
Route::post('add-partner', '\App\Http\Controllers\PartnerController@store')->name('store-partner')->middleware(['auth']);

Route::get('keuangan', '\App\Http\Controllers\MoneyLiquidityController@index')->name('keuangan')->middleware(['auth']);
Route::get('detail-keuangan/{id}', '\App\Http\Controllers\MoneyLiquidityController@show')->name('detail-keuangan')->middleware(['auth']);
Route::get('edit-keuangan/{id}', '\App\Http\Controllers\MoneyLiquidityController@edit')->name('edit-keuangan')->middleware(['auth']);
Route::post('edit-keuangan/{id}', '\App\Http\Controllers\MoneyLiquidityController@update')->name('update-keuangan')->middleware(['auth']);
Route::get('add-keuangan', '\App\Http\Controllers\MoneyLiquidityController@create')->name('add-keuangan')->middleware(['auth']);
Route::post('add-keuangan', '\App\Http\Controllers\MoneyLiquidityController@store')->name('store-keuangan')->middleware(['auth']);

Route::get('petani', '\App\Http\Controllers\FarmerController@index')->name('akun')->middleware(['auth']);
Route::get('add-farmer', '\App\Http\Controllers\FarmerController@create')->name('add-farmer')->middleware(['auth']);
Route::post('add-farmer', '\App\Http\Controllers\FarmerController@store')->name('store-farmer')->middleware(['auth']);

Route::get('jadwal', '\App\Http\Controllers\ScheduleController@index')->name('jadwal')->middleware(['auth']);
Route::get('add-schedule', '\App\Http\Controllers\ScheduleController@create')->name('add-schedule')->middleware(['auth']);
Route::post('add-schedule', '\App\Http\Controllers\ScheduleController@store')->name('store-schedule')->middleware(['auth']);
Route::get('detail-attendances/users/{id}/edit', '\App\Http\Controllers\ScheduleController@detail_edit')->name('edit-schedule')->middleware(['auth']);
Route::post('detail-attendances/users/{id}/edit', '\App\Http\Controllers\ScheduleController@detail_update')->name('update-schedule')->middleware(['auth']);
Route::get('detail-attendances/users/{id}/delete', '\App\Http\Controllers\ScheduleController@detail_delete')->name('delete-schedule')->middleware(['auth']);

Route::get('jadwal', 'App\Http\Controllers\AttendanceController@index')->name('index-attendance')->middleware(['auth']);
Route::get('jadwal/{id}', '\App\Http\Controllers\AttendanceController@create')->name('add-attendance')->middleware(['auth']);
Route::post('jadwal/{id}', '\App\Http\Controllers\AttendanceController@store')->name('store-attendance')->middleware(['auth']);
Route::get('detail-attendances/users/{id}', '\App\Http\Controllers\AttendanceController@detail')->name('detail-attendances')->middleware(['auth']);
Route::get('history-user-attendances/users', '\App\Http\Controllers\AttendanceController@user_history')->name('riwayat-laporan-petani')->middleware(['auth']);

Route::get('riwayat', '\App\Http\Controllers\AttendanceController@history')->name('history-attendance')->middleware(['auth']);

Route::get('penjualan', 'App\Http\Controllers\SellingController@index')->name('penjualan')->middleware(['auth']);
Route::get('add-penjualan', 'App\Http\Controllers\SellingController@create')->name('add-penjualan')->middleware(['auth']);
Route::post('add-penjualan', 'App\Http\Controllers\SellingController@store')->middleware(['auth']);
Route::get('detail-penjualan/{id}', 'App\Http\Controllers\SellingController@show')->name('detail-penjualan')->middleware(['auth']);
Route::post('detail-penjualan/{id}', 'App\Http\Controllers\SellingController@panen')->name('panen-penjualan')->middleware(['auth']);
Route::get('edit-penjualan/{id}', 'App\Http\Controllers\SellingController@edit')->name('edit-penjualan')->middleware(['auth']);
Route::post('edit-penjualan/{id}', 'App\Http\Controllers\SellingController@update')->middleware(['auth']);
Route::get('harvest-penjualan/{id}', 'App\Http\Controllers\SellingController@harvest')->name('harvest')->middleware(['auth']);
        
Route::get('informasi', 'App\Http\Controllers\InformationController@index')->name('informasi')->middleware(['auth']);
Route::get('add-informasi', 'App\Http\Controllers\InformationController@create')->name('add-informasi')->middleware(['auth']);
Route::post('add-informasi', 'App\Http\Controllers\InformationController@store')->middleware(['auth']);
Route::get('edit-informasi/{id}', 'App\Http\Controllers\InformationController@edit')->name('edit-informasi')->middleware(['auth']);
Route::post('edit-informasi/{id}', 'App\Http\Controllers\InformationController@update')->middleware(['auth']);

Route::get('prediksi', 'App\Http\Controllers\PredictionController@index')->name('prediksi')->middleware(['auth']);
require __DIR__.'/auth.php';

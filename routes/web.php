<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LokasiController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\OperatorController;
use App\Http\Controllers\InventarisController;

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

// Menampilkan Template Ke Semua Halaman Website

// Route::get('/', function () {
//     return view('layout.v_template_dashboard');
// });

// Dashboard
// Menampilkan Halaman Dashboard
Route::get('/', [DashboardController::class, 'dashboard']);

Route::get('/dashboard', [DashboardController::class, 'dashboard']);



// Lokasi
// Menampilkan Halaman Cetak Lokasi
Route::get('/cetak_lokasi', [LokasiController::class, 'CetakLokasiData'])->name('lokasi');

// Menampilkan Detail Lokasi
Route::get('/lokasi/v_detail_lokasi/{id_lokasi}', [LokasiController::class, 'DetailLokasi']);

// Menampilkan Halaman Input Lokasi
Route::get('/input_lokasi', [LokasiController::class, 'InputLokasi']);

//Add Lokasi
Route::post('/lokasi/add', [LokasiController::class, 'AddLokasi']);

// Menampilkan Halaman Edit Lokasi
Route::get('/lokasi/v_edit_lokasi/{id_lokasi}', [LokasiController::class, 'EditLokasi']);

// Proses Update Data Lokasi
Route::post('/lokasi/UpdateLokasi/{id_lokasi}', [LokasiController::class, 'UpdateLokasi']);

// Hapus Data Lokasi
Route::get('lokasi/DeleteLokasi/{id_lokasi}', [
    LokasiController::class,
    'Delete'
]);



// Operator
// Menampilkan Halaman Cetak Operator
Route::get('/cetak_operator', [OperatorController::class, 'CetakOperator'])->name('operator');

// Menampilkan Detail Operator
Route::get('/operator/v_detail_operator/{id_operator}', [OperatorController::class, 'detailOperator']);

// Menampilkan Halaman Input Operator
Route::get('/input_operator', [OperatorController::class, 'InputOperator']);

//Add Operator
Route::post('/operator/add', [OperatorController::class, 'AddOperator']);

// Menampilkan Halaman Edit Operator
Route::get('/operator/v_edit_operator/{id_operator}', [OperatorController::class, 'EditOperator']);

// Proses Update Data Operator
Route::post('/operator/UpdateOperator/{id_operator}', [OperatorController::class, 'UpdateOperator']);

// Hapus Data Operator
Route::get('operator/DeleteOperator/{id_operator}', [
    OperatorController::class,
    'Delete'
]);


// Inventaris
// Menampilkan Halaman Input Inventaris
Route::get('/input_inventaris', [InventarisController::class, 'InputInventaris'])->name('inventaris');

// Menampilkan Halaman Input Inventaris
Route::get('/cetak_inventaris', [InventarisController::class, 'CetakInventaris']);

// Menampilkan Halaman Input Operator
Route::get('/inventaris/v_detail_inventaris/{id_inventaris}', [InventarisController::class, 'detailInventaris']);

//Add Inventaris
Route::post('/inventaris/add', [InventarisController::class, 'AddInventaris']);

// Menampilkan Halaman Edit Operator
Route::get('/inventaris/v_edit_inventaris/{id_inventaris}', [InventarisController::class, 'EditInventaris']);

// Proses Update Data Operator
Route::post('/inventaris/UpdateInventaris/{id_inventaris}', [InventarisController::class, 'UpdateInventaris']);

// Menghapus data
Route::get('inventaris/DeleteInventaris/{id_inventaris}', [
    InventarisController::class,
    'DeleteInventaris'
]);

Route::get('inventaris/DeleteInventaris/{id_inventaris}', [
    InventarisController::class,
    'Delete'
]);

// PRINT PDF
Route::get('/inventaris/printpdf', [InventarisController::class, 'printpdf']);

// PRINT PRINTER
Route::get('/inventaris/print', [InventarisController::class, 'print']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//HAK AKSES USER

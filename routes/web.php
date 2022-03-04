<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Master\Departement;
use App\Http\Livewire\Master\Karyawan;
use App\Http\Livewire\Master\Uom;
use App\Http\Livewire\Purchase\PurchaseApprove;
use App\Http\Livewire\Purchase\PurchaseDetail;
use App\Http\Livewire\Purchase\PurchaseList;
use App\Http\Livewire\Purchase\PurchaseNew;
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
Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/', Dashboard::class)->name('dashboard');

    Route::prefix('m')->name('master.')->group(function(){
        Route::get('/user', Karyawan::class)->name('user');
        Route::get('/departement', Departement::class)->name('departement');
    });

    Route::prefix('purchase')->name('purchase.')->group(function(){
        Route::get('/', PurchaseList::class)->name('list');
        Route::get('/new', PurchaseNew::class)->name('new');
        Route::get('/detail/{slug}', PurchaseDetail::class)->name('detail');
        Route::get('/approve', PurchaseApprove::class)->name('approve');
    });
});

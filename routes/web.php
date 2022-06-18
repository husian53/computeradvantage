<?php

use App\Http\Controllers\CompanyGroupMasterController;
use App\Http\Controllers\UserAccessController;
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

// Route::get('dashboard', function () {
//     return view('super.companygroupmaster');
// });
// Route::controller(CompanyGroupMaster::class)->group(function () {
//     Route::get('/company-group', 'index');
// });
Route::get('/company-group', [CompanyGroupMasterController::class, 'index']);
Route::get('/login', [UserAccessController::class, 'index'])->name('login');
Route::post('/validate-login', [UserAccessController::class, 'login'])->name('user.access');
Route::post('/store',[CompanyGroupMasterController::class,'store'])->name('cgm');

<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CompanyGroupController;
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

// Route::get('company', function () {
//     return view('super.company');
// });
// Route::controller(CompanyGroupMaster::class)->group(function () {
//     Route::get('/company-group', 'index');
// });
Route::get('/company-group', [CompanyGroupController::class, 'index']);
Route::get('/company',[CompanyController::class,'index']);
Route::get('/login', [UserAccessController::class, 'index'])->name('login');
Route::post('/validate-login', [UserAccessController::class, 'login'])->name('user.access');
Route::post('/store-company-group',[CompanyGroupController::class,'store'])->name('company.group');
Route::post('/store-company',[CompanyController::class,'store'])->name('company');

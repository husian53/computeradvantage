<?php

use App\Http\Controllers\CompanyGroupMasterController;
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
// Route::controller(CompanyGroupMaster::class)->group(function () {
//     Route::get('/company-group', 'index');
// });
Route::get('/company-group', [CompanyGroupMasterController::class, 'index']);

<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OfficerController;
use App\Http\Controllers\BranchController;
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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/list-officer', [OfficerController::class, 'list_officer'])->name('list-officer');
Route::get('/branch-list', [BranchController::class, 'branch_list'])->name('branch-list');
Route::get('add-branch', [BranchController::class, 'add_branch'])->name('add-branch');
Route::post('insert-branch', [BranchController::class, 'insert_branch'])->name('insert-branch');

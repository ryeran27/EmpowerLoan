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
// Branch
Route::get('/branch-list', [BranchController::class, 'branch_list'])->name('branch-list');
Route::get('add-branch', [BranchController::class, 'add_branch'])->name('add-branch');
Route::post('insert-branch', [BranchController::class, 'insert_branch'])->name('insert-branch');
Route::get('edit-branch/{id}', [BranchController::class, 'edit_branch'])->name('edit-branch');
Route::post('update-branch/{id}', [BranchController::class, 'update_branch'])->name('update-branch');
Route::get('delete-branch/{id}',[BranchController::class, 'delete_branch'])->name('delete-branch');
// Loan Officer
Route::get('/list-officer', [OfficerController::class, 'list_officer'])->name('list-officer');
Route::get('add-officer', [OfficerController::class, 'add_officer'])->name('add-officer');
Route::post('insert-officer', [OfficerController::class, 'insert_officer'])->name('insert-officer');

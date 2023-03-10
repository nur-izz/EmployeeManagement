<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employee\employeeController;

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
Route::get('signin',[employeeController::class, 'index']);
Route::get('signup',[employeeController::class, 'login']);
Route::get('register',[employeeController::class, 'register']);
Route::get('logout',[employeeController::class, 'login']);

Route::get('add-address',[employeeController::class, 'addAddr']);
Route::get('save-address',[employeeController::class, 'saveAddr']);
Route::get('edit-address',[employeeController::class, 'editAddr']);

Route::get('add-employee',[employeeController::class, 'addEmp']);
Route::get('save-employee',[employeeController::class, 'saveEmp']);
Route::get('edit-employee',[employeeController::class, 'editEmp']);
Route::get('removed-employee',[employeeController::class, 'removedEmp']);
Route::get('back',[employeeController::class, 'index']);

Route::get('/', function () {
    return view('login');
});

<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\EmployeeAttendenceController;
use App\Http\Controllers\EmployeeLeavesController;
use App\Http\Controllers\AdvanceSalaryController;
use App\Http\Controllers\DesignationController;
use App\Http\Controllers\DeductAdvanceController;
use App\Http\Controllers\CreateCategoryController;
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

// ---------------Users Section Route Start------------
Route::get('/users', [UserController::class, 'index']);
Route::get('/about', [UserController::class, 'about']);
Route::get('/menu', [UserController::class, 'menu']);
Route::get('/gallery', [UserController::class, 'gallery']);
Route::get('/cart', [UserController::class, 'cart']);
Route::get('/shipping', [UserController::class, 'shipping']);
Route::get('/reservation', [UserController::class, 'reservation']);
Route::get('/payment', [UserController::class, 'payment']);
Route::get('/confirmation', [UserController::class, 'confirmation']);
Route::get('/blog', [UserController::class, 'blog']);
Route::get('/blog-single', [UserController::class, 'blog_single']);
Route::get('/contact', [UserController::class, 'contact']);
// ---------------Users Section Route End------------


// ---------------Admin Section Route Start------------
Route::get('/admin-login', [AdminController::class, 'login']);
Route::get('/admin-dashboard', [AdminController::class, 'index']);
Route::post('/admin/auth', [AdminController::class, 'auth'])->name('admin.auth');

// ---------------Admin Employee Route Start------------
Route::get('/create-new-employee', [EmployeeController::class, 'index']);
Route::get('/edit-employee-details/{id}', [EmployeeController::class, 'edit']);
Route::get('/update-employee-details/{id}', [EmployeeController::class, 'update']);
Route::post('/new-employee', [EmployeeController::class, 'store']);
Route::get('/employee-list', [EmployeeController::class, 'show'])->name('employees.search');

// --------------- Employee Attendence Route Start------------
Route::get('/employee-attendece', [EmployeeAttendenceController::class, 'index']);
Route::post('/employePresenty', [EmployeeAttendenceController::class, 'store']);
Route::get('/employee-leaves', [EmployeeLeavesController::class, 'index']);

// employye Advance Route
Route::get('/add-advance', [AdvanceSalaryController::class, 'create']);
Route::get('/add-EmployeeAdvance/{encodedId}', [AdvanceSalaryController::class, 'saveEmployeeAdvance']);

//  Designation Master

Route::get('/create-designation', [DesignationController::class, 'index']);
Route::post('/new-designation', [DesignationController::class, 'store']);
Route::get('/designation-list', [DesignationController::class, 'show']);
Route::get('/edit-designation-details/{id}', [DesignationController::class, 'edit']);
Route::post('/update-designation/{id}', [DesignationController::class, 'update']);

// Deduct Advance 
Route::get('deduct-advance', [DeductAdvanceController::class, 'index']);
//  Menu Category Route
Route::get('menuCategory',[CreateCategoryController::class,'index']);
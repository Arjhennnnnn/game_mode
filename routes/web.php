<?php
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Models\Employees;
use App\Models\User;



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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hasMany', function () {
    $supervisor = Employees::find(3)->subordinates;
    return view('first_layout.employee')
                ->with(['supervisors' => $supervisor]);
});

Route::redirect('/users', '/');

Route::get('/home', [UserController::class, 'home']);

Route::get('/about',function(){
    return view('first_layout.about');
});

Route::get('/employee',function(){
    return view('first_layout.employee');
});


Route::get('/show/{id}', [UserController::class, 'show']);


Route::post('/login/process', [UserController::class, 'process']);
Route::post('/create', [UserController::class, 'create'])->middleware('guest');;


Route::get('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::get('/user/home', [UserController::class, 'home'])->middleware('auth');
Route::post('/logout', [UserController::class, 'logout']);


Route::post('/create/employee', [EmployeeController::class, 'store']);
Route::get('/edit/employee/{id}', [EmployeeController::class, 'edit']);
Route::put('/update/employee/{id}', [EmployeeController::class, 'update']);
Route::delete('/delete/employee/{id}', [EmployeeController::class, 'destroy']);













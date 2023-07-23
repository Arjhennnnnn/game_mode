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


Route::controller(EmployeeController::class)->group(function(){
    Route::post('/create/employee','store');
    Route::get('/edit/employee/{id}','edit');
    Route::put('/update/employee/{id}','update');
    Route::delete('/delete/employee/{id}','destroy');

});


Route::controller(UserController::class)->group(function(){
    Route::get('/register', 'register');
    Route::get('/login', 'login')->name('login')->middleware('guest');
    Route::get('/user/home', 'home')->middleware('auth');
    Route::post('/logout', 'logout');
    Route::get('/show/{id}', 'show');
    Route::post('/login/process', 'process');
    Route::post('/create', 'create')->middleware('guest');
});










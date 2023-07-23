<?php
use App\Http\Controllers\UserController;
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
Route::post('/create', [UserController::class, 'create']);


Route::get('/register', [UserController::class, 'register']);
Route::get('/login', [UserController::class, 'login']);
Route::get('/user/home', [UserController::class, 'home']);







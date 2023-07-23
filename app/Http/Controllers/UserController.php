<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\User;

use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    // public function home(){
    //   return view('first_layout.home')
    //         ->with(['users'=>User::all()])
    //         ->with(['employees'=>Employees::all()]);
    // }

    
    public function home(){
      $data = Employees::all();
      return view('user.home')
          ->with(['employees' => $data]);
    }


    public function process(Request $request){
      $validate = $request -> validate([
        "email" => ['required'],
        "password" => 'required',
      ]);
      if(auth()->attempt($validate)){
        $request->session()->regenerate();
        return redirect('/user/home')->with('message','Welcome Back');
      }
    }

    public function create(Request $request){
      $validate = $request -> validate([
        "name" => ['required','min:4'],
        "email" => ['required','email',Rule::unique('users','email')],
        "password" => 'required|confirmed|min:6',
      ]);

      $validate['password'] = Hash::make($validate['password']);
      $user = User::create($validate);
      return redirect('/register')->with('message','Register Successfully');
    }
    
    public function register(){
      return view('user.register');
    }

  
    public function login(){
      return view('user.login');

    }
    
    


    
}

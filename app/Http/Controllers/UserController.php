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
      $this->middleware('auth');
      $data = Employees::all();
      return view('user.home')
          ->with(['employees' => $data]);
    }

    public function logout(Request $request){
      auth()->logout();
      $request->session()->invalidate();
      $request->session()->regenerateToken();

      return redirect('/login')->with('message','Logout Successfully');
    }

    
    public function process(Request $request){
      $validate = $request -> validate([
        "email" => ['required','email'],
        "password" => 'required',
      ]);
      if(auth()->attempt($validate)){
        $request->session()->regenerate();
        return redirect('/user/home')->with('message','Welcome Back');
      }
    }

  //   public function process(Request $request){
  //     $validated = $request->validate([

  //         "password" => 'required'
  //     ]);
  //     if(auth()->attempt($validated)){
  //         $request->session()->regenerate();
  //         return redirect('/employee',['user'->auth()->user()])->with('message','welcomeback');
  //     }
  //     return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
    
  // }




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

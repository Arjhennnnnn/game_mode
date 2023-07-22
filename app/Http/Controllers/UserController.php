<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\User;



class UserController extends Controller
{
    public function home(){
      return view('first_layout.home')
            ->with(['users'=>User::all()])
            ->with(['employees'=>Employees::all()]);

    }

    // public function show($id){

    //     return view('first_layout.home')
    //             ->with('id',$id)
    //             ->with('name','Arjhen');


    // }
    
}

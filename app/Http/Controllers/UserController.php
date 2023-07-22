<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home(){
        return view('first_layout.home');
    }

    public function show($id){
        return 'Return Parameter'.$id;
    }
    
}

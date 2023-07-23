<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employees;
use App\Models\User;

class EmployeeController extends Controller
{
    public function store(Request $request){
        $validate = $request -> validate([
            "supervisor_id" => ['required'],
            "first_name" => ['required'],
            "last_name" => ['required'],
            "middle_initial" => ['required'],
            "job_title" => ['required'],
          ]);

          Employees::create($validate);
          return redirect('/user/home')->with('message','Added Successfully');
    }

    public function edit($id){
        $employee = Employees::find($id);
        return view('user.view')
                    ->with(['employee' => $employee]);
    }

    public function update(Request $request,Employees $id){
        $validate = $request -> validate([
            "supervisor_id" => ['required'],
            "first_name" => ['required'],
            "last_name" => ['required'],
            "middle_initial" => ['required'],
            "job_title" => ['required'],
          ]);

          $id->update($validate);

          return back();
    }
    public function destroy(Request $request , Employees $id){

          $id->delete();

          return redirect('/user/home');
    }

    
    



    
}

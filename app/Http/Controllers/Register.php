<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class Register extends Controller
{
    public function index(){
        return view('register');
    }

    public function register(Request $request){
        echo "<pre>";
        print_r($request->all());

        $request->validate([
           'name' => 'required|max:20',
           'mobile' => 'required|min:9|max:11',
           'email' => 'required|email',
           'address' => 'required|max:30',
           'doj' => 'required',
           'gender' => 'required',
           'studpassword' => 'required'
        ]);

        $student = new Student;

        $student->name = $request['name'];
        $student->mobile= $request['mobile'];
        $student->email= $request['email'];
        $student->address = $request['address'];
        $student->doj = $request['doj'];
        $student->gender = $request['gender'];
        $student->password = $request['studpassword'];
        $student->save();

        return redirect('view');
    }

    public function view_student(){
        $student = Student::all();
        $data = compact('student');
        return view('view-data')->with($data);
    }

    public function update_student($id){
         $student = Student::find($id);

         if(!is_null($student)){
            $data = compact('student');
            return view('register')->with($data);
         }
         else{
            return redirect('view');
         }
    }
    
    public function edit_update($id, Request $request){
         $student = Student::find($id);
          
        $student->name = $request['name'];
        $student->mobile= $request['mobile'];
        $student->email= $request['email'];
        $student->address = $request['address'];
        $student->doj = $request['doj'];
        $student->gender = $request['gender'];
        $student->password = $request['studpassword'];
        $student->save();

        return redirect('view');
    }

    public function delete_student($id){
        $student = Student::find($id);

        if(!is_null($student)){
            $student->delete();
            return redirect()->back();

        }
        else{
            return redirect()->back();
        }

    }

    
}

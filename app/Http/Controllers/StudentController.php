<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
     $allStudents = Student::oldest()->get(); 
     return view('student.student', compact('allStudents'));
    }

   
    public function add()
    {
        return view('student.student_add');
    }

  
    public function submit(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'gender' => 'required',
            'teacher' => 'required',
         ]);
         $input = $request->all();     
              
         Student::updateorcreate([
            'name'=>$input['name']
         ],[
            'age'=>$input['age'],
            'gender'=>$input['gender'],
            'reporting_teacher'=>$input['teacher']
         
        ]);

         return redirect()->route('student.index')->with('success', 'Student added successfully.');
         
    }

   
    public function edit($id)
    {
        $student = Student::find(decrypt($id));
       
        return view('student.student_edit',compact('student'));    
    }

      
    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'age' => 'required|numeric',
            'gender' => 'required',
            'teacher' => 'required',
         ]);
         $input = $request->all();  
                 
         $student_id= decrypt($input['update_id']);     
         Student::find($student_id)->update([
            'name'=>$input['name'],
            'age'=>$input['age'],
            'gender'=>$input['gender'],
            'reporting_teacher'=>$input['teacher'],

        ]);

        return back()->with('success', 'Student Updated successfully.');
    }

    
    public function delete($id)
    {
        
        Student::find(decrypt($id))->delete();   
        return redirect()->route('student.index')->with('success', 'Student deleted successfully.');
    }

    

}

<?php

namespace App\Http\Controllers;

use App\Models\Mark;
use App\Models\Student;
use Illuminate\Http\Request;

class MarkController extends Controller
{
    public function index()
    {
      $Result= Mark::groupBy('student_id')->groupBy('term')->get(); 
      $allStudents = Student::oldest()->get(); 
    return view('student.marks', compact('allStudents','Result'));
    }

   
    public function add()
    {
    $allStudents = Student::pluck('name','id')->all();
    return view('student.marks_add', compact('allStudents'));
       
    }

  
    public function submit(Request $request)
    {
        $request->validate([
            'student' => 'required',
            'term' => 'required',
            'subject' => 'required',
            'marks' => 'required|numeric',
                       
         ]);
         $input = $request->all();     
              
        $banners=Mark::create([
            'student_id'=>$input['student'],
            'term'=>$input['term'],
            'subject'=>$input['subject'],
            'mark'=>$input['marks'],
           

        ]);

         return back()->with('success', 'Mark added successfully.');
         
    }

   
    public function edit($id,$term)
    {
        $id=decrypt($id);
        $allStudents = Student::pluck('name','id')->all();
        $mark= Mark::where('student_id', $id)->where('term', $term)->get();
        return view('student.marks_edit',compact('allStudents','mark','id','term'));    
    }

      
    public function update(Request $request)
    {
        $request->validate([
            'term' => 'required',
            'student_id' => 'required|numeric',
            
         ]);
         $input = $request->all();  
         //dd($input);
         $student_id= $input['student_id'] ;  
         $term      = $input['term'] ;  
         $i=0;
     
         foreach($input['subject'] as $val) {
           
         Mark::find($_POST['ids'][$i])->update([
            'term' =>$term,
            'subject'=>$val,
            'mark' => $_POST['mark'][$i] , 

        ]);
        $i++;
        }

        return redirect()->route('marks.index')->with('success', 'Student Mark Updated successfully.');
    }

    
    public function delete($id,$term)
    {
        
         Mark::where('student_id', decrypt($id))->where('term', $term)->delete();
         return redirect()->route('marks.index')->with('success', 'Student Mark deleted successfully.');
    }

    

}

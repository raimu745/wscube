<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use PHPUnit\Framework\MockObject\Builder\Stub;

class StudentController extends Controller
{
    function delete($id){
        // return $id;
   $student = Student::find($id);
   $student->delete();
   return redirect()->back();


    }
    function table(){
        $student = Student::paginate(2);
        return view('student',compact('student'));
    }
    function student(){
        return view('student');
    }
    function trash(){
        $student = Student::onlyTrashed()->get();
        return view('restorebin',compact('student'));
    }
    function restore($id){
       $student = Student::withTrashed()->find($id);
       $student->restore();
       return view('student',compact('student'));
    // dd($student);
    }

}

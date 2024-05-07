<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function index(){
        return view('form');
    }
   
    public function store(Request $request){
        Student::create($request->all());
        return redirect()->route('form');
    }

    public function show(){
        $data = Student::all();
        return view('show')->with('data',$data);
    }
    public function edit(Student $student)
    {
        return view('edit', compact('student'));
    }
    public function update(Request $request, Student $student)
    {
       

        $student->update($request->all());

        return redirect()->route('show');
    }

    public function destroy(Student $student)
    {
        $student->delete();

        return redirect()->route('show');
    }


}

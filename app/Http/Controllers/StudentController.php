<?php

namespace App\Http\Controllers;

use App\Models\College;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        $students = Student::all();
        return view('student.index', compact('students'));

    }

    public function create()
    {
        $colleges = College::all();
        $student = new Student();
        return view('student.create', compact('colleges', 'student'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students|String',
            'phone' => 'required|string|max:8',
            'dob' => 'required|date',
            'college_id' => 'required|exists:colleges,id'
        ]);

        Student::create($request->all());
        return redirect()->route('students.index')->with('success', 'Student added successfully!');
    }

    public function show($id)
    {
        $student = Student::find($id);
        if ($student == null) {
            return redirect()->route('students.index')->with('error', 'Student not found!');
        }
        return view('student.show', compact('student'));


    }

    public function edit($id)
    {
        $student = Student::find($id);
        $colleges = College::all();
        if ($student == null) {
            return redirect()->route('students.index')->with('error', 'Student not found!');
        }
        return view('student.edit', compact('student', 'colleges'));


    }

    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        if ($student == null) {
            return redirect()->route('students.index')->with('error', 'Student not found!');
        }
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:students,email,' . $id,
            'phone' => 'required|string|max:8',
            'dob' => 'required|date',
            'college_id' => 'required|exists:colleges,id'
        ]);

        $student->update($request->all());
        return redirect()->route('students.index')->with('success', 'Student updated successfully!');

    }

    public function destroy($id)
    {
        $student = Student::find($id);
        if ($student == null) {
            return redirect()->route('students.index')->with('error', 'Student not found!');
        }
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
    }


}

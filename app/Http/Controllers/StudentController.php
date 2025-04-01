<?php

namespace App\Http\Controllers;

use App\Models\College;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        //get the list of colleges available so the users can select which one to sort by
        $colleges = College::orderBy('name','asc')->pluck('name', 'id')->prepend('Select College', '');
        $students = Student::query();

        //if college_id is not null return students with that college id
        if (request('college_id') != null){
            $students = $students->where('college_id', request('college_id'));
        }

        // if sort is not null return students in asc or descending depending on what the user selected
        if (request('sort') != null){
            $students = $students->orderBy('name', request('sort'));
        }
        else{
            $students = $students->orderBy('id', 'asc');
        }

        $students = $students->get();

        //return students view
        return view('student.index', compact('students', 'colleges'));

    }

    public function create()
    {
        // return the create view
        $colleges = College::all();
        $student = new Student();
        return view('student.create', compact('colleges', 'student'));
    }

    public function store(Request $request)
    {
        //validate request then create a new student in database
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
        //show student by id if that student exists
        $student = Student::find($id);
        if ($student == null) {
            return redirect()->route('students.index')->with('error', 'Student not found!');
        }
        return view('student.show', compact('student'));


    }

    public function edit($id)
    {
        //return the edit view of student by id
        $student = Student::find($id);
        $colleges = College::all();
        if ($student == null) {
            return redirect()->route('students.index')->with('error', 'Student not found!');
        }
        return view('student.edit', compact('student', 'colleges'));


    }

    public function update(Request $request, $id)
    {
        //validate the request then update the student
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
        //if the student exists then delete the student from the database
        $student = Student::find($id);
        if ($student == null) {
            return redirect()->route('students.index')->with('error', 'Student not found!');
        }
        $student->delete();
        return redirect()->route('students.index')->with('success', 'Student deleted successfully!');
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    public function index()
    {
        // get all colleges
        $colleges = College::all();
        return view('college.index', compact('colleges'));
    }
    public function create()
    {
        //return the create college view
        $college = new College();
        return view('college.create', compact('college'));
    }
    public function store(Request $request)
    {
        //validate the request, then create a new college
        $request->validate([
            'name' => 'required|string|unique:colleges',
            'address' => 'required|string'
        ]);
        College::create($request->all());
        return redirect()->route('colleges.index')->with('success', 'College added successfully!');
    }
    public function show($id)
    {
        //return the show individual college view by using finding the id in the database
        $college = College::find($id);
        if($college == null){
            return redirect()->route('colleges.index')->with('error', 'College not found!');
        }
        return view('college.show', compact('college'));
    }
    public function edit($id)
    {
        //returns the edit college view
        $college = College::find($id);
        if($college == null){
            return redirect()->route('colleges.index')->with('error', 'College not found!');
        }
        return view('college.edit', compact('college'));
    }
    public function update(Request $request, $id)
    {

        $college = College::find($id);
        if($college == null){
            // if college is not found redirect to index page
            return redirect()->route('colleges.index')->with('error', 'College not found!');
        }
        //validate the request and then update the college
        $request->validate([
            'name' => 'required|string|unique:colleges,name,'.$id,
            'address' => 'required|string'
        ]);
        $college->update($request->all());
        return redirect()->route('colleges.index')->with('success', 'College updated successfully!');
    }
    public function destroy($id)
    {
        //find the college by id and then if college exists, delete from database
        $college = College::find($id);
        if($college == null){
            return redirect()->route('colleges.index')->with('error', 'College not found!');
        }
        $college->delete();
        return redirect()->route('colleges.index')->with('success', 'College deleted successfully!');
    }

}

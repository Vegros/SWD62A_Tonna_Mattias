<?php

namespace App\Http\Controllers;

use App\Models\College;
use Illuminate\Http\Request;

class CollegeController extends Controller
{
    public function index()
    {
        $colleges = College::all();
        return view('college.index', compact('colleges'));
    }
    public function create()
    {
        $college = new College();
        return view('college.create', compact('college'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:colleges',
            'address' => 'required|string'
        ]);
        College::create($request->all());
        return redirect()->route('colleges.index')->with('success', 'College added successfully!');
    }
    public function show($id)
    {
        $college = College::find($id);
        if($college == null){
            return redirect()->route('colleges.index')->with('error', 'College not found!');
        }
        return view('college.show', compact('college'));
    }
    public function edit($id)
    {
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
            return redirect()->route('colleges.index')->with('error', 'College not found!');
        }
        $request->validate([
            'name' => 'required|string|unique:colleges,name,'.$id,
            'address' => 'required|string'
        ]);
        $college->update($request->all());
        return redirect()->route('colleges.index')->with('success', 'College updated successfully!');
    }
    public function destroy($id)
    {
        $college = College::find($id);
        if($college == null){
            return redirect()->route('colleges.index')->with('error', 'College not found!');
        }
        $college->delete();
        return redirect()->route('colleges.index')->with('success', 'College deleted successfully!');
    }

}

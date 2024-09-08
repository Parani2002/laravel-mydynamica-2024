<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Grade;
use App\Models\Student;

class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grades = Grade::all();
        return view('grade.index',compact('grades'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('grade.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $grade = new Grade();
        $grade -> grade_name = $request -> input('grade_name');
        $grade -> grade_group = $request -> input('grade_group');
        $grade -> grade_order = $request -> input('grade_order');
        $grade -> grade_color = $request -> input('grade_color');
        $grade -> save();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $grade = Grade::find($id);
        return view ('grade.show',compact('grade'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $grade = Grade::find($id);
        return view('grade.edit',compact('grade'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $grade = new Grade();
        $grade -> grade_name = $request -> input('grade_name');
        $grade -> grade_group = $request -> input('grade_group');
        $grade -> grade_order = $request -> input('grade_order');
        $grade -> grade_color = $request -> input('grade_color');
        $grade -> save();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $grade = grade::find($id);
        $grade -> delete();
        return redirect('grades');
    }
}

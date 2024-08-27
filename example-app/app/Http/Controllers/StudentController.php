<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Grade;
use App\Models\Subject;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grades_count = Grade::all() -> count();
        $students_count = Student::all() -> count();
        $subjects_count = Subject::all() -> count();


        $students = Student::all();
        $students_count = $students -> count();
    
        return view('student.index', compact('students','students_count','grades_count','students_count','subjects_count'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)

    {
        $grades_count = Grade::all() -> count();
        $students_count = Student::all() -> count();
        $subjects_count = Subject::all() -> count();
        $student = Student::find($id);
        return view('student.show', compact('student','grades_count','students_count','subjects_count','id'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

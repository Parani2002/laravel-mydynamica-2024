<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grade;
use App\Models\Student;
use App\Models\Subject;
class GradeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grades = Grade::all();
        $grades_count = $grades -> count();

        $students_count = Student::all() -> count();
        $subjects_count = Subject::all() -> count();
        return view('grade.index', compact('grades','grades_count','students_count','subjects_count'));
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
        $students = Grade::find($id) -> students;
        $subjects = Grade::find($id) -> subjects;
        $grade = Grade::find($id);

        $grades_count = Grade::all() -> count();
        $students_count = Student::all() -> count();
        $subjects_count = Subject::all() -> count();

        return view('grade.show', compact('students','subjects','grade','id','grades_count','students_count','subjects_count'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
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

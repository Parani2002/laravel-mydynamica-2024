<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;
use App\Models\Grade;
use App\Models\Student;
class SubjectController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $grades_count = Grade::all() -> count();

        $students_count = Student::all() -> count();
        $subjects_count = Subject::all() -> count();
        $subjects = Subject::all();
        return view('subject.index', compact('subjects','grades_count','students_count','subjects_count'));
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
        $students = Subject::find($id) -> students;
        $grades = Subject::find($id) -> grade;
        $subject = Subject::find($id);

       
        return view('subject.show', compact('students','grades','subject','id'));
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

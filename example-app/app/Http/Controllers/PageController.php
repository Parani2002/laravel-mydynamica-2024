<?php

namespace App\Http\Controllers;
use App\Models\Student;
use App\Models\Grade;
use App\Models\Subject;
use IcehouseVentures\LaravelChartjs\Facades\Chartjs;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $student_count = Student::all() -> count();
        $grade_count = Grade::all() -> count();
        $subject_count = Subject::all() -> count();
        return view('pages.index',compact('student_count','grade_count','subject_count'));
    }
    public function showchart(){
        $labels = Grade::pluck('grade_name')->toArray();
       
      

        $data = Student::join('grades', 'students.grade_id', '=', 'grades.id')
                       ->select('grades.grade_name', DB::raw('count(students.id) as total'))
                       ->groupBy('grades.grade_name')
                       ->get();
                       $studentCounts = $data->pluck('total')->toArray();
        


        $chart = Chartjs::build()
            ->name("UserRegistrationsChart")
            ->type("line")
            ->size(["width" => 400, "height" => 200])
            ->labels($labels)
            ->datasets([
                [
                    "label" => "Grades",
                    "backgroundColor" => "rgba(38, 185, 154, 0.31)",
                    "borderColor" => "rgba(38, 185, 154, 0.7)",
                    "data" =>  $studentCounts
                ]
            ])
            ->options([
                'scales' => [
                    'y' => [
                      'beginAtZero' =>true,
                    ]
                ],
                'plugins' => [
                    'title' => [
                        'display' => true,
                        'text' => 'Monthly User Registrations'
                    ]
                ]
            ]);
            // dd($labels);
            // dd( $studentCounts);
            return view('pages.chart',compact('chart'));
    }
}

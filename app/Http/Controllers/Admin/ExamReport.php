<?php

namespace App\Http\Controllers\Admin;

use App\Mark;
use App\Lavel;
use Session;
use App\Student;
use App\Subject;
use App\ExamModel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExamReport extends Controller
{
    public function tabulation()
    {
        Session::put('page', 'tabulation');

        $class = Lavel::get();
        $exams = ExamModel::get();
        return view('admin.examreport.tabulation',compact('class','exams'));
    }

    public function tabulation_view(Request $request)
    {
        $exam_id = $request->exam_id;
        $class_id = $request->class_id;
        $section_id = $request->section_id;

        if($class_id == 1){
            $marks = Mark::where('marks.exam_id',$exam_id)
                            ->where('marks.class_id',$class_id)
                            ->where('marks.section_id',$section_id)
                            ->join('students','marks.student_id','=','students.id')
                            ->select('marks.*','students.student_name','students.roll')
                            ->get();
            return view('admin.examreport.view_tabulation',compact('marks'));
        }
        
    }

    public function transcript()
    {
        Session::put('page', 'transcript');
        $class = Lavel::get();
        $exams = ExamModel::get();
        return view('admin.examreport.transcript',compact('class','exams'));
    }

    public function transcript_student(Request $request)
    {
        $exam_id = $request->exam_id;

        $student = Mark::where('exam_id',$request->exam_id)
                        ->where('marks.class_id',$request->classs_id)
                        ->where('marks.section_id',$request->section_id)
                        ->join('students','marks.student_id','=','students.id')
                        ->join('lavels','marks.class_id','=','lavels.id')
                        ->join('sections','marks.section_id','=','sections.id')
                        ->select('marks.*','students.student_name','students.roll','lavels.lavel_name','sections.section_name')
                        ->get();

        return view('admin.examreport.transcript_student',compact('student','exam_id'));
    }


    
}

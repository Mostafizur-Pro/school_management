<?php

namespace App\Http\Controllers\Admin;

use App\Lavel;
use App\Subject;
use App\Teacher;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class SubjectController extends Controller
{
    public function list()
    {
        Session::put('page', 'subject');
        $lavel = Lavel::get();
        $teacher = Teacher::orderBy('teachers_name')->get();

        return view('admin.subject.subject_list',compact('lavel','teacher'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'subject_name' => 'required',
            'subject_type' => 'required',
        ]);

        if($request->subject_name == "Bangla")
        {
            $subject_id = '1';
        }else if($request->subject_name == "Bangla 2nd paper"){
            $subject_id = '2';
        }else if($request->subject_name == "English"){
            $subject_id = '3';
        }else if($request->subject_name == "English 2nd paper"){
            $subject_id = '4';
        }else if($request->subject_name == "Mathematics"){
            $subject_id = '5';
        }else if($request->subject_name == "Religion"){
            $subject_id = '6';
        }else if($request->subject_name == "ICT"){
            $subject_id = '7';
        }else if($request->subject_name == "Home Science"){
            $subject_id = '8';
        }else if($request->subject_name == "G.Knowledge"){
            $subject_id = '9';
        }else if($request->subject_name == "Ph.Edu"){
            $subject_id = '10';
        }else if($request->subject_name == "BGS"){
            $subject_id = '11';
        }else if($request->subject_name == "Science"){
            $subject_id = '12';
        }else if($request->subject_name == "Accounting"){
            $subject_id = '13';
        }else if($request->subject_name == "Business Ent"){
            $subject_id = '14';
        }else if($request->subject_name == "Finance"){
            $subject_id = '15';
        }else if($request->subject_name == "Biology"){
            $subject_id = '16';
        }else if($request->subject_name == "Higher Math"){
            $subject_id = '17';
        }else if($request->subject_name == "Chemistry"){
            $subject_id = '18';
        }else if($request->subject_name == "Physics"){
            $subject_id = '19';
        }


        $subject = new Subject();
        $subject->subject_name = $request->subject_name;
        $subject->subject_code = $request->subject_code;
        $subject->subject_type = $request->subject_type;
        $subject->subject_id = $subject_id;
        $subject->class_id = $request->class_id;
        $subject->teacher_id = $request->teacher_id;
        $subject->save();

        Toastr::success('Subject Successfully Insert', 'success');
        return redirect()->back();
    }

    public function list_by_ajax(Request $request)
    {
        $subject = Subject::where('class_id',$request->id)
                                ->join('teachers','subjects.teacher_id','=','teachers.id')
                                ->join('lavels','subjects.class_id','=','lavels.id')
                                ->get();
        return view('admin.subject.list_by_ajax',compact('subject'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use Session;
use App\Lavel;
use App\Staff;
use App\Section;
use App\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SectionController extends Controller
{
    public function list()
    {
        Session::put('page', 'session_list');

        $lavel = Lavel::get();
        $teacher = Teacher::orderBy('teachers_name')->get();
        return view('admin.section.section_list',compact('lavel','teacher'));
    }

    public function list_by_ajax(Request $request)
    {
            $section = Section::where('class_id',$request->id)
                                ->join('teachers','sections.teacher_id','=','teachers.id')
                                ->join('lavels','sections.class_id','=','lavels.id')
                                ->get();
                        

            return view('admin.section.section_list_by_ajax',compact('section'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'section_name' => 'required',
        ]);

        $section = new Section();
        $section->section_name = $request->section_name;
        $section->class_id = $request->class_id;
        $section->teacher_id = $request->teacher_id;
        $section->save();

        return redirect()->back();
    }
}

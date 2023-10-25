<?php

namespace App\Http\Controllers\Admin;

use App\Lavel;
use App\Section;
use App\Student;
use Session;
use App\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class AttendanceController extends Controller
{
    public function attendance(Request $request)
    {

        Session::put('page', 'attendance_create');

        $class   = Lavel::get();
        $section = Section::get();

        $sele_class  = $request->class;
        $sele_section  = $request->section;
        $att_date  = $request->att_date;

        if($sele_class !=NULL && $sele_section !=NULL && $att_date !=NULL)
        {
            $student = Student::where([
                'class_id' => $sele_class,
                'section_id' => $sele_section,
            ])->get();
            
            
        }else{
            
            $student = Student::where('class_id',0)->get();
            $att_date  = '';

            
        }
        $class_name   = Lavel::where('id',$sele_class)->select('lavel_name')->first();
        $section_name = Section::where('id',$sele_section)->select('section_name')->first();
        return view('admin.attendance.index',compact('class','section','student','att_date','class_name','section_name'));
    }

    public function attendance_store(Request $request)
    {
        $request->validate([
            'class_id' => 'required',
            'section_id' => 'required',
            'att_date' => 'required',
            'student_id' => 'required',
        ]);
        

        $old_attendances =DB::table('attendances')->where([
                    'class_id' => $request->class_id,
                    'section_id' => $request->section_id,
                    'att_date' => $request->att_date
                     ])->first();
                     
        if (isset($old_attendances)) {
            Toastr::error('Today Attendence Already Taken ', 'error');
            return Redirect()->back();
        }else{

            foreach ($request->student_id as $student_id) {
                $data[]=[
                    "student_id"=>$student_id,
                    "attendence"=>$request->attendence[$student_id],
                    "att_date" =>$request->att_date,
                    "class_id" =>$request->class_id,
                    "section_id" =>$request->section_id,
                    "edit_date" =>'',
                ];
            }
            DB::table('attendances')->insert($data);
            Toastr::success('Successfully Attendence Taken ', 'success');
            return Redirect()->back();
        }
        
    }

    public function attendance_edit(Request $request)
    {
        Session::put('page', 'attendance_edit');
        $class   = Lavel::get();
        $section = Section::get();

        $sele_class  = $request->class;
        $sele_section  = $request->section;
        $att_date  = $request->att_date;

        if($sele_class !=NULL && $sele_section !=NULL && $att_date !=NULL)
        {
            

            $student = Attendance::where([
                'attendances.class_id' => $sele_class,
                'attendances.section_id' => $sele_section,
                'attendances.att_date' => $att_date,
            ])
            ->join('students','attendances.student_id','=','students.id')
            ->join('lavels','attendances.class_id','=','lavels.id')
            ->join('sections','attendances.section_id','=','sections.id')
            ->select('attendances.id','attendances.attendence','students.id','students.student_name','students.roll','students.fathers_mobile','sections.section_name','lavels.lavel_name')
            ->orderBy('students.roll')
            ->get();
            
            
        }else{
            
            $student = Student::where('class_id',0)->get();
            $att_date  = '';
        }

        $class_name   = Lavel::where('id',$sele_class)->select('lavel_name')->first();
        $section_name = Section::where('id',$sele_section)->select('section_name')->first();

        return view('admin.attendance.attendance_edit',compact('class','section','student','att_date','class_name','section_name'));
    }

    public function attendance_update(Request $request)
    {
        foreach ($request->student_id as $studentId) {

            DB::table('attendances')
                ->where('student_id',$studentId)
                ->where('att_date',$request->att_date)
                ->update([
                    'attendence' => $request->attendence[$studentId]
                ]);
          }  
         
          
            

            return redirect()->back();
    
        
    }
}

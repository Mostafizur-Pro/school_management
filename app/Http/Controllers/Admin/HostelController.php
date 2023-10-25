<?php

namespace App\Http\Controllers\Admin;

use App\HMember;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Hostel;
use Session;
use App\Lavel;
use App\Student;
use Brian2694\Toastr\Facades\Toastr;

class HostelController extends Controller
{
    public function hostel()
    {
        Session::put('page', 'hostel');

        $hostels = Hostel::all();
        return view('admin.hostel.index',compact('hostels'));
    }

    public function create()
    {
        return view('admin.hostel.create');
    }

    public function store(Request $request){
            $request->validate([
                'hostel_name' => 'required|unique:hostels|max:255',
                'type' => 'required',
                'capacity'=> 'required',
            ]);

            Hostel::create($request->all());
            Toastr::success('Hostel Successfully Created', 'success');
            return redirect()->back();
    }

    public function member()
    {
        Session::put('page', 'member');
        $hostels = Hostel::all();
        return view('admin.hostel.member',compact('hostels'));
    }
    public function member_create()
    {
        $iclass = Lavel::all();
        $hostels = Hostel::all();
        return view('admin.hostel.member_create',compact('iclass','hostels'));
    }

    public function member_class_wise_student_list(Request $request)
    {

        $student = Student::where([
            'class_id' => $request->class_id,
            'section_id' => $request->section_id,
        ])
        ->get();
        return view('admin.hostel.class_section_wise_student',compact('student'));
    }

    public function member_store(Request $request)
    {
        $request->validate([
            'hostel_id'   => 'required',
            'student_id'    => 'required|unique:h_members|max:255',
            'room_no'       => 'required',
            'joining_date'  => 'required',
            'monthly_fee'   => 'required',
            
        ]);
        HMember::create($request->all());
        Toastr::success('Member Successfully Added', 'success');
        return redirect()->back();
    }
    public function member_show_bye_hostel(Request $request)
    {
        
            $hostels = HMember::where('hostel_id',$request->hostel_id)
                        ->join('students','h_members.student_id','=','students.id')
                        ->select('h_members.*','students.student_name')
                        ->get();
            return view('admin.hostel.membershow',compact('hostels'));
        
    }
    
}

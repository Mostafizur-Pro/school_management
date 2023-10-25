<?php

namespace App\Http\Controllers\Admin;

use App\User;
use App\Teacher;
use Session;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function list()
    {
        Session::put('page', 'teachers_list');
        $teacher = Teacher::get();
        return view('admin.teacher.list',compact('teacher'));
    }

    

    function store(Request $request)
    {
        $request->validate([
            'teachers_name' => 'required',
            'national_idcard' => 'unique:teachers',
            'teachers_mobile' => 'required|unique:teachers|numeric|digits:10',
            'teachers_email' => 'required|unique:teachers',
            'responsibility' => 'required',
            'teachers_gender' => 'required',
            'teachers_date_of_birth' => 'required',
            'account_number' => 'unique:teachers',
        ]);

        $teacher = new Teacher();

        $teacher_image = $request->file('teachers_image');
        $teachers_name = Str::slug($request->teachers_name);
        if (isset($teacher_image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $teachers_name.'-'.$currentDate.'.'.$teacher_image->getClientOriginalExtension();
            $upload_path='public/image/teacher/';
            $teachert_image_url=$upload_path.$imagename;
            $teacher_image->move($upload_path,$imagename);
            
            $teacher->teachers_image = $teachert_image_url;
        }

        $teachers_resume = $request->file('teachers_resume');
        if (isset($teachers_resume)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $teachers_name.'-'.$currentDate.'.'.$teachers_resume->getClientOriginalExtension();
            $upload_path='public/image/teacher/resume/';
            $teachert_resume_url=$upload_path.$imagename;
            $teachers_resume->move($upload_path,$imagename);
            
            $teacher->teachers_resume = $teachert_resume_url;
        }
        
        $teachers_joining_letter = $request->file('teachers_joining_letter');
        if (isset($teachers_joining_letter)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $teachers_name.'-'.$currentDate.'.'.$teachers_joining_letter->getClientOriginalExtension();
            $upload_path='public/image/teacher/joiningletter/';
            $teachert_joining_letter_url=$upload_path.$imagename;
            $teachers_joining_letter->move($upload_path,$imagename);
            
            $teacher->teachers_joining_letter = $teachert_joining_letter_url;
        }

        $teacher->teachers_name = $request->teachers_name;
        $teacher->national_idcard = $request->national_idcard;
        $teacher->teachers_mobile = $request->teachers_mobile;
        $teacher->teachers_email = $request->teachers_email;
        $teacher->responsibility = $request->responsibility;
        $teacher->teachers_gender = $request->teachers_gender;
        $teacher->teachers_date_of_birth = $request->teachers_date_of_birth;
        $teacher->teachers_date_of_joining = $request->teachers_date_of_joining;
        $teacher->teachers_marital_status = $request->teachers_marital_status;
        $teacher->teachers_current_address = $request->teachers_current_address;
        $teacher->teachers_permanent_address = $request->teachers_permanent_address;
        $teacher->teachers_qualification = $request->teachers_qualification;
        $teacher->teachers_work_experience = $request->teachers_work_experience;
        $teacher->teachers_basic_salary = $request->teachers_basic_salary;
        $teacher->teachers_contract_type = $request->teachers_contract_type;
        $teacher->account_title = $request->account_title;
        $teacher->account_number = $request->account_number;
        $teacher->bank_name = $request->bank_name;
        $teacher->branch_name = $request->branch_name;
        $teacher->teachers_facebook = $request->teachers_facebook;
        $teacher->teachers_twitter = $request->teachers_twitter;
        $teacher->teachers_linkedin = $request->teachers_linkedin;
        $teacher->teachers_instagram = $request->teachers_instagram;
        $teacher->save();

        $user = new User();
        $user->name = $request->teachers_name;
        $user->email = $request->teachers_email;
        $user->password = Hash::make($request->password);
        $user->teacher_id = $teacher->id;
        $user->role_id = 2;
        $user->save();

        Toastr::success('Teacher Info Successfully Inserted', 'success');
        return redirect()->back();
        


    }


    public function view($id){
        $teacher = Teacher::find($id); // Assuming you have a "Teacher" model

        return view('admin.teacher.teacher_view', compact('teacher'));
    }
    
    public function edit($id)
    {
        $teacher = Teacher::where('id',$id)->get();
        
       // return $teacher;
        return view('admin.teacher.teacher_edit', ['cd'=>$teacher]);

    }

    public function dataUpdate(Request $request, $id)
    {
        $teacher= Teacher::find($id);

        $teacher->teachers_name = $request->input('teachers_name') ;
        $teacher->national_idcard = $request->input('national_idcard') ;
        $teacher->teachers_mobile = $request->input('teachers_mobile') ;
        $teacher->teachers_email = $request->input('teachers_email') ;
        $teacher->responsibility = $request->input('responsibility') ;
        $teacher->teachers_gender = $request->input('teachers_gender') ;
        $teacher->teachers_date_of_birth = $request->input('teachers_date_of_birth') ;
        $teacher->teachers_date_of_joining = $request->input('teachers_date_of_joining') ;
        $teacher->teachers_marital_status = $request->input('teachers_marital_status');
        $teacher->teachers_current_address = $request->input('teachers_current_address');
        $teacher->teachers_permanent_address = $request->input('teachers_permanent_address') ;
        $teacher->teachers_qualification = $request->input('teachers_qualification') ;
        $teacher->teachers_work_experience = $request->input('teachers_work_experience') ;
        $teacher->teachers_basic_salary = $request->input('teachers_basic_salary') ;
        $teacher->teachers_contract_type = $request->input('teachers_contract_type') ;
        $teacher->account_title = $request->input('account_title') ;
        $teacher->account_number = $request->input('account_number') ;
        $teacher->bank_name = $request->input('bank_name') ;
        $teacher->branch_name = $request->input('branch_name') ;
        $teacher->teachers_facebook = $request->input('teachers_facebook') ;
        $teacher->teachers_twitter = $request->input('teachers_twitter') ;
        $teacher->teachers_linkedin = $request->input('teachers_linkedin') ;
        $teacher->teachers_instagram = $request->input('teachers_instagram') ;


        $teacher_image = $request->file('teachers_image');
        //$teachers_name = Str::slug($request->teachers_name);
        if (isset($teacher_image)) {
            $destination= 'public/image/teacher/'.$teacher->teachers_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $currentDate = Carbon::now()->toDateString();
            $imagename = $teachers_name.'-'.$currentDate.'.'.$teacher_image->getClientOriginalExtension();
            $upload_path='public/image/teacher/';
            $teacher_image_url=$upload_path.$imagename;
            $teacher_image->move($upload_path,$imagename);
            
            $teacher->teachers_image = $teacher_image_url;
        }

        $teachers_resume = $request->file('teachers_resume');
        if (isset($teachers_resume)) {
            $destination= 'public/image/teacher/resume'.$teacher->teachers_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $currentDate = Carbon::now()->toDateString();
            $imagename = $teachers_name.'-'.$currentDate.'.'.$teachers_resume->getClientOriginalExtension();
            $upload_path='public/image/teacher/resume/';
            $teachert_resume_url=$upload_path.$imagename;
            $teachers_resume->move($upload_path,$imagename);
            
            $teacher->teachers_resume = $teachert_resume_url;
        }
        
        $teachers_joining_letter = $request->file('teachers_joining_letter');
        if (isset($teachers_joining_letter)) {
            $destination= 'public/image/teacher/joiningletter/'.$teacher->teachers_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $currentDate = Carbon::now()->toDateString();
            $imagename = $teachers_name.'-'.$currentDate.'.'.$teachers_joining_letter->getClientOriginalExtension();
            $upload_path='public/image/teacher/joiningletter/';
            $teachert_joining_letter_url=$upload_path.$imagename;
            $teachers_joining_letter->move($upload_path,$imagename);
            
            $teacher->teachers_joining_letter = $teachert_joining_letter_url;
        }

        $teacher->update();
        return redirect()->back()->with('status','Update Successful.');

    }

    public function delete($id)
    {
        Session::put('page', 'teachers_list');
        $teacher = Teacher::where('id', $id);
        $teacher->delete();
        //return view('admin.teacher.list',compact('teacher'));
        return redirect()->back()->with('status','Delete Successful.');

    }
}

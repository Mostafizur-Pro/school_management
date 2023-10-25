<?php

namespace App\Http\Controllers\Admin;

use App\Lavel;
use App\Section;
use App\Student;
use Session;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\File;

class StudentController extends Controller
{
    public function create()
    {
        Session::put('page', 'admission');
        $lavel = Lavel::select('id','lavel_name')->get();
        $section = Section::select('id','section_name')->get();
        return view('admin.student.admission',compact('lavel','section'));
    }

    public function list(Request $request)
    {
        Session::put('page', 'student_list');
        $class   = Lavel::get();
        return view('admin.student.student_list',compact('class'));
    }

    public function class_wise_student_list(Request $request)
    {

        $student = Student::where([
            'students.class_id' => $request->class_id,
            'students.section_id' => $request->section_id,
        ])
        ->join('lavels','students.class_id','=','lavels.id')
        ->join('sections','students.section_id','=','sections.id')
        ->select('students.id','students.student_name','students.roll','students.student_email','students.student_mobile','lavels.lavel_name','sections.section_name')
        ->orderBy('roll')
        ->get();
        return view('admin.student.class_section_wise_student',compact('student'));
        
    }

    public function store(Request $request)
    {
        $request->validate([
            'roll' => 'required|unique:students|max:11',
            'class_id' => 'required',
            'section_id' => 'required',
            'student_name' => 'required',
            'student_mobile' => 'required|unique:students|numeric|digits:10',
            'student_date_of_birth'=>'required',
            'student_religion' => 'required',
            'student_gender' => 'required',
            'session' => 'required',
            'fathers_mobile'=> 'required|numeric|digits:10',

        ]);

        $student = new Student();

        $student_image = $request->file('student_image');
        $slugstudent_name = Str::slug($request->student_name);
        if (isset($student_image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slugstudent_name.'-'.$currentDate.'-'.uniqid().'.'.$student_image->getClientOriginalExtension();
            $upload_path='public/image/student/';
            $student_image_url=$upload_path.$imagename;
            $student_image->move($upload_path,$imagename);
            
            $student->student_image = $student_image_url;
        }


        $fathers_image = $request->file('fathers_image');
        if (isset($fathers_image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slugstudent_name.'-'.$currentDate.'-'.uniqid().'.'.$fathers_image->getClientOriginalExtension();
            $upload_path='public/image/student/fathers/';
            $fathers_image_url=$upload_path.$imagename;
            $fathers_image->move($upload_path,$imagename);
            
            $student->fathers_image = $fathers_image_url;
        }


        $mothers_image = $request->file('mothers_image');
        if (isset($mothers_image)) {
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slugstudent_name.'-'.$currentDate.'-'.uniqid().'.'.$mothers_image->getClientOriginalExtension();
            $upload_path='public/image/student/mothers';
            $mothers_image_url=$upload_path.$imagename;
            $mothers_image->move($upload_path,$imagename);
            
            $student->mothers_image = $mothers_image_url;
        }


        
        $student->roll = $request->roll;
        $student->class_id = $request->class_id;
        $student->section_id = $request->section_id;
        $student->group_id = $request->group_id;
        $student->student_name = $request->student_name;
        $student->student_mobile = $request->student_mobile;
        $student->student_email = $request->student_email;
        $student->student_gender = $request->student_gender;
        $student->student_date_of_birth = $request->student_date_of_birth;
        $student->student_religion = $request->student_religion;
        $student->student_blood_group = $request->student_blood_group;
        $student->student_present_address = $request->student_present_address;
        $student->student_parmanent_address = $request->student_parmanent_address;
        $student->session = $request->session;
        $student->student_image = $request->student_image;
        $student->fathers_name = $request->fathers_name;
        $student->fathers_mobile = $request->fathers_mobile;
        $student->fathers_occupation = $request->fathers_occupation;
        $student->mothers_name = $request->mothers_name;
        $student->mothers_mobile = $request->mothers_mobile;
        $student->mothers_occupation = $request->mothers_occupation;
        $student->save();
        Toastr::success('Student Info Successfully Inserted', 'success');
        return redirect()->back();

    }

    public function view($id)
    {
        $student = Student::where('students.id',$id)
            ->join('lavels','students.class_id','=','lavels.id')
            ->join('sections','students.section_id','=','sections.id')
            ->first();
        return view('admin.student.student_view',compact('student'));
    }

    public function edit($id)
    {
        Session::put('page', 'student_edit');

        $student = Student::where('id',$id)->get();
        
        //return $id;
        //return $student;
        
        $lavel = Lavel::select('id','lavel_name')->get();
        $section = Section::select('id','section_name')->get();
        //return view('admin.student.admission',compact('lavel','section'));
       

       //return view('admin.student.student_edit', compact('student'));
       return view('admin.student.student_edit', ['cd'=>$student], compact('lavel','section'));
    }

    public function dataUpdate(Request $request, $id)
    {
        //return $id;
        // $id= $request->id;
        // $roll= $request-> input('roll');
        // $student_name = $request->input('student_name');
        // $student_mobile = $request->input('student_mobile');
        // $student_date_of_birth = $request->input('student_date_of_birth');
        // $student_present_address = $request->input('student_present_address');
        // $student_parmanent_address = $request->input('student_parmanent_address');
        // $fathers_name = $request->input('fathers_name');
        // $fathers_mobile = $request->input('fathers_mobile');
        // $fathers_occupation = $request->input('fathers_occupation');
        // $mothers_name = $request->input('mothers_name');
        // $mothers_mobile = $request->input('mothers_mobile');
        // $mothers_occupation = $request->input('mothers_occupation');

        // $class_id = $request->input('class_id');
        // $section_id = $request->input('section_id');
        // $group_id = $request->input('group_id');
        // $student_gender = $request->input('student_gender');
        // $student_religion = $request->input('student_religion');
        // $session = $request->input('session');
        // $student_email = $request->input('student_email');
        // $student_blood_group = $request->input('student_blood_group');





        // $isUpdateSuccess= Student::where('id', $id)->update(['roll'=>$roll, 'class_id'=>$class_id, 'section_id'=>$section_id, 'group_id'=>$group_id ,'student_name'=>$student_name,
        //                                                  'student_mobile'=> $student_mobile, 'student_email'=>$student_email,
        //                                                  'student_gender'=>$student_gender ,'student_date_of_birth'=>$student_date_of_birth, 'student_religion'=>$student_religion,
        //                                                     'student_blood_group'=>$student_blood_group,
        //                                                     'student_present_address'=>$student_present_address, 'student_parmanent_address'=>$student_parmanent_address, 
        //                                                     'session'=>$session,
        //                                                     'fathers_name'=>$fathers_name,'fathers_mobile'=>$fathers_mobile, 'fathers_occupation'=>$fathers_occupation, 
        //                                                     'mothers_name'=>$mothers_name, 'mothers_mobile'=>$mothers_mobile, 'mothers_occupation'=>$mothers_occupation]);

        //                                                 return redirect()->back();

        $student= Student::find($id);
        $student->roll= $request-> input('roll');
        $student->student_name = $request->input('student_name');
        $student->student_mobile = $request->input('student_mobile');
        $student->student_date_of_birth = $request->input('student_date_of_birth');
        $student->student_present_address = $request->input('student_present_address');
        $student->student_parmanent_address = $request->input('student_parmanent_address');
        $student->fathers_name = $request->input('fathers_name');
        $student->fathers_mobile = $request->input('fathers_mobile');
        $student->fathers_occupation = $request->input('fathers_occupation');
        $student->mothers_name = $request->input('mothers_name');
        $student->mothers_mobile = $request->input('mothers_mobile');
        $student->mothers_occupation = $request->input('mothers_occupation');
        $student->class_id = $request->input('class_id');
        $student->section_id = $request->input('section_id');
        $student->group_id = $request->input('group_id');
        $student->student_gender = $request->input('student_gender');
        $student->student_religion = $request->input('student_religion');
        $student->session = $request->input('session');
        $student->student_email = $request->input('student_email');
        $student->student_blood_group = $request->input('student_blood_group');

        // if($request->hasfile('student_image'))
        // {
        //     $destination= 'public/image/student/'.$student->student_image;
        //     if(File::exists($destination))
        //     {
        //         File::delete($destination);
        //     }

        //     $file=$request->file('student_image');
        //     $extention=$file->getClientOriginalExtension();
        //     $filename= time().'.'.$extention;
        //     $file->move('public/image/student/', $filename);
        //     $student->student_image= $filename;
        // }

        $student_image = $request->file('student_image');
        $slugstudent_name = Str::slug($request->student_name);
        if (isset($student_image)) {
            $destination= 'public/image/student/'.$student->student_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slugstudent_name.'-'.$currentDate.'-'.uniqid().'.'.$student_image->getClientOriginalExtension();
            $upload_path='public/image/student/';
            $student_image_url=$upload_path.$imagename;
            $student_image->move($upload_path,$imagename);
            
            $student->student_image = $student_image_url;
        }

        $fathers_image = $request->file('fathers_image');
        if (isset($fathers_image)) {
            $destination= 'public/image/student/fathers/'.$student->student_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slugstudent_name.'-'.$currentDate.'-'.uniqid().'.'.$fathers_image->getClientOriginalExtension();
            $upload_path='public/image/student/fathers/';
            $fathers_image_url=$upload_path.$imagename;
            $fathers_image->move($upload_path,$imagename);
            
            $student->fathers_image = $fathers_image_url;
        }


        $mothers_image = $request->file('mothers_image');
        if (isset($mothers_image)) {
            $destination= 'public/image/student/mothers/'.$student->student_image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $currentDate = Carbon::now()->toDateString();
            $imagename = $slugstudent_name.'-'.$currentDate.'-'.uniqid().'.'.$mothers_image->getClientOriginalExtension();
            $upload_path='public/image/student/mothers';
            $mothers_image_url=$upload_path.$imagename;
            $mothers_image->move($upload_path,$imagename);
            
            $student->mothers_image = $mothers_image_url;
        }


        $student->update();
        return redirect()->back()->with('status','Update Successful.');




    }

    public function dataDelete($id)
    {
        Session::put('page', 'student_list');
        $class   = Lavel::get();
      
        $student = Student::where('id',$id);
        $student-> delete();
        return view('admin.student.student_list',compact('class'));
    }



}

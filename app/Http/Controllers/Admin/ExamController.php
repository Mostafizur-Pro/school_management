<?php

namespace App\Http\Controllers\Admin;

use App\Mark;
use App\Lavel;
use Session;
use App\Section;
use App\Student;
use App\Subject;
use App\ExamModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class ExamController extends Controller
{
    public function mark_entry()
    {
        Session::put('page', 'mark_entry');

        $class   = Lavel::get();
        $exam_name = ExamModel::get();
        return view('admin.exam.mark_entry',compact('class','exam_name'));
    }

    public function create_exam()
    {
        Session::put('page', 'create_exam');
        $exam_name = ExamModel::get();
        return view('admin.exam.create_exam',compact('exam_name'));
    }

    function create_exam_store(Request $request)
    {
        
        $validatedData = $request->validate([
            'exam_name' => 'required|max:191',
            'exam_year' => 'required|max:191',
        ]);

        $exam = new ExamModel();
        $exam->exam_name = $request->exam_name;
        $exam->exam_year = $request->exam_year;
        $exam->save();

        Toastr::success('Exam Successfully Inserted', 'success');
        return redirect()->back();
    }

    function class_wise_section(Request $request)
    {
        $section = Section::where('class_id',$request->class_id)->get();

        return view('admin.exam.class_wise_section',compact('section'));
    }
    function class_wise_subject(Request $request)
    {
        $subject = Subject::where('class_id',$request->class_id)->get();

        return view('admin.exam.class_wise_subject',compact('subject'));
    }

    function mark_entry_student(Request $request)
    {
        $exam_id = $request->exam_id;
        $subject_id = $request->subject_id;
        
        $subject = Subject::where('id',$subject_id)->first();

        $mark = Mark::where([
            'class_id' => $request->class_id,
            'section_id' => $request->section_id,
            'exam_id' => $request->exam_id
             ])->first();

        if(isset($mark))
        {
            
            $student = Mark::where([
                'marks.class_id' => $request->class_id,
                'marks.section_id' => $request->section_id,
                'marks.exam_id' => $request->exam_id,
            ])
            ->join('students','marks.student_id','students.id')
            ->join('lavels','marks.class_id','lavels.id')
            ->join('sections','marks.section_id','sections.id')
            ->select('marks.*','students.student_name','students.roll','lavels.lavel_name','sections.section_name')
            ->get();

            $mark_type = '1';
            return view('admin.exam.class_wise_mark',compact('student','exam_id','subject','mark_type'));
            

        }else{

            $student = Student::where([
                'students.class_id' => $request->class_id,
                'students.section_id' => $request->section_id,
            ])
            ->join('lavels','students.class_id','lavels.id')
            ->join('sections','students.section_id','sections.id')
            ->select('students.id','students.student_name','students.roll','students.class_id','students.section_id','lavels.lavel_name','sections.section_name')
            ->get();

            $mark_type = '0';
            return view('admin.exam.class_wise_mark',compact('student','exam_id','subject','mark_type'));

            
        }
         
    }

    public function mark_store(Request $request)
    {
       
            if($request->subject_id == '1')
            {
                foreach ($request->student_id as $student_id) {
                    $data[]=[
    
                        "student_id"=>$student_id,
                        "exam_id" => $request->exam_id,
                        "class_id" =>$request->class_id,
                        "section_id" =>$request->section_id,
    
                        "bang_1st_cq"=>$request->cq[$student_id],
                        "bang_1st_mcq"=>$request->mcq[$student_id],
                        "bang_1st_total" => $request->cq[$student_id] + $request->mcq[$student_id],
                        
                        
                    ];
                }
     
            }else if($request->subject_id == '2')
            {
                foreach ($request->student_id as $student_id) {
                    $data[]=[
    
                        "student_id"=>$student_id,
                        "exam_id" => $request->exam_id,
                        "class_id" =>$request->class_id,
                        "section_id" =>$request->section_id,
    
                        "bang_2nd_cq"=>$request->cq[$student_id],
                        "bang_2nd_mcq"=>$request->mcq[$student_id],
                        "bang_2nd_total" => $request->cq[$student_id] + $request->mcq[$student_id],
                        
                    ];
                }
     
            }else if($request->subject_id == '3')
            {
                foreach ($request->student_id as $student_id) {
                    $data[]=[
    
                        "student_id"=>$student_id,
                        "exam_id" => $request->exam_id,
                        "class_id" =>$request->class_id,
                        "section_id" =>$request->section_id,
    
                        "eng_1st_cq"=>$request->cq[$student_id],
                        "eng_1st_mcq"=>$request->mcq[$student_id],
                        "eng_1st_total" => $request->cq[$student_id] + $request->mcq[$student_id],
                        
                    ];
                }
     
            }else if($request->subject_id == '4')
            {
                foreach ($request->student_id as $student_id) {
                    $data[]=[
    
                        "student_id"=>$student_id,
                        "exam_id" => $request->exam_id,
                        "class_id" =>$request->class_id,
                        "section_id" =>$request->section_id,
    
                        "eng_2nd_cq"=>$request->cq[$student_id],
                        "eng_2nd_mcq"=>$request->mcq[$student_id],
                        "eng_2nd_total" => $request->cq[$student_id] + $request->mcq[$student_id],
                        
                    ];
                }
     
            }else if($request->subject_id == '5')
            {
                foreach ($request->student_id as $student_id) {
                    $data[]=[
    
                        "student_id"=>$student_id,
                        "exam_id" => $request->exam_id,
                        "class_id" =>$request->class_id,
                        "section_id" =>$request->section_id,
    
                        "math_cq"=>$request->cq[$student_id],
                        "math_mcq"=>$request->mcq[$student_id],
                        "math_total" => $request->cq[$student_id] + $request->mcq[$student_id],
                        
                    ];
                }
     
            }else if($request->subject_id == '6')
            {
                foreach ($request->student_id as $student_id) {
                    $data[]=[
    
                        "student_id"=>$student_id,
                        "exam_id" => $request->exam_id,
                        "class_id" =>$request->class_id,
                        "section_id" =>$request->section_id,
    
                        "religion_cq"=>$request->cq[$student_id],
                        "religion_mcq"=>$request->mcq[$student_id],
                        "religion_total" => $request->cq[$student_id] + $request->mcq[$student_id],
                        
                    ];
                }
     
            }else if($request->subject_id == '7')
            {
                foreach ($request->student_id as $student_id) {
                    $data[]=[
    
                        "student_id"=>$student_id,
                        "exam_id" => $request->exam_id,
                        "class_id" =>$request->class_id,
                        "section_id" =>$request->section_id,
    
                        "ict_cq"=>$request->cq[$student_id],
                        "ict_mcq"=>$request->mcq[$student_id],
                        "ict_practical"=>$request->practical[$student_id],
                        "ict_total" => $request->cq[$student_id] + $request->mcq[$student_id] + $request->practical[$student_id],
                        
                    ];
                }
     
            }else if($request->subject_id == '8')
            {
                foreach ($request->student_id as $student_id) {
                    $data[]=[
    
                        "student_id"=>$student_id,
                        "exam_id" => $request->exam_id,
                        "class_id" =>$request->class_id,
                        "section_id" =>$request->section_id,
    
                        "homs_cq"=>$request->cq[$student_id],
                        "homs_mcq"=>$request->mcq[$student_id],
                        "homs_practical"=>$request->practical[$student_id],
                        "homs_total" => $request->cq[$student_id] + $request->mcq[$student_id] + $request->practical[$student_id],
                        
                    ];
                }
     
            }else if($request->subject_id == '9')
            {
                foreach ($request->student_id as $student_id) {
                    $data[]=[
    
                        "student_id"=>$student_id,
                        "exam_id" => $request->exam_id,
                        "class_id" =>$request->class_id,
                        "section_id" =>$request->section_id,
    
                        "gk_cq"=>$request->cq[$student_id],
                        "gk_mcq"=>$request->mcq[$student_id],
                        "gk_total" => $request->cq[$student_id] + $request->mcq[$student_id],
                        
                    ];
                }
     
            }else if($request->subject_id == '10')
            {
                foreach ($request->student_id as $student_id) {
                    $data[]=[
    
                        "student_id"=>$student_id,
                        "exam_id" => $request->exam_id,
                        "class_id" =>$request->class_id,
                        "section_id" =>$request->section_id,
    
                        "phed_cq"=>$request->cq[$student_id],
                        "phed_mcq"=>$request->mcq[$student_id],
                        "phed_practical"=>$request->practical[$student_id],
                        "phed_total" => $request->cq[$student_id] + $request->mcq[$student_id] + $request->practical[$student_id],
                        
                    ];
                }
     
            }else if($request->subject_id == '11')
            {
                foreach ($request->student_id as $student_id) {
                    $data[]=[
    
                        "student_id"=>$student_id,
                        "exam_id" => $request->exam_id,
                        "class_id" =>$request->class_id,
                        "section_id" =>$request->section_id,
    
                        "bgs_cq"=>$request->cq[$student_id],
                        "bgs_mcq"=>$request->mcq[$student_id],
                        "bgs_total" => $request->cq[$student_id] + $request->mcq[$student_id],
                        
                    ];
                }
     
            }else if($request->subject_id == '12')
            {
                foreach ($request->student_id as $student_id) {
                    $data[]=[
    
                        "student_id"=>$student_id,
                        "exam_id" => $request->exam_id,
                        "class_id" =>$request->class_id,
                        "section_id" =>$request->section_id,
    
                        "science_cq"=>$request->cq[$student_id],
                        "science_mcq"=>$request->mcq[$student_id],
                        "science_practical"=>$request->practical[$student_id],
                        "science_total" => $request->cq[$student_id] + $request->mcq[$student_id] + $request->practical[$student_id],
                        
                    ];
                }
     
            }else if($request->subject_id == '13')
            {
                foreach ($request->student_id as $student_id) {
                    $data[]=[
    
                        "student_id"=>$student_id,
                        "exam_id" => $request->exam_id,
                        "class_id" =>$request->class_id,
                        "section_id" =>$request->section_id,
    
                        "acc_cq"=>$request->cq[$student_id],
                        "acc_mcq"=>$request->mcq[$student_id],
                        "acc_total" => $request->cq[$student_id] + $request->mcq[$student_id],
                        
                    ];
                }
     
            }else if($request->subject_id == '14')
            {
                foreach ($request->student_id as $student_id) {
                    $data[]=[
    
                        "student_id"=>$student_id,
                        "exam_id" => $request->exam_id,
                        "class_id" =>$request->class_id,
                        "section_id" =>$request->section_id,
    
                        "bent_cq"=>$request->cq[$student_id],
                        "bent_mcq"=>$request->mcq[$student_id],
                        "bent_total" => $request->cq[$student_id] + $request->mcq[$student_id],
                        
                    ];
                }
     
            }else if($request->subject_id == '15')
            {
                foreach ($request->student_id as $student_id) {
                    $data[]=[
    
                        "student_id"=>$student_id,
                        "exam_id" => $request->exam_id,
                        "class_id" =>$request->class_id,
                        "section_id" =>$request->section_id,
    
                        "fin_cq"=>$request->cq[$student_id],
                        "fin_mcq"=>$request->mcq[$student_id],
                        "fin_total" => $request->cq[$student_id] + $request->mcq[$student_id],
                        
                    ];
                }
     
            }else if($request->subject_id == '16')
            {
                foreach ($request->student_id as $student_id) {
                    $data[]=[
    
                        "student_id"=>$student_id,
                        "exam_id" => $request->exam_id,
                        "class_id" =>$request->class_id,
                        "section_id" =>$request->section_id,
    
                        "bio_cq"=>$request->cq[$student_id],
                        "bio_mcq"=>$request->mcq[$student_id],
                        "bio_practical"=>$request->practical[$student_id],
                        "bio_total" => $request->cq[$student_id] + $request->mcq[$student_id] + $request->practical[$student_id],
                        
                    ];
                }
     
            }else if($request->subject_id == '17')
            {
                foreach ($request->student_id as $student_id) {
                    $data[]=[
    
                        "student_id"=>$student_id,
                        "exam_id" => $request->exam_id,
                        "class_id" =>$request->class_id,
                        "section_id" =>$request->section_id,
    
                        "hmath_cq"=>$request->cq[$student_id],
                        "hmath_mcq"=>$request->mcq[$student_id],
                        "hmath_practical"=>$request->practical[$student_id],
                        "hmath_total" => $request->cq[$student_id] + $request->mcq[$student_id] + $request->practical[$student_id],
                        
                    ];
                }
     
            }else if($request->subject_id == '18')
            {
                foreach ($request->student_id as $student_id) {
                    $data[]=[
    
                        "student_id"=>$student_id,
                        "exam_id" => $request->exam_id,
                        "class_id" =>$request->class_id,
                        "section_id" =>$request->section_id,
    
                        "chemestry_cq"=>$request->cq[$student_id],
                        "chemestry_mcq"=>$request->mcq[$student_id],
                        "chemestry_practical"=>$request->practical[$student_id],
                        "chemestry_total" => $request->cq[$student_id] + $request->mcq[$student_id] + $request->practical[$student_id],
                        
                    ];
                }
     
            }else if($request->subject_id == '19')
            {
                foreach ($request->student_id as $student_id) {
                    $data[]=[
    
                        "student_id"=>$student_id,
                        "exam_id" => $request->exam_id,
                        "class_id" =>$request->class_id,
                        "section_id" =>$request->section_id,
    
                        "phy_cq"=>$request->cq[$student_id],
                        "phy_mcq"=>$request->mcq[$student_id],
                        "phy_practical"=>$request->practical[$student_id],
                        "phy_total" => $request->cq[$student_id] + $request->mcq[$student_id] + $request->practical[$student_id],
                        
                    ];
                }
     
            }


            DB::table('marks')->insert($data);
                Toastr::success('Students Mark Successfully Insert ', 'success');
                return Redirect()->back();
 
        

    }
    
    public function mark_update(Request $request)
    {
        

            if($request->subject_id == '1')
            {

                foreach ($request->student_id as $student_id) {

                    $mark_updates = Mark::where([
                        'id' => $student_id,
                        'class_id' => $request->class_id,
                        'section_id' => $request->section_id,
                        'exam_id' => $request->exam_id,
                    ])->first();
    
                    $mark_updates->bang_1st_cq = $request->cq[$student_id];
                    $mark_updates->bang_1st_mcq = $request->mcq[$student_id];
                    $mark_updates->bang_1st_total = $request->cq[$student_id] + $request->mcq[$student_id];
                    
                    $mark_updates->total_mark = $request->cq[$student_id] + $request->mcq[$student_id] + $mark_updates->bang_2nd_total
                     +$mark_updates->eng_1st_total
                     +$mark_updates->eng_2nd_total
                     +$mark_updates->math_total
                     +$mark_updates->religion_total
                     +$mark_updates->ict_total
                     +$mark_updates->homs_total
                     +$mark_updates->gk_total
                     +$mark_updates->phed_total
                     +$mark_updates->bgs_total
                     +$mark_updates->science_total
                     +$mark_updates->acc_total
                     +$mark_updates->bent_total
                     +$mark_updates->fin_total
                     +$mark_updates->bio_total
                     +$mark_updates->hmath_total
                     +$mark_updates->chemestry_total
                     +$mark_updates->phy_total;

                    $mark_updates->update(); 
                    
                }

            }else if($request->subject_id == '2')
            {

                foreach ($request->student_id as $student_id) {

                    $mark_updates = Mark::where([
                        'id' => $student_id,
                        'class_id' => $request->class_id,
                        'section_id' => $request->section_id,
                        'exam_id' => $request->exam_id,
                    ])->first();
    
                    $mark_updates->bang_2nd_cq = $request->cq[$student_id];
                    $mark_updates->bang_2nd_mcq = $request->mcq[$student_id];
                    $mark_updates->bang_2nd_total = $request->cq[$student_id] + $request->mcq[$student_id];
                    
                    $mark_updates->total_mark = $request->cq[$student_id] + $request->mcq[$student_id] 
                    + $mark_updates->bang_1st_total
                     +$mark_updates->eng_1st_total
                     +$mark_updates->eng_2nd_total
                     +$mark_updates->math_total
                     +$mark_updates->religion_total
                     +$mark_updates->ict_total
                     +$mark_updates->homs_total
                     +$mark_updates->gk_total
                     +$mark_updates->phed_total
                     +$mark_updates->bgs_total
                     +$mark_updates->science_total
                     +$mark_updates->acc_total
                     +$mark_updates->bent_total
                     +$mark_updates->fin_total
                     +$mark_updates->bio_total
                     +$mark_updates->hmath_total
                     +$mark_updates->chemestry_total
                     +$mark_updates->phy_total;

                    $mark_updates->update(); 
                    
                }

            }else if($request->subject_id == '3')
            {

                foreach ($request->student_id as $student_id) {

                    $mark_updates = Mark::where([
                        'id' => $student_id,
                        'class_id' => $request->class_id,
                        'section_id' => $request->section_id,
                        'exam_id' => $request->exam_id,
                    ])->first();
    
                    $mark_updates->eng_1st_cq = $request->cq[$student_id];
                    $mark_updates->eng_1st_mcq = $request->mcq[$student_id];
                    $mark_updates->eng_1st_total = $request->cq[$student_id] + $request->mcq[$student_id];
                        
                    $mark_updates->total_mark = $request->cq[$student_id] + $request->mcq[$student_id] 
                    + $mark_updates->bang_1st_total
                     +$mark_updates->bang_2nd_total
                     +$mark_updates->eng_2nd_total
                     +$mark_updates->math_total
                     +$mark_updates->religion_total
                     +$mark_updates->ict_total
                     +$mark_updates->homs_total
                     +$mark_updates->gk_total
                     +$mark_updates->phed_total
                     +$mark_updates->bgs_total
                     +$mark_updates->science_total
                     +$mark_updates->acc_total
                     +$mark_updates->bent_total
                     +$mark_updates->fin_total
                     +$mark_updates->bio_total
                     +$mark_updates->hmath_total
                     +$mark_updates->chemestry_total
                     +$mark_updates->phy_total;

                    $mark_updates->update(); 
                    
                }

            }else if($request->subject_id == '4')
            {

                foreach ($request->student_id as $student_id) {

                    $mark_updates = Mark::where([
                        'id' => $student_id,
                        'class_id' => $request->class_id,
                        'section_id' => $request->section_id,
                        'exam_id' => $request->exam_id,
                    ])->first();
    
                    $mark_updates->eng_2nd_cq = $request->cq[$student_id];
                    $mark_updates->eng_2nd_mcq = $request->mcq[$student_id];
                    $mark_updates->eng_2nd_total = $request->cq[$student_id] + $request->mcq[$student_id];
                        
                    $mark_updates->total_mark = $request->cq[$student_id] + $request->mcq[$student_id] 
                    + $mark_updates->bang_1st_total
                     +$mark_updates->bang_2nd_total
                     +$mark_updates->eng_1st_total
                     +$mark_updates->math_total
                     +$mark_updates->religion_total
                     +$mark_updates->ict_total
                     +$mark_updates->homs_total
                     +$mark_updates->gk_total
                     +$mark_updates->phed_total
                     +$mark_updates->bgs_total
                     +$mark_updates->science_total
                     +$mark_updates->acc_total
                     +$mark_updates->bent_total
                     +$mark_updates->fin_total
                     +$mark_updates->bio_total
                     +$mark_updates->hmath_total
                     +$mark_updates->chemestry_total
                     +$mark_updates->phy_total;

                    $mark_updates->update(); 
                    
                }

            }else if($request->subject_id == '5')
            {

                foreach ($request->student_id as $student_id) {

                    $mark_updates = Mark::where([
                        'id' => $student_id,
                        'class_id' => $request->class_id,
                        'section_id' => $request->section_id,
                        'exam_id' => $request->exam_id,
                    ])->first();
    
                    $mark_updates->math_cq = $request->cq[$student_id];
                    $mark_updates->math_mcq = $request->mcq[$student_id];
                    $mark_updates->math_total = $request->cq[$student_id] + $request->mcq[$student_id];
                        
                    $mark_updates->total_mark = $request->cq[$student_id] + $request->mcq[$student_id] 
                    + $mark_updates->bang_1st_total
                     +$mark_updates->bang_2nd_total
                     +$mark_updates->eng_1st_total
                     +$mark_updates->eng_2nd_total
                     +$mark_updates->religion_total
                     +$mark_updates->ict_total
                     +$mark_updates->homs_total
                     +$mark_updates->gk_total
                     +$mark_updates->phed_total
                     +$mark_updates->bgs_total
                     +$mark_updates->science_total
                     +$mark_updates->acc_total
                     +$mark_updates->bent_total
                     +$mark_updates->fin_total
                     +$mark_updates->bio_total
                     +$mark_updates->hmath_total
                     +$mark_updates->chemestry_total
                     +$mark_updates->phy_total;

                    $mark_updates->update(); 
                    
                }

            }else if($request->subject_id == '6')
            {

                foreach ($request->student_id as $student_id) {

                    $mark_updates = Mark::where([
                        'id' => $student_id,
                        'class_id' => $request->class_id,
                        'section_id' => $request->section_id,
                        'exam_id' => $request->exam_id,
                    ])->first();
    
                    $mark_updates->religion_cq = $request->cq[$student_id];
                    $mark_updates->religion_mcq = $request->mcq[$student_id];
                    $mark_updates->religion_total = $request->cq[$student_id] + $request->mcq[$student_id];
                        
                    $mark_updates->total_mark = $request->cq[$student_id] + $request->mcq[$student_id] 
                    + $mark_updates->bang_1st_total
                     +$mark_updates->bang_2nd_total
                     +$mark_updates->eng_1st_total
                     +$mark_updates->eng_2nd_total
                     +$mark_updates->math_total
                     +$mark_updates->ict_total
                     +$mark_updates->homs_total
                     +$mark_updates->gk_total
                     +$mark_updates->phed_total
                     +$mark_updates->bgs_total
                     +$mark_updates->science_total
                     +$mark_updates->acc_total
                     +$mark_updates->bent_total
                     +$mark_updates->fin_total
                     +$mark_updates->bio_total
                     +$mark_updates->hmath_total
                     +$mark_updates->chemestry_total
                     +$mark_updates->phy_total;

                    $mark_updates->update(); 
                    
                }

            }else if($request->subject_id == '7')
            {

                foreach ($request->student_id as $student_id) {

                    $mark_updates = Mark::where([
                        'id' => $student_id,
                        'class_id' => $request->class_id,
                        'section_id' => $request->section_id,
                        'exam_id' => $request->exam_id,
                    ])->first();
    
                    $mark_updates->ict_cq = $request->cq[$student_id];
                    $mark_updates->ict_mcq = $request->mcq[$student_id];
                    $mark_updates->ict_practical = $request->practical[$student_id];
                    $mark_updates->ict_total = $request->cq[$student_id] + $request->mcq[$student_id] + $request->practical[$student_id];
                        
                    $mark_updates->total_mark = $request->cq[$student_id] + $request->mcq[$student_id] 
                    + $mark_updates->bang_1st_total
                     +$mark_updates->bang_2nd_total
                     +$mark_updates->eng_1st_total
                     +$mark_updates->eng_2nd_total
                     +$mark_updates->math_total
                     +$mark_updates->religion_total
                     +$mark_updates->homs_total
                     +$mark_updates->gk_total
                     +$mark_updates->phed_total
                     +$mark_updates->bgs_total
                     +$mark_updates->science_total
                     +$mark_updates->acc_total
                     +$mark_updates->bent_total
                     +$mark_updates->fin_total
                     +$mark_updates->bio_total
                     +$mark_updates->hmath_total
                     +$mark_updates->chemestry_total
                     +$mark_updates->phy_total;

                    $mark_updates->update(); 
                    
                }

            }else if($request->subject_id == '8')
            {

                foreach ($request->student_id as $student_id) {

                    $mark_updates = Mark::where([
                        'id' => $student_id,
                        'class_id' => $request->class_id,
                        'section_id' => $request->section_id,
                        'exam_id' => $request->exam_id,
                    ])->first();
    
                    $mark_updates->homs_cq = $request->cq[$student_id];
                    $mark_updates->homs_mcq = $request->mcq[$student_id];
                    $mark_updates->homs_practical = $request->practical[$student_id];
                    $mark_updates->homs_total = $request->cq[$student_id] + $request->mcq[$student_id] + $request->practical[$student_id];
    
                    $mark_updates->total_mark = $request->cq[$student_id] + $request->mcq[$student_id] 
                    + $mark_updates->bang_1st_total
                     +$mark_updates->bang_2nd_total
                     +$mark_updates->eng_1st_total
                     +$mark_updates->eng_2nd_total
                     +$mark_updates->math_total
                     +$mark_updates->religion_total
                     +$mark_updates->ict_total
                     +$mark_updates->gk_total
                     +$mark_updates->phed_total
                     +$mark_updates->bgs_total
                     +$mark_updates->science_total
                     +$mark_updates->acc_total
                     +$mark_updates->bent_total
                     +$mark_updates->fin_total
                     +$mark_updates->bio_total
                     +$mark_updates->hmath_total
                     +$mark_updates->chemestry_total
                     +$mark_updates->phy_total;
                    $mark_updates->update(); 
                    
                }

            }else if($request->subject_id == '9')
            {

                foreach ($request->student_id as $student_id) {

                    $mark_updates = Mark::where([
                        'id' => $student_id,
                        'class_id' => $request->class_id,
                        'section_id' => $request->section_id,
                        'exam_id' => $request->exam_id,
                    ])->first();
    
                    $mark_updates->gk_cq = $request->cq[$student_id];
                    $mark_updates->gk_mcq = $request->mcq[$student_id];
                    $mark_updates->gk_total = $request->cq[$student_id] + $request->mcq[$student_id];
                        
                    $mark_updates->total_mark = $request->cq[$student_id] + $request->mcq[$student_id] 
                    + $mark_updates->bang_1st_total
                     +$mark_updates->bang_2nd_total
                     +$mark_updates->eng_1st_total
                     +$mark_updates->eng_2nd_total
                     +$mark_updates->math_total
                     +$mark_updates->religion_total
                     +$mark_updates->ict_total
                     +$mark_updates->homs_total
                     +$mark_updates->phed_total
                     +$mark_updates->bgs_total
                     +$mark_updates->science_total
                     +$mark_updates->acc_total
                     +$mark_updates->bent_total
                     +$mark_updates->fin_total
                     +$mark_updates->bio_total
                     +$mark_updates->hmath_total
                     +$mark_updates->chemestry_total
                     +$mark_updates->phy_total;

                    $mark_updates->update(); 
                    
                }

            }else if($request->subject_id == '10')
            {

                foreach ($request->student_id as $student_id) {

                    $mark_updates = Mark::where([
                        'id' => $student_id,
                        'class_id' => $request->class_id,
                        'section_id' => $request->section_id,
                        'exam_id' => $request->exam_id,
                    ])->first();
    
                    $mark_updates->phed_cq = $request->cq[$student_id];
                    $mark_updates->phed_mcq = $request->mcq[$student_id];
                    $mark_updates->phed_practical = $request->practical[$student_id];
                    $mark_updates->phed_total = $request->cq[$student_id] + $request->mcq[$student_id] + $request->practical[$student_id];
                        
                    $mark_updates->total_mark = $request->cq[$student_id] + $request->mcq[$student_id] 
                    + $mark_updates->bang_1st_total
                     +$mark_updates->bang_2nd_total
                     +$mark_updates->eng_1st_total
                     +$mark_updates->eng_2nd_total
                     +$mark_updates->math_total
                     +$mark_updates->religion_total
                     +$mark_updates->ict_total
                     +$mark_updates->homs_total
                     +$mark_updates->gk_total
                     +$mark_updates->bgs_total
                     +$mark_updates->science_total
                     +$mark_updates->acc_total
                     +$mark_updates->bent_total
                     +$mark_updates->fin_total
                     +$mark_updates->bio_total
                     +$mark_updates->hmath_total
                     +$mark_updates->chemestry_total
                     +$mark_updates->phy_total;

                    $mark_updates->update(); 
                    
                }

            }else if($request->subject_id == '11')
            {

                foreach ($request->student_id as $student_id) {

                    $mark_updates = Mark::where([
                        'id' => $student_id,
                        'class_id' => $request->class_id,
                        'section_id' => $request->section_id,
                        'exam_id' => $request->exam_id,
                    ])->first();
    
                    $mark_updates->bgs_cq = $request->cq[$student_id];
                    $mark_updates->bgs_mcq = $request->mcq[$student_id];
                    $mark_updates->bgs_total = $request->cq[$student_id] + $request->mcq[$student_id];
                        
                    $mark_updates->total_mark = $request->cq[$student_id] + $request->mcq[$student_id] 
                    + $mark_updates->bang_1st_total
                     +$mark_updates->bang_2nd_total
                     +$mark_updates->eng_1st_total
                     +$mark_updates->eng_2nd_total
                     +$mark_updates->math_total
                     +$mark_updates->religion_total
                     +$mark_updates->ict_total
                     +$mark_updates->homs_total
                     +$mark_updates->gk_total
                     +$mark_updates->phed_total
                     +$mark_updates->science_total
                     +$mark_updates->acc_total
                     +$mark_updates->bent_total
                     +$mark_updates->fin_total
                     +$mark_updates->bio_total
                     +$mark_updates->hmath_total
                     +$mark_updates->chemestry_total
                     +$mark_updates->phy_total;
                    $mark_updates->update(); 
                    
                }

            }else if($request->subject_id == '12')
            {

                foreach ($request->student_id as $student_id) {

                    $mark_updates = Mark::where([
                        'id' => $student_id,
                        'class_id' => $request->class_id,
                        'section_id' => $request->section_id,
                        'exam_id' => $request->exam_id,
                    ])->first();
    
                    $mark_updates->science_cq = $request->cq[$student_id];
                    $mark_updates->science_mcq = $request->mcq[$student_id];
                    $mark_updates->science_practical = $request->practical[$student_id];
                    $mark_updates->science_total = $request->cq[$student_id] + $request->mcq[$student_id] + $request->practical[$student_id];
                        
                    $mark_updates->total_mark = $request->cq[$student_id] + $request->mcq[$student_id] 
                    + $mark_updates->bang_1st_total
                     +$mark_updates->bang_2nd_total
                     +$mark_updates->eng_1st_total
                     +$mark_updates->eng_2nd_total
                     +$mark_updates->math_total
                     +$mark_updates->religion_total
                     +$mark_updates->ict_total
                     +$mark_updates->homs_total
                     +$mark_updates->gk_total
                     +$mark_updates->phed_total
                     +$mark_updates->bgs_total
                     +$mark_updates->acc_total
                     +$mark_updates->bent_total
                     +$mark_updates->fin_total
                     +$mark_updates->bio_total
                     +$mark_updates->hmath_total
                     +$mark_updates->chemestry_total
                     +$mark_updates->phy_total;

                    $mark_updates->update(); 
                    
                }

            }else if($request->subject_id == '13')
            {

                foreach ($request->student_id as $student_id) {

                    $mark_updates = Mark::where([
                        'id' => $student_id,
                        'class_id' => $request->class_id,
                        'section_id' => $request->section_id,
                        'exam_id' => $request->exam_id,
                    ])->first();
    
                    $mark_updates->acc_cq = $request->cq[$student_id];
                    $mark_updates->acc_mcq = $request->mcq[$student_id];
                    $mark_updates->acc_total = $request->cq[$student_id] + $request->mcq[$student_id];
    
                    $mark_updates->total_mark = $request->cq[$student_id] + $request->mcq[$student_id] 
                    + $mark_updates->bang_1st_total
                     +$mark_updates->bang_2nd_total
                     +$mark_updates->eng_1st_total
                     +$mark_updates->eng_2nd_total
                     +$mark_updates->math_total
                     +$mark_updates->religion_total
                     +$mark_updates->ict_total
                     +$mark_updates->homs_total
                     +$mark_updates->gk_total
                     +$mark_updates->phed_total
                     +$mark_updates->bgs_total
                     +$mark_updates->science_total
                     +$mark_updates->bent_total
                     +$mark_updates->fin_total
                     +$mark_updates->bio_total
                     +$mark_updates->hmath_total
                     +$mark_updates->chemestry_total
                     +$mark_updates->phy_total;

                    $mark_updates->update(); 
                    
                }

            }else if($request->subject_id == '14')
            {

                foreach ($request->student_id as $student_id) {

                    $mark_updates = Mark::where([
                        'id' => $student_id,
                        'class_id' => $request->class_id,
                        'section_id' => $request->section_id,
                        'exam_id' => $request->exam_id,
                    ])->first();
    
                    $mark_updates->bent_cq = $request->cq[$student_id];
                    $mark_updates->bent_mcq = $request->mcq[$student_id];
                    $mark_updates->bent_total = $request->cq[$student_id] + $request->mcq[$student_id];
    
                    $mark_updates->total_mark = $request->cq[$student_id] + $request->mcq[$student_id] 
                    + $mark_updates->bang_1st_total
                     +$mark_updates->bang_2nd_total
                     +$mark_updates->eng_1st_total
                     +$mark_updates->eng_2nd_total
                     +$mark_updates->math_total
                     +$mark_updates->religion_total
                     +$mark_updates->ict_total
                     +$mark_updates->homs_total
                     +$mark_updates->gk_total
                     +$mark_updates->phed_total
                     +$mark_updates->bgs_total
                     +$mark_updates->science_total
                     +$mark_updates->acc_total
                     +$mark_updates->fin_total
                     +$mark_updates->bio_total
                     +$mark_updates->hmath_total
                     +$mark_updates->chemestry_total
                     +$mark_updates->phy_total;

                    $mark_updates->update(); 
                    
                }

            }else if($request->subject_id == '15')
            {

                foreach ($request->student_id as $student_id) {

                    $mark_updates = Mark::where([
                        'id' => $student_id,
                        'class_id' => $request->class_id,
                        'section_id' => $request->section_id,
                        'exam_id' => $request->exam_id,
                    ])->first();
    
                    $mark_updates->fin_cq = $request->cq[$student_id];
                    $mark_updates->fin_mcq = $request->mcq[$student_id];
                    $mark_updates->fin_total = $request->cq[$student_id] + $request->mcq[$student_id];
                        
                    $mark_updates->total_mark = $request->cq[$student_id] + $request->mcq[$student_id] 
                    + $mark_updates->bang_1st_total
                     +$mark_updates->bang_2nd_total
                     +$mark_updates->eng_1st_total
                     +$mark_updates->eng_2nd_total
                     +$mark_updates->math_total
                     +$mark_updates->religion_total
                     +$mark_updates->ict_total
                     +$mark_updates->homs_total
                     +$mark_updates->gk_total
                     +$mark_updates->phed_total
                     +$mark_updates->bgs_total
                     +$mark_updates->science_total
                     +$mark_updates->acc_total
                     +$mark_updates->bent_total
                     +$mark_updates->bio_total
                     +$mark_updates->hmath_total
                     +$mark_updates->chemestry_total
                     +$mark_updates->phy_total;

                    $mark_updates->update(); 
                    
                }

            }else if($request->subject_id == '16')
            {

                foreach ($request->student_id as $student_id) {

                    $mark_updates = Mark::where([
                        'id' => $student_id,
                        'class_id' => $request->class_id,
                        'section_id' => $request->section_id,
                        'exam_id' => $request->exam_id,
                    ])->first();
    
                    $mark_updates->bio_cq = $request->cq[$student_id];
                    $mark_updates->bio_mcq = $request->mcq[$student_id];
                    $mark_updates->bio_practical = $request->practical[$student_id];
                    $mark_updates->bio_total = $request->cq[$student_id] + $request->mcq[$student_id] + $request->practical[$student_id];
    
                    $mark_updates->total_mark = $request->cq[$student_id] + $request->mcq[$student_id] 
                    + $mark_updates->bang_1st_total
                     +$mark_updates->bang_2nd_total
                     +$mark_updates->eng_1st_total
                     +$mark_updates->eng_2nd_total
                     +$mark_updates->math_total
                     +$mark_updates->religion_total
                     +$mark_updates->ict_total
                     +$mark_updates->homs_total
                     +$mark_updates->gk_total
                     +$mark_updates->phed_total
                     +$mark_updates->bgs_total
                     +$mark_updates->science_total
                     +$mark_updates->acc_total
                     +$mark_updates->bent_total
                     +$mark_updates->fin_total
                     +$mark_updates->hmath_total
                     +$mark_updates->chemestry_total
                     +$mark_updates->phy_total;

                    $mark_updates->update(); 
                    
                }

            }else if($request->subject_id == '17')
            {

                foreach ($request->student_id as $student_id) {

                    $mark_updates = Mark::where([
                        'id' => $student_id,
                        'class_id' => $request->class_id,
                        'section_id' => $request->section_id,
                        'exam_id' => $request->exam_id,
                    ])->first();
    
                    $mark_updates->hmath_cq = $request->cq[$student_id];
                    $mark_updates->hmath_mcq = $request->mcq[$student_id];
                    $mark_updates->hmath_practical = $request->practical[$student_id];
                    $mark_updates->hmath_total = $request->cq[$student_id] + $request->mcq[$student_id] + $request->practical[$student_id];
                        
                    $mark_updates->total_mark = $request->cq[$student_id] + $request->mcq[$student_id] 
                    + $mark_updates->bang_1st_total
                     +$mark_updates->bang_2nd_total
                     +$mark_updates->eng_1st_total
                     +$mark_updates->eng_2nd_total
                     +$mark_updates->math_total
                     +$mark_updates->religion_total
                     +$mark_updates->ict_total
                     +$mark_updates->homs_total
                     +$mark_updates->gk_total
                     +$mark_updates->phed_total
                     +$mark_updates->bgs_total
                     +$mark_updates->science_total
                     +$mark_updates->acc_total
                     +$mark_updates->bent_total
                     +$mark_updates->fin_total
                     +$mark_updates->chemestry_total
                     +$mark_updates->phy_total;

                    $mark_updates->update(); 
                    
                }

            }else if($request->subject_id == '18')
            {

                foreach ($request->student_id as $student_id) {

                    $mark_updates = Mark::where([
                        'id' => $student_id,
                        'class_id' => $request->class_id,
                        'section_id' => $request->section_id,
                        'exam_id' => $request->exam_id,
                    ])->first();
    
                    $mark_updates->chemestry_cq = $request->cq[$student_id];
                    $mark_updates->chemestry_mcq = $request->mcq[$student_id];
                    $mark_updates->chemestry_practical = $request->practical[$student_id];
                    $mark_updates->chemestry_total = $request->cq[$student_id] + $request->mcq[$student_id] + $request->practical[$student_id];
    
                    $mark_updates->total_mark = $request->cq[$student_id] + $request->mcq[$student_id] 
                    + $mark_updates->bang_1st_total
                     +$mark_updates->bang_2nd_total
                     +$mark_updates->eng_1st_total
                     +$mark_updates->eng_2nd_total
                     +$mark_updates->math_total
                     +$mark_updates->religion_total
                     +$mark_updates->ict_total
                     +$mark_updates->homs_total
                     +$mark_updates->gk_total
                     +$mark_updates->phed_total
                     +$mark_updates->bgs_total
                     +$mark_updates->science_total
                     +$mark_updates->acc_total
                     +$mark_updates->bent_total
                     +$mark_updates->fin_total
                     +$mark_updates->hmath_total
                     +$mark_updates->phy_total;

                    $mark_updates->update(); 
                    
                }

            }else if($request->subject_id == '19')
            {

                foreach ($request->student_id as $student_id) {

                    $mark_updates = Mark::where([
                        'id' => $student_id,
                        'class_id' => $request->class_id,
                        'section_id' => $request->section_id,
                        'exam_id' => $request->exam_id,
                    ])->first();
    
                    $mark_updates->phy_cq = $request->cq[$student_id];
                    $mark_updates->phy_mcq = $request->mcq[$student_id];
                    $mark_updates->phy_practical = $request->practical[$student_id];
                    $mark_updates->phy_total = $request->cq[$student_id] + $request->mcq[$student_id] + $request->practical[$student_id];
    
                    $mark_updates->total_mark = $request->cq[$student_id] + $request->mcq[$student_id] 
                    + $mark_updates->bang_1st_total
                     +$mark_updates->bang_2nd_total
                     +$mark_updates->eng_1st_total
                     +$mark_updates->eng_2nd_total
                     +$mark_updates->math_total
                     +$mark_updates->religion_total
                     +$mark_updates->ict_total
                     +$mark_updates->homs_total
                     +$mark_updates->gk_total
                     +$mark_updates->phed_total
                     +$mark_updates->bgs_total
                     +$mark_updates->science_total
                     +$mark_updates->acc_total
                     +$mark_updates->bent_total
                     +$mark_updates->fin_total
                     +$mark_updates->hmath_total
                     +$mark_updates->chemestry_total;
                     
                    $mark_updates->update(); 
                    
                }

            }
            
            

            Toastr::success('Students Mark Successfully Insert ', 'success');
            return Redirect()->back();
            
        
    }
}

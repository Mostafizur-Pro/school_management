<?php

namespace App\Http\Controllers\Admin;

use App\Lavel;
use App\Invoice;
use App\Section;
use App\Student;
use Session;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use phpDocumentor\Reflection\Types\Null_;

class InvoiceController extends Controller
{
    public function invoice_create()
    {
        Session::put('page', 'invoeci_create');
        $class = Lavel::get();
        $section = Section::get();
        return view('admin.invoice.invoice_create',compact('class','section'));
    }

    public function invoice_store(Request $request)
    {
        $validatedData = $request->validate([
            'class_id' => 'required',
            'section_id' => 'required',
            'month' => 'required',
            'year' => 'required',
        ]);
        
        $month = $request->month;
        $year = $request->year;
        $invoice_of_month = $month.'/'.$year;



        $students = Student::where('class_id',$request->class_id)->where('section_id',$request->section_id)->get();
        
        foreach($students as $student)
        {
            $oldinvoice = Invoice::where('student_id',$student->id)->where('class_id',$request->class_id)->where('section_id',$request->section_id)->where('invoice_of_month',$invoice_of_month)->first();

            if($oldinvoice == NULL)
            {
                $dueinvoice = Invoice::where('student_id',$student->id)->where('class_id',$request->class_id)->where('section_id',$request->section_id)->where('status','0')->where('invoice_of_month' ,'<', $invoice_of_month)->sum('total_amount');
                
                $invoice = new Invoice();
                $invoice->student_id = $student->id;
                $invoice->class_id = $student->class_id;
                $invoice->section_id = $student->section_id;
                $invoice->invoice_of_month = $invoice_of_month;

                $admission      = $invoice->admission_fee = $request->admission_fee;
                $session        = $invoice->session_charge = $request->session_charge;
                $tution_fee     = $invoice->tution_fee = $request->tution_fee;
                $transport      = $invoice->transport_fee = $request->transport_fee;
                $examination    = $invoice->examination_fee = $request->examination_fee;
                $re_admission   = $invoice->re_admission_fees = $request->re_admission_fees;
                $board_fees     = $invoice->board_fees = $request->board_fees;
                $transfer_fees  = $invoice->transfer_testimonial_fees = $request->transfer_testimonial_fees;
                $excersise_fee  = $invoice->excersise_fees = $request->excersise_fees;
                $previuse_due   = $invoice->previuse_due = $dueinvoice;
                
                $vat = $invoice->vat = $request->vat;


                $total = $admission  + $session + $tution_fee + $transport + $examination + $re_admission + $board_fees  + $transfer_fees + $excersise_fee + $previuse_due ;

                $total_vat = ($total * $vat) / 100;

                $invoice->total_amount = $total + $total_vat;
                $invoice->save();
            }
            
        }

        if(isset($invoice))
        {
            Toastr::success('Invoice Successfully Created', 'success');
            return redirect()->back();
        }else{
            
            return redirect()->back();
        }
        

        

    }

    public function invoice_list(Request $request)
    {
        Session::put('page', 'invoeci_list');
        $class = Lavel::get();
        $section = Section::get();

        $selectClass      = $request->class;
        $selectSection    = $request->section;
        $selectMonth      = $request->month;
        $selectYear       = $request->year;
        $invoice_of_month = $request->month.'/'.$request->year;
        if($selectClass != NULL && $selectSection !=NULL && $selectMonth !=NULL && $selectYear !=NULL)
        {
            $invoice  =  Invoice::where([
                        'invoices.class_id' => $selectClass,
                        'invoices.section_id' => $selectSection,
                        'invoice_of_month' => $invoice_of_month,
                    ])
                    ->join('lavels','invoices.class_id','=','lavels.id')
                    ->join('sections','invoices.section_id','=','sections.id')
                    ->join('students','invoices.student_id','=','students.id')
                    ->select('invoices.id','invoices.class_id','invoices.section_id','invoices.total_amount','students.student_name','students.roll','lavels.lavel_name','sections.section_name')
                    ->get();

        }else{

            $invoice  =  Invoice::where([
                        'class_id' => $selectClass,
                        'section_id' => $selectSection,
                        'invoice_of_month' => $invoice_of_month,
                     ])->get();
        }

        return view('admin.invoice.invoice_list',compact('class','section','invoice'));
    }

    public function invoice_show_by_id($id)
    {
        return view('admin.invoice.show_invoice_by_id');
    }

    public function invoice_individual(Request $request)
    {
        Session::put('page', 'invoeci_individual');
        if($request->serch)
        {
                $serch = $request->serch;
                $students = Student::where('roll', 'LIKE', "%{$request->serch}%")
                ->orWhere('student_name', 'LIKE', "%{$request->serch}%")
                ->get();

                
                return view('admin.invoice.individual_invoice',compact('students'));
        }else{
            $students = NULL;
            return view('admin.invoice.individual_invoice',compact('students'));
        }

    }

    public function invoice_create_individual($id)
    {
        
        $student = Student::where('id',$id)->first();
        return view('admin.invoice.create_invoice_individual',compact('student'));
    }

    public function invoice_store_individual(Request $request)
    {

        $request->validate([
            'class_id' => 'required',
            'section_id' => 'required',
            'month' => 'required',
            'year' => 'required',
        ]);
        
        $month = $request->month;
        $year = $request->year;
        $invoice_of_month = $month.'/'.$year;



        $students = Student::where('class_id',$request->class_id)->where('section_id',$request->section_id)->get();
        
        foreach($students as $student)
        {
            $oldinvoice = Invoice::where('student_id',$student->id)->where('class_id',$request->class_id)->where('section_id',$request->section_id)->where('invoice_of_month',$invoice_of_month)->first();

            if($oldinvoice == NULL)
            {
                $dueinvoice = Invoice::where('student_id',$student->id)->where('class_id',$request->class_id)->where('section_id',$request->section_id)->where('status','0')->where('invoice_of_month' ,'<', $invoice_of_month)->sum('total_amount');
                
                $invoice = new Invoice();
                $invoice->student_id = $student->id;
                $invoice->class_id = $student->class_id;
                $invoice->section_id = $student->section_id;
                $invoice->invoice_of_month = $invoice_of_month;

                $admission      = $invoice->admission_fee = $request->admission_fee;
                $session        = $invoice->session_charge = $request->session_charge;
                $tution_fee     = $invoice->tution_fee = $request->tution_fee;
                $transport      = $invoice->transport_fee = $request->transport_fee;
                $examination    = $invoice->examination_fee = $request->examination_fee;
                $re_admission   = $invoice->re_admission_fees = $request->re_admission_fees;
                $board_fees     = $invoice->board_fees = $request->board_fees;
                $transfer_fees  = $invoice->transfer_testimonial_fees = $request->transfer_testimonial_fees;
                $excersise_fee  = $invoice->excersise_fees = $request->excersise_fees;
                $previuse_due   = $invoice->previuse_due = $dueinvoice;
                
                $vat = $invoice->vat = $request->vat;


                $total = $admission  + $session + $tution_fee + $transport + $examination + $re_admission + $board_fees  + $transfer_fees + $excersise_fee + $previuse_due ;

                $total_vat = ($total * $vat) / 100;

                $invoice->total_amount = $total + $total_vat;
                $invoice->save();
            }
            
        }

        if(isset($invoice))
        {
            Toastr::success('Invoice Successfully Created', 'success');
            return redirect()->back();
        }else{
            
            return redirect()->back();
        }
    }

}

<?php

namespace App\Http\Controllers\Admin;

use App\User;
use Session;
use App\Staff;
use App\Department;
use App\Designation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;

class StaffController extends Controller
{
    public function create()
    {   
        Session::put('page', 'staf_create');
        $designation = Designation::select('id','designation_name')->get();
        $department = Department::select('id','department_name')->get();
        return view('admin.staff.staff_create',compact('designation','department'));
    }



    // staff store
    public function staff_store(Request $request)
    {
        $request->validate([
            'staff_full_name' => 'required',
            'designation_id'=> 'required',
            'department_id' => 'required',
            'staff_email_address' => 'required|unique:staff',
            'staff_mobile' => 'required|unique:staff',
            'staff_gender' => 'required',
            'staff_date_of_birth' => 'required',
            'staff_date_of_joining' => 'required',
            'staff_bank_account_number' => 'unique:staff',
        ]);

        $staff = new Staff();
        $staff->staff_full_name = $request->staff_full_name;
        $staff->designation_id = $request->designation_id;
        $staff->department_id = $request->department_id;
        $staff->staff_father_name = $request->staff_father_name;
        $staff->staff_mother_name = $request->staff_mother_name;
        $staff->staff_email_address = $request->staff_email_address;
        $staff->staff_mobile = $request->staff_mobile;
        $staff->staff_gender = $request->staff_gender;
        $staff->staff_date_of_birth = $request->staff_date_of_birth;
        $staff->staff_date_of_joining = $request->staff_date_of_joining;
        $staff->staff_marital_status = $request->staff_marital_status;
        $staff->staff_current_address = $request->staff_current_address;
        $staff->staff_permanent_address = $request->staff_permanent_address;
        $staff->staff_qualification = $request->staff_qualification;
        $staff->staff_work_experience = $request->staff_work_experience;
        $staff->staff_basic_salary = $request->staff_basic_salary;
        $staff->staff_work_shift = $request->staff_work_shift;
        $staff->staff_contract_type = $request->staff_contract_type;
        $staff->staff_account_title = $request->staff_account_title;
        $staff->staff_bank_account_number = $request->staff_bank_account_number;
        $staff->staff_bank_name = $request->staff_bank_name;
        $staff->staff_bank_branch_name = $request->staff_bank_branch_name;
        $staff->staff_social_facebook = $request->staff_social_facebook;
        $staff->staff_social_twitter = $request->staff_social_twitter;
        $staff->staff_social_linkedin = $request->staff_social_linkedin;
        $staff->staff_social_instagram = $request->staff_social_instagram;

        $staff->save();

        Toastr::success('Staff Successfully Insert', 'success');
        return redirect()->back();
    }

    public function edit($id)
    {
        Session::put('page', 'staff_edit');
        $staff = Staff::where('id',$id)->first();
        $designation = Designation::select('id','designation_name')->get();
        $department = Department::select('id','department_name')->get();
        return view('admin.staff.staff_edit',compact('staff','designation','department'));

    }

    public function staff_update(Request $request, $id){
        // dd($request);
        $request->validate([
            'staff_full_name' => 'required',
            'designation_id'=> 'required',
            'department_id' => 'required',
            'staff_email_address' => 'required',
            'staff_mobile' => 'required',
            'staff_gender' => 'required',
            'staff_date_of_birth' => 'required',
            'staff_date_of_joining' => 'required',
        ]);

        $staff = Staff::where('id',$id)->first();
        $staff->staff_full_name = $request->staff_full_name;
        $staff->designation_id = $request->designation_id;
        $staff->department_id = $request->department_id;
        $staff->staff_father_name = $request->staff_father_name;
        $staff->staff_mother_name = $request->staff_mother_name;
        $staff->staff_email_address = $request->staff_email_address;
        $staff->staff_mobile = $request->staff_mobile;
        $staff->staff_gender = $request->staff_gender;
        $staff->staff_date_of_birth = $request->staff_date_of_birth;
        $staff->staff_date_of_joining = $request->staff_date_of_joining;
        $staff->staff_marital_status = $request->staff_marital_status;
        $staff->staff_current_address = $request->staff_current_address;
        $staff->staff_permanent_address = $request->staff_permanent_address;
        $staff->staff_qualification = $request->staff_qualification;
        $staff->staff_work_experience = $request->staff_work_experience;
        $staff->staff_basic_salary = $request->staff_basic_salary;
        $staff->staff_work_shift = $request->staff_work_shift;
        $staff->staff_contract_type = $request->staff_contract_type;
        $staff->staff_account_title = $request->staff_account_title;
        $staff->staff_bank_account_number = $request->staff_bank_account_number;
        $staff->staff_bank_name = $request->staff_bank_name;
        $staff->staff_bank_branch_name = $request->staff_bank_branch_name;
        $staff->staff_social_facebook = $request->staff_social_facebook;
        $staff->staff_social_twitter = $request->staff_social_twitter;
        $staff->staff_social_linkedin = $request->staff_social_linkedin;
        $staff->staff_social_instagram = $request->staff_social_instagram;

        $staff->save();

        Toastr::success('Staff Successfully Updated', 'success');
        return redirect()->route('admin.staff.list');
    }
    
    public function list()
    {
        Session::put('page', 'staf_list');
        // $staff = Staff::paginate('page');
        $staff = Staff::select('staff.*', 'departments.department_name', 'designations.designation_name')
        ->orderBy('staff_full_name')
        ->join('departments', 'staff.department_id', '=', 'departments.id')
        ->join('designations', 'staff.designation_id', '=', 'designations.id')
        ->paginate(10);

                        // dd($staff);
        return view('admin.staff.staff_list',compact('staff'));
    }

    // department
    public function department_create()
    {
        Session::put('page', 'department_create');
        $department = Department::select('id','department_name')->get();
        return view('admin.staff.deparment_create',compact('department'));
    }

    public function department_store(Request $request)
    {
        $request->validate([
            'department_name' => 'required|unique:departments',
        ]);

        $department = new Department();
        $department->department_name = $request->department_name;
        $department->save();

        return redirect()->back();
    }
    // designation
    public function designation_create()
    {   
        Session::put('page', 'designation_create');
        $designation = Designation::select('id','designation_name')->get();
        return view('admin.staff.designation_create',compact('designation'));
    }

    public function designation_store(Request $request)
    {
        $request->validate([
            'designation_name' => 'required|unique:designations',
        ]);

        $designation = new Designation();
        $designation->designation_name = $request->designation_name;
        $designation->save();

        return redirect()->back();
    }

    // public function view($id)
    // {
    //     Session::put('page', 'staf_list');
    //     // $staff = Staff::paginate('page');
    //     $staff = Staff::select('staff.*', 'departments.department_name', 'designations.designation_name')
    //     ->orderBy('staff_full_name')
    //     ->join('departments', 'staff.department_id', '=', 'departments.id')
    //     ->join('designations', 'staff.designation_id', '=', 'designations.id')
    //     ->paginate(10);
    //     $staff = Staff::where('id',$id)->first();
    //     return view('admin.staff.staff_view',compact('staff'));
    // }

    public function view($id)
    {
        Session::put('page', 'staff_view');
        
        // Fetch the staff member's details along with designation and department names
        $staff = Staff::select('staff.*', 'designations.designation_name', 'departments.department_name')
            ->join('designations', 'staff.designation_id', '=', 'designations.id')
            ->join('departments', 'staff.department_id', '=', 'departments.id')
            ->where('staff.id', $id)
            ->first();
        
        return view('admin.staff.staff_view', compact('staff'));
    }
    


    public function delete($id)
    {
        Session::put('page', 'staf_list');
        $staff = staff::where('id', $id);
        $staff->delete();
        
        return redirect()->back()->with('status','Delete Successful.');
    }

}


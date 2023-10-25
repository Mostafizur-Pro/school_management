@extends('admin.layouts.app')
@section('admin_title','Create Class | NEDUBD')
@section('admin_section')

       

        <div class="product-sales-area mg-tb-30" style="margin-top:61px;">
            <div class="container-fluid">
               
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Add Staff Information</div>
                            <div class="panel-body">
                                <form action="{{route('admin.staff.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                    
                                <div class="form-row">

                                      <div class="col-md-3 mb-3">
                                        <label for="staff_full_name">Full Name</label>
                                        <span style="color: #ea0a0a;">*</span>
                                        <input type="text" class="form-control" id="staff_full_name" name="staff_full_name" required >
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="class_id">Role</label>
                                        <span style="color: #ea0a0a;">*</span>
                                        <select class="form-control" id="role_id" name="role_id" id="role_id" required>
                                            <option value="">Select Role</option>
                                            <option value="1">Admin Panel</option>
                                            <option value="1">Stuff Panel</option>
                                            <option value="1">Assistant Panel</option>
                                            
                                         </select>
                                       
                                      </div>
                                      
                                      <div class="col-md-3 mb-3">
                                        <label for="designation_id">Designation</label>
                                        <span style="color: #ea0a0a;">*</span>
                                            <select class="form-control" id="designation_id" name="designation_id" id="designation_id" required>
                                                <option value="">Select Designation</option>
                                                @foreach($designation as $designations)
                                                <option value="{{ $designations->id }}">{{ $designations->designation_name }}</option>
                                                @endforeach
                                            </select>
                                      </div>
                                      
                                      <div class="col-md-3 mb-3">
                                        <label for="department_id">Department</label>
                                        <span style="color: #ea0a0a;">*</span>
                                            <select class="form-control" id="department_id" name="department_id" id="department_id" required>
                                                <option value="">Select Department</option>
                                                @foreach($department as $departments)
                                                <option value="{{ $departments->id }}">{{ $departments->department_name }}</option>
                                                @endforeach
                                            </select>
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="staff_father_name">Father's Name</label>
                                        <input type="text" name="staff_father_name" class="form-control" id="staff_father_name" >
                                      </div>
                                      
                                      <div class="col-md-3 mb-3">
                                        <label for="staff_mother_name">Mother's Name</label>
                                        <input type="text"  name="staff_mother_name" class="form-control" id="staff_mother_name"  >
                                        
                                      </div>
                                      
                                      <div class="col-md-3 mb-3">
                                        <label for="staff_email_address">Email address</label>
                                        <input type="text" class="form-control" name="staff_email_address" id="staff_email_address" required >
                                      </div>
                                      
                                      <div class="col-md-3 mb-3">
                                        <label for="staff_mobile">Mobile Number</label>
                                        <input type="number" class="form-control" name="staff_mobile" id="staff_mobile" required >
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="staff_gender">Gender</label>
                                        <span style="color: #ea0a0a;">*</span>
                                            <select class="form-control" id="staff_gender" name="staff_gender" id="staff_gender" required>
                                                <option value="">Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                
                                            </select>
                                      </div>
                                          
                                      <div class="col-md-3 mb-3">
                                        <label for="staff_date_of_birth">Date Of Birth</label>
                                         <span style="color: #ea0a0a;">*</span>
                                        <div class="input-group">
                                         
                                          <input type="date" class="form-control"name="staff_date_of_birth" id="staff_date_of_birth" style="width:242px;" required>
                                          
                                        </div>
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="staff_date_of_joining">Date Of Joining</label>
                                         <span style="color: #ea0a0a;">*</span>
                                        <div class="input-group">
                                         
                                          <input type="date" class="form-control"name="staff_date_of_joining" id="staff_date_of_joining" required style="width:242px;">
                                          
                                        </div>
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="staff_marital_status">Marital Status</label>
                                        <span style="color: #ea0a0a;">*</span>
                                            <select class="form-control" id="staff_marital_status" name="staff_marital_status" id="staff_marital_status" required>
                                                <option value="">Select Marital Status</option>
                                                 <option value="Islam">Married</option>   <!--just change the value from Islam to Married -->
                                                <option value="Hindu">Unmarried</option>  <!--just change the value from Hindu to Unmarried -->
                                                
                                            </select>
                                      </div>

                                      <div class="col-md-6 mb-6">
                                        <label for="staff_current_address">Present Address</label>
                                        <textarea rows="4" cols="100" class="form-control" name="staff_current_address"></textarea>
                                    </div>
                                   <div class="col-md-6 mb-6">
                                        <label for="staff_permanent_address">Parmanent Address</label>
                                        <textarea rows="4" cols="50" class="form-control" name="staff_permanent_address"></textarea>
                                    </div>

                                    </div>

                                    
                            </div>
                          </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Qualification & Work Experience</div>
                            <div class="panel-body">
                                
                                <div class="form-row">

                                    <div class="col-md-6 mb-6">
                                        <label for="staff_qualification">Qualification</label>
                                        <textarea rows="4" cols="100" class="form-control" name="staff_qualification"></textarea>
                                    </div>
                                   <div class="col-md-6 mb-6">
                                        <label for="staff_work_experience">Work Experience</label>
                                        <textarea rows="4" cols="50" class="form-control" name="staff_work_experience"></textarea>
                                    </div>
                                    </div>
                                  
                            </div>
                          </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Payroll</div>
                            <div class="panel-body">
                                
                                <div class="form-row">
                                    <div class="col-md-3 mb-3">
                                        <label for="staff_basic_salary">Basic Salary</label>
                                        <input type="number" class="form-control" id="staff_basic_salary" name="staff_basic_salary"  >
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="staff_work_shift">Work Shift</label>
                                        <input type="text" class="form-control" id="staff_work_shift" name="staff_work_shift"  >
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="designation_id">Contract Type</label>
                                            <select class="form-control" id="staff_contract_type" name="staff_contract_type" id="staff_contract_type">
                                                <option value="">Select Section</option>
                                                <option value="Permanent">Permanent</option>
                                                <option value="Probation">Probation</option>
                                            </select>
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="staff_account_title">Account Title</label>
                                        <input type="text" class="form-control" id="staff_account_title" name="staff_account_title" >
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="staff_bank_account_number">Bank Account Number</label>
                                        <input type="text" class="form-control" id="staff_bank_account_number" name="staff_bank_account_number" >
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="staff_bank_name">Bank Name</label>
                                        <input type="text" class="form-control" id="staff_bank_name" name="staff_bank_name"  >
                                      </div>
                                      <div class="col-md-3 mb-3">
                                        <label for="staff_bank_branch_name">Bank Branch Name</label>
                                        <input type="text" class="form-control" id="staff_bank_branch_name" name="staff_bank_branch_name"  >
                                      </div>
                                      
                                      

                                    </div>

                                    
                                  
                            </div>
                          </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="panel panel-default">
                          <div class="panel-heading">Social Media Link</div>
                          <div class="panel-body">   
                              <div class="form-row">
                                  <div class="col-md-6 mb-6">
                                      <label for="staff_social_facebook">Facebook URL</label>
                                      <input type="text" class="form-control" id="staff_social_facebook" name="staff_social_facebook"  >
                                    </div>

                                    <div class="col-md-6 mb-6">
                                      <label for="staff_social_twitter">Twitter URL</label>
                                      <input type="text" class="form-control" id="staff_social_twitter" name="staff_social_twitter"  >
                                    </div>


                                    <div class="col-md-6 mb-6">
                                      <label for="staff_social_linkedin">Linkedin URL</label>
                                      <input type="text" class="form-control" id="staff_social_linkedin" name="staff_social_linkedin"  >
                                    </div>

                                    <div class="col-md-6 mb-6">
                                      <label for="staff_social_instagram">Instagram URL</label>
                                      <input type="text" class="form-control" id="staff_social_instagram" name="staff_social_instagram" >
                                    </div>
                                    
                                  </div>

                                  
                                
                          </div>
                        </div>
                     </div>

                     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="panel panel-default">
                          <div class="panel-heading">Upload Documents</div>
                          <div class="panel-body">   
                              <div class="form-row">

                                  <div class="col-md-6 mb-6">
                                      <label for="staff_image">Image</label>
                                      <input type="file" class="form-control" id="staff_image" name="staff_image"  >
                                    </div>

                                    <div class="col-md-6 mb-6">
                                      <label for="staff_resume">Resume</label>
                                      <input type="file" class="form-control" id="staff_resume" name="staff_resume" >
                                    </div>


                                    <div class="col-md-6 mb-6">
                                      <label for="staff_joining_letter">Joining Letter</label>
                                      <input type="file" class="form-control" id="staff_joining_letter" name="staff_joining_letter"  >
                                    </div>

                                    <div class="col-md-6 mb-6">
                                      <label for="staff_other_document">Other Documents</label>
                                      <input type="file" class="form-control" id="staff_other_document" name="staff_other_document" >
                                    </div>

                                    <div class="col-md-6 mb-6" style="float:right">
                                      <button type="submit" class="btn btn-primary" style="float:right; margin-top:10px;">Submit</button>
                                    </div>
                          </div>
                    </form>
                   </div>
                </div>
              </div>

                    
                </div>
            </div>
        </div>
        

        @include('admin.layouts.footer')


@endsection
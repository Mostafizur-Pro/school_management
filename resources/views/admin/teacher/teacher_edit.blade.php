
@extends('admin.layouts.app')
@section('admin_title','TEACHERS LIST | NEDUBD')
@section('admin_section')



      <form action="teacher-Update-{{$cd[0]->id}}" method="post" enctype="multipart/form-data">
        @csrf
            
                      
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Basic Information</div>
                            <div class="panel-body">
                                
                                    
                                <div class="form-row">

                                      <div class="col-md-3 mb-3">
                                        <label for="teachers_name">Teachers Name</label>
                                        <span style="color: #ea0a0a;">*</span>
                                        <input type="text" class="form-control" id="teachers_name" name="teachers_name"  value="{{ $cd[0]->teachers_name }}" required >
                                      </div>
                                     
                                      <div class="col-md-3 mb-3">
                                        <label for="national_idcard">National Id</label>
                                        <input type="number" class="form-control" id="national_idcard" name="national_idcard"  value="{{ $cd[0]->national_idcard }}">
                                      </div>
                                      
                                      <div class="col-md-3 mb-3">
                                        <label for="teachers_mobile">Mobile</label>
                                        <span style="color: #ea0a0a;">*</span>
                                        <input type="number" class="form-control" id="teachers_mobile" name="teachers_mobile" value="{{ $cd[0]->teachers_mobile }}" required >
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="responsibility">Responsibility</label>
                                        <span style="color: #ea0a0a;">*</span>
                                        <input type="text" class="form-control" id="responsibility" name="responsibility" value="{{ $cd[0]-> responsibility }}" required >
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="teachers_gender">Gender</label>
                                        <span style="color: #ea0a0a;">*</span>
                                            <select class="form-control" id="teachers_gender" name="teachers_gender"  required>
                                                <option value="">Select Gender</option>
                                                <option value="Male" {{$cd[0]->teachers_gender=="Male" ? 'selected': ''}}>Male</option>
                                                <option value="Female" {{$cd[0]->teachers_gender=="Female" ? 'selected': ''}}>Female</option>
                                                <option value="Others" {{$cd[0]->teachers_gender=="Others" ? 'selected': ''}}>Others</option>

                                                
                                            </select>
                                      </div>
                                      

                                      <div class="col-md-3 mb-3">
                                        <label for="teachers_date_of_birth">Date Of Birth</label>
                                         <span style="color: #ea0a0a;">*</span>
                                        <div class="input-group">
                                         
                                          <input type="date" class="form-control"name="teachers_date_of_birth" id="teachers_date_of_birth" value="{{ $cd[0]-> teachers_date_of_birth }}" style="width:242px;" required>
                                          
                                        </div>
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="teachers_date_of_joining">Joining Date</label>
                                        
                                        <div class="input-group">
                                         
                                          <input type="date" class="form-control"name="teachers_date_of_joining" id="teachers_date_of_joining" value="{{ $cd[0]-> teachers_date_of_joining }}" style="width:242px;">
                                          
                                        </div>
                                      </div>
                                      
                                      <div class="col-md-3 mb-3">
                                        <label for="teachers_marital_status">Marital Status</label>
                             
                                            <select class="form-control" id="teachers_marital_status" name="teachers_marital_status">
                                                <option value="">Choose an Option</option>
                                                <option value="Married" {{$cd[0]->teachers_marital_status=="Married" ? 'selected': ''}}>Married</option>
                                                <option value="Unmarried" {{$cd[0]->teachers_marital_status=="Unmarried" ? 'selected': ''}}>Unmarried</option>
                                                
                                            </select>
                                      </div>

                                      

                                      <div class="col-md-6 mb-6">
                                        <label for="teachers_current_address">Present Address</label>
                                        <!-- <textarea rows="4" cols="100" class="form-control" name="teachers_current_address" value="{{ $cd[0]-> teachers_current_address }}"></textarea> -->
                                        @isset($cd[0])
                                        <textarea rows="4" cols="50" class="form-control" name="teachers_current_address">{{ $cd[0]-> teachers_current_address }}</textarea>
                                        @else
                                        <textarea rows="4" cols="50" class="form-control" name="teachers_current_address"></textarea>
                                        @endif
                                    </div>

                                   <div class="col-md-6 mb-6">
                                        <label for="teachers_permanent_address">Parmanent Address</label>
                                        <!-- <textarea rows="4" cols="50" class="form-control" name="teachers_permanent_address" value="{{ $cd[0]-> teachers_permanent_address }}"></textarea> -->
                                        @isset($cd[0])
                                        <textarea rows="4" cols="50" class="form-control" name="teachers_permanent_address">{{ $cd[0]-> teachers_permanent_address }}</textarea>
                                        @else
                                        <textarea rows="4" cols="50" class="form-control" name="teachers_permanent_address"></textarea>
                                        @endif
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
                                        <label for="teachers_qualification">Qualification</label>
                                        <!-- <textarea rows="4" cols="100" class="form-control" name="teachers_qualification" value="{{ $cd[0]-> teachers_qualification }}"></textarea> -->
                                        @isset($cd[0])
                                        <textarea rows="4" cols="50" class="form-control" name="teachers_qualification">{{ $cd[0]-> teachers_qualification }}</textarea>
                                        @else
                                        <textarea rows="4" cols="50" class="form-control" name="teachers_qualification"></textarea>
                                        @endif
                                    </div>
                                   <div class="col-md-6 mb-6">
                                        <label for="teachers_work_experience">Work Experience</label>
                                        
                                        @isset($cd[0])
                                        <textarea rows="4" cols="50" class="form-control" name="teachers_work_experience">{{ $cd[0]-> teachers_work_experience }}</textarea>
                                        @else
                                        <textarea rows="4" cols="50" class="form-control" name="teachers_work_experience"></textarea>
                                        @endif


                            
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
                                        <label for="teachers_basic_salary">Basic Salary</label>
                                        <input type="number" class="form-control" id="teachers_basic_salary" name="teachers_basic_salary"  value="{{ $cd[0]-> teachers_basic_salary }}">
                                      </div>


                                      <div class="col-md-3 mb-3">
                                        <label for="designation_id">Contract Type</label>
                                            <select class="form-control" id="teachers_contract_type" name="teachers_contract_type" >
                                                <option value="">Select Section</option>
                                                <option value="Permanent" {{$cd[0]->teachers_contract_type=="Permanent" ? 'selected': ''}}>Permanent</option>
                                                <option value="Probation" {{$cd[0]->teachers_contract_type=="Probation" ? 'selected': ''}}>Probation</option>
                                            </select>
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="account_title">Account Title</label>
                                        <input type="text" class="form-control" id="account_title" name="account_title" value="{{ $cd[0]-> account_title }}">
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="account_number">Bank Account Number</label>
                                        <input type="text" class="form-control" id="account_number" name="account_number" value="{{ $cd[0]-> account_number }}">
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="bank_name">Bank Name</label>
                                        <input type="text" class="form-control" id="bank_name" name="bank_name" value="{{ $cd[0]-> bank_name }}" >
                                      </div>
                                      <div class="col-md-3 mb-3">
                                        <label for="branch_name">Bank Branch Name</label>
                                        <input type="text" class="form-control" id="branch_name" name="branch_name" value="{{ $cd[0]-> branch_name }}" >
                                      </div>
                                      
                                      

                                    </div>

                                    
                                  
                            </div>
                          </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                      <div class="panel panel-default">
                          <div class="panel-heading">Account Information</div>
                          <div class="panel-body">   
                              <div class="form-row">
                                  <div class="col-md-6 mb-6">
                                      <label for="teachers_email">Email</label>
                                      <span style="color: #ea0a0a;">*</span>
                                      <input type="text" class="form-control" id="teachers_email" name="teachers_email" value="{{ $cd[0]-> teachers_email }}" required >
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
                                      <label for="teachers_facebook">Facebook URL</label>
                                      <input type="text" class="form-control" id="teachers_facebook" name="teachers_facebook" value="{{ $cd[0]-> teachers_facebook }}" >
                                    </div>

                                    <div class="col-md-6 mb-6">
                                      <label for="teachers_twitter">Twitter URL</label>
                                      <input type="text" class="form-control" id="teachers_twitter" name="teachers_twitter"  value="{{ $cd[0]-> teachers_twitter }}">
                                    </div>


                                    <div class="col-md-6 mb-6">
                                      <label for="teachers_linkedin">Linkedin URL</label>
                                      <input type="text" class="form-control" id="teachers_linkedin" name="teachers_linkedin" value="{{ $cd[0]-> teachers_linkedin }}" >
                                    </div>

                                    <div class="col-md-6 mb-6">
                                      <label for="teachers_instagram">Instagram URL</label>
                                      <input type="text" class="form-control" id="teachers_instagram" name="teachers_instagram" value="{{ $cd[0]-> teachers_instagram }}">
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
                                      <label for="teachers_image">Image</label>
                                      <input type="file" class="form-control" id="teachers_image" name="teachers_image"  value="{{ $cd[0]-> teachers_image }}">
                                    </div>

                                    <div class="col-md-6 mb-6">
                                      <label for="teachers_resume">Resume</label>
                                      <input type="file" class="form-control" id="teachers_resume" name="teachers_resume" value="{{ $cd[0]-> teachers_resume }}">
                                    </div>


                                    <div class="col-md-6 mb-6">
                                      <label for="teachers_joining_letter">Joining Letter</label>
                                      <input type="file" class="form-control" id="teachers_joining_letter" name="teachers_joining_letter"  value="{{ $cd[0]-> teachers_joining_letter }}">
                                    </div>

                          </div>
                    
                   </div>
                </div>
              </div>

                    
                </div>


            </div>

              <div class="modal-footer">
                <a data-dismiss="modal" href="{{route('admin.teacher.list')}}">Cancel</a>
                <input class="btn btn-md btn-info" type="submit" value="Update" onclick="window.location.href='{{route('admin.teacher.list')}}'" style="height: 40px;background: #006df0;">
              </div>

                </form>
              </div>
          
      </div>

      @include('admin.layouts.footer')
@endsection

@push('admin_css')
    
@endpush
@push('admin_js')

<!-- data table JS  ============================================ -->
   

    
@endpush
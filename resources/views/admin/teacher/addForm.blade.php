<div id="PrimaryModalhdbgcl" class="modal fade bd-example-modal-lg" role="dialog" style="margin-top:15px;margin-left: -362px;" >
          <div class="modal-dialog">
              <div class="modal-content" style="width:187%;">
                 
                  <div class="modal-header header-color-modal bg-color-1" style="padding: 0px 46px 0px 15px;">
                      <h4 class="modal-title">Add Teacher</h4>
                      <div class="modal-close-area modal-close-df">
                          <a class="close" data-dismiss="modal" href="#"><i class="fa fa-close"></i></a>
                      </div>
                  </div>
      <form action="{{route('admin.teacher.store')}}" method="post" enctype="multipart/form-data">
        @csrf
            <div class="modal-body">
                      
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Basic Information</div>
                            <div class="panel-body">
                                
                                    
                                <div class="form-row">

                                      <div class="col-md-3 mb-3">
                                        <label for="teachers_name">Teachers Name</label>
                                        <span style="color: #ea0a0a;">*</span>
                                        <input type="text" class="form-control" id="teachers_name" name="teachers_name" required >
                                      </div>
                                     
                                      <div class="col-md-3 mb-3">
                                        <label for="national_idcard">National Id</label>
                                        <input type="number" class="form-control" id="national_idcard" name="national_idcard" >
                                      </div>
                                      
                                      <div class="col-md-3 mb-3">
                                        <label for="teachers_mobile">Mobile</label>
                                        <span style="color: #ea0a0a;">*</span>
                                        <input type="number" class="form-control" id="teachers_mobile" name="teachers_mobile" required >
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="responsibility">Responsibility</label>
                                        <span style="color: #ea0a0a;">*</span>
                                        <input type="text" class="form-control" id="responsibility" name="responsibility" required >
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="teachers_gender">Gender</label>
                                        <span style="color: #ea0a0a;">*</span>
                                            <select class="form-control" id="teachers_gender" name="teachers_gender"  required>
                                                <option value="">Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                <option value="Others">Others</option>

                                                
                                            </select>
                                      </div>
                                      

                                      <div class="col-md-3 mb-3">
                                        <label for="teachers_date_of_birth">Date Of Birth</label>
                                         <span style="color: #ea0a0a;">*</span>
                                        <div class="input-group">
                                         
                                          <input type="date" class="form-control"name="teachers_date_of_birth" id="teachers_date_of_birth" style="width:242px;" required>
                                          
                                        </div>
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="teachers_date_of_joining">Joining Date</label>
                                        
                                        <div class="input-group">
                                         
                                          <input type="date" class="form-control"name="teachers_date_of_joining" id="teachers_date_of_joining" style="width:242px;">
                                          
                                        </div>
                                      </div>
                                      
                                      <div class="col-md-3 mb-3">
                                        <label for="teachers_marital_status">Marital Status</label>
                             
                                            <select class="form-control" id="teachers_marital_status" name="teachers_marital_status">
                                                <option value="">Choose an Option</option>
                                                <option value="Married">Married</option>
                                                <option value="Unmarried">Unmarried</option>

                                                
                                            </select>
                                      </div>

                                      

                                      <div class="col-md-6 mb-6">
                                        <label for="teachers_current_address">Present Address</label>
                                        <textarea rows="4" cols="100" class="form-control" name="teachers_current_address"></textarea>
                                    </div>

                                   <div class="col-md-6 mb-6">
                                        <label for="teachers_permanent_address">Parmanent Address</label>
                                        <textarea rows="4" cols="50" class="form-control" name="teachers_permanent_address"></textarea>
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
                                        <textarea rows="4" cols="100" class="form-control" name="teachers_qualification"></textarea>
                                    </div>
                                   <div class="col-md-6 mb-6">
                                        <label for="teachers_work_experience">Work Experience</label>
                                        <textarea rows="4" cols="50" class="form-control" name="teachers_work_experience"></textarea>
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
                                        <input type="number" class="form-control" id="teachers_basic_salary" name="teachers_basic_salary"  >
                                      </div>


                                      <div class="col-md-3 mb-3">
                                        <label for="designation_id">Contract Type</label>
                                            <select class="form-control" id="teachers_contract_type" name="teachers_contract_type" >
                                                <option value="">Select Section</option>
                                                <option value="Permanent">Permanent</option>
                                                <option value="Probation">Probation</option>
                                            </select>
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="account_title">Account Title</label>
                                        <input type="text" class="form-control" id="account_title" name="account_title" >
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="account_number">Bank Account Number</label>
                                        <input type="text" class="form-control" id="account_number" name="account_number" >
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="bank_name">Bank Name</label>
                                        <input type="text" class="form-control" id="bank_name" name="bank_name"  >
                                      </div>
                                      <div class="col-md-3 mb-3">
                                        <label for="branch_name">Bank Branch Name</label>
                                        <input type="text" class="form-control" id="branch_name" name="branch_name"  >
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
                                      <input type="text" class="form-control" id="teachers_email" name="teachers_email" required >
                                    </div>
                                  <div class="col-md-6 mb-6">
                                      <label for="password">Password</label>
                                      <span style="color: #ea0a0a;">*</span>
                                      <input type="password" class="form-control" id="password" name="password" required >
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
                                      <input type="text" class="form-control" id="teachers_facebook" name="teachers_facebook"  >
                                    </div>

                                    <div class="col-md-6 mb-6">
                                      <label for="teachers_twitter">Twitter URL</label>
                                      <input type="text" class="form-control" id="teachers_twitter" name="teachers_twitter"  >
                                    </div>


                                    <div class="col-md-6 mb-6">
                                      <label for="teachers_linkedin">Linkedin URL</label>
                                      <input type="text" class="form-control" id="teachers_linkedin" name="teachers_linkedin"  >
                                    </div>

                                    <div class="col-md-6 mb-6">
                                      <label for="teachers_instagram">Instagram URL</label>
                                      <input type="text" class="form-control" id="teachers_instagram" name="teachers_instagram" >
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
                                      <input type="file" class="form-control" id="teachers_image" name="teachers_image"  >
                                    </div>

                                    <div class="col-md-6 mb-6">
                                      <label for="teachers_resume">Resume</label>
                                      <input type="file" class="form-control" id="teachers_resume" name="teachers_resume" >
                                    </div>


                                    <div class="col-md-6 mb-6">
                                      <label for="teachers_joining_letter">Joining Letter</label>
                                      <input type="file" class="form-control" id="teachers_joining_letter" name="teachers_joining_letter"  >
                                    </div>

                          </div>
                    
                   </div>
                </div>
              </div>

                    
                </div>


            </div>

              <div class="modal-footer">
                <a data-dismiss="modal" href="#">Cancel</a>
                <input class="btn btn-md btn-info" type="submit" value="Submit" style="height: 40px;background: #006df0;">
              </div>

                </form>
              </div>
          </div>
      </div>
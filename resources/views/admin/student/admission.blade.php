@extends('admin.layouts.app')
@section('admin_title','Create Class | NEDUBD')
@section('admin_section')

       

        <div class="product-sales-area mg-tb-30" style="margin-top:61px;">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">@lang('home.CreateSection')</div>
                            <div class="panel-body">
                                <form action="{{route('admin.student.store')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                    
                                <div class="form-row">

                                  <div class="col-md-3 mb-3">
                                    <label for="student_gender">Academic Year</label>
                                    <span style="color: #ea0a0a;">*</span>
                                        <select class="form-control" id="session" name="session" required >
                                            <option value="">Select Academic Year</option>
                                            <option value="2017">2017</option>
                                            <option value="2018">2018</option>
                                            <option value="2019">2019</option>
                                            <option value="2020">2020</option>
                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                            <option value="2026">2026</option>
                                            
                                        </select>
                                  </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="roll">Roll Number</label>
                                        <span style="color: #ea0a0a;">*</span>
                                        <input type="text" class="form-control" id="roll" name="roll" required >
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="class_id">Class</label>
                                        <span style="color: #ea0a0a;">*</span>
                                        <select class="form-control" id="class_id" name="class_id" required>
                                            <option value="">Select Class</option>
                                            @foreach($lavel as $lavels)
                                            <option value="{{ $lavels->id }}">{{ $lavels->lavel_name }}</option>
                                            @endforeach
                                         </select>
                                       
                                        
                                      </div>
                                      
                                      
                                      <div class="col-md-3 mb-3">
                                        <label for="section_id">Section</label>
                                        <span style="color: #ea0a0a;">*</span>
                                            <select class="form-control" id="section_id" name="section_id" required>
                                              <option value="">--Select Section--</option>
                                            </select>
                                      </div>
                                      
                                      <div class="col-md-3 mb-3">
                                        <label for="group_id">Group</label>
                                            <select class="form-control"  name="group_id" id="group_id">
                                                <option value="">Select Group</option>
                                                <option value="1">Science</option>
                                                <option value="2">Arts</option>
                                                <option value="3">Commerce</option>
                                                
                                            </select>
                                      </div>
                                      

                                      <div class="col-md-3 mb-3">
                                        <label for="student_name">Student Name</label>
                                        <span style="color: #ea0a0a;">*</span>
                                        <input type="text" name="student_name" class="form-control" id="student_name" required >
                                      </div>
                                      
                                      <div class="col-md-3 mb-3">
                                        <label for="student_mobile">Mobile</label>
                                        <span style="color: #ea0a0a;">*</span>
                                        <input type="number"  name="student_mobile" class="form-control" id="student_mobile" required >
                                        
                                      </div>
                                      
                                      

                                      <div class="col-md-3 mb-3">
                                        <label for="student_gender">Gender</label>
                                        <span style="color: #ea0a0a;">*</span>
                                            <select class="form-control" id="student_gender" name="student_gender" id="student_gender">
                                                <option value="">Select Gender</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                                
                                            </select>
                                      </div>
                                          
                                      <div class="col-md-3 mb-3">
                                        <label for="student_date_of_birth">Date Of Birth</label>
                                         <span style="color: #ea0a0a;">*</span>
                                        <div class="input-group">
                                         
                                          <input type="date" class="form-control"name="student_date_of_birth" id="student_date_of_birth" required style="width:242px;">
                                          
                                        </div>
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="student_religion">Religion</label>
                                        <span style="color: #ea0a0a;">*</span>
                                            <select class="form-control" id="student_religion" name="student_religion" id="student_religion" required>
                                                <option value="">Select Religion</option>
                                                <option value="Islam">Islam</option>
                                                <option value="Hindu">Hindu</option>
                                                
                                            </select>
                                      </div>
                                       
                                      <div class="col-md-3 mb-3">
                                        <label for="student_blood_group">Blood Group</label>
                                        <span style="color: #ea0a0a;">*</span>
                                            <select class="form-control" id="student_blood_group" name="student_blood_group" id="student_blood_group">
                                                <option value="">Select Blood Group</option>
                                                <option value="A-">A-</option>
                                                <option value="A+">A+</option>
                                                <option value="B-">B-</option>
                                                <option value="B+">B+</option>
                                                <option value="O-">O-</option>
                                                <option value="O+">O+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="AB+">AB+</option>
                                                
                                            </select>
                                      </div>

                                       <div class="col-md-3 mb-3">
                                            <label for="student_present_address">Present Address</label>
                                            <input type="text" class="form-control" id="student_present_address"  name="student_present_address"  >
                                        </div>
                                       <div class="col-md-3 mb-3">
                                            <label for="student_parmanent_address">Parmanent Address</label>
                                            <input type="text" class="form-control" id="student_parmanent_address"  name="student_parmanent_address"  >
                                        </div>

                                       <div class="col-md-3 mb-3">
                                            <label for="student_image">Photo</label>
                                            <input class="filestyle form-control"  type="file"  name="student_image" id="student_image" required >
                                            
                                       </div>

                                    </div>

                                    
                            </div>
                          </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">@lang('home.guardianDetails')</div>
                            <div class="panel-body">
                                
                                    
                                <div class="form-row">

                                      <div class="col-md-3 mb-3">
                                        <label for="fathers_name">Father's Name</label>
                                        <span style="color: #ea0a0a;">*</span>
                                        <input type="text" class="form-control" id="fathers_name" name="fathers_name"  required ">
                                        
                                      </div>
                                      
                                      <div class="col-md-3 mb-3">
                                        <label for="fathers_mobile">Father's Mobile</label>
                                        <span style="color: #ea0a0a;">*</span>
                                        <input type="number" class="form-control"  id="fathers_mobile" name="fathers_mobile"  required >
                                        
                                      </div>
                                      
                                      <div class="col-md-3 mb-3">
                                        <label for="fathers_occupation">Father Occupation</label>
                                        <span style="color: #ea0a0a;">*</span>
                                        <input type="text" class="form-control"  id="fathers_occupation" name="fathers_occupation" >
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="fathers_image">Father's Photo</label>
                                        <input class="filestyle form-control"  type="file"  name="fathers_image" id="fathers_image" >
                                        
                                    </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="mothers_name">Mother's Name</label>
                                        <span style="color: #ea0a0a;">*</span>
                                        <input type="text" class="form-control"  id="mothers_name" name="mothers_name"  required>
                                       
                                      </div>
                                      
                                      <div class="col-md-3 mb-3">
                                        <label for="mothers_mobile">Mother's Mobile</label>
                                        <span style="color: #ea0a0a;">*</span>
                                        <input type="number" class="form-control" id="mothers_mobile" name="mothers_mobile" >
                                        
                                      </div>
                                      
                                      <div class="col-md-3 mb-3">
                                        <label for="mothers_occupation">Mother's Occupation</label>
                                        <span style="color: #ea0a0a;">*</span>
                                        <input type="text" class="form-control"  id="mothers_occupation" name="mothers_occupation" >
                                        
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="mothers_image">Mother's Photo</label>
                                        <input class="filestyle form-control"  type="file"  name="mothers_image" id="mothers_image" >
                                        
                                    </div>
                                      
                                      
                                      

                                    </div>

                                    
                            </div>
                          </div>
                    </div>

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">@lang('home.otherInformation')</div>
                            <div class="panel-body">
                                
                                    
                                <div class="form-row">

                                      <div class="col-md-3 mb-3">
                                        <label for="student_email">Email</label>
                                        <span style="color: #ea0a0a;">*</span>
                                        <input type="email" class="form-control" id="student_email" name="student_email"  required ">
                                        
                                      </div>
                                      
                                      <div class="col-md-3 mb-3">
                                        <label for="student_pass">Password</label>
                                        <span style="color: #ea0a0a;">*</span>
                                        <input type="text" class="form-control"  id="student_pass" name="student_pass"  required >
                                        
                                      </div>
                                      

                                      <div class="col-md-3 mb-3" style="float:right;">
                                        <button type="submit" class="btn btn-primary" style="margin-top:10px;float:right;">Save</button>
                                        
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
        @include('admin.layouts.loder')
        <style>#overlay .loader{display: none}</style>

        <script>
          $('#class_id').change(function(){
            var class_id = $(this).val();

            if(class_id){
              $('#overlay .loader').show();
              $.get("{{route('admin.class.wise.section')}}",{ class_id: class_id },function(data){
                        $("#section_id").empty().html(data);
                        $('#overlay .loader').hide();
                    })
            }
          })
        </script>
@endsection


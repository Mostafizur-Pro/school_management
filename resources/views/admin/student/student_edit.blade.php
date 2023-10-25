@extends('admin.layouts.app')
@section('admin_title','Create Class | NEDUBD')
@section('admin_section')

<h1>EDIT PAGE</h1>


<div class="product-sales-area mg-tb-30" style="margin-top:61px;">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">@lang('home.CreateSection')</div>
                            <div class="panel-body">
                                <form action="student-Update-{{ $cd[0]->id }}" method="post" enctype="multipart/form-data">
                                @csrf
                                    
                                <div class="form-row">

                                  <div class="col-md-3 mb-3">
                                    <label for="student_gender">Academic Year</label>
                                    <span style="color: #ea0a0a;">*</span>
                                        <select class="form-control" id="session" name="session" value="" required >
                                            <option value="" selected>Select Academic Year</option>
                                            <option value="2017"{{$cd[0]->session=="2017" ? 'selected': ''}}>2017</option>
                                            <option value="2018"{{$cd[0]->session=="2018" ? 'selected': ''}}>2018</option>
                                            <option value="2019"{{$cd[0]->session=="2019" ? 'selected': ''}}>2019</option>
                                            <option value="2020"{{$cd[0]->session=="2020" ? 'selected': ''}}>2020</option>
                                            <option value="2021"{{$cd[0]->session=="2021" ? 'selected': ''}}>2021</option>
                                            <option value="2022"{{$cd[0]->session=="2022" ? 'selected': ''}}>2022</option>
                                            {{-- <option value="2022"{{$cd[0]->session=="2023" ? 'selected': ''}}>2023</option> --}}
                                        </select>
                                  </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="roll">Roll Number</label>
                                        <span style="color: #ea0a0a;">*</span>
                                        <input type="text" class="form-control" id="roll" name="roll" value="{{ $cd[0]->roll }}" required >
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="class_id">Class</label>
                                        <span style="color: #ea0a0a;">*</span>
                                        <select class="form-control" id="class_id" name="class_id" required>
                                            <option value="">Select Class</option>
                                            @foreach($lavel as $lavel)
                                            @if($cd[0]['class_id']==$lavel->id)
                                            <option value="{{  $lavel->id}}" selected>{{ $lavel->lavel_name }}</option>
                                            @else
                                            <option value="{{  $lavel->id}}">{{ $lavel->lavel_name }}</option>
                                            @endif
                                            @endforeach
                                         </select>
                                       
                                        
                                      </div>
                                      
                                      
                                      <div class="col-md-3 mb-3">
                                        <label for="section_id">Section</label>
                                        <span style="color: #ea0a0a;">*</span>
                                            <select class="form-control" id="section_id" name="section_id" required>
                                              <option value="">--Select Section--</option>
                                              @foreach($section as $section)
                                              @if($cd[0]['section_id']==$section->id)
                                              <option value="{{  $section->id}}" selected>{{ $section->section_name }}</option>
                                              @else
                                              <option value="{{  $section->id}}">{{ $section->section_name }}</option>
                                              @endif
                                              @endforeach

                                            </select>
                                      </div>
                                      
                                      <div class="col-md-3 mb-3">
                                        <label for="group_id">Group</label>
                                            <select class="form-control"  name="group_id" id="group_id">
                                                <option value="">Select Group</option>
                                                <option value="1" {{$cd[0]->group_id=="1" ? 'selected': ''}}>Science</option>
                                                <option value="2" {{$cd[0]->group_id=="2" ? 'selected': ''}}>Arts</option>
                                                <option value="3" {{$cd[0]->group_id=="3" ? 'selected': ''}}>Commerce</option>

                                
                                                
                                            </select>
                                      </div>
                                      

                                      <div class="col-md-3 mb-3">
                                        <label for="student_name">Student Name</label>
                                        <span style="color: #ea0a0a;">*</span>
                                        <input type="text" name="student_name" class="form-control" id="student_name" value="{{ $cd[0]->student_name }}" required >
                                      </div>
                                      
                                      <div class="col-md-3 mb-3">
                                        <label for="student_mobile">Mobile</label>
                                        <span style="color: #ea0a0a;">*</span>
                                        <input type="number"  name="student_mobile" class="form-control" id="student_mobile" value="{{ $cd[0]->student_mobile }}" required >
                                        
                                      </div>
                                    

                                      <div class="col-md-3 mb-3">
                                        <label for="student_gender">Gender</label>
                                        <span style="color: #ea0a0a;">*</span>
                                            <select class="form-control" id="student_gender" name="student_gender" id="student_gender">
                                                <option value="">Select Gender</option>
                                                <option value="Male" {{$cd[0]->student_gender=="Male" ? 'selected': ''}}>Male</option>
                                                <option value="Female" {{$cd[0]->student_gender=="Female" ? 'selected': ''}}>Female</option>

                                                
                                                
                                            </select>
                                      </div>
                                          
                                      <div class="col-md-3 mb-3">
                                        <label for="student_date_of_birth">Date Of Birth</label>
                                         <span style="color: #ea0a0a;">*</span>
                                        <div class="input-group">
                                         
                                          <input type="date" class="form-control"name="student_date_of_birth" id="student_date_of_birth" value="{{ $cd[0]->student_date_of_birth }}" required style="width:242px;">
                                          
                                        </div>
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="student_religion">Religion</label>
                                        <span style="color: #ea0a0a;">*</span>
                                            <select class="form-control" id="student_religion" name="student_religion" id="student_religion" required>
                                                <option value="">Select Religion</option>
                                                <option value="Islam" {{$cd[0]->student_religion=="Islam" ? 'selected': ''}}>Islam</option>
                                                <option value="Hindu" {{$cd[0]->student_religion=="Hindu" ? 'selected': ''}}>Hindu</option>

                                                
                                                
                                            </select>
                                      </div>
                                       
                                      <div class="col-md-3 mb-3">
                                        <label for="student_blood_group">Blood Group</label>
                                        <span style="color: #ea0a0a;">*</span>
                                            <select class="form-control" id="student_blood_group" name="student_blood_group" id="student_blood_group" value="{{ $cd[0]->student_blood_group }}">
                                                <option value="{{ $cd[0]->student_blood_group }}">Select Blood Group</option>
                                                <option value="A-"  {{$cd[0]->student_blood_group=="A-" ? 'selected': ''}}>A-</option>
                                                <option value="A+"  {{$cd[0]->student_blood_group=="A+" ? 'selected': ''}}>A+</option>
                                                <option value="B-"  {{$cd[0]->student_blood_group=="B-" ? 'selected': ''}}>B-</option>
                                                <option value="B+"  {{$cd[0]->student_blood_group=="B+" ? 'selected': ''}}>B+</option>
                                                <option value="O-"  {{$cd[0]->student_blood_group=="O-" ? 'selected': ''}}>O-</option>
                                                <option value="O+"  {{$cd[0]->student_blood_group=="O+" ? 'selected': ''}}>O+</option>
                                                <option value="AB-" {{$cd[0]->student_blood_group=="AB-" ? 'selected': ''}}>AB-</option>
                                                <option value="AB+" {{$cd[0]->student_blood_group=="AB+" ? 'selected': ''}}>AB+</option>

                                                
                                                
                                            </select>
                                      </div>

                                       <div class="col-md-3 mb-3">
                                            <label for="student_present_address">Present Address</label>
                                            <input type="text" class="form-control" id="student_present_address"  name="student_present_address" value="{{ $cd[0]->student_present_address }}" >
                                        </div>
                                       <div class="col-md-3 mb-3">
                                            <label for="student_parmanent_address">Parmanent Address</label>
                                            <input type="text" class="form-control" id="student_parmanent_address"  name="student_parmanent_address"  value="{{ $cd[0]->student_parmanent_address }}" >
                                        </div>

                                       <div class="col-md-3 mb-3">
                                            <label for="student_image">Photo</label>
                                            <input class="filestyle form-control"  type="file"  name="student_image" id="student_image" value="{{ $cd[0]->student_image }}" required >
                                            
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
                                        <input type="text" class="form-control" id="fathers_name" name="fathers_name" value="{{ $cd[0]->fathers_name }}" required >
                                        
                                      </div>
                                      
                                      <div class="col-md-3 mb-3">
                                        <label for="fathers_mobile">Father's Mobile</label>
                                        <span style="color: #ea0a0a;">*</span>
                                        <input type="number" class="form-control"  id="fathers_mobile" name="fathers_mobile" value="{{ $cd[0]->fathers_mobile }}" required >
                                        
                                      </div>
                                      
                                      <div class="col-md-3 mb-3">
                                        <label for="fathers_occupation">Father Occupation</label>
                                        <span style="color: #ea0a0a;">*</span>
                                        <input type="text" class="form-control"  id="fathers_occupation" name="fathers_occupation" value="{{ $cd[0]->fathers_occupation }}">
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="fathers_image">Father's Photo</label>
                                        <input class="filestyle form-control"  type="file"  name="fathers_image" id="fathers_image" value="{{ $cd[0]->fathers_image }}">
                                        
                                    </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="mothers_name">Mother's Name</label>
                                        <span style="color: #ea0a0a;">*</span>
                                        <input type="text" class="form-control"  id="mothers_name" name="mothers_name" value="{{ $cd[0]->mothers_name }}" required>
                                       
                                      </div>
                                      
                                      <div class="col-md-3 mb-3">
                                        <label for="mothers_mobile">Mother's Mobile</label>
                                        <span style="color: #ea0a0a;">*</span>
                                        <input type="number" class="form-control" id="mothers_mobile" name="mothers_mobile" value="{{ $cd[0]->mothers_mobile }}" >
                                        
                                      </div>
                                      
                                      <div class="col-md-3 mb-3">
                                        <label for="mothers_occupation">Mother's Occupation</label>
                                        <span style="color: #ea0a0a;">*</span>
                                        <input type="text" class="form-control"  id="mothers_occupation" name="mothers_occupation" value="{{ $cd[0]->mothers_occupation }}" >
                                        
                                      </div>

                                      <div class="col-md-3 mb-3">
                                        <label for="mothers_image">Mother's Photo</label>
                                        <input class="filestyle form-control"  type="file"  name="mothers_image" id="mothers_image"  value="{{ $cd[0]->mothers_image }}">
                                        
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
                                        <input type="email" class="form-control" id="student_email" name="student_email" value="{{ $cd[0]->student_email }}" required ">
                                        
                                      </div>
                                      
                                      <!-- <div class="col-md-3 mb-3">
                                        <label for="student_pass">Password</label>
                                        <span style="color: #ea0a0a;">*</span>
                                        <input type="text" class="form-control"  id="student_pass" name="student_pass" value="{{ $cd[0]->student_pass }}" required >
                                        
                                      </div> -->
                                      
                                      
                                      <div class="col-md-3 mb-3" style="float:right;">
                                        <div class="col-md-3 mb-3">
                                        <button type="submit" class="btn btn-primary" style="margin-top:10px;float:right;">Update</button>
                                        </div>
                                        <div class="col-md-3 mb-3">
                                        {{-- <button type="cancel" class="btn btn-primary" style="margin-top:10px;float:right;">Cancel</button> --}}
                                        <button type="button" class="btn btn-primary" onclick="window.location.href='{{route('admin.student.list')}}'" style="margin-top:10px;float:right;">Cancel</button>
                                        </div>
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

@push('admin_css')
    
@endpush
@push('admin_js')

<!-- data table JS  ============================================ -->
   

    
@endpush
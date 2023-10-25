@extends('admin.layouts.app')
@section('admin_title','MEMBER CREATE | NEDUBD')
@section('admin_section')

        <div class="product-sales-area mg-tb-30" style="margin-top:61px;">
            <div class="container-fluid" style="min-height: 455px;">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Member Create</div>
                            <div class="panel-body">
                                <form action="{{url('admin/hostel/member/store')}}" method="post">
                                @csrf
                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                             <label for="student_religion">Class</label>
                                             <span style="color: #ea0a0a;">*</span>
                                             <select class="form-control" id="class_id" name="session" required >
                                            <option value="">Select Class</option>
                                             @foreach($iclass as $iclas)
                                             <option value="{{$iclas->id}}">{{$iclas->lavel_name}}</option>
                                             @endforeach
                                             </select>
                                                 </div>

                                            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12" >
                                                 <label for="student_religion">Section</label>
                                                 <span style="color: #ea0a0a;">*</span>
                                                 <select class="form-control" name="section_id" id="section_id" required>
                                                    <option value="" selected >Select Section</option>
                                                
                                                    </select>
                                            </div>
                                            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12" >
                                                 <label for="student_religion">Student</label>
                                                 <span style="color: #ea0a0a;">*</span>
                                                 <select class="form-control" name="student_id" id="student_id" required>
                                                    <option value="" selected >Select Section</option>
                                                
                                                    </select>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" >
                                                 <label for="student_religion">Hostel</label>
                                                 <span style="color: #ea0a0a;">*</span>
                                                 <select class="form-control" name="hostel_id"  required>
                                                    <option value="" selected >Select Section</option>
                                                    @foreach($hostels as $hostel)
                                                    <option value="{{ $hostel->id }}" >{{ $hostel->hostel_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" >
                                                 <label for="student_religion">Room Number</label>
                                                 <span style="color: #ea0a0a;">*</span>
                                                 <input type="text" class="form-control" placeholder="Enter Room Number" name="room_no" required>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" >
                                                 <label for="student_religion">Monthly Fee</label>
                                                 <span style="color: #ea0a0a;">*</span>
                                                 <input type="text" class="form-control" placeholder="Enter Monthly Fee" name="monthly_fee" required>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" >
                                                <label for="student_religion">Join Date</label>
                                                <span style="color: #ea0a0a;">*</span>
                                                <input type="date" name="joining_date" class="form-control basic-ele-mg-b-10 responsive-mg-b-10" placeholder="password" required />
                                            </div>
                                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                            <br>
                                            <hr style="border-top: 1px solid #eae8e8;">
                                            <a  class="btn btn-m" >Cancel</a>
                                            <input  type="submit"  class="btn btn-m btn-info pull-right" value="Add" >
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
        
        <div class="footer-copyright-area" style="margin-bottom: 5px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2019. All rights reservedby <a href="https://baitsbd.com">NEDUBD</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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

          $('#section_id').change(function(){
              var section_id = $(this).val();
              var class_id   = $('#class_id').val();

              if(section_id && class_id){
                $('#overlay .loader').show();

                $.get("{{url('admin/hostel/class/wise/student')}}",{section_id:section_id, class_id:class_id},function(data){
                    $('#student_id').empty().html(data);
                    $("#overlay .loader").hide();
                })

              }
          })

        </script>

@endsection
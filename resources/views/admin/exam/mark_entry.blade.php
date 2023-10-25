@extends('admin.layouts.app')
@section('admin_title','Create Class | NEDUBD')
@section('admin_section')

<div class="col-lg-12 col-md-12 col-sm-8 col-xs-12" >
    <div class="sparkline10-list mt-b-30">
        <div class="sparkline10-hd">
            
        </div>
        <div class="sparkline10-graph">
            <div class="basic-login-form-ad">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="basic-login-inner inline-basic-form" >
                            <form >
                                @csrf
                                <div class="form-group-inner">
                                    <div class="row"> 
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            
                                            <select class="form-control" name="class_id" id="class_id" required>
                                                <option value="" >Select Class</option>
                                                @foreach($class as $classs)
                                                <option value="{{ $classs->id}}">{{ $classs->lavel_name}}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            
                                            <select class="form-control" name="section_id" id="section_id" required>
                                                <option value="" selected >--Select Section--</option>
                                                
                                            </select>

                                        </div>
                                        
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            
                                            <select class="form-control" name="subject_id" id="subject_id" required>
                                                <option value="" selected >--Select Subject--</option>
                                                
                                            </select>

                                        </div>

                                        

                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            
                                            <select class="form-control" name="exam_id" id="exam_id" required>
                                                <option value="">--Select Exam--</option>
                                                @foreach($exam_name as $exam)
                                                <option value="{{ $exam->id}}">{{ $exam->exam_name}}</option>
                                                @endforeach

                                            </select>

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
</div>

        <div class="col-lg-12 col-md-12 col-sm-8 col-xs-12" id="student_show">
            

                                
        </div>

        @include('admin.layouts.loder')
        <style>#overlay .loader{display: none}</style>
        


        <script>
            $("#class_id").change(function(){
                var class_id = $(this).val();

                if(class_id){
                    $('#overlay .loader').show();

                    

                    $.get("{{route('admin.class.wise.section')}}",{ class_id: class_id },function(data){
                        $("#section_id").empty().html(data);
                    })

                    $.get("{{route('admin.class.wise.subject')}}",{ class_id: class_id },function(data){
                        $("#subject_id").empty().html(data);
                        $('#overlay .loader').hide();
                        

                    })

                    
                }
            })

            $("#exam_id").change(function(){
                var exam_id = $(this).val();
                var class_id = $("#class_id").val();
                var section_id = $("#section_id").val();
                var subject_id = $("#subject_id").val();

               if(exam_id)
               {
                if(class_id && section_id)
                {
                    $('#overlay .loader').show();
                    $.get("{{route('admin.mark.entry.student')}}",{ subject_id:subject_id,exam_id:exam_id,class_id:class_id , section_id:section_id},function(data){
                        
                        $("#student_show").html(data);
                        $('#overlay .loader').hide();
                    })
                }
               }
            })
        </script>


@endsection

@push('admin_css')
    
@endpush
@push('admin_js')

    
@endpush
@extends('admin.layouts.app')
@section('admin_title','TABULATIONSHEET | NEDUBD')
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
                            <form method="get" action="{{ route('admin.invoice.list') }}" >
                                @csrf
                                <div class="form-group-inner">
                                    <div class="row"> 
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            
                                            <select class="form-control" name="class_id" id="class_id" required>
                                                <option value="" >Select Class</option>
                                                @foreach($class as $clas)
                                                    <option value="{{$clas->id}}">{{$clas->lavel_name}}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            
                                            <select class="form-control" name="section_id" id="section_id" required>
                                                <option value="" selected >--Select Section--</option>
                                                
                                            </select>

                                        </div>
                                        

                                        

                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            
                                            <select class="form-control" name="exam_id" id="exam_id" required>
                                                <option value="">--Select Exam--</option>
                                                @foreach($exams as $exam)
                                                    <option value="{{$exam->id}}">{{$exam->exam_name}}</option>
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

<div class="col-lg-12 col-md-12 col-sm-8 col-xs-12" id="tabulation_show">
    
</div>

        
        


    @include('admin.layouts.loder')
    <style>#overlay .loader{display: none}</style>

@endsection

@push('admin_css')
    
@endpush
@push('admin_js')

<script>
    $('#class_id').change(function(){
        
        var class_id = $(this).val();

        if(class_id){
            $("#overlay .loader").show();

            $.get("{{route('admin.class.wise.section')}}",{ class_id: class_id },function(data){
                        $("#section_id").empty().html(data);
                        $("#overlay .loader").hide();
                    })
        }
    })

    $('#exam_id').change(function(){
        
        var exam_id = $(this).val();
        var class_id = $('#class_id').val();
        var section_id = $('#section_id').val();

        if(exam_id){
            
            if(class_id && section_id){
                $("#overlay .loader").show();

                $.get("{{route('admin.tabulation.view')}}",{exam_id:exam_id, class_id:class_id, section_id:section_id},function(data){
                    $('#tabulation_show').empty().html(data);
                    $("#overlay .loader").hide();
                })
            }
        }

    })
</script>
    
@endpush
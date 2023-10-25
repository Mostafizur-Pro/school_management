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
                                <div class="form-group-inner" style="margin-left: 16%;">
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

<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="sparkline13-list">
        <div class="sparkline13-hd">
            <div class="main-sparkline13-hd">
                <h1>Projects <span class="table-project-n">Data</span> Table</h1>
            </div>
        </div>
        <div class="sparkline13-graph">
            <div class="datatable-dashv1-list custom-datatable-overright">
                <div id="toolbar">
                    <select class="form-control dt-tb">
                        <option value="">Export Basic</option>
                        <option value="all">Export All</option>
                        <option value="selected">Export Selected</option>
                    </select>
                </div>
                <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                    data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                    <thead>
                        <tr>
                            
                            <th data-field="id">ID</th>
                            <th data-field="name">Name</th>
                            <th data-field="roll">Roll</th>
                            <th data-field="email" >Class</th>
                            <th data-field="phone" >Section</th>
                            <th data-field="action">Action</th>
                        </tr>
                    </thead>
                    <tbody id="studetn_list_show">
                        
                        
                        
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

        
        


    @include('admin.layouts.loder')
    @include('admin.examreport.transcript_modal')
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
            });
    
        $('#exam_id').change(function(){
            var exam_id = $(this).val();
            var classs_id = $('#class_id').val();
            var section_id = $('#section_id').val();

            if(exam_id)
            {
                if(classs_id && section_id)
                {
                    $('#overlay .loader').show();
                    $.get("{{route('admin.transcript.student')}}",{exam_id:exam_id, classs_id:classs_id, section_id:section_id},function(data){
                        $("#studetn_list_show").empty().html(data);
                        $("#overlay .loader").hide();
                    })
                }
            }
            
        })
    </script>
    

    
@endpush
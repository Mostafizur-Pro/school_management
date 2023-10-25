@extends('admin.layouts.app')
@section('admin_title','Create Class | NEDUBD')
@section('admin_section')

<div class="col-lg-12 col-md-12 col-sm-8 col-xs-12" style="margin-top: 36px;">
    <div class="sparkline10-list mt-b-30">
        <div class="sparkline10-hd">
            
        </div>
        <div class="sparkline10-graph">
            <div class="basic-login-form-ad">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
                        <div class="basic-login-inner inline-basic-form" style="margin-left: 32%;">
                            <form method="get" action="{{ route('admin.student.list') }}" >
                                @csrf
                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            
                                            <select class="form-control" name="class_id" id="class_id" required>
                                                <option value="" >Select Class</option>
                                                @foreach($lavel as $lavels)
                                                <option value="{{$lavels->id}}" >{{$lavels->lavel_name}}</option>
                                                @endforeach
                                            </select>

                                        </div>
                                        


                                        <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
                                            <a class="btn btn-md btn-primary login-submit-cs" data-toggle="modal" data-target="#PrimaryModalhdbgcl" style="height: 39px;padding: 10px;"><i class="fa fa-plus"></i> Create Subject</a>
                                       
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


        <div class="product-sales-area mg-tb-30" style="margin-top:61px; min-height:490px;">
            <div class="container-fluid">
                <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    <center><h1>Subject List</h1></center>
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
                                                <th data-field="name">Subject Name</th>
                                                <th data-field="name">Subject Code</th>
                                                <th data-field="name">Subject Type</th>
                                                <th data-field="roll">Class</th>
                                                <th data-field="roll">Teacher</th>
                                                <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody id="table_show">
                                            
                                            
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        

        
        @include('admin.subject.subject_form')
        @include('admin.layouts.footer')
        
        <style>#overlay .loader{display: none}</style>
        @include('admin.layouts.loder')
        
        



<script>
    $("#class_id").change(function(){
            $("#overlay .loader").show();
           var id = $(this).val();
            if(id){
                $.get("{{ route('admin.subject.list.by.ajax')}}", {id:id}, function(data){
                    $("#overlay .loader").hide();
                        $("#table_show").html(data);
                })
            }
        });
</script>



@endsection

@push('admin_css')
    
@endpush
@push('admin_js')

<!-- data table JS  ============================================ -->
   


@endpush
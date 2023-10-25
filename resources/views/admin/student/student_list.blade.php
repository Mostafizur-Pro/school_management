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
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-left: 18%;">
                        <div class="basic-login-inner inline-basic-form" >
                            <form>
                            
                                
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
                                                <option value="" selected >Select Section</option>
                                                
                                            </select>

                                        </div>
                                        


                                        <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
                                          
                                       
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
            <div class="container-fluid" >
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="sparkline13-list">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>@lang('home.StudentsList')</h1>
                                       
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
                                                    <th data-field="email" >Email</th>
                                                    <th data-field="phone" >Phone</th>
                                                    <th data-field="class">Class</th>
                                                    <th data-field="section">Section</th>
                                                    <th data-field="action">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="student_show">

                                                
                                            </tbody>
                                        </table>
                                    </div>
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

          $('#section_id').change(function(){
              var section_id = $(this).val();
              var class_id   = $('#class_id').val();

              if(section_id && class_id){
                $('#overlay .loader').show();

                $.get("{{route('admin.class.section.wise.student')}}",{section_id:section_id, class_id:class_id},function(data){
                    $('#student_show').empty().html(data);
                    $("#overlay .loader").hide();
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
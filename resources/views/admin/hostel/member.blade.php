@extends('admin.layouts.app')
@section('admin_title','HOSTEL MEMBER | NEDUBD')
@section('admin_section')



        <div class="product-sales-area mg-tb-30" style="margin-top:50px;min-height:465px;">
            <div class="container-fluid">
                <div class="row">

            
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <a href="{{url('admin/hostel/member/create')}}" class="btn btn-sm btn-info " style="margin-bottom: 10px;" >Add New Member</a>
                
                        <div class="sparkline13-list">
                        <div class="sparkline10-graph">
                                <div class="basic-login-form-ad">
                                
                                    
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div class="col-lg-3" style="padding:0px;">
                                    <select class="form-control" name="hostel_id" id="hostel_id"  class="col-lg-3">
                                     <option value="" selected >Select Hostel</option>
                                     @foreach($hostels as $hostel)
                                        <option value="{{ $hostel->id }}" selected >{{ $hostel->hostel_name }}</option>
                                      @endforeach
                                    </select>
                                    </div>

                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="false" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                
                                                
                                                <th>SL</th>
                                                <th>Name</th>
                                                <th>Room No.</th>
                                                <th>Fee</th>
                                                <th>Join date</th>
                                                <th>leave date</th>
                                                <th>Status</th>
                                                <th>Action</th>
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
    $('#hostel_id').change(function(){
        var hostel_id = $(this).val();
        
        if(hostel_id){
            $('#overlay .loader').show();
            $.get("{{url('admin/hostel/member/show/by/hostel')}}",{hostel_id:hostel_id},function(data){
                
                $('#table_show').empty().html(data);
                $('#overlay .loader').hide();
            })
        }
    })
</script>

@endsection

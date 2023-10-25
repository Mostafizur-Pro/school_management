@extends('admin.layouts.app')
@section('admin_title','ISSUE | NEDUBD')
@section('admin_section')

        <div class="product-sales-area mg-tb-30" style="margin-top:10px;">
            <div class="container-fluid">
                <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>Hostel List</h4>
                        <div class="sparkline13-list">
                        <div class="sparkline10-graph">
                                <div class="basic-login-form-ad">
                                <div class="alert  alert-mg-b" role="alert">
                                    
                                    <a href="{{url('admin/hostel/create')}}" class="btn btn-sm btn-info pull-right" >Add New</a>
                                </div>
                                    
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="false" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                
                                                
                                                <th>SL</th>
                                                <th>Name</th>
                                                <th>Type</th>
                                                <th>Number of Rooms</th>
                                                <th>Address</th>
                                                <th>Description</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           @foreach($hostels as $key =>$hostel)
                                            <tr>
                                                <td>{{ $key + 1 }}</td>
                                                <td>{{ $hostel->hostel_name }}</td>
                                                <td>{{ $hostel->type }}</td>
                                                <td>{{ $hostel->capacity }}</td>
                                                <td>{{ $hostel->address }}</td>
                                                <td>{{ $hostel->description }}</td>
                                                <td>{{ $hostel->status }}</td>
                                            </tr>
                                           @endforeach
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

@endsection

@push('admin_css')
    
@endpush
@push('admin_js')
   

    
@endpush
@extends('admin.layouts.app')
@section('admin_title','HOSTEL MEMBER | NEDUBD')
@section('admin_section')



        <div class="product-sales-area mg-tb-30" style="margin-top:50px;min-height:465px;">
            <div class="container-fluid">
                <div class="row">

            
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <a href="{{url('admin/transport/route/create')}}" class="btn btn-sm btn-info " style="margin-bottom: 10px;" >Add New Route</a>
                
                        <div class="sparkline13-list">
                        <div class="sparkline10-graph">
                                <div class="basic-login-form-ad">
                                
                                    
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    

                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="false" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                
                                                
                                                <th>SL</th>
                                                <th>Route Name</th>
                                                <th>Description</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($transport_routes as $key=> $transport_route)
                                                <tr>
                                                    <td>{{ $key + 1}}</td>
                                                    <td>{{ $transport_route->route_name}}</td>
                                                    <td>{{ $transport_route->description}}</td>
                                                    <td>{{ $transport_route->status== 1?'Active':'Deactive'}}</td>
                                                    <td></td>
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

        @include('admin.layouts.loder')
        <style>#overlay .loader{display: none}</style>
        <!-- just add "@include('admin.layouts.footer')" -->
        


@endsection

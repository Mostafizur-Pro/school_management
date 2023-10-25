@extends('admin.layouts.app')
@section('admin_title','HOSTEL MEMBER | NEDUBD')
@section('admin_section')



        <div class="product-sales-area mg-tb-30" style="margin-top:50px;min-height:465px;">
            <div class="container-fluid">
                <div class="row">

            
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <a href="{{url('admin/transport/vehicle/create')}}" class="btn btn-sm btn-info " style="margin-bottom: 10px;" >Add New Vehicle</a>
                
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
                                                <th>V Number</th>
                                                <th>V Model</th>
                                                <th>Capacity</th>
                                                <th>Route</th>
                                                <th>Driver Name</th>
                                                <th>Driver Contact</th>
                                                <th>Driver license</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($vehicles as $key => $vehicle)
                                                <tr>
                                                    <td>{{$key + 1}}</td>
                                                    <td>{{$vehicle->vehicle_number}}</td>
                                                    <td>{{$vehicle->vehicle_model}}</td>
                                                    <td>{{$vehicle->seat_capacity}}</td>
                                                    <td>{{$vehicle->route_id}}</td>
                                                    <td>{{$vehicle->driver_name}}</td>
                                                    <td>{{$vehicle->driver_contact}}</td>
                                                    <td>{{$vehicle->driver_license}}</td>
                                                    <td>{{$vehicle->status === 1?'Active':'Deactive'}}</td>
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
        


@endsection

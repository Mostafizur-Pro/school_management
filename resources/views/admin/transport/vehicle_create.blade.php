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
                                <form action="{{url('admin/transport/vehicle/store')}}" method="post">
                                @csrf
                                <div class="form-group-inner">
                                    <div class="row">
                                    
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" >
                                                 <label for="student_religion">Vehicle Number</label>
                                                 <span style="color: #ea0a0a;">*</span>
                                                 <input type="text" class="form-control" placeholder="Enter Room Number" name="vehicle_number" required>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" >
                                                 <label for="student_religion">Vehicle Model</label>
                                                 <span style="color: #ea0a0a;">*</span>
                                                 <input type="text" class="form-control" placeholder="Enter Vehicle Model" name="vehicle_model" required>
                                    </div>

                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" >
                                                <label for="student_religion">Made Year</label>
                                                <span style="color: #ea0a0a;">*</span>
                                                <input type="date" name="vehicle_year_made" class="form-control basic-ele-mg-b-10 responsive-mg-b-10" placeholder="Made Year" required />
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                             <label for="student_religion">Select Route</label>
                                             <span style="color: #ea0a0a;">*</span>
                                             <select class="form-control"  name="route_id" required >
                                                <option value="">Select Class</option>
                                                @foreach($transport_routes as $troute)
                                                 <option value="{{$troute->id }}">{{$troute->route_name}}</option>
                                                @endforeach
                                             </select>
                                        </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" >
                                                 <label for="student_religion">Driver Name</label>
                                                 <span style="color: #ea0a0a;">*</span>
                                                 <input type="text" class="form-control" placeholder="Enter Driver Name" name="driver_name" required>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" >
                                                 <label for="student_religion">Driver License</label>
                                                 <span style="color: #ea0a0a;">*</span>
                                                 <input type="text" class="form-control" placeholder="Enter Driver License" name="driver_license" required>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" >
                                                 <label for="student_religion">Driver Contact</label>
                                                 <span style="color: #ea0a0a;">*</span>
                                                 <input type="text" class="form-control" placeholder="Enter Driver Contact" name="driver_contact" required>
                                    </div>

                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" >
                                                 <label for="student_religion">Description</label>
                                                 <input type="text" class="form-control" placeholder="Enter Description" name="description">
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



@endsection
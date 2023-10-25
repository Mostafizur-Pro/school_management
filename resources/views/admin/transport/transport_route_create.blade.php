@extends('admin.layouts.app')
@section('admin_title','ROUTE CREATE | NEDUBD')
@section('admin_section')

       

        <div class="product-sales-area mg-tb-30" style="margin-top:61px;">
            <div class="container-fluid" style="min-height: 455px;">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Add New Route</div>
                            <div class="panel-body">
                                <form action="{{url('admin/transport/route/store')}}" method="post">
                                @csrf
                                <div class="form-group-inner">
                                         <div class="row">
                                                            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                                             <label for="student_religion">Route Name</label>
                                                                <span style="color: #ea0a0a;">*</span>
                                                                <input type="text" class="form-control basic-ele-mg-b-10 responsive-mg-b-10" name="route_name" placeholder="Enter Route Name" />
                                                            </div>

                                                            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12" >
                                                                <label for="student_religion">Description</label>
                                                                    <input type="text" class="form-control basic-ele-mg-b-10 responsive-mg-b-10" name="capacity" placeholder="Enter Description" />
                                                            </div>
                                                            

                                                            
                                                            
                                                            <div class="col-lg-12 col-md-3 col-sm-3 col-xs-12">
                                                                <br>
                                                                <hr style="border-top: 1px solid #eae8e8;">
                                                                <a  class="btn btn-m" >Cancel</a>
                                                                <input  type="submit"  class="btn btn-m btn-info pull-right" value="Add">
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
                            <p>Copyright © 2020. All rights reserved by <a href="https://baitsbd.com">BAITS</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection
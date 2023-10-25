@extends('admin.layouts.app')
@section('admin_title','ISSUE CREATE | NEDUBD')
@section('admin_section')

       

        <div class="product-sales-area mg-tb-30" style="margin-top:61px;">
            <div class="container-fluid" style="min-height: 455px;">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Add New Hostel</div>
                            <div class="panel-body">
                                <form action="{{url('admin/hostel/store')}}" method="post">
                                @csrf
                                <div class="form-group-inner">
                                         <div class="row">
                                                            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                                             <label for="student_religion">Name</label>
                                                                <span style="color: #ea0a0a;">*</span>
                                                                <input type="text" class="form-control basic-ele-mg-b-10 responsive-mg-b-10" name="hostel_name" placeholder="Enter Hostel Name" />
                                                            </div>

                                                            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12" >
                                                                <label for="student_religion">Type</label>
                                                                <span style="color: #ea0a0a;">*</span>
                                                               <select class="form-control" id="type" name="type"  >
                                                                <option value="Boys">Boys</option>
                                                                <option value="Girls">Girls</option>
                                                                <option value="BoysGirls">Boys & Girls</option>
                                                            </select>
                                                            </div>
                                                            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12" >
                                                                <label for="student_religion">Number of Rooms</label>
                                                                <span style="color: #ea0a0a;">*</span>
                                                                    <input type="number" class="form-control basic-ele-mg-b-10 responsive-mg-b-10" name="capacity" placeholder="Number of Rooms" />
                                                            </div>
                                                            <div class="col-lg-6 col-md-3 col-sm-3 col-xs-12" >
                                                                <label for="student_religion">Address</label>
                                                                <span style="color: #ea0a0a;">*</span>
                                                                    <textarea class="form-control basic-ele-mg-b-10 responsive-mg-b-10" name="address"  rows="5" cols="15"></textarea>
                                                            </div>
                                                            <div class="col-lg-6 col-md-3 col-sm-3 col-xs-12" >
                                                                <label for="student_religion">Description</label>
                                                                <span style="color: #ea0a0a;">*</span>
                                                                    <textarea name="description" class="form-control basic-ele-mg-b-10 responsive-mg-b-10" rows="5" cols="15"></textarea>
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
                            <p>Copyright © 2019. All rights reservedby <a href="https://baitsbd.com">NEDUBD</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection
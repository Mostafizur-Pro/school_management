@extends('admin.layouts.app')
@section('admin_title','ISSUE CREATE | NEDUBD')
@section('admin_section')

       

        <div class="product-sales-area mg-tb-30" style="margin-top:61px;">
            <div class="container-fluid" style="min-height: 455px;">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Issue Book</div>
                            <div class="panel-body">
                                <form action="{{route('admin.library.issue.store')}}" method="post">
                                @csrf
                                <div class="form-group-inner">
                                         <div class="row">
                                                            <div class="col-lg-4 col-md-3 col-sm-3 col-xs-12">
                                                             <label for="student_religion">Student Id/Roll</label>
                                                                <span style="color: #ea0a0a;">*</span>
                                                                <input type="text" class="form-control basic-ele-mg-b-10 responsive-mg-b-10" name="student_id" placeholder="Enter Student Id/Roll" />
                                                            </div>

                                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12" >
                                                                <label for="student_religion">ISBN no.</label>
                                                                <span style="color: #ea0a0a;">*</span>
                                                                    <input type="text" class="form-control basic-ele-mg-b-10 responsive-mg-b-10" name="book_id" placeholder="isbn number / code" />
                                                            </div>
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12" >
                                                                <label for="student_religion">Issue Date</label>
                                                                <span style="color: #ea0a0a;">*</span>
                                                                    <input type="date" class="form-control basic-ele-mg-b-10 responsive-mg-b-10" name="issue_date" placeholder="password" />
                                                            </div>
                                                            <div class="col-lg-2 col-md-3 col-sm-3 col-xs-12" >
                                                                <label for="student_religion">Return Date</label>
                                                                <span style="color: #ea0a0a;">*</span>
                                                                    <input type="date" name="return_date" class="form-control basic-ele-mg-b-10 responsive-mg-b-10" placeholder="password" />
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
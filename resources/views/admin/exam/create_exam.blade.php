@extends('admin.layouts.app')
@section('admin_title','Create Class | NEDUBD')
@section('admin_section')

       

        <div class="product-sales-area mg-tb-30" style="margin-top:11px;;">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Create Exam</div>
                            <div class="panel-body">
                                <form action="{{route('admin.create.exam.store')}}" method="post">
                                @csrf
                                    <div class="form-group">
                                      <label for="exam_name">Exam Name</label>
                                      <input type="text" name="exam_name" class="form-control" id="exam_name" aria-describedby="exam_name" required>
                                      <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>

                                    <div class="form-group">
                                      <label for="exam_year">Exam Year</label>
                                      <input type="text" name="exam_year" class="form-control" id="exam_year" aria-describedby="exam_year" required>
                                      <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    
                                    
                                    
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </form>
                            </div>
                          </div>
                    </div>

                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Class List</div>
                            <div class="panel-body">
                                <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Class Name</th>
                                        <th scope="col">Class Teacher</th>
                                        <th scope="col" >Status</th>
                                        <th scope="col">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($exam_name as $key => $exam_nams)
                                      <tr>
                                        <td>{{ $key + 1}}</td>
                                        <td>{{ $exam_nams->exam_name}}</td>
                                        <td>{{ $exam_nams->exam_year}}</td>
                                        <td>{{ $exam_nams->status}}</td>
                                        
                                        <td>
                                            @if($exam_nams->status == '1')
                                            <a href="#"><i class="fa fa-arrow-circle-down" style="font-size: 16px;color:#d517d8;"></i></a>
                                            @else
                                            <a href="#"><i class="fa fa-arrow-circle-up" style="font-size: 15px;color:#e032c3;"></i></a>
                                            @endif
                                            <a href=""><i class="fa fa-edit" style="color:#1239c5;font-size: 15px"></i></a>
                                            <a href=""><i class="fa fa-eye" style="color:#12c56a;font-size: 18px"></i></a>
                                            <a href="#"><i class="fa fa-trash" aria-hidden="true" style="color:red;font-size: 16px;"></i></a>
                                        </td>
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
        


        <div class="footer-copyright-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copy-right">
                            <p>Copyright © 2020. All rights reservedby <a href="https://baitsbd.com">NEDUBD</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection
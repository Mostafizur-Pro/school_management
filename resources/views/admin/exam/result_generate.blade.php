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
                                <form action="{{route('admin.result_generator_store')}}" method="post">
                                @csrf
                                    <div class="form-group">
                                      <label for="exam_name">Exam Name</label>
                                            
                                            <select class="form-control" name="class_id" id="class_id" required>
                                                <option value="">--Select Exam--</option>
                                                @foreach($class as $classs)
                                                <option value="{{ $classs->id}}">{{ $classs->lavel_name}}</option>
                                                @endforeach

                                            </select>

                                      <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>

                                    <div class="form-group">
                                      <label for="exam_year">Exam Year</label>
                                            <select class="form-control" name="exam_id" id="exam_id" required>
                                                <option value="">--Select Exam--</option>
                                                @foreach($exam as $exams)
                                                <option value="{{ $exams->id}}">{{ $exams->exam_name}}</option>
                                                @endforeach

                                            </select>

                                      <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    
                                    
                                    
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </form>
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
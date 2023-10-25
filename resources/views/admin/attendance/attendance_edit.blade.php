@extends('admin.layouts.app')
@section('admin_title','Create Class | NEDUBD')
@section('admin_section')

<div class="col-lg-12 col-md-12 col-sm-8 col-xs-12" style="margin-top: -5px;">
    <div class="sparkline10-list mt-b-30">
        <div class="sparkline10-hd">
            
        </div>
        <div class="sparkline10-graph">
            <div class="basic-login-form-ad">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="basic-login-inner inline-basic-form" >
                            <form method="get" action=" {{ route('admin.attendance.edit') }} " >
                                @csrf
                                <div class="form-group-inner">
                                    <div class="row">
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            
                                            <select class="form-control" name="class" id="class" required>

                                                <option value="" >Select Class</option>
                                                @foreach($class as $classs)
                                                    <option value="{{ $classs->id}}">{{ $classs->lavel_name}}</option>
                                                @endforeach

                                            </select>

                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            
                                            <select class="form-control" name="section" id="section" required>
                                                <option value="" selected >Select Section</option>
                                                @foreach($section as $sections)
                                                <option value="{{ $sections->id }}">{{ $sections->section_name }}</option>
                                                @endforeach
                                            </select>

                                        </div>

                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            
                                        <input type="date" class="form-control"name="att_date" id="att_date" required style="width:242px;">

                                        </div>


                                        <div class="col-lg-1 col-md-2 col-sm-2 col-xs-12">
                                            <button class="btn btn-md btn-primary login-submit-cs" type="submit">Search</button>
                                       
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
</div>

        <div class="product-sales-area mg-tb-30" style="margin-top:-10px;">
            <div class="container-fluid">
                <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    @if($class_name != NULL)
                                    <center><h4>Attendance of Class: {{$class_name->lavel_name}}({{$section_name->section_name}}),  Date: {{$att_date}}</h4></center>
                                    @endif
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                   <form action="{{ route('admin.attendance.update') }}" method="post">
                                        @csrf
                                        @method('POST')
                                    <table id="table" data-toggle="table" data-key-events="true"  data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId"   data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                
                                                <th data-field="id">SL</th>
                                                <th data-field="name">Name</th>
                                                <th data-field="email" >Roll</th>
                                                <th data-field="phone" >Class</th>
                                                <th data-field="complete">Section</th>
                                                <th data-field="task">SMS Phn.</th>
                                                <th data-field="action">Attendance</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($student as $key=> $students)
                                                <tr>
                                                    
                                                    <td>{{$key + 1}}</td>
                                                    <td>{{$students->student_name}}</td>
                                                    <td>{{$students->roll}}</td>
                                                    <td>{{$students->lavel_name}}</td>
                                                    <td>{{$students->section_name}}</td>
                                                    <td>{{$students->fathers_mobile}}</td>
                                                    <td>
                                                        <input type="hidden" name="student_id[]" value="{{ $students->id }}" >
                                                        <input type="hidden" name="class_id" value="{{ $students->class_id }}">
                                                        <input type="hidden" name="section_id" value="{{ $students->section_id }}">
                                                        <input type="hidden" name="att_date" value="{{ $att_date }}">


                                                        <input type="radio" name="attendence[{{ $students->id }}]" value="1" {{$students->attendence == 1?'checked':''}} > Present
                                                        <input type="radio" name="attendence[{{ $students->id }}]" value="2" {{$students->attendence == 2?'checked':''}}>Absence
                                                        <input type="radio" name="attendence[{{ $students->id }}]" value="3" {{$students->attendence == 3?'checked':''}}>Late
                                                    </td>


                                                    
                                                </tr>
                                            @endforeach

                                            
                                            
                                        </tbody>
                                    </table>
                                    <br>
                                            <button type="submit" class="btn btn-success pull-right" >Update Attendence</button>
                                            <br>
                                   </form>
                                </div>
                            </div>
                        </div>
                </div>

                </div>
            </div>
        </div>
        


@endsection


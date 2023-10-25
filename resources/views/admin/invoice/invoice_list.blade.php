@extends('admin.layouts.app')
@section('admin_title','Create Class | NEDUBD')
@section('admin_section')

<div class="col-lg-12 col-md-12 col-sm-8 col-xs-12" >
    <div class="sparkline10-list mt-b-30">
        <div class="sparkline10-hd">
            
        </div>
        <div class="sparkline10-graph">
            <div class="basic-login-form-ad">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="basic-login-inner inline-basic-form" >
                            <form method="get" action="{{ route('admin.invoice.list') }}" >
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
                                            
                                            <select class="form-control" name="month" id="month" required>
                                                    <option value="" selected >Select Month</option>
                                                    <option value="01">January</option>
                                                    <option value="02">February</option>
                                                    <option value="03">March</option>
                                                    <option value="04">April</option>
                                                    <option value="05" >May</option>
                                                    <option value="06" >June</option>
                                                    <option value="07" >July</option>
                                                    <option value="08" >August</option>
                                                    <option value="09" >September</option>
                                                    <option value="10" >October</option>
                                                    <option value="11" >November</option>
                                                    <option value="12" >December</option>
                                                
                                            </select>

                                        </div>

                                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
                                            
                                            <select class="form-control" name="year" id="year" required>
                                                <option value="" selected>Select Year</option>
                                                <option value="2018">2018</option>
                                                <option value="2019">2019</option>
                                                <option value="2020">2020</option>
                                                <option value="2021">2021</option>
                                                <option value="2022">2022</option>
                                                <option value="2023">2023</option>
                                                <option value="2024">2024</option>
                                                <option value="2025">2025</option>

                                            </select>

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
                                    <h1>Projects <span class="table-project-n">Data</span> Table</h1>
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                        <select class="form-control dt-tb">
											<option value="">Export Basic</option>
											<option value="all">Export All</option>
											<option value="selected">Export Selected</option>
										</select>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                
                                                <th data-field="id">SL</th>
                                                <th data-field="name">Name</th>
                                                <th data-field="email" >Roll</th>
                                                <th data-field="phone" >Class</th>
                                                <th data-field="complete">Section</th>
                                                <th data-field="task">Studen Type</th>
                                                <th data-field="date">Total Amount</th>
                                                <th data-field="price" data-editable="true">Status</th>
                                                <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($invoice as $key=> $invoices)
                                                <tr>
                                                    
                                                    <td>{{$key + 1}}</td>
                                                    <td>{{$invoices->student_name}}</td>
                                                    <td>{{$invoices->roll}}</td>
                                                    <td>{{$invoices->lavel_name}}</td>
                                                    <td>{{$invoices->section_name}}</td>
                                                    <td>{{$invoices->student_category}}</td>
                                                    <td>{{$invoices->total_amount}}</td>
                                                    <td>{{$invoices->status == 0 ?'Unpaid':'Paid'}}</td>
                                                    <td><a href="{{ route('admin.invoice.show_by_id',$invoices->id)}}" class="btn btn-sm btn-sm-rounded-three btn-success" style="color:#fff;padding:2px;">Invoice</a></td>
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
        


@endsection

@push('admin_css')
    
@endpush
@push('admin_js')

<!-- data table JS  ============================================ -->
   

    
@endpush
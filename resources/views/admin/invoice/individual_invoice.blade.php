@extends('admin.layouts.app')
@section('admin_title','Individual Invoice | NEDUBD')
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
                            <form method="get" action="{{ route('admin.invoice.individual') }}" >
                                @csrf
                                <div class="form-group-inner">
                                    <div class="row"> 
                                        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                                            <input type="text" class="form-control" name="serch" required >
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
                                                <th data-field="name">Name</th>
                                                <th data-field="email" >Roll</th>
                                                <th data-field="phone" >Class</th>
                                                <th data-field="complete">Section</th>
                                                <th data-field="task">Mobile</th>
                                                <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                          @if($students === NULL)
                                          
                                          @else
                                          <tr>
                                              @foreach($students as $student)
                                                <td>{{ $student->student_name}}</td>
                                                <td>{{ $student->roll}}</td>
                                                <td>{{ $student->lavel->lavel_name}}</td>
                                                <td>{{ $student->section->section_name }}</td>
                                                
                                                <td>{{ $student->student_mobile}}</td>
                                                <td>
                                                <a href="{{ route('admin.invoice.create.individual',$student->id) }}" class="btn btn-sm btn-info">Create Invoice</a>
                                                </td>
                                              @endforeach
                                            </tr>
                                            @endif
                                         
                                            
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
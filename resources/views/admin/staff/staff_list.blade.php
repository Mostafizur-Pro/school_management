@extends('admin.layouts.app')
@section('admin_title','STAFF LIST | NEDUBD')
@section('admin_section')




        <div class="product-sales-area mg-tb-30" style="margin-top:61px; min-height:490px;">
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
                                                
                                                <th data-field="id">ID</th>
                                                <th data-field="name">Name</th>
                                                <th data-field="designation">Designation</th>
                                                <th data-field="department" >Department</th>
                                                <th data-field="phone" >Phone</th>
                                                <th data-field="email" >Email</th>
                                                <th data-field="joining" >Joining Date</th>
                                                <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($staff as $key =>$staffs)
                                            <tr>
                                                
                                                <td>{{ $key + 1 }}</td>
                                                <td >{{ $staffs->staff_full_name}}</td>
                                                {{-- <td >{{ $staffs->id}}</td> --}}
                                                <td >{{ $staffs->designation_name}}</td>
                                                <td >{{ $staffs->department_name}}</td>
                                                <td >{{ $staffs->staff_mobile}}</td>
                                                <td >{{ $staffs->staff_email_address}}</td>
                                                <td >{{ $staffs->staff_date_of_joining}}</td>
            
                                                {{-- <td>
                                                <a href="#"><i class="fa fa-edit"></i></a>
                                                <a href="{{ route('admin.staff.view',$staffs->id) }}"><i class="fa fa-eye"></i></a>
                                                <a href="#"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                </td> --}}

                                                <td>
                                                   
                                                    <a href="{{route('admin.staff.edit',$staffs->id)}}"><i class="fa fa-edit" style="color:green;"></i></a>
                                                    
                                                    <a href="{{ route('admin.staff.view', $staffs->id) }}"><i class="fa fa-eye" style="color:#12c56a;"></i></a>
                                                    {{-- <a href="{{route('admin.student.view',$student->id)}}"><i class="fa fa-eye" style="color:#12c56a;"></i></a> --}}
                                                    
                                                    <a href="{{ route('admin.staff.delete',$staffs->id) }}"><i class="fa fa-trash" aria-hidden="true" style="color:red;"></i></a> 
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
        </div>
        


        @include('admin.layouts.footer')



@endsection

@push('admin_css')
    
@endpush
@push('admin_js')

<!-- data table JS  ============================================ -->
   

    
@endpush
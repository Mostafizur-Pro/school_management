@extends('admin.layouts.app')
@section('admin_title','TEACHERS LIST | NEDUBD')
@section('admin_section')




        <div class="product-sales-area mg-tb-30" style="margin-top:0px; min-height:490px;">
            <div class="container-fluid">
                <div class="row">

                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="sparkline13-list">
                            <div class="sparkline13-hd">
                                <div class="main-sparkline13-hd">
                                    
                                    <center><h1>@lang('home.teachersList')</h1></center>
                                    
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    <div id="toolbar">
                                    <button class="btn btn-md btn-success" data-toggle="modal" data-target="#PrimaryModalhdbgcl">@lang('home.addTeachers')</button>
                                    </div>
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                
                                                <th data-field="id">ID</th>
                                                <th data-field="designation">Name</th>
                                                <th data-field="department" >Responsibility</th>
                                                <th data-field="phone" >Phone</th>
                                                <th data-field="email" >Email</th>
                                                <th data-field="joining" >Joining Date</th>
                                                <th data-field="Status" >Status</th>
                                                <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($teacher as $key => $teachers)
                                            
                                                <tr>
                                                    <td data-field="id"> {{ $key + 1}}</td>
                                                    <td data-field="id"> {{ $teachers->teachers_name}}</td>
                                                    <td data-field="id"> {{ $teachers->responsibility}}</td>
                                                    <td data-field="id"> {{ $teachers->teachers_mobile}}</td>
                                                    <td data-field="id"> {{ $teachers->teachers_email}}</td>
                                                    <td data-field="id"> {{ $teachers->teachers_date_of_joining}}</td>
                                                    <td data-field="id"> {{ $teachers->publication_status == '1'?'Active':'Unactive'}}</td>
                                                    <td>
                                                   @if($teachers->publication_status == '1')
                                                    <!-- <a href="{{route('admin.teacher.edit',$teachers->id)}}"><i class="fa fa-arrow-circle-down" style="font-size: 16px;color:#d517d8;"></i></a> -->
                                                    <a href="{{route('admin.teacher.edit',$teachers->id)}}"><i class="fa fa-edit" style="color:#1239c5;font-size: 15px"></i></a>

                                                    @else
                                                    <!-- <a href="#"><i class="fa fa-arrow-circle-up" style="font-size: 15px;color:#e032c3;"></i></a> -->
                                                    <a href="#"><i class="fa fa-edit" style="color:#1239c5;font-size: 15px"></i></a>
                                                    @endif
                                                    <!-- <a href=""><i class="fa fa-edit" style="color:#1239c5;font-size: 15px"></i></a> -->
                                                    <a href="{{route('admin.teacher.view',$teachers->id)}}"><i class="fa fa-eye" style="color:#12c56a;font-size: 18px"></i></a>
                                                    <a href="{{route('admin.teacher.delete',$teachers->id)}}"><i class="fa fa-trash" aria-hidden="true" style="color:red;"></i></a>
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
        @include('admin.teacher.addForm')



@endsection

@push('admin_css')
    
@endpush
@push('admin_js')

<!-- data table JS  ============================================ -->
   

    
@endpush
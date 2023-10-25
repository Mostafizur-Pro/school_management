@extends('admin.layouts.app')
@section('admin_title','ISSUE | NEDUBD')
@section('admin_section')



        <div class="product-sales-area mg-tb-30" style="margin-top:50px;">
            <div class="container-fluid">
                <div class="row">

            
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h4>Issue Book</h4>
                        <div class="sparkline13-list">
                        <div class="sparkline10-graph">
                                <div class="basic-login-form-ad">
                                <div class="alert alert-danger alert-mg-b" role="alert">
                                    <strong>Note:</strong>  Create New Issue
                                    <a href="{{route('admin.library.issue.create')}}" class="btn btn-sm btn-info pull-right" >New Issue</a>
                                </div>
                                    
                                </div>
                            </div>
                            <div class="sparkline13-graph">
                                <div class="datatable-dashv1-list custom-datatable-overright">
                                    
                                    <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="false" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="false" data-resizable="true" data-cookie="true"
                                        data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
                                        <thead>
                                            <tr>
                                                
                                                
                                                <th>SL</th>
                                                <th>ISBN Number</th>
                                                <th>Book Name</th>
                                                <th>Student Name</th>
                                                <th>Roll</th>
                                                <th>Issue Date</th>
                                                <th>Return Date</th>
                                                <th>Returned</th>
                                                <th data-field="price" data-editable="false">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($bookIssues as $key => $bookIssue)
                                            <tr>
                                                <td>{{$key + 1}}</td>
                                                <td>{{$bookIssue->book_isbn_number}}</td>
                                                <td>{{$bookIssue->book_title}}</td>
                                                <td>{{$bookIssue->student_name}}</td>
                                                <td>{{$bookIssue->roll}}</td>
                                                <td>{{$bookIssue->issue_date}}</td>
                                                <td>{{$bookIssue->return_date}}</td>
                                                <td>
                                                @if($bookIssue->status === '1')
                                                    {{$bookIssue->returned}}
                                                    @else
                                                    Not Return
                                                    @endif
                                                    
                                                </td>
                                                <td>
                                                    @if($bookIssue->status == '1')
                                                    <i class="fa fa-toggle-on" style="font-size:35px;color:green;"></i>
                                                    @else
                                                    <a href="{{ route('admin.library.issue.return',$bookIssue->id)}}"><i class="fa fa-toggle-off" style="font-size:35px;color:red;"></i></a>
                                                    @endif
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
        


@endsection

@push('admin_css')
    
@endpush
@push('admin_js')
   

    
@endpush
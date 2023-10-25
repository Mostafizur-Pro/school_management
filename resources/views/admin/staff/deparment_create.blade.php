@extends('admin.layouts.app')
@section('admin_title','Create Department | NEDUBD')
@section('admin_section')

       

        <div class="product-sales-area mg-tb-30" style="margin-top:61px;">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">@lang('home.departmentCreate')</div>
                            <div class="panel-body">
                                <form action="{{route('admin.department.store')}}" method="post">
                                @csrf
                                    <div class="form-group">
                                      <label for="class_name">Department Name</label>
                                      <input type="text" name="department_name" class="form-control" id="department_name" aria-describedby="department_name">
                                      <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    
                                    
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </form>
                            </div>
                          </div>
                    </div>

                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Department List</div>
                            <div class="panel-body">
                                <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Department Name</th>
                                        <th scope="col">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($department as $key=> $departments)
                                      <tr>
                                        <th scope="row">{{ $key + 1}}</th>
                                        <td>{{ $departments->department_name }}</td>
                                        <td><button type="submit" class="btn btn-primary">Edit</button></td>
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
        @include('admin.layouts.footer')

 



@endsection


@push('admin_js')

<!-- data table JS  ============================================ -->
   

    
@endpush
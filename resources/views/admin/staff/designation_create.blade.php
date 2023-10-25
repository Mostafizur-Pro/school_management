@extends('admin.layouts.app')
@section('admin_title','Create Department | NEDUBD')
@section('admin_section')

       

        <div class="product-sales-area mg-tb-30" style="margin-top:61px;">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Create Designation</div>
                            <div class="panel-body">
                                <form action="{{route('admin.designation.store')}}" method="post">
                                @csrf
                                    <div class="form-group">
                                      <label for="class_name">Designation Name</label>
                                      <input type="text" name="designation_name" class="form-control" id="designation_name" aria-describedby="designation_name">
                                      <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    
                                    
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </form>
                            </div>
                          </div>
                    </div>

                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Designation List</div>
                            <div class="panel-body">
                                <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Designation Name</th>
                                        <th scope="col">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($designation as $key=> $designations)
                                      <tr>
                                        <th scope="row">{{ $key + 1}}</th>
                                        <td>{{ $designations->designation_name }}</td>
                                        <td>edit</td>
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
                            <p>Copyright © 2019. All rights reservedby <a href="https://baitsbd.com">NEDUBD</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>



@endsection
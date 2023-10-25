@extends('admin.layouts.app')
@section('admin_title','Create Class | NEDUBD')
@section('admin_section')

       

        <div class="product-sales-area mg-tb-30" style="margin-top:61px;">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Create Class</div>
                            <div class="panel-body">
                                <form action="{{route('admin.class.store')}}" method="post">
                                @csrf
                                    <div class="form-group">
                                      <label for="class_name">Class Name</label>
                                      <input type="text" name="lavel_name" class="form-control" id="lavel_name" aria-describedby="lavel_name">
                                      <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    <div class="form-group">
                                      <label for="teacher_id">Class Teacher</label>
                                      <select class="form-control"  name="teacher_id" id="teacher_id ">
                                        <option value="">Select Teacher</option>
                                        @foreach($teacher as $teachers)
                                        
                                            <option value="{{ $teachers->id}}">{{ $teachers->teachers_name}}</option>  
                                        @endforeach
                                            </select>
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
                                        <th scope="col">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($lavel as $key=> $lavels)
                                      <tr>
                                        <th scope="row">{{ $key + 1}}</th>
                                        <td>{{ $lavels->lavel_name }}</td>
                                        <td>
                                        @if($lavels->teacher_id == NULL)
                                          
                                        @else
                                        {{ $lavels->teacher->teachers_name }}
                                        @endif
                                          </td>
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
@extends('admin.layouts.app')
@section('admin_title','RACK | NEDUBD')
@section('admin_section')

       

        <div class="product-sales-area mg-tb-30" style="margin-top:61px;">
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Create Rack</div>
                            <div class="panel-body">
                                <form action="{{route('admin.rack.store')}}" method="post">
                                @csrf
                                    <div class="form-group">
                                      <label for="rack_name">Rack Name</label>
                                      <input type="text" name="rack_name" class="form-control" id="rack_name" aria-describedby="rack_name">
                                      <small id="emailHelp" class="form-text text-muted"></small>
                                    </div>
                                    
                                    
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                  </form>
                            </div>
                          </div>
                    </div>

                    <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Section List</div>
                            <div class="panel-body">
                                <table class="table table-bordered">
                                    <thead>
                                      <tr>
                                        <th scope="col">SL</th>
                                        <th scope="col">Rack Name</th>
                                        <th scope="col">Action</th>
                                      </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($rack as $key => $racks)
                                        <tr>
                                        <td>{{$key + 1}}</td>
                                        <td>{{ $racks->rack_name}}</td>
                                        <td></td>
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
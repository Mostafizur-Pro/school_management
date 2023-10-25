@extends('admin.layouts.app')
@section('admin_title','SMS SEND ALL STUDENTS AND TEACHERS | NEDUBD')
@section('admin_section')

       

        <div class="product-sales-area mg-tb-30" >
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">SMS SEND ALL STUDENTS AND TEACHERS</div>
                            <div class="panel-body">
                                <form action="{{route('admin.library.book.store')}}" method="post">
                                     @csrf
                                     <div class="col-md-12">
                                        
                                        <textarea rows="10" cols="68"></textarea>
                                        
                                      </div>


                                      <div class="col-md-4 mb-4" style="margin-top:27px;">
                                      <button type="submit" class="btn btn-primary" >save</button>
                                        
                                      </div>
                                    
                                    
                                  </form>
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
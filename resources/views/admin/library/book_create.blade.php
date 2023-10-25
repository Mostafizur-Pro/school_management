@extends('admin.layouts.app')
@section('admin_title','BOOK ADD | NEDUBD')
@section('admin_section')

       

        <div class="product-sales-area mg-tb-30" >
            <div class="container-fluid">
                <div class="row">

                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">Create Section</div>
                            <div class="panel-body">
                                <form action="{{route('admin.library.book.store')}}" method="post">
                                     @csrf
                                     <div class="col-md-4 mb-4">
                                        <label for="book_title">Book Title</label>
                                        <span style="color: #ea0a0a;">*</span>
                                        <input type="text" class="form-control" id="book_title" name="book_title" required >
                                        
                                      </div>

                                      <div class="col-md-4 mb-4">
                                        <label for="book_edition">Book Edition</label>
                                        <input type="text" class="form-control" id="book_edition" name="book_edition" >
                                        
                                      </div>

                                      <div class="col-md-4 mb-4">
                                        <label for="book_isbn_number">ISBN Number</label>
                                        <input type="text" class="form-control" id="book_isbn_number" name="book_isbn_number" required >
                                        
                                      </div>

                                      <div class="col-md-4 mb-4">
                                        <label for="book_publisher">Publisher</label>
                                        <input type="text" class="form-control" id="book_publisher" name="book_publisher" >
                                        
                                      </div>

                                      <div class="col-md-4 mb-4">
                                        <label for="book_author">Author</label>
                                        <input type="text" class="form-control" id="book_author" name="book_author" >
                                        
                                      </div>

                                      <div class="col-md-4 mb-4">
                                        <label for="book_qty">Qty</label>
                                        <input type="number" class="form-control" id="book_qty" name="book_qty" required>
                                        
                                      </div>

                                      <div class="col-md-4 mb-4">
                                        <label for="book_rack_id">Rack Name</label>
                                            <select class="form-control" id="book_rack_id" name="book_rack_id" id="book_rack_id" required>
                                                <option value="">Select Rack</option>
                                                @foreach($racks as $rack)
                                                <option value="{{ $rack->id}}">{{ $rack->rack_name}}</option>
                                                @endforeach
                                            </select>
                                      </div>

                                      <div class="col-md-4 mb-4">
                                        <label for="book_rack_row">Row Number</label>
                                        <input type="number" class="form-control" id="book_rack_row" name="book_rack_row" required>
                                        
                                      </div>

                                      <div class="col-md-4 mb-4">
                                        <label for="book_rack_coloum">Column Number</label>
                                        <input type="number" class="form-control" id="book_rack_coloum" name="book_rack_coloum" required>
                                        
                                      </div>

                                      <div class="col-md-4 mb-4">
                                        <label for="book_post_date">Post Date</label>
                                        <input type="date" class="form-control" id="book_post_date" name="book_post_date" required>
                                        
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
@extends('admin.layouts.app')
@section('admin_title','BOOK LIST | NEDUBD')
@section('admin_section')



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
                                                
                                                <th>SL</th>
                                                <th>Title</th>
                                                <th>Edition</th>
                                                <th>ISBN</th>
                                                <th>Rack</th>
                                                <th>Rack Row</th>
                                                <th>Rack Coloum</th>
                                                <th>Publisher</th>
                                                <th>Qty</th>
                                                <th>Post Date</th>
                                                <th data-field="price" data-editable="false">Status</th>
                                                <th data-field="action">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($books as $key=> $book)
                                                <tr>
                                                    
                                                    <td>{{$key + 1}}</td>
                                                    <td>{{$book->book_title}}</td>
                                                    <td>{{$book->book_edition}}</td>
                                                    <td>{{$book->book_isbn_number}}</td>
                                                    <td>{{$book->book_rack_id}}</td>
                                                    <td>{{$book->book_rack_row}}</td>
                                                    <td>{{$book->book_rack_coloum}}</td>
                                                    <td>{{$book->book_publisher}}</td>
                                                    <td>{{$book->book_qty}}</td>
                                                    <td>{{$book->book_post_date}}</td>
                                                    <td>{{$book->book_status == 0 ?'Deactive':'Active'}}</td>
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
        </div>
        


@endsection

@push('admin_css')
    
@endpush
@push('admin_js')

<!-- data table JS  ============================================ -->
   

    
@endpush
@extends('admin.layouts.app')
@section('admin_title','Create Class | NEDUBD')
@section('admin_section')

<style type="text/css">
    .table td, .table th{
        padding: 4px;
    }
</style>

        
                     

                           
<div class="col-lg-12 col-md-12 col-sm-8 col-xs-12" style="margin-top: 36px;">
                    
                            <div class="row">
                                <div class="col-md-6">
                    
                                    <div class="col-md-12">
                                        <div class="card">
                                            <!-- <div class="panel-heading">
                                                <h4>Invoice</h4>
                                            </div> -->
                                            <div class="card-body">
                                                <div class="clearfix">
                                                    <div class="a">
                                                        <center>
                                                            <h3>Ayesha Siddika Madrasa</h3>
                                                            <h4>Invoice of , 2019</h4>
                                                        </center>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="float-right m-t-30">
                    
                    
                                                            <p><strong>Date: </strong></p>
                                                            <p><strong>Payment : </strong></p>
                    
                                                        </div>
                                                        <div class="flaot-left m-t-30">
                                                            <address>
                                                                Student Name &nbsp&nbsp: 
                                                                <br>
                                                                Student Roll &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: 
                                                                <br>
                                                                Student Class &nbsp&nbsp&nbsp&nbsp: 
                                                                <br>
                                                                Student Section : 
                                                            </address>
                                                        </div>
                    
                                                    </div><!-- end col -->
                                                </div>
                                                <!-- end row -->
                    
                                                <div class="m-h-50"></div>
                    
                    
                    
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="table-responsive">
                                                            <table class="table m-t-30 table table-bordered">
                                                                <thead>
                                                                <tr>
                                                                    <th>SL</th>
                                                                    <th>Particulars</th>
                                                                    <th>Amount</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                    
                    
                                                                <tr style>
                                                                    <td>1</td>
                                                                    <td>Admission Fee</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Session Charge</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>Tution Fee for</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>Late Fine</td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5</td>
                                                                    <td>Transport Fee</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>6</td>
                                                                    <td>Examination Fee</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>7</td>
                                                                    <td>Re-admission Fee</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>8</td>
                                                                    <td>Board Fee</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>9</td>
                                                                    <td>Transfer Certificat/Testimonial Fee</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10</td>
                                                                    <td>Excersise Book/Stationary Fee</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                    
                                                                    <td colspan="2">Sub-Total</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                    
                                                                    <td colspan="2">Waver/Discount</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                    
                                                                    <td colspan="2">Subtotal After Waver/Discount</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                    
                                                                    <td colspan="2">VAT</td>
                                                                    <td> %</td>
                                                                </tr>
                                                                <tr>
                    
                                                                    <td colspan="2">Total Including Vat</td>
                                                                    <td> Tk</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    
                                                    <div class="col-md-12 col-sm-12">
                                                        <p><b>In Word</b> : Tk Only</p>
                    
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                    
                                                        <div class="col-md-5"style="float: left;text-align: center;">
                                                            <p style="line-height: 0px;">..........................................</p>
                                                           <p>Signature of Accounts</p> 
                                                           
                                                        </div>
                                                        <div class="col-md-6"style="float: right; text-align: center;">
                                                            <p style="line-height: 0px;">..........................................</p>
                                                            <p>Signature of Student</p>
                    
                                                        </div>
                                                        <br>
                                                        <hr>
                                                    </div>
                                                </div>
                                                <br>
                                                
                    
                                                <center>
                                                    
                                                </center>
                    
                                                <hr>
                                                <div class="hidden-print">
                                                    <div class="float-right">
                                                        <a href="javascript:window.print()" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="col-md-12">
                                        <div class="card">
                                            <!-- <div class="panel-heading">
                                                <h4>Invoice</h4>
                                            </div> -->
                                            <div class="card-body">
                                                <div class="clearfix">
                                                    <div class="a">
                                                        <center>
                                                            <h3>Ayesha Siddika Madrasa</h3>
                                                            <h4>Invoice of , 2019</h4>
                                                        </center>
                                                    </div>
                                                </div>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="float-right m-t-30">
                    
                    
                                                            <p><strong>Date: </strong></p>
                                                            <p><strong>Payment : </strong></p>
                    
                                                        </div>
                                                        <div class="flaot-left m-t-30">
                                                            <address>
                                                                Student Name &nbsp&nbsp: 
                                                                <br>
                                                                Student Roll &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp: 
                                                                <br>
                                                                Student Class &nbsp&nbsp&nbsp&nbsp: 
                                                                <br>
                                                                Student Section : 
                                                            </address>
                                                        </div>
                    
                                                    </div><!-- end col -->
                                                </div>
                                                <!-- end row -->
                    
                                                <div class="m-h-50"></div>
                    
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="table-responsive">
                    
                                                            <table class="table m-t-30 table table-bordered">
                                                                <thead>
                                                                <tr>
                                                                    <th>SL</th>
                                                                    <th>Particulars</th>
                                                                    <th>Amount</th>
                                                                </tr>
                                                                </thead>
                                                                <tbody>
                    
                    
                                                                <tr style>
                                                                    <td>1</td>
                                                                    <td>Admission Fee</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>2</td>
                                                                    <td>Session Charge</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>3</td>
                                                                    <td>Tution Fee for</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>4</td>
                                                                    <td>Late Fine</td></td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>5</td>
                                                                    <td>Transport Fee</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>6</td>
                                                                    <td>Examination Fee</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>7</td>
                                                                    <td>Re-admission Fee</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>8</td>
                                                                    <td>Board Fee</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>9</td>
                                                                    <td>Transfer Certificat/Testimonial Fee</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>10</td>
                                                                    <td>Excersise Book/Stationary Fee</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                    
                                                                    <td colspan="2">Sub-Total</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                    
                                                                    <td colspan="2">Waver/Discount</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                    
                                                                    <td colspan="2">Subtotal After Waver/Discount</td>
                                                                    <td></td>
                                                                </tr>
                                                                <tr>
                    
                                                                    <td colspan="2">VAT</td>
                                                                    <td> %</td>
                                                                </tr>
                                                                <tr>
                    
                                                                    <td colspan="2">Total Including Vat</td>
                                                                    <td> Tk</td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    
                                                    <div class="col-md-12 col-sm-12">
                                                        
                    
                    
                                                        <p><b>In Word :</b>Tk Only</p>
                    
                                                        <br>
                                                        <br>
                                                        <br>
                                                        <br>
                    
                                                        <div class="col-md-5"style="float: left;text-align: center;">
                                                            <p style="line-height: 0px;">..........................................</p>
                                                           <p>Signature of Accounts</p> 
                                                           
                                                        </div>
                                                        <div class="col-md-6"style="float: right; text-align: center;">
                                                            <p style="line-height: 0px;">..........................................</p>
                                                            <p>Signature of Teachers</p>
                    
                                                        </div>
                                                        <br>
                                                        
                                                        <hr>
                                                    </div>
                                                </div>
                                                <br>
                                                <div class="col-md-12">
                    
                                                        <center>
                                                          
                                                        </center>
                    
                    
                    
                                                </div>
                    
                                                <hr>
                                                <div class="hidden-print">
                                                    <div class="float-right">
                                                        <a href="javascript:window.print()" class="btn btn-inverse waves-effect waves-light"><i class="fa fa-print"></i></a>
                    
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                    
                                    </div>
                                </div>
                    
                            </div>
                            </div>
                            <!-- end row -->
                    


        


@endsection

@push('admin_css')
    
@endpush
@push('admin_js')

<!-- data table JS  ============================================ -->
   

    
@endpush
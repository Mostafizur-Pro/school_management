@extends('admin.layouts.app')
@section('admin_title','INVOICE CREATE | NEDUBD')
@section('admin_section')

       

        <div class="product-sales-area mg-tb-30" style="margin-top: 39px;">
            <div class="container-fluid"style="margin:0 auto;">
                <div class="row"style="margin:0 auto;">


                    <div class="col-lg-7 col-md-12 col-sm-12 col-xs-12" style="margin-left:21%;">
                        <div class="panel panel-default">
                            <div class="panel-heading">Create Invoice</div>
                            <div class="panel-body">
                                
                              <form  action="{{route('admin.invoice.store.individual')}}" method="post">
                                @csrf

                                <div class="form-group row">
                                  
                                  <div class="col-sm-12">
                                    <center><h3>Name: {{$student->student_name}} | Roll: {{$student->roll}} | Class: {{$student->lavel->lavel_name}} | Section: {{$student->section->section_name}}</h3></center>

                                  </div>
                                </div>
                                
                                

                                <div class="form-group row">
                                  <label for="inputPassword3" class="col-sm-3 col-form-label">Month of Invoice</label>
                                  <div class="col-sm-5">
                                    <select class="form-control" name="month" id="month" required>
                                                    <option value="" selected >Select Month</option>
                                                    <option value="01">January</option>
                                                    <option value="02">February</option>
                                                    <option value="03">March</option>
                                                    <option value="04">April</option>
                                                    <option value="05" >May</option>
                                                    <option value="06" >June</option>
                                                    <option value="07" >July</option>
                                                    <option value="08" >August</option>
                                                    <option value="09" >September</option>
                                                    <option value="10" >October</option>
                                                    <option value="11" >November</option>
                                                    <option value="12" >December</option>
                                    </select>
                                  </div>

                                  <div class="col-sm-4">
                                    <select class="form-control" name="year" id="year" required>
                                      <option value="" selected>Select Year</option>
                                      <option value="2018">2018</option>
                                      <option value="2019">2019</option>
                                      <option value="2020">2020</option>
                                      <option value="2021">2021</option>
                                      <option value="2022">2022</option>
                                      <option value="2023">2023</option>
                                      <option value="2024">2024</option>
                                      <option value="2025">2025</option>
                                    </select>
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="inputEmail3" class="col-sm-3 col-form-label">Admission Fee</label>
                                  <div class="col-sm-9">
                                    <input type="number" class="form-control" name="admission_fee" id="admission_fee" placeholder="tk">
                                  </div>
                                </div>
                                
                               

                                <div class="form-group row">
                                  <label for="inputEmail3" class="col-sm-3 col-form-label">Session Carge</label>
                                  <div class="col-sm-9">
                                    <input type="number" class="form-control" name="session_charge" id="session_charge" placeholder="tk">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="inputEmail3" class="col-sm-3 col-form-label">Tution Fee</label>
                                  <div class="col-sm-9">
                                    <input type="number" class="form-control" id="tution_fee" name="tution_fee" placeholder="tk">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="inputEmail3" class="col-sm-3 col-form-label">Transport Fee</label>
                                  <div class="col-sm-9">
                                    <input type="number" class="form-control" name="transport_fee" id="transport_fee" placeholder="tk">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="inputEmail3" class="col-sm-3 col-form-label">Examination Fee</label>
                                  <div class="col-sm-9">
                                    <input type="number" class="form-control" name="examination_fee" id="examination_fee" placeholder="tk">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="inputEmail3" class="col-sm-3 col-form-label">Re-admission Fee</label>
                                  <div class="col-sm-9">
                                    <input type="number" class="form-control" name="re_admission_fees" id="re_admission_fees" placeholder="tk">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="inputEmail3" class="col-sm-3 col-form-label">Board Fee</label>
                                  <div class="col-sm-9">
                                    <input type="number" class="form-control" name="board_fees" id="board_fees" placeholder="tk">
                                  </div>
                                </div>

                               
                                <div class="form-group row">
                                  <label for="inputEmail3" class="col-sm-3 col-form-label">Transfer/testimonial Fee</label>
                                  <div class="col-sm-9">
                                    <input type="number" class="form-control" name="transfer_testimonial_fees" id="transfer_testimonial_fees" placeholder="tk">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="inputEmail3" class="col-sm-3 col-form-label">Excersise Fee</label>
                                  <div class="col-sm-9">
                                    <input type="number" class="form-control" name="excersise_fees" id="excersise_fees" placeholder="tk">
                                  </div>
                                </div>

                                <div class="form-group row">
                                  <label for="inputEmail3" class="col-sm-3 col-form-label">Vat %</label>
                                  <div class="col-sm-9">
                                    <input type="number" class="form-control" name="vat" id="vat" placeholder="tk">
                                  </div>
                                </div>
                                

                                <div class="form-group row">
                                  <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary">Create Invoice</button>
                                  </div>
                                </div>
                              </form>

                            </div>
                          </div>
                    </div>
                   

                </div>
            </div>
        </div>
        


        



@endsection
{{-- @extends('admin.layouts.app')
@section('admin_title','STUDENT PROFILE | NEDUBD')
@section('admin_section')

<div class="single-pro-review-area mt-t-30 mg-b-15" style="margin-top:50px;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12">
                        
                            
                                <div class="box box-primary">
                                    <div class="box-body box-profile">
                                        
                                        <ul class="list-group list-group-unbordered">
                                            <li class="list-group-item listnoback">
                                                <center>
                                                    <img class="profile-user-img img-responsive img-circle" src="https://demo1.smart-school.in/uploads/student_images/2.jpg" alt="User profile picture">
                                                </center>
                                                    <h3 class="profile-username text-center"> {{ $staff->staff_full_name}} </h3>
                                            </li>
                                            <li class="list-group-item listnoback">
                                                <b>Admission Number</b> <a class="pull-right text-aqua">{{ $staff->staff_full_name}}</a>
                                            </li>
                                            <li class="list-group-item listnoback">
                                                <b>Roll Number</b> <a class="pull-right text-aqua">{{ $staff->staff_full_name}}</a>
                                            </li>
                                            <li class="list-group-item listnoback">
                                                <b>Class</b> <a class="pull-right text-aqua">{{ $staff->staff_full_name}}</a>
                                            </li>
                                            <li class="list-group-item listnoback">
                                                <b>Section</b> <a class="pull-right text-aqua">{{ $staff->staff_full_name}}</a>
                                            </li>
                                            <li class="list-group-item listnoback">
                                                <b>Gender</b> <a class="pull-right text-aqua">{{ $staff->staff_full_name}}</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                
                        
                    </div>

                    
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="product-payment-inner-st res-mg-t-30 analysis-progrebar-ctn">
                            

                            <ul id="myTabedu1" class="nav nav-tabs">
                                <li class="active"><a href="#profile">Profile</a></li>
                                <li class=""><a href="#reviews"> Invoice</a></li>
                                <li class=""><a href="#result"> Result</a></li>
                                <li class=""><a href="#INFORMATION">Update Details</a></li>
                              </ul>


                            <div id="myTabContent" class="tab-content custom-product-edit st-prf-pro">

                                <div class="product-tab-list tab-pane fade active in" id="profile">
                                    <div class="row">
                                        
                                        <div class="panel panel-default "style="margin-top: 10px;margin-left:2%">
                                            <div class="table-responsive list-group">
                                                <table class="table">
                                                  <tr>
                                                      <td >Admission Date</td>
                                                      <td >{{ $staff->staff_full_name}}</td>
                                                  </tr>
                                                  <tr>
                                                      <td >Date Of Birth</td>
                                                      <td >{{ $staff->staff_full_name}}</td>
                                                  </tr>
                                                  <tr>
                                                      <td >Category</td>
                                                      <td >{{ $staff->staff_full_name}}</td>
                                                  </tr>
                                                  <tr>
                                                      <td >Mobile Number</td>
                                                      <td >{{ $staff->staff_full_name}}</td>
                                                  </tr>
                                                  <tr>
                                                      <td >Religion</td>
                                                      <td >{{ $staff->staff_full_name}}</td>
                                                  </tr>
                                                  <tr>
                                                      <td >Email</td>
                                                      <td >{{ $staff->staff_full_name}}</td>
                                                  </tr>
                                                </table>
                                              </div>

                                            
                                          </div>

                                          <div class="panel panel-default" style="margin-top: 10px;margin-left:2%">
                                            <!-- Default panel contents -->
                                            <div class="panel-heading">Address</div>
                                          
                                            <!-- Table -->
                                            <table class="table">
                                                <tr>
                                                    <td>Current Address</td>
                                                    <td>{{ $staff->staff_full_name}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Current Address</td>
                                                    <td>{{ $staff->staff_full_name}}</td>
                                                </tr>
                                            </table>
                                          </div>

                                          <div class="panel panel-default" style="margin-top: 10px;margin-left:2%">
                                            <!-- Default panel contents -->
                                            <div class="panel-heading">Parent / Guardian Details</div>
                                          
                                            <!-- Table -->
                                            <table class="table">
                                                <tr>
                                                    <td>Father Name</td>
                                                    <td>{{ $staff->staff_full_name}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Father Phone</td>
                                                    <td>{{ $staff->staff_full_name}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Father Occupation</td>
                                                    <td>{{ $staff->staff_full_name}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Mother Name</td>
                                                    <td>{{ $staff->staff_full_name}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Mother Phone</td>
                                                    <td>{{ $staff->staff_full_name}}</td>
                                                </tr>
                                                <tr>
                                                    <td>Mother Occupation</td>
                                                    <td>{{ $staff->staff_full_name}}</td>
                                                </tr>
                                            </table>
                                          </div>
                                        
                                    </div>
                                </div>


                                <div class="product-tab-list tab-pane fade" id="reviews">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="chat-discussion" style="height: auto">
                                                    <div class="chat-message">
														<div class="profile-hdtc">
															  <img class="message-avatar" src="img/contact/1.jpg" alt="">
														</div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Michael Smith </a>
                                                            <span class="message-date"> Mon Jan 26 2015 - 18:39:23 </span>
                                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
															</span>
                                                            <div class="m-t-md mg-t-10">
                                                                <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                                                <a class="btn btn-xs btn-success"><i class="fa fa-heart"></i> Love</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-message">
														<div class="profile-hdtc">
															  <img class="message-avatar" src="https://demo1.smart-school.in/uploads/student_images/2.jpg" alt="">
														</div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Karl Jordan </a>
                                                            <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                            <span class="message-content">
																	Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover.
																	</span>
                                                            <div class="m-t-md mg-t-10">
                                                                <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                                                <a class="btn btn-xs btn-default"><i class="fa fa-heart"></i> Love</a>
                                                                <a class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Message</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-message">
														<div class="profile-hdtc">
															  <img class="message-avatar" src="img/contact/3.jpg" alt="">
														</div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Michael Smith </a>
                                                            <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                            <span class="message-content">
																	There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
																	</span>
                                                        </div>
                                                    </div>
                                                    <div class="chat-message">
														<div class="profile-hdtc">
															  <img class="message-avatar" src="img/contact/4.jpg" alt="">
														</div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Alice Jordan </a>
                                                            <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                            <span class="message-content">
																	All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
																		It uses a dictionary of over 200 Latin words.
																	</span>
                                                            <div class="m-t-md mg-t-10">
                                                                <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                                                <a class="btn btn-xs btn-warning"><i class="fa fa-eye"></i> Nudge</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-message">
														<div class="profile-hdtc">
															  <img class="message-avatar" src="img/contact/1.jpg" alt="">
														</div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Mark Smith </a>
                                                            <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                            <span class="message-content">
																	All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
																		It uses a dictionary of over 200 Latin words.
																	</span>
                                                            <div class="m-t-md mg-t-10">
                                                                <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                                                <a class="btn btn-xs btn-success"><i class="fa fa-heart"></i> Love</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-message">
														<div class="profile-hdtc">
															  <img class="message-avatar" src="img/contact/2.jpg" alt="">
														</div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Karl Jordan </a>
                                                            <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                            <span class="message-content">
																	Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover.
																	</span>
                                                            <div class="m-t-md mg-t-10">
                                                                <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                                                <a class="btn btn-xs btn-default"><i class="fa fa-heart"></i> Love</a>
                                                                <a class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Message</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-message">
														<div class="profile-hdtc">
															  <img class="message-avatar" src="img/contact/3.jpg" alt="">
														</div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Michael Smith </a>
                                                            <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                            <span class="message-content">
																	There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
																	</span>
                                                        </div>
                                                    </div>
                                                    <div class="chat-message">
														<div class="profile-hdtc">
															  <img class="message-avatar" src="img/contact/4.jpg" alt="">
														</div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Alice Jordan </a>
                                                            <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                            <span class="message-content">
																	All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
																		It uses a dictionary of over 200 Latin words.
																	</span>
                                                            <div class="m-t-md mg-t-10">
                                                                <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                                                <a class="btn btn-xs btn-default"><i class="fa fa-heart"></i> Love</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="product-tab-list tab-pane fade" id="result">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="chat-discussion" style="height: auto">
                                                    <div class="chat-message">
														<div class="profile-hdtc">
															  <img class="message-avatar" src="img/contact/1.jpg" alt="">
														</div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Michael Smith </a>
                                                            <span class="message-date"> Mon Jan 26 2015 - 18:39:23 </span>
                                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.
															</span>
                                                            <div class="m-t-md mg-t-10">
                                                                <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                                                <a class="btn btn-xs btn-success"><i class="fa fa-heart"></i> Love</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-message">
														<div class="profile-hdtc">
															  <img class="message-avatar" src="img/contact/2.jpg" alt="">
														</div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Karl Jordan </a>
                                                            <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                            <span class="message-content">
																	Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover.
																	</span>
                                                            <div class="m-t-md mg-t-10">
                                                                <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                                                <a class="btn btn-xs btn-default"><i class="fa fa-heart"></i> Love</a>
                                                                <a class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Message</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-message">
														<div class="profile-hdtc">
															  <img class="message-avatar" src="img/contact/3.jpg" alt="">
														</div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Michael Smith </a>
                                                            <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                            <span class="message-content">
																	There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
																	</span>
                                                        </div>
                                                    </div>
                                                    <div class="chat-message">
														<div class="profile-hdtc">
															  <img class="message-avatar" src="img/contact/4.jpg" alt="">
														</div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Alice Jordan </a>
                                                            <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                            <span class="message-content">
																	All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
																		It uses a dictionary of over 200 Latin words.
																	</span>
                                                            <div class="m-t-md mg-t-10">
                                                                <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                                                <a class="btn btn-xs btn-warning"><i class="fa fa-eye"></i> Nudge</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-message">
														<div class="profile-hdtc">
															  <img class="message-avatar" src="img/contact/1.jpg" alt="">
														</div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Mark Smith </a>
                                                            <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                            <span class="message-content">
																	All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
																		It uses a dictionary of over 200 Latin words.
																	</span>
                                                            <div class="m-t-md mg-t-10">
                                                                <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                                                <a class="btn btn-xs btn-success"><i class="fa fa-heart"></i> Love</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-message">
														<div class="profile-hdtc">
															  <img class="message-avatar" src="img/contact/2.jpg" alt="">
														</div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Karl Jordan </a>
                                                            <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                            <span class="message-content">
																	Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover.
																	</span>
                                                            <div class="m-t-md mg-t-10">
                                                                <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                                                <a class="btn btn-xs btn-default"><i class="fa fa-heart"></i> Love</a>
                                                                <a class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i> Message</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="chat-message">
														<div class="profile-hdtc">
															  <img class="message-avatar" src="img/contact/3.jpg" alt="">
														</div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Michael Smith </a>
                                                            <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                            <span class="message-content">
																	There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.
																	</span>
                                                        </div>
                                                    </div>
                                                    <div class="chat-message">
														<div class="profile-hdtc">
															  <img class="message-avatar" src="img/contact/4.jpg" alt="">
														</div>
                                                        <div class="message">
                                                            <a class="message-author" href="#"> Alice Jordan </a>
                                                            <span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>
                                                            <span class="message-content">
																	All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.
																		It uses a dictionary of over 200 Latin words.
																	</span>
                                                            <div class="m-t-md mg-t-10">
                                                                <a class="btn btn-xs btn-default"><i class="fa fa-thumbs-up"></i> Like </a>
                                                                <a class="btn btn-xs btn-default"><i class="fa fa-heart"></i> Love</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="product-tab-list tab-pane fade" id="INFORMATION">
                                    <div class="row">
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="review-content-section">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <input name="number" type="text" class="form-control" placeholder="First Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Last Name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Address">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Date of Birth">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Department">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="number" class="form-control" placeholder="Pincode">
                                                        </div>
                                                        <div class="file-upload-inner ts-forms">
                                                            <div class="input prepend-big-btn">
                                                                <label class="icon-right" for="prepend-big-btn">
																		<i class="fa fa-download"></i>
																	</label>
                                                                <div class="file-button">
                                                                    Browse
                                                                    <input type="file" onchange="document.getElementById('prepend-big-btn').value = this.value;">
                                                                </div>
                                                                <input type="text" id="prepend-big-btn" placeholder="no file selected">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group sm-res-mg-15 tbpf-res-mg-15">
                                                            <input type="text" class="form-control" placeholder="Description">
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control">
																<option>Select Gender</option>
																<option>Male</option>
																<option>Female</option>
															</select>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control">
																	<option>Select country</option>
																	<option>India</option>
																	<option>Pakistan</option>
																	<option>Amerika</option>
																	<option>China</option>
																	<option>Dubai</option>
																	<option>Nepal</option>
																</select>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control">
																	<option>Select state</option>
																	<option>Gujarat</option>
																	<option>Maharastra</option>
																	<option>Rajastan</option>
																	<option>Maharastra</option>
																	<option>Rajastan</option>
																	<option>Gujarat</option>
																</select>
                                                        </div>
                                                        <div class="form-group">
                                                            <select class="form-control">
																	<option>Select city</option>
																	<option>Surat</option>
																	<option>Baroda</option>
																	<option>Navsari</option>
																	<option>Baroda</option>
																	<option>Surat</option>
																</select>
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Website URL">
                                                        </div>
                                                        <input type="number" class="form-control" placeholder="Mobile no.">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-12">
                                                        <div class="payment-adress mg-t-15">
                                                            <button type="submit" class="btn btn-primary waves-effect waves-light mg-b-15">Submit</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection --}}



@extends('admin.layouts.app')
@section('admin_title', 'Staff Profile | NEDUBD')
@section('admin_section')

<div class="product-sales-area mg-tb-30" style="margin-top: 61px; min-height: 490px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Staff Profile</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                            <table class="table">
                                <tbody>
                                    
                                    <tr>
                                        <td>ID:</td>
                                        <td>{{ $staff->id }}</td>
                                    </tr>
                                    <tr>
                                        <td>Name:</td>
                                        <td>{{ $staff->staff_full_name }}</td>
                                    </tr>
                                    <tr>
                                        <td>Designation:</td>
                                        <td>
                                            {{ $staff->designation_name }}
                                            </td>
                                    </tr>
                                    <tr>
                                        <td>Department:</td>
                                        <td>{{ $staff->department_name }}</td>
                                     
                                    </tr>
                                    <tr>
                                        <td>Phone:</td>
                                        <td>{{ $staff->staff_mobile }}</td>
                                    </tr>
                                    <tr>
                                        <td>Email:</td>
                                        <td>{{ $staff->staff_email_address }}</td>
                                    </tr>
                                    <tr>
                                        <td>Joining Date:</td>
                                        <td>{{ $staff->staff_date_of_joining }}</td>
                                    </tr>
                                    <!-- Add more details here based on your staff information -->
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('admin.layouts.footer')

@endsection

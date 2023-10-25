<!DOCTYPE html>
<html class="no-js" lang="en-US">
    <head>
		<!-- metas -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="School Responsive HTML5 Template">
		
		<!-- Title -->
        <title>NEDUBD SCHOOL</title>
		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="{{asset('fontend')}}/assets/images/favicon.png" />
		<!-- Stylesheet -->
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{asset('fontend')}}/assets/css/bootstrap.min.css">
		<!-- Fontawesome CSS -->
		<link rel="stylesheet" href="{{asset('fontend')}}/assets/css/fontawesome.min.css">
		<!-- normalize -->
		<link rel="stylesheet" href="{{asset('fontend')}}/assets/css/normalize.css">
		<!-- Jquery Ul -->
		<link rel="stylesheet" href="{{asset('fontend')}}/assets/css/jquery-ui.min.css">
		<!-- Jquery Ui Theme -->
		<link rel="stylesheet" href="{{asset('fontend')}}/assets/css/jquery-ui.theme.min.css">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="{{asset('fontend')}}/assets/css/magnific-popup.css">
		<!-- Owl Carousel -->
		<link rel="stylesheet" href="{{asset('fontend')}}/assets/css/owl.carousel.min.css">
        <!-- Main Stylesheet --> 
        <link rel="stylesheet" href="{{asset('fontend')}}/assets/css/style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="{{asset('fontend')}}/assets/css/responsive.css">
    </head>
    <body>
        <!--[if IE]>
    		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  		<![endif]-->

        <!-- Start header Area -->
        <header class="header-area">
			<div class="header-top-area">
				<div class="container">
					<div class="row">
						<div class="col-xl-8">
							<div class="header-top-left-menu">
								<ul>
									<li><a href="#"><i class="fas fa-envelope"></i>bis@gmail.com</a></li>
									<li><a href="#"><i class="fas fa-phone"></i>+8804478777911</a></li>
								</ul>
							</div>
                        </div>
						<div class="col-xl-4">
							<div class="header-top-right-admin">
								<ul>
                                
                                    <li><a href="#">mail</a></li>
                                    <a href="{{ route('login') }}">Login</a>
                                    
								</ul>
							</div>
                        </div>
                        
					</div>
				</div>
			</div>
			<div class="header-bottom-area">
				<div class="container">
					<div class="row align-item-center">
						<div class="col-xl-8">
							<div class="school-logo">
								<a href="#">
									<img src="{{asset('fontend')}}/assets/images/logo/logo-2.png" alt="School Logo">
								</a>
							</div>
						</div>
						<div class="col-xl-4">
							<div class="social-icon-area">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram"></i></a></li>
									<li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="header-main-menu-area">
				<div class="container">
					<div class="row align-item-center">
						<div class="col-xl-9">
							<div class="header-manu-content">
								<ul>
									<li><a href="#">Home</a></li>
									<li><a href="#">Our School</a></li>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Admission</a>
										<ul class="school-dropdown">
											<li><a href="#">dropdown Item 01</a></li>
											<li><a href="#">dropdown Item 01</a></li>
											<li><a href="#">dropdown Item 01</a></li>
											<li><a href="#">dropdown Item 01</a></li>
										</ul>
									</li>
									<li><a href="#">Students</a></li>
									<li><a href="#">Result</a></li>
									<li><a href="#">Notice</a></li>
									<li><a href="#">Contact Us</a></li>
								</ul>
							</div>
						</div>
						<div class="col-xl-3">
							<div class="manu-search-box">
								<input type="text" placeholder="Search for anything...">
								<a href="#"><i class="fas fa-search"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</header>
		<!-- End Header Area -->
		<!--start news area-->
		<div class="news-area">
			<div class="container">
				<div class="news-item">
					<div class="trending">
						<h2>Notice</h2>
					</div>
					<div class="TickerNews" id="T1">
						<div class="ti_wrapper">
							<div class="ti_slide">
								<div class="ti_content">
									<div class="ti_news"><a target="_blank" href="{{asset('fontend')}}/assets/files/notice.pdf"><i class="fa fa-angle-right" aria-hidden="true"></i>Top 10 Incredible Technologies You Can Use</a></div>
									<div class="ti_news"><a target="_blank" href="{{asset('fontend')}}/assets/files/notice.pdf"><i class="fa fa-angle-right" aria-hidden="true"></i>They call it Our Country for nothing</a></div>
									<div class="ti_news"><a target="_blank" href="{{asset('fontend')}}/assets/files/notice.pdf"><i class="fa fa-angle-right" aria-hidden="true"></i>They call it Our Country for nothing</a></div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--end news area-->
		<!-- Start Middle Content Area -->
		<div class="middle-content-area">
			<div class="container">
				<div class="row">
					<!-- Start Left Area -->
					<div class="col-xl-8 col-lg-8">
						<div class="left-area">
							<div class="row">
								<div class="col-xl-12">
									<div class="slider-area owl-carousel owl-theme">
										<div class="slider-item">
											<img src="{{asset('fontend')}}/assets/images/slider/slider4.jpg">
										</div>
										<div class="slider-item">
											<img src="{{asset('fontend')}}/assets/images/slider/slider5.jpg">
										</div>
										<div class="slider-item">
											<img src="{{asset('fontend')}}/assets/images/slider/slider6.jpg">
										</div>
										<div class="slider-item">
											<img src="{{asset('fontend')}}/assets/images/slider/slider7.jpg">
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-12">
									<div class="school-info">
										<h3>Welcome to Our Schools</h3>
										<p>Bangladesh International School is a child-friendly school that remains at the top tier among the English medium schools in Bangladesh. It is a school that provides a warm and nurturing atmosphere for its students so that they are happy and confident learners. It provides quality educational opportunities to its students, encouraging them to strive for excellence in a balanced and positive manner.Bangladesh International School is registered with Pearsons Edexcel, UK and is a partner school of the British Council, Dhaka. Bangladesh International School is also registered with the Ministry of Education, Bangladesh.</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-12">
									<div class="head_teacher">
										<div class="teacher_title">
											<div class="title">
												<h2>Head Teacher</h2>
											</div>
										</div>
										<div class="teacher-information">
											<div class="teacher_img-area">
												<img src="{{asset('fontend')}}/assets/images/teacher/1.jpg" alt="teacher">
											</div>
											<div class="teacher-content">
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Excepteur sint occaecat Excepteur sint occaecat cupidatat non proident Bangladesh International School.</p>
											</div>
										</div>
										<div class="teacher_info">
											<ul>
												<li>Sadikur Rahman Sajib</li>
												<li>Head Teacher</li>
												<li>Bangladesh International School</li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-12">
									<div class="recent_post_title">
										<h4>Programs</h4>
									</div>
								</div>
								<div class="col-xl-6 col-md-6">
									<div class="post_single_item">
										<img src="{{asset('fontend')}}/assets/images/slider/program1.jpg" alt="post_image">
										<ul>
											<li><a href="#"><i class="fas fa-calendar-alt"></i>6-5-2019</a></li>
											<li><a href="#"><i class="fas fa-user"></i>admin</a></li>
										</ul>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div>
								<div class="col-xl-6 col-md-6">
									<div class="post_single_item">
										<img src="{{asset('fontend')}}/assets/images/slider/program2.jpg" alt="post_image">
										<ul>
											<li><a href="#"><i class="fas fa-calendar-alt"></i>6-5-2019</a></li>
											<li><a href="#"><i class="fas fa-user"></i>admin</a></li>
										</ul>
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-12">
									<div class="head_teacher online-application-form">
										<div class="teacher_title">
											<div class="title">
												<h2>Online Admission Application Form</h2>
											</div>
										</div>
										<div class="student-online-application-form">
											<form>
												<div class="form-row">
													<div class="form-group col-md-6">
													<label for="inputEmail4">Frist Name</label>
													<input type="text" class="form-control" id="inputEmail4" placeholder="First Name">
													</div>
													<div class="form-group col-md-6">
													<label for="inputPassword4">Last Name</label>
													<input type="text" class="form-control" id="inputPassword4" placeholder="Last Name">
													</div>
												</div>
												<div class="form-row">
													<div class="form-group col-md-6">
														<label for="exampleFormControlSelect1">Gender</label>
														<select class="form-control" id="exampleFormControlSelect1">
														  <option>Male</option>
														  <option>Female</option>
														</select>
													  </div>
													  <div class="form-group col-md-6">
														<label for="exampleFormControlSelect1">Date of Birth</label>
														<input class="form-control" type="date">
													  </div>
												</div>
												<div class="form-group">
													<label for="inputAddress">Address</label>
													<input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
												</div>
												<div class="form-group">
													<label for="inputAddress2">Address 2</label>
													<input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
												</div>
												<div class="form-row">
													<div class="form-group col-md-6">
													<label for="inputCity">City</label>
													<input type="text" class="form-control" id="inputCity">
													</div>
													<div class="form-group col-md-4">
													<label for="inputState">State</label>
													<select id="inputState" class="form-control">
														<option selected>Choose...</option>
														<option>...</option>
													</select>
													</div>
													<div class="form-group col-md-2">
													<label for="inputZip">Zip</label>
													<input type="text" class="form-control" id="inputZip">
													</div>
												</div>
												<div class="form-group">
													<div class="form-check">
													<input class="form-check-input" type="checkbox" id="gridCheck">
													<label class="form-check-label" for="gridCheck">
														Check me out
													</label>
													</div>
												</div>
												<button type="submit" class="btn btn-primary online-form-btn">Submit Application</button>
												</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Start Sidebar Area -->
					<div class="col-xl-4 col-lg-4">
						<div class="sidebar-area">
							
							<div class="row">
								<div class="col-xl-12">
									<div class="notice">
										<div class="title">
											<h2>Notice</h2>
										</div>
										<div class="notice-item demo1">
											<ul class="notice-title-item">
												<!-- Single Notice Item -->
												<li>
													<h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
													<span class="notice-post-download">
														<p><i class="fas fa-calendar-alt"></i>20 Feb, 2020</p>
														<a target="	_blank" href="{{asset('fontend')}}/assets/files/notice.pdf"><i class="fas fa-download"></i>Download</a>
													</span>
												</li>
												<!-- Single Notice Item -->
												<li>
													<h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
													<span class="notice-post-download">
														<p><i class="fas fa-calendar-alt"></i>20 Feb, 2020</p>
														<a target="	_blank" href="{{asset('fontend')}}/assets/files/notice.pdf"><i class="fas fa-download"></i>Download</a>
													</span>
												</li>
												<!-- Single Notice Item -->
												<li>
													<h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
													<span class="notice-post-download">
														<p><i class="fas fa-calendar-alt"></i>20 Feb, 2020</p>
														<a target="	_blank" href="{{asset('fontend')}}/assets/files/notice.pdf"><i class="fas fa-download"></i>Download</a>
													</span>
												</li>
												<!-- Single Notice Item -->
												<li>
													<h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
													<span class="notice-post-download">
														<p><i class="fas fa-calendar-alt"></i>20 Feb, 2020</p>
														<a target="	_blank" href="{{asset('fontend')}}/assets/files/notice.pdf"><i class="fas fa-download"></i>Download</a>
													</span>
												</li>
												<!-- Single Notice Item -->
												<li>
													<h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
													<span class="notice-post-download">
														<p><i class="fas fa-calendar-alt"></i>20 Feb, 2020</p>
														<a target="	_blank" href="{{asset('fontend')}}/assets/files/notice.pdf"><i class="fas fa-download"></i>Download</a>
													</span>
												</li>
											</ul>
										</div>
									</div>
								</div>
							</div>	
							<div class="row">
								<div class="col-xl-12">
									<div class="usefull_links">
										<div class="title">
											<h2>Usefull Links</h2>
										</div>
										<div class="links-item">
											<ul>
												<li><a href="#"><i class="fas fa-caret-right"></i>Education Board Result</a></li>
												<li><a href="#"><i class="fas fa-caret-right"></i>Dc Office</a></li>
												<li><a href="#"><i class="fas fa-caret-right"></i>Dinajpur Education Board</a></li>
												<li><a href="#"><i class="fas fa-caret-right"></i>Directorate of Primary Education</a>
												<li><a href="#"><i class="fas fa-caret-right"></i>Ministry of Education</a></li>
												<li><a href="#"><i class="fas fa-caret-right"></i>Teachers Portal</a></li>
												<li><a href="#"><i class="fas fa-caret-right"></i>National Curriculum and Texbook Board</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-xl-12">
									<div class="usefull_links">
										<div class="title">
											<h2>Explore</h2>
										</div>
										<div class="links-item">
											<ul>
												<li><a href="#"><i class="fas fa-caret-right"></i>Online Magazine 20182-19</a></li>
												<li><a href="#"><i class="fas fa-caret-right"></i>Use of MMC Monitoring App</a></li>
												<li><a href="#"><i class="fas fa-caret-right"></i>IT Club</a></li>
												<li><a href="#"><i class="fas fa-caret-right"></i>Science Club</a></li>
												<li><a href="#"><i class="fas fa-caret-right"></i>Photography Club</a></li>
											</ul>
										</div>
									</div>
								</div>
							</div>
							<!-- Facebook Page Link -->
							<div class="row">
								<div class="col-xl-12">
									<div class="title">
										<h2>Facebook Page</h2>
									</div>
									<div class="facebool-page-content">
										<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Facc.bd.1960%2F&tabs=timeline%2Cevents%2Cmessages&width=350&height=600&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
									</div>
								</div>
							</div>
							<div class="calendar-wrapper">
							<button id="btnPrev" type="button">Prev</button>
							<button id="btnNext" type="button">Next</button>
							<div id="divCal"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Start Middle Content Area -->
		<!-- Start Footer Area -->
		<div class="footer-area">
			<div class="footer-top-area">
				<div class="container">
					<div class="row">
						<div class="col-xl-4 col-lg-4 col-md-6">
							<div class="logo_content_widg">
								<div class="logo_content_f">
									<img src="{{asset('fontend')}}/assets/images/logo/logo.png" alt="logo">
									<h2>Bangladesh International School</h2>
								</div>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. </p>
								<ul>
									<li><a href="#"><i class="fas fa-envelope"></i>bis@gmail.com</a></li>
									<li><a href="#"><i class="fas fa-phone"></i>+8804478777911</a></li>
									<li><a href="#"><i class="fas fa-map-marker-alt"></i>Mirpur, Dhaka, Bangladesh</a></li>
								</ul>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6">
							<div class="map-area">
								<h3>Our Map</h3>
								<iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14599.57695452796!2d90.3656686!3d23.8223596!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1582184744442!5m2!1sen!2sbd" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>
						<div class="col-xl-4 col-lg-4 col-md-6">
							<div class="footer-gallery">
								<h3>Recent Gallery</h3>
								<div class="footer-img">
									<div class="footer-gallery-item">
										<img src="{{asset('fontend')}}/assets/images/gallery/1.jpg" alt="gallery">
										<div class="overlay">
											<div class="img-overlay">
												<a class="popup" href="assets/images/gallery/1.jpg"><i class="fas fa-search"></i></a>
											</div>
										</div>
									</div>
									<div class="footer-gallery-item">
										<img src="{{asset('fontend')}}/assets/images/gallery/2.jpg" alt="gallery">
										<div class="overlay">
											<div class="img-overlay">
												<a class="popup" href="{{asset('fontend')}}/assets/images/gallery/2.jpg"><i class="fas fa-search"></i></a>
											</div>
										</div>
									</div>
									<div class="footer-gallery-item">
										<img src="{{asset('fontend')}}/assets/images/gallery/3.png" alt="gallery">
										<div class="overlay">
											<div class="img-overlay">
												<a class="popup" href="{{asset('fontend')}}/assets/images/gallery/3.png"><i class="fas fa-search"></i></a>
											</div>
										</div>
									</div>
									<div class="footer-gallery-item">
										<img src="{{asset('fontend')}}/assets/images/gallery/4.png" alt="gallery">
										<div class="overlay">
											<div class="img-overlay">
												<a class="popup" href="{{asset('fontend')}}/assets/images/gallery/4.png"><i class="fas fa-search"></i></a>
											</div>
										</div>
									</div>
									<div class="footer-gallery-item">
										<img src="{{asset('fontend')}}/assets/images/gallery/5.png" alt="gallery">
										<div class="overlay">
											<div class="img-overlay">
												<a class="popup" href="{{asset('fontend')}}/assets/images/gallery/5.png"><i class="fas fa-search"></i></a>
											</div>
										</div>
									</div>
									<div class="footer-gallery-item">
										<img src="{{asset('fontend')}}/assets/images/gallery/5.png" alt="gallery">
										<div class="overlay">
											<div class="img-overlay">
												<a class="popup" href="{{asset('fontend')}}/assets/images/gallery/5.png"><i class="fas fa-search"></i></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom-area">
				<div class="container">
					<div class="row align-item-center">
						<div class="col-xl-8 col-md-6">
							<div class="copyright-area">
								<p class="copywrite">Copyright &copy; 2020. All Rights Reserved. Developed by <a target="_blank" href="https://baitsbd.com/">BAITS</a></p>
							</div>
						</div>
						<div class="col-xl-4 col-md-6">
							<div class="footer-icon social-icon">
								<ul>
									<li><a href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i></a></li>
									<li><a href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i></a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Footer Area -->
		
		<!-- Js Files -->
		<!-- modernizr -->
        <script src="{{asset('fontend')}}/assets/js/vendor/modernizr-3.8.0.min.js"></script>
		<!-- jQuery -->
        <script src="{{asset('fontend')}}/assets/js/vendor/jquery-3.4.1.min.js"></script>
		<!-- Bootstrap Popper -->
        <script src="{{asset('fontend')}}/assets/js/popper.js"></script>
		<!-- Bootstrap -->
		<script src="{{asset('fontend')}}/assets/js/bootstrap.min.js"></script>
		<!-- jquery ui -->
		<script src="{{asset('fontend')}}/assets/js/jquery-ui.min.js"></script>
		<!-- tickerNews -->
		<script src="{{asset('fontend')}}/assets/js/jquery.tickerNews.min.js"></script>
		<!-- Magnific Popup -->
		<script src="{{asset('fontend')}}/assets/js/jquery.magnific-popup.min.js"></script>
		<!-- Owl Carousel -->
		<script src="{{asset('fontend')}}/assets/js/owl.carousel.min.js"></script>
		
		<!-- Custom Scripts -->
        <script src="{{asset('fontend')}}/assets/js/custom.js"></script>
    </body>
</html>
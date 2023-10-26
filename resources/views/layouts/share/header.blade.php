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
						<a href="/">
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
							
							<li><a href="/">Home</a></li>
							<li><a href="#">Our School</a></li>
							<li><a href="{{ url('/about') }}">About Us</a></li>
							
							<li><a href="#">Admission</a>
								<ul class="school-dropdown">
									<li><a href="/admission/admission-notice">Admission Notice</a></li>
									<li><a href="/admission/admission-prospectus">Admission Prospectus</a></li>
									<li><a href="/admission/online-registration">Online Registration</a></li>
									<li><a href="/admission/admission-result">Admission Result</a></li>
								</ul>
							</li>
							<li><a href="#">Pages</a>
								<ul class="school-dropdown">
									<li><a href="#">Teachers</a></li>
									<li><a href="#">Students</a></li>
									<li><a href="#">Admit Card</a></li>
									<li><a href="#">Exam Result</a></li>
									<li><a href="#">Exam Routine</a></li>
									<li><a href="faq">FAQ</a></li>
								</ul>
							</li>
							<!-- <li><a href="#">Students</a></li> -->
							<!-- <li><a href="#">Result</a></li> -->
							<li><a href="{{url('/notice')}}">Notice</a></li>
							<li><a href="{{url('/contact')}}">Contact Us</a></li>
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
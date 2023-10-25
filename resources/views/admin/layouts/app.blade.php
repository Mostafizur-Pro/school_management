<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>@yield('admin_title')</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon                ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts           ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS          ============================================ -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Bootstrap CSS          ============================================ -->
    <link rel="stylesheet" href="{{asset('admin/')}}/css/font-awesome.min.css">
    <!-- owl.carousel CSS       ============================================ -->
    <link rel="stylesheet" href="{{asset('admin/')}}/css/owl.carousel.css">
    <link rel="stylesheet" href="{{asset('admin/')}}/css/owl.theme.css">
    <link rel="stylesheet" href="{{asset('admin/')}}/css/owl.transitions.css">
    <!-- animate CSS            ============================================ -->
    <link rel="stylesheet" href="{{asset('admin/')}}/css/animate.css">
    <!-- normalize CSS          ============================================ -->
    <link rel="stylesheet" href="{{asset('admin/')}}/css/normalize.css">
    <!-- meanmenu icon CSS      ============================================ -->
    <link rel="stylesheet" href="{{asset('admin/')}}/css/meanmenu.min.css">
    <!-- main CSS               ============================================ -->
    <link rel="stylesheet" href="{{asset('admin/')}}/css/main.css">
    <!-- educate icon CSS       ============================================ -->
    <link rel="stylesheet" href="{{asset('admin/')}}/css/educate-custon-icon.css">
    <!-- morrisjs CSS           ============================================ -->
    <link rel="stylesheet" href="{{asset('admin/')}}/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS   ============================================ -->
    <link rel="stylesheet" href="{{asset('admin/')}}/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS          ============================================ -->
    <link rel="stylesheet" href="{{asset('admin/')}}/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="{{asset('admin/')}}/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS           ============================================ -->
    <link rel="stylesheet" href="{{asset('admin/')}}/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="{{asset('admin/')}}/css/calendar/fullcalendar.print.min.css">

    <link rel="stylesheet" href="{{asset('admin/')}}/css/datapicker/datepicker3.css">
    <!-- style CSS              ============================================ -->
    <link rel="stylesheet" href="{{asset('admin/')}}/style.css">
    <!-- responsive CSS         ============================================ -->
    <link rel="stylesheet" href="{{asset('admin/')}}/css/responsive.css">
    <!-- modernizr JS           ============================================ -->
    <script src="{{asset('admin/')}}/js/vendor/modernizr-2.8.3.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    <script src="{{asset('admin/')}}/js/vendor/jquery-1.12.4.min.js"></script>

    <!-- data table -->
    <link rel="stylesheet" href="{{asset('admin/')}}/css/data-table/bootstrap-table.css">
    <link rel="stylesheet" href="{{asset('admin/')}}/css/data-table/bootstrap-editable.css">
    <link rel="stylesheet" href="{{asset('admin/')}}/css/modals.css">
    @stack('admin_css')
</head>

<body>
    <!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
    <!-- Start Left menu area -->
    @include('admin.layouts.leftsidebar')
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper" style="background:#ececec;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            @include('admin.layouts.topbar')
            <!-- Mobile Menu start -->
            <div class="mobile-menu-area">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="mobile-menu">
                                <nav id="dropdown">
                                    <ul class="mobile-menu-nav">
                                        <li><a data-toggle="collapse" data-target="#Charts" href="#">Home <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul class="collapse dropdown-header-top">
                                                <li><a href="index.html">Dashboard v.1</a></li>
                                                <li><a href="index-1.html">Dashboard v.2</a></li>
                                                <li><a href="index-3.html">Dashboard v.3</a></li>
                                                <li><a href="analytics.html">Analytics</a></li>
                                                <li><a href="widgets.html">Widgets</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="events.html">Event</a></li>
                                        <li><a data-toggle="collapse" data-target="#demoevent" href="#">Professors <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demoevent" class="collapse dropdown-header-top">
                                                <li><a href="all-professors.html">All Professors</a>
                                                </li>
                                                <li><a href="add-professor.html">Add Professor</a>
                                                </li>
                                                <li><a href="edit-professor.html">Edit Professor</a>
                                                </li>
                                                <li><a href="professor-profile.html">Professor Profile</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demopro" href="#">Students <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demopro" class="collapse dropdown-header-top">
                                                <li><a href="all-students.html">All Students</a>
                                                </li>
                                                <li><a href="add-student.html">Add Student</a>
                                                </li>
                                                <li><a href="edit-student.html">Edit Student</a>
                                                </li>
                                                <li><a href="student-profile.html">Student Profile</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#democrou" href="#">Courses <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="democrou" class="collapse dropdown-header-top">
                                                <li><a href="all-courses.html">All Courses</a>
                                                </li>
                                                <li><a href="add-course.html">Add Course</a>
                                                </li>
                                                <li><a href="edit-course.html">Edit Course</a>
                                                </li>
                                                <li><a href="course-profile.html">Courses Info</a>
                                                </li>
                                                <li><a href="course-payment.html">Courses Payment</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demolibra" href="#">Library <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demolibra" class="collapse dropdown-header-top">
                                                <li><a href="library-assets.html">Library Assets</a>
                                                </li>
                                                <li><a href="add-library-assets.html">Add Library Asset</a>
                                                </li>
                                                <li><a href="edit-library-assets.html">Edit Library Asset</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demodepart" href="#">Departments <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demodepart" class="collapse dropdown-header-top">
                                                <li><a href="departments.html">Departments List</a>
                                                </li>
                                                <li><a href="add-department.html">Add Departments</a>
                                                </li>
                                                <li><a href="edit-department.html">Edit Departments</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#demo" href="#">Mailbox <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="demo" class="collapse dropdown-header-top">
                                                <li><a href="mailbox.html">Inbox</a>
                                                </li>
                                                <li><a href="mailbox-view.html">View Mail</a>
                                                </li>
                                                <li><a href="mailbox-compose.html">Compose Mail</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Miscellaneousmob" href="#">Interface <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Miscellaneousmob" class="collapse dropdown-header-top">
                                                <li><a href="google-map.html">Google Map</a>
                                                </li>
                                                <li><a href="data-maps.html">Data Maps</a>
                                                </li>
                                                <li><a href="pdf-viewer.html">Pdf Viewer</a>
                                                </li>
                                                <li><a href="x-editable.html">X-Editable</a>
                                                </li>
                                                <li><a href="code-editor.html">Code Editor</a>
                                                </li>
                                                <li><a href="tree-view.html">Tree View</a>
                                                </li>
                                                <li><a href="preloader.html">Preloader</a>
                                                </li>
                                                <li><a href="images-cropper.html">Images Cropper</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Chartsmob" href="#">Charts <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Chartsmob" class="collapse dropdown-header-top">
                                                <li><a href="bar-charts.html">Bar Charts</a>
                                                </li>
                                                <li><a href="line-charts.html">Line Charts</a>
                                                </li>
                                                <li><a href="area-charts.html">Area Charts</a>
                                                </li>
                                                <li><a href="rounded-chart.html">Rounded Charts</a>
                                                </li>
                                                <li><a href="c3.html">C3 Charts</a>
                                                </li>
                                                <li><a href="sparkline.html">Sparkline Charts</a>
                                                </li>
                                                <li><a href="peity.html">Peity Charts</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Tablesmob" href="#">Tables <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Tablesmob" class="collapse dropdown-header-top">
                                                <li><a href="static-table.html">Static Table</a>
                                                </li>
                                                <li><a href="data-table.html">Data Table</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#formsmob" href="#">Forms <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="formsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Appviewsmob" href="#">App views <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Appviewsmob" class="collapse dropdown-header-top">
                                                <li><a href="basic-form-element.html">Basic Form Elements</a>
                                                </li>
                                                <li><a href="advance-form-element.html">Advanced Form Elements</a>
                                                </li>
                                                <li><a href="password-meter.html">Password Meter</a>
                                                </li>
                                                <li><a href="multi-upload.html">Multi Upload</a>
                                                </li>
                                                <li><a href="tinymc.html">Text Editor</a>
                                                </li>
                                                <li><a href="dual-list-box.html">Dual List Box</a>
                                                </li>
                                            </ul>
                                        </li>
                                        <li><a data-toggle="collapse" data-target="#Pagemob" href="#">Pages <span class="admin-project-icon edu-icon edu-down-arrow"></span></a>
                                            <ul id="Pagemob" class="collapse dropdown-header-top">
                                                <li><a href="login.html">Login</a>
                                                </li>
                                                <li><a href="register.html">Register</a>
                                                </li>
                                                <li><a href="lock.html">Lock</a>
                                                </li>
                                                <li><a href="password-recovery.html">Password Recovery</a>
                                                </li>
                                                <li><a href="404.html">404 Page</a></li>
                                                <li><a href="500.html">500 Page</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Mobile Menu end -->
        </div>

        @yield('admin_section')
        @include('admin.layouts.loder')

    </div>

    <!-- bootstrap JS ============================================ -->
    <script src="{{asset('admin/')}}/js/bootstrap.min.js"></script>
    <script src="{{asset('admin/')}}/js/wow.min.js"></script>
    <script src="{{asset('admin/')}}/js/jquery-price-slider.js"></script>
    <script src="{{asset('admin/')}}/js/jquery.meanmenu.js"></script>
    <script src="{{asset('admin/')}}/js/owl.carousel.min.js"></script>
    <script src="{{asset('admin/')}}/js/jquery.sticky.js"></script>
    <script src="{{asset('admin/')}}/js/jquery.scrollUp.min.js"></script>
    <script src="{{asset('admin/')}}/js/counterup/jquery.counterup.min.js"></script>
    <script src="{{asset('admin/')}}/js/counterup/waypoints.min.js"></script>
    <script src="{{asset('admin/')}}/js/counterup/counterup-active.js"></script>
    <script src="{{asset('admin/')}}/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{asset('admin/')}}/js/scrollbar/mCustomScrollbar-active.js"></script>
    <script src="{{asset('admin/')}}/js/metisMenu/metisMenu.min.js"></script>
    <script src="{{asset('admin/')}}/js/metisMenu/metisMenu-active.js"></script>
    <script src="{{asset('admin/')}}/js/morrisjs/raphael-min.js"></script>
    <script src="{{asset('admin/')}}/js/morrisjs/morris.js"></script>
    <script src="{{asset('admin/')}}/js/morrisjs/morris-active.js"></script>
    <script src="{{asset('admin/')}}/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="{{asset('admin/')}}/js/sparkline/jquery.charts-sparkline.js"></script>
    <script src="{{asset('admin/')}}/js/sparkline/sparkline-active.js"></script>
    <script src="{{asset('admin/')}}/js/calendar/moment.min.js"></script>
    <script src="{{asset('admin/')}}/js/calendar/fullcalendar.min.js"></script>
    <script src="{{asset('admin/')}}/js/calendar/fullcalendar-active.js"></script>
    <script src="{{asset('admin/')}}/js/plugins.js"></script>
    <script src="{{asset('admin/')}}/js/main.js"></script>
    <script src="{{asset('admin/')}}/js/datapicker/bootstrap-datepicker.js"></script>
    <script src="{{asset('admin/')}}/js/datapicker/datepicker-active.js"></script>
    <script src="{{asset('admin/')}}/js/data-table/bootstrap-table.js"></script>
    <script src="{{asset('admin/')}}/js/data-table/tableExport.js"></script>
    <script src="{{asset('admin/')}}/js/data-table/data-table-active.js"></script>
    <script src="{{asset('admin/')}}/js/data-table/bootstrap-table-editable.js"></script>
    <script src="{{asset('admin/')}}/js/data-table/bootstrap-editable.js"></script>
    <script src="{{asset('admin/')}}/js/data-table/bootstrap-table-resizable.js"></script>
    <script src="{{asset('admin/')}}/js/data-table/colResizable-1.5.source.js"></script>
    <script src="{{asset('admin/')}}/js/data-table/bootstrap-table-export.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

        {!! Toastr::message() !!}
        <script>
            @if($errors->any())
            @foreach($errors->all() as $error)
            toastr.error('{{ $error }}','Error',{
                closeButton:true,
                progressBar:true,
            });
            @endforeach
            @endif
        </script>

@stack('admin_js')
</body>

</html>
<div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
                <a href="{{route('admin.home')}}" style="font-size: xx-large;"><img src="{{asset('nedubd.png')}}" alt="NEDUBD" style="height: 44px;
    width: 158px;" /></a>
                <strong><a href="index.html"></a></strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">
                <nav class="sidebar-nav left-sidebar-menu-pro">
                    <ul class="metismenu" id="menu1" style="padding-left: 8px;padding-top:14px;">
                        @if(Session::get('page') == 'admission' || Session::get('page') == 'student_list')
                            <?php $active = "active"; ?>
                        @else
                        <?php $active = ""; ?>
                        @endif
                        <li class="{{$active}}">
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-student icon-wrap" style="font-size:15px; color:#7cc646;"></span> <span class="mini-click-non" style="font-size:14px;">@lang('home.Student')</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                
                                <li><a title="Add Students" href="{{route('admin.student.list')}}"><span class="mini-sub-pro" style="font-size:14px;"><i class="fa fa-angle-double-right"></i> @lang('home.StudentsList')</span></a></li>
                                <li><a title="Add Students" href="{{route('admin.student_create')}}"><span class="mini-sub-pro" style="font-size:14px;"><i class="fa fa-angle-double-right"></i> @lang('home.StudentsAdd')</span></a></li>
                                
                            </ul>
                        </li>

                        @if(Session::get('page') == 'teachers_list' || Session::get('page') == 'staf_create' || Session::get('page') == 'staf_list' || Session::get('page') == 'department_create' || Session::get('page') == 'designation_create')
                            <?php $active = "active"; ?>
                        @else
                        <?php $active = ""; ?>
                        @endif
                        <li class="{{$active}}">
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-user-md" style="font-size:14px;color:#7cc646;"></i> <span class="mini-click-non" style="font-size:14px;"> @lang('home.humanResources')</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="{{route('admin.teacher.list')}}"><span class="mini-sub-pro" style="font-size:14px;"><i class="fa fa-angle-double-right"></i> @lang('home.teachers')</span></a></li>
                                <li><a title="All Students" href="{{route('admin.staff.create')}}"><span class="mini-sub-pro" style="font-size:14px;"><i class="fa fa-angle-double-right"></i> @lang('home.staffs')</span></a></li>
                                <li><a title="Add Students" href="{{route('admin.staff.list')}}"><span class="mini-sub-pro" style="font-size:14px;"><i class="fa fa-angle-double-right"></i> @lang('home.staffList')</span></a></li>
                                <li><a title="Edit Students" href="{{route('admin.designation.create')}}"><span class="mini-sub-pro" style="font-size:14px;"><i class="fa fa-angle-double-right"></i> @lang('home.designation')</span></a></li>
                                <li><a title="Students Profile" href="{{route('admin.department.create')}}"><span class="mini-sub-pro" style="font-size:14px;"><i class="fa fa-angle-double-right"></i> @lang('home.department')</span></a></li>
                            </ul>
                        </li>

                        @if(Session::get('page') == 'session_list' || Session::get('page') == 'lavel_list' || Session::get('page') == 'subject')
                            <?php $active = "active"; ?>
                        @else
                        <?php $active = ""; ?>
                        @endif
                        <li class="{{$active}}">
                            <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-university" style="font-size:12px;color:#7cc646;"></i></span> <span class="mini-click-non" style="font-size:14px;">@lang('home.academic')</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                
                                
                                <li><a title="Students Profile" href="{{route('admin.class.list')}}"><span class="mini-sub-pro" style="font-size:14px;"><i class="fa fa-angle-double-right"></i> Class</span></a></li>
                                <li><a title="Edit Students" href="{{route('admin.section.list')}}"><span class="mini-sub-pro" style="font-size:14px;"><i class="fa fa-angle-double-right"></i> Section</span></a></li>
                                <li><a title="Add Students" href="{{route('admin.subject.list')}}"><span class="mini-sub-pro" style="font-size:14px;"><i class="fa fa-angle-double-right"></i> Subject</span></a></li>
                                
                            </ul>
                        </li>

                        @if(Session::get('page') == 'attendance_edit' || Session::get('page') == 'attendance_create')
                            <?php $active = "active"; ?>
                        @else
                        <?php $active = ""; ?>
                        @endif
                        <li class="{{$active}}">
                            <a class="has-arrow" href="all-students.html" aria-expanded="false"> <i class="fa fa-clock-o" aria-hidden="true" style="font-size:14px;color:#7cc646;"></i> <span class="mini-click-non" style="font-size:14px;">@lang('home.attendance')</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="{{ route('admin.attendance') }}"><span class="mini-sub-pro" style="font-size:14px;"><i class="fa fa-angle-double-right"></i> Student Attendance</span></a></li>
                                <li><a title="Add Students" href="{{ route('admin.attendance.edit') }}"><span class="mini-sub-pro" style="font-size:14px;"><i class="fa fa-angle-double-right"></i> Update Attendance</span></a></li>
                                
                            </ul>
                        </li>
                        
                        @if(Session::get('page') == 'invoeci_create' || Session::get('page') == 'invoeci_list' || Session::get('page') == 'invoeci_individual')
                            <?php $active = "active"; ?>
                        @else
                        <?php $active = ""; ?>
                        @endif

                        <li class="{{$active}}">
                            <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="fa fa-calculator" style="font-size:14px;color:#7cc646;"></span> <span class="mini-click-non" style="font-size:14px;"> @lang('home.feeCollection')</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="{{route('admin.invoice.create')}}"><span class="mini-sub-pro" style="font-size:14px;"><i class="fa fa-angle-double-right"></i> Create Invoice</span></a></li>
                                <li><a title="Add Students" href=" {{route('admin.invoice.list')}} "><span class="mini-sub-pro" style="font-size:14px;"><i class="fa fa-angle-double-right"></i> Invoice List</span></a></li>
                                <li><a title="Edit Students" href="{{ route('admin.invoice.individual')}}"><span class="mini-sub-pro" style="font-size:14px;"><i class="fa fa-angle-double-right"></i> Invoice Individual</span></a></li>
                            </ul>
                        </li>
                        
                        @if(Session::get('page') == 'create_exam' || Session::get('page') == 'mark_entry')
                            <?php $active = "active"; ?>
                        @else
                        <?php $active = ""; ?>
                        @endif
                        <li class="{{$active}}">
                            <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="fa fa-file-text-o" style="font-size:14px;color:#7cc646;"></span> <span class="mini-click-non" style="font-size:14px;"> @lang('home.examination')</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="{{ route('admin.create.exam')}}"><span class="mini-sub-pro" style="font-size:14px;"><i class="fa fa-angle-double-right"></i> Exam List</span></a></li>
                                <!-- <li><a title="All Students" href="{{ route('admin.construction')}}"><span class="mini-sub-pro" style="font-size:14px;"><i class="fa fa-angle-double-right"></i> Exam Schedule</span></a></li> -->
                                <li><a title="Add Students" href="{{ route('admin.mark.entry') }}"><span class="mini-sub-pro" style="font-size:14px;"><i class="fa fa-angle-double-right"></i> Marks Register</span></a></li>
                                <!-- <li><a title="Add Students" href="#"><span class="mini-sub-pro" style="font-size:14px;"><i class="fa fa-angle-double-right"></i> Result Generate</span></a></li> -->
                                <li><a title="Edit Students" href="{{ route('admin.construction')}}"><span class="mini-sub-pro" style="font-size:14px;"><i class="fa fa-angle-double-right"></i> Marks Import</span></a></li>
                            </ul>
                        </li>
                        
                        @if(Session::get('page') == 'tabulation' || Session::get('page') == 'transcript')
                            <?php $active = "active"; ?>
                        @else
                        <?php $active = ""; ?>
                        @endif

                        <li class="{{$active}}">
                            <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap" style="font-size:14px;color:#7cc646;"></span> <span class="mini-click-non" style="font-size:14px;"> @lang('home.ExamReports')</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="{{ route('admin.tabulation')}}"><span class="mini-sub-pro" style="font-size:14px;"><i class="fa fa-angle-double-right"></i> Tabulation Sheet</span></a></li>
                                <li><a title="All Students" href="{{ route('admin.transcript')}}"><span class="mini-sub-pro" style="font-size:14px;"><i class="fa fa-angle-double-right"></i> Transcript</span></a></li>
                                <li><a title="All Students" href="{{ route('admin.construction')}}"><span class="mini-sub-pro" style="font-size:14px;"><i class="fa fa-angle-double-right"></i> Poisson List</span></a></li>
                                <li><a title="All Students" href="{{ route('admin.construction')}}"><span class="mini-sub-pro" style="font-size:14px;"><i class="fa fa-angle-double-right"></i> Pass List</span></a></li>
                                <li><a title="All Students" href="{{ route('admin.construction')}}"><span class="mini-sub-pro" style="font-size:14px;"><i class="fa fa-angle-double-right"></i> Fail List</span></a></li>
                            </ul>
                        </li>
                        
                        @if(Session::get('page') == 'book_create' || Session::get('page') == 'rack_create' || Session::get('page') == 'library_book_list' || Session::get('page') == 'library_issue')
                            <?php $active = "active"; ?>
                        @else
                        <?php $active = ""; ?>
                        @endif

                        <li class="{{$active}}">
                            <a class="has-arrow" href="all-courses.html" aria-expanded="false"><span class="educate-icon educate-library icon-wrap" style="color:#7cc646;font-size:14px;"> </span> <span class="mini-click-non" style="font-size:14px;"> @lang('home.library')</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Library" href="{{route('admin.book.create')}}"><span class="mini-sub-pro" style="font-size:14px;"><i class="fa fa-angle-double-right"></i> Add Book</span></a></li>
                                <li><a title="All Library" href="{{ route('admin.library.book.list')}}"><span class="mini-sub-pro"><i class="fa fa-angle-double-right"></i> Book List</span></a></li>
                                <li><a title="All Library" href="{{route('admin.rack.create')}}"><span class="mini-sub-pro" style="font-size:14px;"><i class="fa fa-angle-double-right"></i> Add Rack</span></a></li>
                                <li><a title="Add Library" href="{{ route('admin.library.issue')}}"><span class="mini-sub-pro" style="font-size:14px;"><i class="fa fa-angle-double-right"></i> Issue Return</span></a></li>
                                <!-- <li><a title="Edit Library" href="{{ route('admin.construction')}}"><span class="mini-sub-pro" style="font-size:14px;"><i class="fa fa-angle-double-right"></i> Fine Collection</span></a></li> -->
                                
                            </ul>
                        </li>
                        
                        @if(Session::get('page') == 'transport_route' || Session::get('page') == 'vehicle')
                            <?php $active = "active"; ?>
                        @else
                        <?php $active = ""; ?>
                        @endif
                        <li class="{{$active}}">
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-student icon-wrap" style="font-size:14px;"></span> <span class="mini-click-non" style="font-size:14px;">@lang('home.transports')</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="{{ url('admin/transport/route')}}"><span class="mini-sub-pro" style="font-size:14px;">Route</span></a></li>
                                <li><a title="All Students" href="{{ url('admin/transport/vehicle')}}"><span class="mini-sub-pro" style="font-size:14px;">Vehicles</span></a></li>
                                
                            </ul>
                        </li>
                        
                        @if(Session::get('page') == 'hostel' || Session::get('page') == 'member')
                            <?php $active = "active"; ?>
                        @else
                        <?php $active = ""; ?>
                        @endif
                        <li class="{{$active}}">
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-student icon-wrap" style="font-size:14px;"></span> <span class="mini-click-non" style="font-size:14px;">@lang('home.hostel')</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="{{ url('admin/hostel')}}"><span class="mini-sub-pro" style="font-size:14px;"> Hostel</span></a></li>
                                <li><a title="All Students" href="{{ url('admin/hostel/member')}}"><span class="mini-sub-pro" style="font-size:14px;"> Member</span></a></li>
                                <li><a title="All Students" href="{{ route('admin.construction')}}"><span class="mini-sub-pro" style="font-size:14px;"> Fees Collection</span></a></li>
                                
                            </ul>
                        </li>

                        <li>
                            <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap" style="font-size:14px;"></span> <span class="mini-click-non" style="font-size:14px;"> @lang('home.inventory')</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="{{ route('admin.construction')}}"><span class="mini-sub-pro" style="font-size:14px;"> Add Item Stock</span></a></li>
                                <li><a title="All Students" href="{{ route('admin.construction')}}"><span class="mini-sub-pro" style="font-size:14px;"> Add Item</span></a></li>
                                <li><a title="All Students" href="{{ route('admin.construction')}}"><span class="mini-sub-pro" style="font-size:14px;"> Item Category</span></a></li>
                                <li><a title="All Students" href="{{ route('admin.construction')}}"><span class="mini-sub-pro" style="font-size:14px;"> Item Store</span></a></li>
                                <li><a title="All Students" href="{{ route('admin.construction')}}"><span class="mini-sub-pro" style="font-size:14px;"> Item Supplier</span></a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap" style="font-size:14px;"></span> <span class="mini-click-non" style="font-size:14px;">@lang('home.certificates')</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="{{ route('admin.construction')}}"><span class="mini-sub-pro" style="font-size:14px;">Student Certificate</span></a></li>
                                <li><a title="All Students" href="{{ route('admin.construction')}}"><span class="mini-sub-pro" style="font-size:14px;">Generate Certificate</span></a></li>
                                <li><a title="All Students" href="{{ route('admin.construction')}}"><span class="mini-sub-pro" style="font-size:14px;">Student Id Card</span></a></li>
                                <li><a title="All Students" href="{{ route('admin.construction')}}"><span class="mini-sub-pro" style="font-size:14px;">Generate Id Card</span></a></li>
                                <li><a title="All Students" href="{{ route('admin.construction')}}"><span class="mini-sub-pro" style="font-size:14px;">Teachers Id Card</span></a></li>
                                <li><a title="All Students" href="{{ route('admin.construction')}}"><span class="mini-sub-pro" style="font-size:14px;">Generate Teachers Id Card</span></a></li>
                            </ul>
                        </li>
                        
                       
                        
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-student icon-wrap" style="font-size:14px;"></span> <span class="mini-click-non" style="font-size:14px;">@lang('home.communication')</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <!-- <li><a title="All Students" href="{{ route('admin.construction')}}"><span class="mini-sub-pro" style="font-size:14px;">Notice Board</span></a></li> -->
                                <li><a title="All Students" href="{{ route('admin.sms.all.students.teachers')}}"><span class="mini-sub-pro" style="font-size:14px;">SMS All Student and Teachers</span></a></li>
                                <li><a title="All Students" href="{{ route('admin.sms.all.students')}}"><span class="mini-sub-pro" style="font-size:14px;">SMS All Student</span></a></li>
                                <li><a title="All Students" href="{{ route('admin.sms.all.teachers')}}"><span class="mini-sub-pro" style="font-size:14px;">SMS All Teachers</span></a></li>
                                <li><a title="All Students" href="{{ route('admin.sms.all.staf')}}"><span class="mini-sub-pro" style="font-size:14px;">SMS All Staff</span></a></li>
                                <li><a title="All Students" href="{{ route('admin.sms.class.wish')}}"><span class="mini-sub-pro" style="font-size:14px;">SMS Class Wish</span></a></li>
                                <li><a title="All Students" href="{{ route('admin.sms.section.wish')}}"><span class="mini-sub-pro" style="font-size:14px;">SMS Section Wish</span></a></li>
                                <li><a title="All Students" href="{{ route('admin.construction')}}"><span class="mini-sub-pro" style="font-size:14px;">SMS Individual Student</span></a></li>
                                <li><a title="All Students" href="{{ route('admin.construction')}}"><span class="mini-sub-pro" style="font-size:14px;">SMS Individual Teachers</span></a></li>
                            </ul>
                        </li>
                        
                        <li>
                            <a class="has-arrow" href="all-students.html" aria-expanded="false"><span class="educate-icon educate-student icon-wrap" style="font-size:14px;"></span> <span class="mini-click-non" style="font-size:14px;">@lang('home.reports')</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="{{ route('admin.construction')}}"><span class="mini-sub-pro" style="font-size:14px;">All Students</span></a></li>
                            </ul>
                        </li>
                      
                        <li>
                            <a class="has-arrow" href="#" aria-expanded="false"><span class="educate-icon educate-student icon-wrap"style="font-size:14px;"></span> <span class="mini-click-non" style="font-size:14px;">@lang('home.frontSetting')</span></a>
                            <ul class="submenu-angle" aria-expanded="false">
                                <li><a title="All Students" href="{{ route('admin.construction')}}"><span class="mini-sub-pro" style="font-size:14px;">All Students</span></a></li>
                            </ul>
                        </li>
                        
                        
                       
                        
                        
                    </ul>
                </nav>
            </div>
        </nav>
    </div>
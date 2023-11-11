<?php



Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return view('about');
});
Route::get('/notice', function () {
    return view('notice');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/gallery', function () {
    return view('gallery');
});

// Route::get('/faq', function () {
//     return view('layouts.page.faq');
// });


Auth::routes();


Route::group(['prefix' => '/page', 'namespace' => 'admission'], function () {
    Route::get('/teachers', function () {
        return view('layouts.page.teachers');
    });
    Route::get('/students', function () {
        return view('layouts.page.students');
    });
    Route::get('/admit-card', function () {
        return view('layouts.page.admit-card');
    });
    Route::get('/exam-result', function () {
        return view('layouts.page.exam-result');
    });
    Route::get('/exam-routine', function () {
        return view('layouts.page.exam-routine');
    });
    Route::get('/faq', function () {
        return view('layouts.page.faq');
    });
});

Route::group(['prefix' => '/admission', 'namespace' => 'admission'], function () {
    Route::get('/admission-notice', function () {
        return view('layouts/admission/admission-notice');
    });
    Route::get('/admission-prospectus', function () {
        return view('layouts/admission/admission-prospectus');
    });
    Route::get('/online-registration', function () {
        return view('layouts/admission/online-registration');
    });
    Route::get('/admission-result', function () {
        return view('layouts/admission/admission-result');
    });
});


Route::group(['as' => 'admin.', 'prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {

    Route::get('locale/{locale}', function ($locale) {
        Session::put('locale', $locale);
        return redirect()->back();
    });

    Route::get('/home', 'AdminDashboardController@index')->name('home');

    // class 
    Route::post('/class-store', 'LavelController@store')->name('class.store');
    Route::get('/class-list', 'LavelController@list')->name('class.list');


    Route::get('/construction', 'LavelController@construction')->name('construction');
    // section
    Route::get('section-list', 'SectionController@list')->name('section.list');
    Route::get('section-list-by-id', 'SectionController@list_by_ajax')->name('section.list.by.ajax');
    Route::post('section-store', 'SectionController@store')->name('section.store');
    // subject
    Route::get('subject-list', 'SubjectController@list')->name('subject.list');
    Route::post('subject-store', 'SubjectController@store')->name('subject.store');
    Route::get('subject-list-by-ajax', 'SubjectController@list_by_ajax')->name('subject.list.by.ajax');

    // student
    Route::get('student-create', 'StudentController@create')->name('student_create');
    Route::get('student-list', 'StudentController@list')->name('student.list');
    Route::get('student-list-class-section', 'StudentController@class_wise_student_list')->name('class.section.wise.student');
    Route::post('student-store', 'StudentController@store')->name('student.store');
    Route::get('student-view-{id}', 'StudentController@view')->name('student.view');
    Route::get('student-edit-{id}', 'StudentController@edit')->name('student.edit');
    Route::post('student-Update-{id}', 'StudentController@dataUpdate')->name('student.update');
    Route::get('student-delete-{id}', 'StudentController@dataDelete')->name('student.delete');

    // teacher
    Route::get('teacher-list', 'TeacherController@list')->name('teacher.list');
    Route::post('teacher-store', 'TeacherController@store')->name('teacher.store');
    Route::get('teacher-view-{id}', 'TeacherController@view')->name('teacher.view');


    Route::get('teacher-edit-{id}', 'TeacherController@edit')->name('teacher.edit');
    Route::post('teacher-Update-{id}', 'TeacherController@dataUpdate')->name('teacher.update');
    Route::get('teacher-delete-{id}', 'TeacherController@delete')->name('teacher.delete');
    // department
    Route::get('department-create', 'StaffController@department_create')->name('department.create');
    Route::post('department-store', 'StaffController@department_store')->name('department.store');
    // designation
    Route::get('designation-create', 'StaffController@designation_create')->name('designation.create');
    Route::post('designation-store', 'StaffController@designation_store')->name('designation.store');
    // staff
    Route::get('staff-create', 'StaffController@create')->name('staff.create');
    Route::get('staff-list', 'StaffController@list')->name('staff.list');
    Route::get('staff-view-{id}', 'StaffController@view')->name('staff.view');
    Route::post('staff-store', 'StaffController@staff_store')->name('staff.store');

    // invoice
    Route::get('create-invoice', 'InvoiceController@invoice_create')->name('invoice.create');
    Route::post('invoice-store', 'InvoiceController@invoice_store')->name('invoice.store');
    Route::get('invoice-list', 'InvoiceController@invoice_list')->name('invoice.list');
    Route::get('invoice-show-{id}', 'InvoiceController@invoice_show_by_id')->name('invoice.show_by_id');
    Route::get('invoice-individual', 'InvoiceController@invoice_individual')->name('invoice.individual');
    Route::get('invoice-create-individual/{id}', 'InvoiceController@invoice_create_individual')->name('invoice.create.individual');
    Route::post('invoice-store-individual', 'InvoiceController@invoice_store_individual')->name('invoice.store.individual');

    // library
    Route::get('book', 'LibraryController@book_create')->name('book.create');

    Route::get('rack', 'LibraryController@rack_create')->name('rack.create');
    Route::post('rack/store', 'LibraryController@rack_store')->name('rack.store');

    Route::post('library-book-store', 'LibraryController@library_book_store')->name('library.book.store');
    Route::get('library-book-list', 'LibraryController@library_book_list')->name('library.book.list');
    Route::get('library/issue', 'LibraryController@library_issue')->name('library.issue');
    Route::get('library/issue/create', 'LibraryController@library_issue_create')->name('library.issue.create');
    Route::post('library/issue/store', 'LibraryController@library_issue_store')->name('library.issue.store');
    Route::get('library/issue/return/{id}', 'LibraryController@library_issue_return')->name('library.issue.return');
    // attendance
    Route::get('attendance', 'AttendanceController@attendance')->name('attendance');
    Route::post('attendance-store', 'AttendanceController@attendance_store')->name('attendance.store');
    Route::get('attendance-edit', 'AttendanceController@attendance_edit')->name('attendance.edit');
    Route::post('attendance-update', 'AttendanceController@attendance_update')->name('attendance.update');

    // exam
    Route::get('mark-entry', 'ExamController@mark_entry')->name('mark.entry');

    Route::get('exam-create', 'ExamController@create_exam')->name('create.exam');
    Route::post('exam-create-store', 'ExamController@create_exam_store')->name('create.exam.store');

    Route::get('class-wise-section', 'ExamController@class_wise_section')->name('class.wise.section');
    Route::get('class-wise-subject', 'ExamController@class_wise_subject')->name('class.wise.subject');
    Route::get('class-wise-mark-entry', 'ExamController@mark_entry_student')->name('mark.entry.student');
    Route::post('class-wise-mark-store', 'ExamController@mark_store')->name('mark.store');
    Route::post('class-wise-mark-update', 'ExamController@mark_update')->name('mark.update');

    // Exam logic and exam genarate
    Route::get('exam-tabulation', 'ExamReport@tabulation')->name('tabulation');
    Route::get('result-generator', 'ExamReport@result_generator')->name('result_generator');
    Route::post('result-generator-store', 'ExamReport@result_generator_store')->name('result_generator_store');
    Route::get('exam-tabulation-view', 'ExamReport@tabulation_view')->name('tabulation.view');
    Route::get('exam-transcript', 'ExamReport@transcript')->name('transcript');
    Route::get('exam-transcript-studentlist', 'ExamReport@transcript_student')->name('transcript.student');


    Route::get('/sms-all-students-teachers', 'ComunicationController@smsAllStudentsTeachers')->name('sms.all.students.teachers');
    Route::get('/sms-all-students', 'ComunicationController@smsAllStudents')->name('sms.all.students');
    Route::get('/sms-all-teachers', 'ComunicationController@smsAllteachers')->name('sms.all.teachers');
    Route::get('/sms-all-staf', 'ComunicationController@smsAllstaf')->name('sms.all.staf');
    Route::get('/sms-class-wish', 'ComunicationController@smsClassWish')->name('sms.class.wish');
    Route::get('/sms-section-wish', 'ComunicationController@smsSectionWish')->name('sms.section.wish');



    Route::get('hostel', 'HostelController@hostel');
    Route::get('hostel/create', 'HostelController@create');
    Route::post('hostel/store', 'HostelController@store');
    Route::get('hostel/member', 'HostelController@member');
    Route::get('hostel/class/wise/student', 'HostelController@member_class_wise_student_list');
    Route::get('hostel/member/create', 'HostelController@member_create');
    Route::post('hostel/member/store', 'HostelController@member_store');
    Route::get('hostel/member/show/by/hostel', 'HostelController@member_show_bye_hostel');

    // Transport Route
    // route
    Route::get('transport/route', 'TransportController@transport_route');
    Route::get('transport/route/create', 'TransportController@transport_route_create');
    Route::post('transport/route/store', 'TransportController@transport_route_store');
    // vehicles
    Route::get('transport/vehicle', 'TransportController@vehicle');
    Route::get('transport/vehicle/create', 'TransportController@vehicleCreate');
    Route::post('transport/vehicle/store', 'TransportController@vehicleStore');
});

Route::group(['as' => 'partner.', 'prefix' => 'partner', 'namespace' => 'Patner', 'middleware' => ['auth', 'partner']], function () {
    Route::get('/home', 'DeshboardController@index')->name('home');
});

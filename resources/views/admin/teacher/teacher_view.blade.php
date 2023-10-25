@extends('admin.layouts.app')
@section('admin_title', 'Teacher Profile | NEDUBD')
@section('admin_section')

<div class="product-sales-area mg-tb-30" style="margin-top: 61px; min-height: 490px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="sparkline13-list">
                    <div class="sparkline13-hd">
                        <div class="main-sparkline13-hd">
                            <h1>Teacher Profile</h1>
                        </div>
                    </div>
                    <div class="sparkline13-graph">
                        <div class="datatable-dashv1-list custom-datatable-overright">
                    <table class="table">
                        <tbody>
                            
                            <tr>
                                <td>ID:</td>
                                <td>{{ $teacher->id }}</td>
                            </tr>
                            <tr>
                                <td>Name:</td>
                                <td>{{ $teacher->teachers_name }}</td>
                            </tr>
                            <tr>
                                <td>Responsibility:</td>
                                <td>
                                    {{ $teacher->responsibility }}
                                    </td>
                            </tr>
                            <tr>
                                <td>Mobile:</td>
                                <td>{{ $teacher->teachers_mobile }}</td>
                             
                            </tr>
                            <tr>
                                <td>Email:</td>
                                <td>{{ $teacher->teachers_email }}</td>
                            </tr>
                            <tr>
                                <td>Date of Joning:</td>
                                <td>{{ $teacher->teachers_date_of_joining }}</td>
                            </tr>
                            <tr>
                                <td>Status:</td>
                                <td>{{ $teacher->publication_status == '1' ? 'Active' : 'Inactive' }}</td>
                            </tr>
                            <!-- Add more details here based on your staff information -->
                        </tbody>
                    </table>
                    </div>
                        </div>




                    {{-- <p>ID: {{ $teacher->id }}</p>
                    <p>Name: {{ $teacher->teachers_name }}</p>
                    <p>Responsibility: {{ $teacher->responsibility }}</p>
                    <p>Phone: {{ $teacher->teachers_mobile }}</p>
                    <p>Email: {{ $teacher->teachers_email }}</p>
                    <p>Joining Date: {{ $teacher->teachers_date_of_joining }}</p>
                    <p>Status: {{ $teacher->publication_status == '1' ? 'Active' : 'Inactive' }}</p> --}}
                </div>
            </div>
        </div>
    </div>
</div>
@include('admin.layouts.footer')
@endsection


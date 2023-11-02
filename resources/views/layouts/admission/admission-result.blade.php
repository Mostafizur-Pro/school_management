@extends('layouts.app')
@section('title', 'Admission Result')

@section('content')


<div class="text-sm breadcrumbs container">
    <ul>
        <li>
            <a href="{{url('/')}}">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-2 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                </svg>
                Home
            </a>
        </li>
        <li>
            <a>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-2 stroke-current">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                </svg>
                Admission
            </a>
        </li>
        <li>
            <a href="{{url('/admission/admission-result')}}" style="color: #A0D053;">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-2 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg> -->
                Admission Result
            </a>
        </li>

    </ul>
</div>


<div class="bg-gray-100 min-h-screen py-8">
    <div class="container mx-auto">
       

        <h1 class="text-3xl font-semibold text-center mb-8">Admission Result</h1>

        <!-- Your admission result content goes here -->
        <div class="text-justify my-10">
            <h2 class="text-xl font-semibold mb-4">Admission Result Announcement</h2>
            <p>We are pleased to announce the admission results for the academic year [Insert Year]. You can find the results for different grade levels below:</p>
        </div>

        <div class="text-justify my-10">
            <h2 class="text-xl font-semibold mb-4">Grade 1 Admission Result</h2>
            <p>The results for Grade 1 admissions are as follows:</p>
            <ul class="list-disc ml-6">
                <li>Student Name 1 - Admitted</li>
                <li>Student Name 2 - Admitted</li>
                <li>Student Name 3 - Not Admitted</li>
                <!-- Add more results -->
            </ul>
        </div>

        <div class="text-justify my-10">
            <h2 class="text-xl font-semibold mb-4">Grade 2 Admission Result</h2>
            <p>The results for Grade 2 admissions are as follows:</p>
            <ul class="list-disc ml-6">
                <li>Student Name 1 - Admitted</li>
                <li>Student Name 2 - Admitted</li>
                <li>Student Name 3 - Not Admitted</li>
                <!-- Add more results -->
            </ul>
        </div>

        <!-- Add more grade-level results and instructions as needed -->
    </div>
</div>



@endsection
@extends('layouts.app')
@section('title', 'Admission Notice')

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
            <a href="{{url('/admission/admission-notice')}}" style="color: #A0D053;">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-2 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg> -->
                Admission Notice
            </a>
        </li>

    </ul>
</div>

<div class="bg-gray-100 min-h-screen py-8">
    <div class="container mx-auto">
        <h1 class="text-3xl font-semibold text-center mb-8">Admission Notice</h1>

        <div class="text-justify my-10">
            <h2 class="text-xl font-semibold mb-4">Admission Process</h2>

            <p><strong>Thank you for your interest in STEP TO SUCCESS SCHOOL!</strong> We are excited to welcome prospective students and their families into our community.</p>

            <p>The admission process at our school is designed to be thorough and transparent. Here are the steps to follow:</p>

            <ol class="list-decimal ml-6">
                <li>Complete the online admission application form available on our website. Make sure to provide accurate and complete information.</li>
                <li>Submit the required documents, including academic transcripts, birth certificate, and any other documents specified in the application guidelines.</li>
                <li>Our admissions team will review your application and documents. If your application is approved, you will be notified for the next steps.</li>
                <li>Attend an interview or assessment, if required for the grade level you are applying for.</li>
                <li>Upon successful completion of the admission process, you will receive an admission offer.</li>
                <li>Complete the enrollment and payment process as instructed in the admission offer.</li>
            </ol>

            <h2 class="text-xl font-semibold mb-4">Admission Requirements</h2>

            <p>We have specific admission requirements based on the grade level. Please ensure you meet the requirements for the grade you are applying for. Here are some of the common requirements:</p>

            <ul class="list-disc ml-6">
                <li>Completed application form</li>
                <li>Transcripts from the previous school (if applicable)</li>
                <li>Birth certificate</li>
                <li>Recommendation letters (if required)</li>
                <li>Interview or assessment (if required)</li>
                <li>Proof of residence</li>
                <!-- Add more specific requirements as needed -->
            </ul>

            <h2 class="text-xl font-semibold mb-4">Important Dates</h2>

            <p>We recommend keeping track of the following important dates for the admission process:</p>

            <ul class="list-disc ml-6">
                <li>Application submission deadline: [Insert Deadline]</li>
                <li>Interview/Assessment dates: [Insert Dates]</li>
                <li>Admission offer notifications: [Insert Date]</li>
                <li>Enrollment and payment deadline: [Insert Deadline]</li>
                <!-- Add any additional important dates -->
            </ul>
        </div>
    </div>
</div>




@endsection
@extends('layouts.app')
@section('title', 'FAQ Page')

@section('content')

<div class="mx-10">

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
                <a href="{{url('/')}}">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-2 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                    </svg>
                    Page
                </a>
            </li>
            <li>
                <a href="{{url('/about')}}" style="color: #A0D053;">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-2 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg> -->
                    FAQ
                </a>
            </li>

        </ul>
    </div>


    <div class="bg-gray-100 min-h-screen py-8">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold text-center mb-8">Frequently Asked Questions</h1>

            <div class="text-justify my-10">
                <h2 class="text-xl font-semibold mb-4">General Questions</h2>

                <div class="mb-4">
                    <h3 class="text-lg font-semibold">1. What is STEP TO SUCCESS SCHOOL?</h3>
                    <p>STEP TO SUCCESS SCHOOL is a leading educational institution committed to providing quality education and fostering holistic development in students. We inspire and empower our students to become responsible global citizens, lifelong learners, and compassionate leaders.</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-lg font-semibold">2. How can I contact the school?</h3>
                    <p>If you have any questions or need to get in touch with us, you can reach us via email at <a href="mailto:info@step2successschool.com" class="text-blue-600">info@step2successschool.com</a>. Alternatively, you can call us at (123) 456-7890.</p>
                </div>

                <!-- Add more general questions here -->

                <h2 class="text-xl font-semibold mb-4">Admissions</h2>

                <div class="mb-4">
                    <h3 class="text-lg font-semibold">1. How do I apply for admission to the school?</h3>
                    <p>Our admissions process is straightforward. You can start by filling out our online application form on our website. Once your application is received, our admissions team will guide you through the next steps.</p>
                </div>

                <div class="mb-4">
                    <h3 class="text-lg font-semibold">2. What are the admission requirements?</h3>
                    <p>Admission requirements may vary by grade level. Please visit our <a href="{{url('/admissions')}}" class="text-blue-600">Admissions page</a> for detailed information on admission requirements for each grade.</p>
                </div>

                <!-- Add more admissions-related questions here -->
            </div>
        </div>
    </div>






</div>


@endsection
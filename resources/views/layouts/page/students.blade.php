@extends('layouts.app')
@section('title', 'Students')

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
                <a href="{{url('/page/students')}}" style="color: #A0D053;">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-2 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg> -->
                    Students
                </a>
            </li>

        </ul>
    </div>


    <div class="bg-gray-100 min-h-screen py-8">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold text-center mb-8">Our Students</h1>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Student Card 1 -->
                <div class="rounded-lg bg-white shadow-lg p-4">
                    <img src="/public/image/student/student1.jpg" alt="Student 1" class="w-full h-auto rounded-md mb-4">
                    <h2 class="text-lg font-semibold mb-2">Student Name 1</h2>
                    <p class="text-gray-600">Subject/Department: [Insert Subject/Department]</p>
                    <p class="text-gray-600">Email: <a href="mailto:Student1@email.com" class="text-blue-600">Student1@email.com</a></p>
                </div>

                <!-- Student Card 2 -->
                <div class="rounded-lg bg-white shadow-lg p-4">
                    <img src="/public/image/student/student2.png" alt="Student 2" class="w-full h-auto rounded-md mb-4">
                    <h2 class="text-lg font-semibold mb-2">Student Name 2</h2>
                    <p class="text-gray-600">Subject/Department: [Insert Subject/Department]</p>
                    <p class="text-gray-600">Email: <a href="mailto:Student2@email.com" class="text-blue-600">Student2@email.com</a></p>
                </div>

                <!-- Student Card 3 -->
                <div class="rounded-lg bg-white shadow-lg p-4">
                    <img src="/public/image/student/student3.jpg" alt="Student 3" class="w-full h-auto rounded-md mb-4">
                    <h2 class="text-lg font-semibold mb-2">Student Name 3</h2>
                    <p class="text-gray-600">Subject/Department: [Insert Subject/Department]</p>
                    <p class="text-gray-600">Email: <a href="mailto:Student3@email.com" class="text-blue-600">Student3@email.com</a></p>
                </div>
                <!-- Student Card 4 -->
                <div class="rounded-lg bg-white shadow-lg p-4">
                    <img src="/public/image/student/student2.png" alt="Student 2" class="w-full h-auto rounded-md mb-4">
                    <h2 class="text-lg font-semibold mb-2">Student Name 2</h2>
                    <p class="text-gray-600">Subject/Department: [Insert Subject/Department]</p>
                    <p class="text-gray-600">Email: <a href="mailto:Student2@email.com" class="text-blue-600">Student2@email.com</a></p>
                </div>

                <!-- Student Card 5 -->
                <div class="rounded-lg bg-white shadow-lg p-4">
                    <img src="/public/image/student/student3.jpg" alt="Student 3" class="w-full h-auto rounded-md mb-4">
                    <h2 class="text-lg font-semibold mb-2">Student Name 3</h2>
                    <p class="text-gray-600">Subject/Department: [Insert Subject/Department]</p>
                    <p class="text-gray-600">Email: <a href="mailto:Student3@email.com" class="text-blue-600">Student3@email.com</a></p>
                </div>
                <!-- Add more Student cards as needed -->
            </div>
        </div>
    </div>
</div>






</div>


@endsection
@extends('layouts.app')
@section('title', 'Exam Routine')

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
                    <svg xmlns="http://w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-2 stroke-current">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path>
                    </svg>
                    Page
                </a>
            </li>
            <li>
                <a href="{{url('/exam-routine')}}" style="color: #A0D053;">
                    Exam Routine
                </a>
            </li>
        </ul>
    </div>
    
    <div class="bg-gray-100 min-h-screen py-8">
        <div class container mx-auto">
            <h1 class="text-3xl font-semibold text-center mb-8">Exam Routine</h1>
            <div class="text-justify my-10">
                <h2 class="text-xl font-semibold mb-4">Upcoming Exams</h2>
                <p>Here is the schedule for the upcoming exams:</p>
                <table class="table-auto w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2">Date</th>
                            <th class="px-4 py-2">Time</th>
                            <th class="px-4 py-2">Subject</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border px-4 py-2">2023-11-15</td>
                            <td class="border px-4 py-2">10:00 AM - 12:00 PM</td>
                            <td class="border px-4 py-2">Mathematics</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">2023-11-18</td>
                            <td class="border px-4 py-2">02:00 PM - 04:00 PM</td>
                            <td class="border px-4 py-2">Science</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">2023-11-18</td>
                            <td class="border px-4 py-2">02:00 PM - 04:00 PM</td>
                            <td class="border px-4 py-2">Science</td>
                        </tr>
                        <tr>
                            <td class="border px-4 py-2">2023-11-18</td>
                            <td class="border px-4 py-2">02:00 PM - 04:00 PM</td>
                            <td class="border px-4 py-2">Science</td>
                        </tr>
                        <!-- Add more exam details here -->
                    </tbody>
                </table>

                <h2 class="text-xl font-semibold my-4">Important Notes</h2>
                <ul class="list-disc pl-5">
                    <li>Make sure to arrive at the exam venue 30 minutes before the start time.</li>
                    <li>Bring your valid identification card and stationery for the exam.</li>
                    <li>If you have any scheduling conflicts, contact the exam coordinator immediately.</li>
                </ul>

                <h2 class="text-xl font-semibold my-4">Exam Venue Information</h2>
                <p>Here are the details of the exam venues:</p>
                <ul class="list-disc pl-5">
                    <li><strong>Mathematics Exam:</strong> Room 101, Main Building</li>
                    <li><strong>Science Exam:</strong> Auditorium, West Wing</li>
                    <!-- Add more venue details here -->
                </ul>
            </div>
        </div>
    </div>
</div>

@endsection

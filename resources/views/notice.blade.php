@extends('layouts.app')
@section('title', 'Notice Page')

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
            <a href="{{url('/contact')}}" style="color: #A0D053;">

                Notice
            </a>
        </li>

    </ul>
</div>

<div class="bg-gray-100 min-h-screen py-8">
    <div class="container mx-auto">
  
        <h1 class="text-3xl font-semibold text-center mb-8">School Notices</h1>
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Important Notices</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="card shadow-lg p-4">
                    <h3 class="text-lg font-semibold mb-2">School Closure Due to Weather</h3>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. School will be closed on October 28th due to inclement weather.</p>
                    <a href="{{asset('fontend')}}/assets/files/notice.pdf" class="text-green-500 font-semibold hover:underline">
                        <i class="fas fa-download"></i> Download PDF
                    </a>
                </div>
                <div class="card shadow-lg p-4">
                    <h3 class="text-lg font-semibold mb-2">Parent-Teacher Conference Reminder</h3>
                    <p class="text-gray-600">A friendly reminder that the parent-teacher conferences will be held on November 5th. Please schedule your appointments.</p>
                    <a href="{{asset('fontend')}}/assets/files/notice.pdf" class="text-green-500 font-semibold hover:underline">
                        <i class="fas fa-download"></i> Download PDF
                    </a>
                </div>
            </div>
        </section>
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Upcoming Events</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="card shadow-lg p-4">
                    <h3 class="text-lg font-semibold mb-2">School Fundraising Gala</h3>
                    <p class="text-gray-600">Join us for an exciting fundraising gala on October 30th. Your support is greatly appreciated.</p>
                    <a href="{{asset('fontend')}}/assets/files/notice.pdf" class="text-green-500 font-semibold hover:underline">
                        <i class="fas fa-download"></i> Download PDF
                    </a>
                </div>
                <div class="card shadow-lg p-4">
                    <h3 class="text-lg font-semibold mb-2">Student Science Fair</h3>
                    <p class="text-gray-600">Don't miss the student science fair scheduled for November 15th. Students will showcase their scientific discoveries.</p>
                    <a href="{{asset('fontend')}}/assets/files/notice.pdf" class="text-green-500 font-semibold hover:underline">
                        <i class="fas fa-download"></i> Download PDF
                    </a>
                </div>
            </div>
        </section>
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Academic Achievements</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="card shadow-lg p-4">
                    <h3 class="text-lg font-semibold mb-2">National Math Olympiad Winners</h3>
                    <p class="text-gray-600">Congratulations to our students who excelled in the National Math Olympiad and brought home several awards.</p>
                    <a href="{{asset('fontend')}}/assets/files/notice.pdf" class="text-green-500 font-semibold hover:underline">
                        <i class="fas fa-download"></i> Download PDF
                    </a>
                </div>
                <div class="card shadow-lg p-4">
                    <h3 class="text-lg font-semibold mb-2">Debate Team Success</h3>
                    <p class="text-gray-600">Our school's debate team recently won first place in the regional debate competition. Kudos to our talented debaters!</p>
                    <a href="{{asset('fontend')}}/assets/files/notice.pdf" class="text-green-500 font-semibold hover:underline">
                        <i class="fas fa-download"></i> Download PDF
                    </a>
                </div>
            </div>
        </section>
    </div>
</div>


@endsection
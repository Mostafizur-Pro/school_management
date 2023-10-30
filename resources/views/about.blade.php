@extends('layouts.app')
@section('title', 'About Page')

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
            <a href="{{url('/about')}}" style="color: #A0D053;">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-2 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg> -->
                About Us
            </a>
        </li>

    </ul>
</div>

<div class="bg-gray-100 min-h-screen py-8">
    <div class="container mx-auto">
        <h1 class="text-3xl font-semibold text-center mb-8">About Us</h1>

        <!-- Section: Our Story -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Our Story</h2>
            <p class="text-gray-600 text-justify">
                Welcome to STEP TO SUCCESS SCHOOL, where education meets excellence. Our journey began with a vision to provide quality education and foster holistic development in every child. Since our inception, we have been dedicated to nurturing young minds and empowering them to reach their full potential.
            </p>
            <p class="text-gray-600 text-justify">
                Our story is one of passion, dedication, and the pursuit of knowledge. We believe in creating a vibrant learning environment that encourages creativity, critical thinking, and a love for learning.
            </p>
        </section>

        <!-- Section: Our Mission -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Our Mission</h2>
            <p class="text-gray-600 text-justify">
                At STEP TO SUCCESS SCHOOL, our mission is to inspire and empower our students to become responsible global citizens, lifelong learners, and compassionate leaders. We strive to provide a nurturing, inclusive, and innovative educational experience that equips students with the skills and values they need to succeed in a dynamic world.
            </p>
        </section>

        <!-- Section: Our Team -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Meet Our Team</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                <!-- Team Member 1 -->
                <div class="card shadow-lg p-4">
                    <img src="public/image/teacher/haris-2023-04-02.jpg" alt="Team Member 1" class="w-32 h-32 rounded-full mb-4">
                    <h3 class="text-lg font-semibold mb-2">John Doe</h3>
                    <p class="text-gray-600">Principal</p>
                </div>

                <!-- Team Member 2 -->
                <div class="card shadow-lg p-4">
                    <img src="public/image/teacher/jeams-2023-04-17.jpg" alt="Team Member 1" class="w-32 h-32 rounded-full mb-4">
                    <h3 class="text-lg font-semibold mb-2">Jane Smith</h3>
                    <p class="text-gray-600">Head of Curriculum</p>
                </div>

                <!-- Team Member 3 -->
                <div class="card shadow-lg p-4">
                    <img src="public/image/teacher/jell-2023-04-16.jpg" alt="Team Member 1" class="w-32 h-32 rounded-full mb-4">
                    <h3 class="text-lg font-semibold mb-2">Michael Johnson</h3>
                    <p class="text-gray-600">Admissions Coordinator</p>
                </div>
            </div>
        </section>

        <!-- Section: Contact Us -->
        <section class="mb-8">
            <h2 class="text-2xl font-semibold mb-4">Contact Us</h2>
            <p class="text-gray-600 text-justify">
                If you have any questions or would like to learn more about STEP TO SUCCESS SCHOOL, please feel free to contact us. Our dedicated team is here to assist you.
            </p>
            <p class="text-gray-600">
                Email: info@step2successschool.com<br>
                Phone: (123) 456-7890<br>
                Address: 123 School Lane, Cityville, State 12345
            </p>
        </section>
    </div>
</div>



<div class="row">
    <div class="col-xl-12">
        <div class="notice">
            <div class="title">
                <h2>Notice</h2>
            </div>
            <div class="notice-item demo1">



                <ul class="notice-title-item flex gap-5">
                    <!-- Single Notice Item -->
                    <li>
                        <div class="card shadow-lg p-4">
                            <img src="public/image/teacher/jell-2023-04-16.jpg" alt="Team Member 1" class="w-32 h-32 rounded-full mb-4">
                            <h3 class="text-lg font-semibold mb-2">Michael 1</h3>
                            <p class="text-gray-600">Admissions Coordinator</p>
                        </div>
                    </li>
                    <!-- Single Notice Item -->
                    <li>
                        <div class="card shadow-lg p-4">
                            <img src="public/image/teacher/jell-2023-04-16.jpg" alt="Team Member 1" class="w-32 h-32 rounded-full mb-4">
                            <h3 class="text-lg font-semibold mb-2">Michael 2</h3>
                            <p class="text-gray-600">Admissions Coordinator</p>
                        </div>
                    </li>
                    <!-- Single Notice Item -->
                    <li>
                        <div class="card shadow-lg p-4">
                            <img src="public/image/teacher/jell-2023-04-16.jpg" alt="Team Member 1" class="w-32 h-32 rounded-full mb-4">
                            <h3 class="text-lg font-semibold mb-2">Michael 3</h3>
                            <p class="text-gray-600">Admissions Coordinator</p>
                        </div>
                    </li>
                    <!-- Single Notice Item -->
                    <li>
                        <div class="card shadow-lg p-4">
                            <img src="public/image/teacher/jell-2023-04-16.jpg" alt="Team Member 1" class="w-32 h-32 rounded-full mb-4">
                            <h3 class="text-lg font-semibold mb-2">Michael 4</h3>
                            <p class="text-gray-600">Admissions Coordinator</p>
                        </div>
                    </li>
                    <!-- Single Notice Item -->
                    <li>
                        <div class="card shadow-lg p-4">
                            <img src="public/image/teacher/jell-2023-04-16.jpg" alt="Team Member 1" class="w-32 h-32 rounded-full mb-4">
                            <h3 class="text-lg font-semibold mb-2">Michael 5</h3>
                            <p class="text-gray-600">Admissions Coordinator</p>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>



@endsection
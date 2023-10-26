@extends('layouts.app')
@section('title', 'Admission Prospectus')

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
            <a href="{{url('/about')}}" style="color: #A0D053;">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-2 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg> -->
                Admission Prospectus
            </a>
        </li>

    </ul>
</div>

<div class="bg-gray-100 min-h-screen py-8">
    <div class="container mx-auto">
      

        <h1 class="text-3xl font-semibold text-center mb-8">Admission Prospectus</h1>

        <!-- Your admission prospectus content goes here -->
        <div class="text-justify my-10">
            <h2 class="text-xl font-semibold mb-4">Welcome to Our School</h2>
            <p>This is a sample introduction to your school and the prospectus. You can provide an overview of your school's vision, mission, and values.</p>
        </div>

        <div class="text-justify my-10">
            <h2 class="text-xl font-semibold mb-4">Admission Requirements</h2>
            <p>Here, you can outline the admission requirements for different grade levels. Include any specific documentation or criteria that applicants need to meet.</p>
        </div>

        <!-- Add more content, such as curriculum details, campus facilities, and other prospectus information -->
    </div>
</div>




@endsection
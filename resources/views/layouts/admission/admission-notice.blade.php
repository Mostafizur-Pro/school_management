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



        <div class="">
            <div class="title">
                <h2>Notice</h2>
            </div>
            <div class="notice-item ">
                <ul>
                    <!-- Single Notice Item -->
                    <li>
                        <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
                        <span class="notice-post-download">
                            <p><i class="fas fa-calendar-alt"></i>20 Feb, 2023</p>
                            <a target="	_blank" href="{{asset('fontend')}}/assets/files/notice.pdf"><i class="fas fa-download"></i>Download</a>
                        </span>
                    </li>
                    <!-- Single Notice Item -->
                    <li>
                        <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
                        <span class="notice-post-download">
                            <p><i class="fas fa-calendar-alt"></i>20 Feb, 2023</p>
                            <a target="	_blank" href="{{asset('fontend')}}/assets/files/notice.pdf"><i class="fas fa-download"></i>Download</a>
                        </span>
                    </li>
                    <!-- Single Notice Item -->
                    <li>
                        <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
                        <span class="notice-post-download">
                            <p><i class="fas fa-calendar-alt"></i>20 Feb, 2023</p>
                            <a target="	_blank" href="{{asset('fontend')}}/assets/files/notice.pdf"><i class="fas fa-download"></i>Download</a>
                        </span>
                    </li>
                    <!-- Single Notice Item -->
                    <li>
                        <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
                        <span class="notice-post-download">
                            <p><i class="fas fa-calendar-alt"></i>20 Feb, 2023</p>
                            <a target="	_blank" href="{{asset('fontend')}}/assets/files/notice.pdf"><i class="fas fa-download"></i>Download</a>
                        </span>
                    </li>
                    <!-- Single Notice Item -->
                    <li>
                        <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry</h4>
                        <span class="notice-post-download">
                            <p><i class="fas fa-calendar-alt"></i>20 Feb, 2023</p>
                            <a target="	_blank" href="{{asset('fontend')}}/assets/files/notice.pdf"><i class="fas fa-download"></i>Download</a>
                        </span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>




@endsection
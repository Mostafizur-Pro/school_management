@extends('layouts.app')
@section('title', 'Admit Card')

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
                <a href="{{url('/admit-card')}}" style="color: #A0D053;">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-2 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg> -->
                    Admit Card
                </a>
            </li>

        </ul>
    </div>



</div>

<div class="bg-gray-100 min-h-screen py-8">
    <div class="container mx-auto">
        <h1 class="text-3xl font-semibold text-center mb-8">Admit Card Details</h1>
        <div class="text-justify my-10">
            <!-- Add content related to Admit Card Details here -->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a risus a libero viverra congue. Sed euismod tellus id vehicula. Integer sit amet efficitur arcu. Proin ac felis a nulla suscipit vehicula.</p>
            <!-- Add more content here -->
        </div>
    </div>
</div>



</div>


@endsection
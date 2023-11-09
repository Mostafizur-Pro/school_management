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



        <form method="POST" class="my-4">
            @csrf
            <div class="mb-4">
                <label for="roll">Roll Number:</label>
                <input type="text" class="form-control" id="roll" name="roll" required>
            </div>
            <div class="mb-4">
                <label for="year">Passing Year</label>
                <select class="form-control" id="year" name="year" required>
                    @for ($i = 2018; $i <= 2026; $i++) <option value="{{ $i }}">{{ $i }}</option>
                        @endfor
                </select>
            </div>

            <div class="mb-4">
                <label for="class">Select Your Class</label>
                <select class="form-control" id="year" name="year" required>
                    @for ($i = 1; $i <= 12; $i++) <option value="{{ $i }}">Class {{ $i }}</option>
                        @endfor
                </select>
                
            </div>

            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded">Search</button>
        </form>

        <!-- Add more grade-level results and instructions as needed -->
    </div>
</div>



@endsection
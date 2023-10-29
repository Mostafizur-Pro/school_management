@extends('layouts.app')
@section('title', 'Exam Result')

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
                <a href="{{url('/exam-result')}}" style="color: #A0D053;">
                    <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-2 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg> -->
                    Exam Result
                </a>
            </li>

        </ul>
    </div>
</div>
<div class="bg-gray-100 min-h-screen py-8">
    <div class="container mx-auto">
        <h1 class="text-3xl font-semibold text-center mb-8">Exam Result</h1>
        <div class="text-justify my-10">
            <h2 class="text-xl font-semibold mb-4">Checking Your Exam Result</h2>
            <p>To check your exam results, follow these steps:</p>
            <ol class="list-decimal pl-5">
                <li>Visit our official website.</li>
                <li>Log in to your student account using your credentials.</li>
                <li>Locate the "Exam Results" section on your dashboard.</li>
                <li>Select the exam for which you want to view the results.</li>
                <li>Your results will be displayed on the screen.</li>
            </ol>

            <h2 class="text-xl font-semibold mb-4">Important Information</h2>
            <p>Here are some important details regarding exam results:</p>
            <ul class="list-disc pl-5">
                <li>Results will be available for viewing two weeks after the examination date.</li>
                <li>If you encounter any issues or discrepancies in your results, please contact our support team immediately.</li>
            </ul>
        </div>
    </div>
</div>

<!-- Add a card with a result summary -->
<div class="bg-white p-4 rounded-lg shadow-md">
    <h2 class="text-2xl font-semibold mb-4">Your Exam Result</h2>
    <p>You can check your exam result by following the instructions provided above. Make sure to log in to your student account to access your result.</p>
    <p>If you have any questions or need assistance, feel free to reach out to our support team.</p>
</div>


</div>


@endsection
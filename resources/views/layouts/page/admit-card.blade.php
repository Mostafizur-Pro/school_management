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

<div class="container mx-auto p-8">
        <h1 class="text-3xl font-semibold text-center mb-8">Admit Card Details</h1>
        
        <!-- Search Form -->
        <form id="searchForm" class="text-center my-4">
            <div class="space-x-2 mb-4">
                <label for="admitCardNumber" class="font-semibold">Admit Card Number:</label>
                <input type="text" id="admitCardNumber" class="input input-bordered input-accent w-full max-w-xs" placeholder="Enter Admit Card Number">
                <button type="button" class="btn bg-green-400" onclick="searchAdmitCard()">Search</button>
            </div>
        </form>
        
        <!-- Search Results -->
        <div id="searchResults" class="text-justify my-10">
            <!-- Search results will be displayed here -->
        </div>
        
        <!-- PDF Download Links -->
        <div id="pdfDownloads" class="my-4">
            <a href="admit_card_1.pdf" class="btn btn-primary" download>Download Admit Card 1 (PDF)</a>
            <a href="admit_card_2.pdf" class="btn btn-primary" download>Download Admit Card 2 (PDF)</a>
            <!-- Add more PDF download links as needed -->
        </div>
    </div>

    <script>
        function searchAdmitCard() {
            // Implement the search functionality here.
        }
    </script>

</div>


@endsection
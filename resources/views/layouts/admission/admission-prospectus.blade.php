@extends('layouts.app')
@section('title', 'Admission Prospectus')

@section('content')

<script src="https://cdnjs.cloudflare.com/ajax/libs/pdf.js/2.13.347/pdf.js"></script>


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
            <a href="{{url('/admission/admission-prospectus')}}" style="color: #A0D053;">
                <!-- <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" class="w-4 h-4 mr-2 stroke-current"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7v10a2 2 0 002 2h14a2 2 0 002-2V9a2 2 0 00-2-2h-6l-2-2H5a2 2 0 00-2 2z"></path></svg> -->
                Admission Prospectus
            </a>
        </li>
    </ul>
</div>


<div>
    <div class="bg-gray-100 min-h-screen py-8">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold text-center mb-8">Admission Prospectus</h1>
            <!-- Your other HTML content -->
            <div id="pdf-container">
                <canvas id="pdf-render"></canvas>
            </div>
            <div class="text-center my-4">
                <button id="prev-page">Previous Page</button>
                <span>Page <span id="page-num"></span></span>
                <button id="next-page">Next Page</button>
            </div>
            <a href="{{asset('public/pdf/pdf.pdf')}}" download>Download PDF</a>
        </div>
    </div>

    <script>
        const pdfContainer = document.getElementById("pdf-container");
        const pdfRender = document.getElementById("pdf-render");
        const prevPageButton = document.getElementById("prev-page");
        const nextPageButton = document.getElementById("next-page");
        const pageNumSpan = document.getElementById("page-num");
        let pdfDoc = null;
        let pageNum = 1;
        let scale = 1.5; // You can adjust the scale as needed

        // Function to render a specific PDF page
        function renderPage(num) {
            pdfDoc.getPage(num).then((page) => {
                const viewport = page.getViewport({
                    scale
                });
                pdfRender.width = viewport.width;
                pdfRender.height = viewport.height;
                const renderContext = {
                    canvasContext: pdfRender.getContext("2d"),
                    viewport: viewport,
                };
                page.render(renderContext);
            });
            pageNumSpan.textContent = num;
        }

        // Load the PDF document
        PDFJS.getDocument("public/pdf/pdf.pdf").promise.then((pdf) => {
            pdfDoc = pdf;
            console.log(pdfDoc)
            renderPage(pageNum);

            prevPageButton.addEventListener("click", () => {
                if (pageNum <= 1) return;
                pageNum--;
                renderPage(pageNum);
            });

            nextPageButton.addEventListener("click", () => {
                if (pageNum >= pdfDoc.numPages) return;
                pageNum++;
                renderPage(pageNum);
            });
        });
    </script>
</div>


@endsection
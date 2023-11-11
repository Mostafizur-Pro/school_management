@extends('layouts.app')
@section('title', 'Gallery Page')

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
            <a href="{{url('/gallery')}}" style="color: #A0D053;"> Gallery </a>
        </li>

    </ul>
</div>





<!-- Gallery Section -->
<div class="container mt-5">
    <a class="navbar-brand" href="#">Professional Gallery</a>
    <div class="row gallery">
        <!-- Add your gallery images here -->
        <div class="col-md-4 mb-4">
            <a href="https://img.freepik.com/premium-photo/cute-kids-reading-books-bench_392895-191864.jpg?size=626&ext=jpg&ga=GA1.1.1826414947.1699228800&semt=ais" data-lightbox="gallery" data-title="Image 1">
                <img src="https://img.freepik.com/premium-photo/cute-kids-reading-books-bench_392895-191864.jpg?size=626&ext=jpg&ga=GA1.1.1826414947.1699228800&semt=ais" alt="Image 1">
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a href="https://www.shutterstock.com/shutterstock/photos/110043020/display_1500/stock-photo-group-of-teen-school-child-with-book-isolated-110043020.jpg" data-lightbox="gallery" data-title="Image 2">
                <img src="https://www.shutterstock.com/shutterstock/photos/110043020/display_1500/stock-photo-group-of-teen-school-child-with-book-isolated-110043020.jpg" alt="Image 2">
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a href="https://www.shutterstock.com/image-photo/outdoor-portrait-happy-modern-caucasian-260nw-2173322939.jpg" data-lightbox="gallery" data-title="Image 3">
                <img src="https://www.shutterstock.com/image-photo/outdoor-portrait-happy-modern-caucasian-260nw-2173322939.jpg" alt="Image 3">
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a href="https://t4.ftcdn.net/jpg/06/45/77/41/360_F_645774115_TuwYuUOkYgBYkWOA4LcnnJrVnhStEWxp.jpg" data-lightbox="gallery" data-title="Image 4">
                <img src="https://t4.ftcdn.net/jpg/06/45/77/41/360_F_645774115_TuwYuUOkYgBYkWOA4LcnnJrVnhStEWxp.jpg" alt="Image 4">
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a href="https://t4.ftcdn.net/jpg/00/91/41/55/360_F_91415504_IadwBN3POlQ9eZtINs9thWj9OSZ78YwG.jpg" data-lightbox="gallery" data-title="Image 5">
                <img src="https://t4.ftcdn.net/jpg/00/91/41/55/360_F_91415504_IadwBN3POlQ9eZtINs9thWj9OSZ78YwG.jpg" alt="Image 5">
            </a>
        </div>
        <div class="col-md-4 mb-4">
            <a href="https://previews.123rf.com/images/tomwang/tomwang1605/tomwang160500081/56817014-happy-group-of-the-college-students-isolated-on-white.jpg" data-lightbox="gallery" data-title="Image 6">
                <img src="https://previews.123rf.com/images/tomwang/tomwang1605/tomwang160500081/56817014-happy-group-of-the-college-students-isolated-on-white.jpg" alt="Image 6">
            </a>
        </div>
        <!-- Repeat the above structure for more images -->
    </div>
</div>




@endsection
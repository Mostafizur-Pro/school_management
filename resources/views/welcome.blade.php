@extends('layouts.app')
@section('title', 'NEDUBD SCHOOL')

@section('content')


<!--start news area-->
@include('components/welcome/news')
<!--End news area-->

<!-- Start Middle Content Area -->
@include('components/welcome/middleContent')
<!-- End Middle Content Area -->


@endsection
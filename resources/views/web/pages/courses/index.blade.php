@extends('web.app.app')
@section('main-body')
<div class="page-banner bg-color-05" style="margin-top: 150.639px;">
    <div class="page-banner__wrapper" style="margin-top: 150.639px;">
        <div class="container">

            <!-- Page Breadcrumb Start -->
            <div class="page-breadcrumb">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                    <li class="breadcrumb-item active">Courses</li>
                </ul>
            </div>
            <!-- Page Breadcrumb End -->

            <!-- Page Banner Caption Start -->
            <div class="page-banner__caption text-center">
                <h2 class="page-banner__main-title">Courses</h2>
            </div>
            <!-- Page Banner Caption End -->

        </div>
    </div>
</div>

<div class="courses-section section-padding-01">
    <div class="container">


        <div class="row gy-6">
            <div class="col-xl-3 col-lg-4 col-sm-6">

                <!-- Course Start -->
                @include('web.component.course')
                <!-- Course End -->

            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">

                <!-- Course Start -->
                @include('web.component.course')
                <!-- Course End -->

            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">

                <!-- Course Start -->
                @include('web.component.course')
                <!-- Course End -->

            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">

                <!-- Course Start -->
                @include('web.component.course')
                <!-- Course End -->

            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">

                <!-- Course Start -->
                @include('web.component.course')
                <!-- Course End -->

            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">

                <!-- Course Start -->
                @include('web.component.course')
                <!-- Course End -->

            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6">

                <!-- Course Start -->
                @include('web.component.course')
                <!-- Course End -->

            </div>

        </div>

        <!-- Page Pagination Start -->
        <div class="page-pagination">
            <ul class="pagination justify-content-center">
                <li><a class="active" href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#"><i class="fas fa-angle-double-right"></i></a></li>
            </ul>
        </div>
        <!-- Page Pagination End -->

    </div>
</div>
@endsection
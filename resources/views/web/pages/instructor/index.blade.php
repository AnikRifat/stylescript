@extends('web.app.app')

@section('main-body')


    <!-- Page Header -->
    <div class="page-banner bg-color-05" style="margin-top: 150.639px;">
        <div class="page-banner__wrapper" style="margin-top: 150.639px;">
            <div class="container">

                <!-- Page Breadcrumb Start -->
                <div class="page-breadcrumb">
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Instructors</li>
                    </ul>
                </div>
                <!-- Page Breadcrumb End -->

                <!-- Page Banner Caption Start -->
                <div class="page-banner__caption text-center">
                    <h2 class="page-banner__main-title">Instructors</h2>
                </div>
                <!-- Page Banner Caption End -->

            </div>
        </div>
    </div>

    <!-- End Page Header -->

    <!-- Instructor List -->
    <section class="layout-pt-md layout-pb-lg">
        <div class="container animated">

            <div class="row g-4">
                @foreach ($instructors as $instructor)
                <div class="col-lg-3 col-md-6">
                    <div data-anim-child="slide-left delay-2" class="teamCard -type-1 is-in-view">
                        <div class="teamCard__image">
                            <a href="{{ route('instructor.details', $instructor->id) }}">
                                <img src="{{ asset('uploads/instructors/' . $instructor->instructor->image) }}"
                                  alt="Instructor Image" class="img-fluid">
                            </a>
                        </div>
                        <div class="teamCard__content">
                            <h4 class="teamCard__title">{{ $instructor->name }}</h4>
                            <p class="teamCard__text">{{ $instructor->instructor->subjects->title }}</p>
                            <div class="d-flex align-items-center pt-2">
                                <div class="icon-play text-14 me-2"></div>
                                <span class="text-13 lh-1">{{ $instructor->instructor->courses->count() }} Course</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- End Instructor List -->

@endsection

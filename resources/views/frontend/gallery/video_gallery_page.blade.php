@extends('frontend.master')
@section('title')
    Services
@endsection
@section('content')

    <!-- Content Wrapper Start -->
    <div class="content-wrapper">

        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap bg-f" style="background-image: url({{asset($banner->image)}});">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>Video Gallery</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{route('front.page')}}">Home </a></li>
                        <li>Video Gallery</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Service Section Start -->
        <section class="service-wrap ptb-100">
            <div class="container">
                <div class="row ">
                    @foreach($galleries as $gallery)
                        <div class="col-lg-6 col-12">
                            {!! $gallery->video_link !!}
                        </div>
                    @endforeach

                </div>
            </div>
        </section>

        <!-- Service Section End -->

    </div>
    <!-- Content wrapper end -->
@endsection

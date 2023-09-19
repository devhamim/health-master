@extends('frontend.master')
@section('title')
    About
@endsection
@section('content')

<!-- Content Wrapper Start -->
<div class="content-wrapper">

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f" style="background-image: url({{asset($about->banner_image)}});">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>About Us</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{route('front.page')}}">Home</a></li>
                    <li>About Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->

    <!-- About Section Start -->
    <section class="about-wrap style1 ptb-100">
        <div class="container">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="about-img-wrap">
                        <img src="{{asset($about->image1??null)}}" alt="Image" class="about-img-one">
                        <img src="{{asset($about->image2??null)}}" alt="Image" class="about-img-two">

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-content">
                        <div class="content-title style1">
                            <span>About Our Program</span>
                        </div>
                        {!! $about->page_details??null !!}

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Section End -->


    <!-- Testimonial Section Start -->
    <section class="testimonial-wrap style2 ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2  col-md-10 offset-md-1">
                    <div class="section-title style1 text-center mb-40">
                        <span>Testimonial</span>
                        <h2>{{$banner->title??null}}</h2>
                    </div>
                </div>
            </div>
            <div class="testimonial-slider-two owl-carousel">
                @foreach($testimonials as $testimonial)
                <div class="testimonial-card style2">
                    <div class="client-info-area">
                        <div class="client-info-wrap">
                            <div class="client-img">
                                <img src="{{asset($testimonial->image)}}" alt="Image">
                            </div>
                            <div class="client-info">
                                <h3>{{$testimonial->name}}</h3>
                                <span>{{$testimonial->designation}}</span>
                            </div>
                        </div>
                        <div class="quote-icon">
                            <i class="flaticon-straight-quotes"></i>
                        </div>
                    </div>

                    <ul class="ratings list-style">
                        @for($i=0;$i<$testimonial->star;$i++)
                            <li><i class="ri-star-fill"></i></li>
                        @endfor
                    </ul>
                    <p class="client-quote">{!! $testimonial->review !!}</p>
                </div>
                @endforeach
            </div>

        </div>
    </section>
    <!-- Testimonial Section End -->



</div>
<!-- Content wrapper end -->
@endsection

@extends('frontend.master')
@section('title')
    details
@endsection
@section('content')

<!-- Content Wrapper Start -->
<div class="content-wrapper">

    <!-- Breadcrumb Start -->
    <div class="breadcrumb-wrap bg-f" style="background-image: url({{asset($service->banner_image)}});">
        <div class="container">
            <div class="breadcrumb-title">
                <h2>Service Details</h2>
                <ul class="breadcrumb-menu list-style">
                    <li><a href="{{route('front.page')}}">Home </a></li>
                    <li>Service Details</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Breadcrumb End -->


    <!-- Service Details section Start -->
    <section class="service-details-wrap ptb-100">
        <div class="container">
            <div class="row gx-5">
                <div class="col-xl-12">
                    <div class="service-desc">
                        {!! $service->service_details1 !!}
                        <div class="row">
                            <div class="col-md-6">
                                <a class="single-service-img" data-fancybox="gallery">
                                    <img src="{{asset($service->details_image1)}}" alt="Image">
                                </a>
                            </div>
                            <div class="col-md-6">
                                <a class="single-service-img" data-fancybox="gallery" >
                                    <img src="{{asset($service->details_image2)}}" alt="Image">
                                </a>
                            </div>
                        </div>
                        {!! $service->service_details2 !!}
                        <a class="single-service-img" data-fancybox="gallery" >
                            <img src="{{asset($service->details_image3)}}" alt="Image">
                        </a>
                        {!! $service->service_details3 !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Service Details section End -->


</div>
<!-- Content wrapper end -->
@endsection

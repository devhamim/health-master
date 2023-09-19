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
                    <h2>Services</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{route('front.page')}}">Home </a></li>
                        <li>Services</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Service Section Start -->
        <section class="service-wrap ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach($services as $service)
                        <div class="col-xl-4 col-lg-6 col-md-6">
                            <div class="service-card style1">
                                <div class="service-img">
                                    <img src="{{asset($service->main_image)}}" height="250px" width="100%" alt="Image">
                                </div>
                                <div class="service-info">
                                    <h3><a href="{{route('services.details',['id'=>$service->id])}}">{{$service->service_title}}</a></h3>
                                    <small style="color: white;background-color: #d41414;padding: 3px 5px;border-radius: 3px">Home Service</small>
                                    <p>{!! $service->service_details_small !!}</p>
                                    <a href="{{route('services.details',['id'=>$service->id])}}" class="link style2">Explore More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach


                </div>
                {!! $services->links() !!}
            </div>
        </section>

        <!-- Service Section End -->

    </div>
    <!-- Content wrapper end -->
@endsection

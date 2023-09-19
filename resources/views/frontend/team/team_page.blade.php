@extends('frontend.master')
@section('title')
    Doctors
@endsection
@section('content')


    <!-- Content Wrapper Start -->
    <div class="content-wrapper">

        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap bg-f" style="background-image: url({{asset($banner->image)}});">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>Our Doctors</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{route('front.page')}}">Home</a></li>
                        <li>Doctors</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Team Section Start -->
        <section class="team-wrap ptb-100">
            <div class="container">
                @foreach($services as $service)
                <h3 class="my-2 text-center">{{$service->service_title}}</h3>
                <div class="row justify-content-center">
                    @foreach($teams as $team)
                        @if($team->service_id==$service->id)
                    <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                        <div class="team-card style2">
                            <img src="{{asset($team->image)}}" alt="Image">
                            <div class="team-info">
                                <a href="mailto:{{$team->email}}" class="team-mail"><i class="ri-mail-send-line"></i></a>
                                <h3>{{$team->name}}</h3>
                                <span>{{$team->designation}}</span>
                                <ul class="social-profile style2 list-style">
                                    <li>
                                        <a target="_blank" href="{{$team->facebook}}">
                                            <i class="ri-facebook-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="{{$team->youtube}}">
                                            <i class="ri-youtube-fill"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="{{$team->instagram}}">
                                            <i class="ri-instagram-line"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="{{$team->linkedIn}}">
                                            <i class="ri-linkedin-fill"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                        @endif
                    @endforeach
                </div>
                @endforeach
            </div>
        </section>
        <!-- Team Section End -->

    </div>
    <!-- Content wrapper end -->
{{--    <script src="https://cdn.tailwindcss.com"></script>--}}
@endsection

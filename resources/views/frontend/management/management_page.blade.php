@extends('frontend.master')
@section('title')
    Managements
@endsection
@section('content')


    <!-- Content Wrapper Start -->
    <div class="content-wrapper">

        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap bg-f" style="background-image: url({{asset($banner->image)}});">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>Our Managements</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{route('front.page')}}">Home</a></li>
                        <li>Management</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Team Section Start -->
        <section class="team-wrap ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach($managements as $management)
                        <div class="col-xxl-3 col-xl-4 col-lg-4 col-md-6">
                            <div class="team-card style2">
                                <img src="{{asset($management->image)}}" alt="Image">
                                <div class="team-info">
                                    <a href="mailto:{{$management->email}}" class="team-mail"><i class="ri-mail-send-line"></i></a>
                                    <h3>{{$management->name}}</h3>
                                    <span>{{$management->designation}}</span>
                                    <ul class="social-profile style2 list-style">
                                        <li>
                                            <a target="_blank" href="{{$management->facebook}}">
                                                <i class="ri-facebook-fill"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="{{$management->youtube}}">
                                                <i class="ri-youtube-fill"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="{{$management->instagram}}">
                                                <i class="ri-instagram-line"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a target="_blank" href="{{$management->linkedIn}}">
                                                <i class="ri-linkedin-fill"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {!! $managements->links() !!}
                </div>
            </div>
        </section>
        <!-- Team Section End -->

    </div>
    <!-- Content wrapper end -->
    {{--    <script src="https://cdn.tailwindcss.com"></script>--}}
@endsection

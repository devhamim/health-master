@extends('frontend.master')
@section('title')
    Packages
@endsection
@section('content')

    <!-- Content Wrapper Start -->
    <div class="content-wrapper">

        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap bg-f" style="background-image: url({{asset($banner->image)}});">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>Pricing Plan</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{route('front.page')}}">Home </a></li>
                        <li>Pricing Plan</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Pricing Section Start -->
        <section class="pricing-wrap pt-100 pb-75">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach($packages as $package)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="pricing-card">
                            <div class="pricing-header">
                                <div class="pricing-header-left">
                                    <h5>{{$package->name}}</h5>
                                    <h2>${{$package->price}}<span>/Month</span></h2>
                                </div>
                            </div>
                            <ul class="pricing-features list-style">
                                @foreach(json_decode($package->options) as $key=>$option)
                                    @if($option != null)
                                        <li class="checked">{{$option}} <i class="ri-check-line"></i></li>
                                    @endif
                                @endforeach
                            </ul>
                            <a href="{{route('login')}}" class="btn style2">Get Started Now</a>
                        </div>
                    </div>
                    @endforeach
                    {!! $packages->links() !!}
                </div>
            </div>
        </section>
        <!-- Pricing Section End -->

    </div>
    <!-- Content wrapper end -->
@endsection

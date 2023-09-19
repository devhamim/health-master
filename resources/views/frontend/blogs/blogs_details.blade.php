@extends('frontend.master')
@section('title')
    details
@endsection
@section('content')

    <!-- Content Wrapper Start -->
    <div class="content-wrapper">

        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap bg-f" style="background-image: url({{asset($blog->banner_image)}});">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>Blog Details No Sidebar</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{route('front.page')}}">Home </a></li>
                        <li>Blog Details</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Blog Details Section Start -->
        <div class="blog-details-wrap ptb-100">
            <div class="container">
                <div class="row gx-5">
                    <div class="col-xl-10 offset-xl-1 col-lg-12">
                        <article>
                            <div class="post-img">
                                <img src="{{asset($blog->details_image1)}}" alt="Image">
                            </div>

                            <div class="post-para">
                            {!! $blog->details1 !!}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="post-img">
                                            <img src="{{asset($blog->details_image2)}}" alt="Image">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="post-img">
                                            <img src="{{asset($blog->details_image3)}}" alt="Image">
                                        </div>
                                    </div>
                                </div>
                               {!! $blog->details2 !!}
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
        <!-- Blog Details Section End -->

    </div>
    <!-- Content wrapper end -->
@endsection

@extends('frontend.master')
@section('title')
    Blogs
@endsection
@section('content')

    <!-- Content Wrapper Start -->
    <div class="content-wrapper">

        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap bg-f" style="background-image: url({{asset($banner->image)}});">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>Blog No Sidebar</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{route('front.page')}}">Home </a></li>
                        <li>Blogs</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Blog  Section Start -->
        <div class="blog-wrap ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach($blogs as $blog)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="blog-card style2">
                            <div class="blog-img">
                                <img src="{{asset($blog->main_image)}}" alt="Image">
                                @php $timestamp = strtotime($blog->created_at); $month = date('M', $timestamp);@endphp
                                <a href="posts-by-date.html" class="blog-date"><span>{{ $blog->created_at->format('d') }}</span>{{ $month }}</a>
                            </div>
                            <div class="blog-info">
                                {{--                        <ul class="blog-metainfo  list-style">--}}
                                {{--                            <li><i class="ri-user-unfollow-line"></i><a href="posts-by-author.html">Admin</a></li>--}}
                                {{--                            <li><i class="ri-wechat-line"></i>No Comment</li>--}}
                                {{--                        </ul>--}}
                                <h3><a href="blog-details-right-sidebar.html">{{$blog->title}} </a></h3>
                                <p>{!! $blog->short_details !!}</p>
                                <a href="{{route('blogs.details',['id'=>$blog->id])}}" class="link style2">Read More<i class="flaticon-right-arrow"></i></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{$blogs->links()}}
                </div>
            </div>
        </div>
        <!-- Blog Section End -->

    </div>
    <!-- Content wrapper end -->
@endsection

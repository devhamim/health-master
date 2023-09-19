<section class="blog-wrap pt-100 pb-75">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3  col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                <div class="section-title style1 text-center mb-40">
                    <span>Our Blog</span>
                    @foreach($titles as $data)
                        @if($data->page == 'blogs' )
                            <h2>{{$data->title}}</h2>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            @if($blogs != null)
            @php $x=200 @endphp
                <div class="testimonial-slider-two owl-carousel">
            @foreach($blogs as $blog)
            <div class="" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="{{$x+100}}">
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
                </div>
            @endif
        </div>
    </div>
</section>

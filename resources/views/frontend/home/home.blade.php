@extends('frontend.master')
@section('title')
    Home
@endsection
@section('content')


    <!-- Hero Section Start -->
    <section class="hero-wrap style2" style="padding: 0px;">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
{{--            <div class="carousel-indicators">--}}
{{--                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>--}}
{{--                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>--}}
{{--                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>--}}
{{--            </div>--}}
            <div class="carousel-inner mt-5" >
                @foreach($banners as $key =>$banner)
                <div class="carousel-item {{$key == 0?'active':''}}">
                    <div class="img-gradient">
{{--                    <img src="{{asset($banner->image1)}}" class="d-block w-100" style="height: 600px;object-fit: cover;" alt="...">--}}
                    <img src="{{asset($banner->image1)}}" class="d-block w-100 banner-img" alt="...">
                    </div>
{{--                    <div class="container">--}}
{{--                        <div class="row gx-5">--}}
{{--                            <div class="col-lg-6">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <div class="hero-content" data-speed="0.10" data-revert="true">--}}
{{--                                        <h1 data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">{{$banner->title}}</h1>--}}
{{--                                        <p data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">{{$banner->short_details}}</p>--}}
{{--                                        <div class="hero-btn" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">--}}
{{--                                            <a href="{{route('about.page')}}" class="btn style1">Find Out More</a>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="col-lg-6 d-none d-md-block">--}}
{{--                                <div class="hero-appointment" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">--}}
{{--                                    <div class="" style="background-image: url({{$banner->image1}});height: 290px;width: 430px; z-index: 1;background-size: cover;"></div>--}}
{{--                                </div>--}}
{{--                                <div class="hero-doctor" data-aos="fade-up"  data-aos-duration="1200" data-aos-delay="300">--}}
{{--                                    <div class="" style="background-image: url({{$banner->image2}});height: 290px;width: 430px; z-index: 1;background-size: cover;margin-left: auto"></div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
{{--        ...........--}}
{{--        <img src="{{asset('/')}}frontend/assets/img/hero/hero-shape-3.png" alt="Image" class="hero-shape-one bounce">--}}
{{--        <div class="container">--}}
{{--            <div class="row gx-5">--}}
{{--                <div class="col-lg-6">--}}
{{--                    <div class="hero-content" data-speed="0.10" data-revert="true">--}}
{{--                        <h1 data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">Leading Patient Engagement Platform For Clinics</h1>--}}
{{--                        <p data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">Ontrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from making it over years around the world.</p>--}}
{{--                        <div class="hero-btn" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">--}}
{{--                            <a href="about.html" class="btn style1">Find Out More</a>--}}
{{--                            <a class="play-video" data-fancybox="" href="https://www.youtube.com/watch?v=UNSSuTSQI9I">--}}
{{--                                        <span class="video-icon">--}}
{{--                                            <i class="ri-play-fill"></i>--}}
{{--                                        </span>--}}
{{--                                <span> Watch Video</span>--}}
{{--                            </a>--}}
{{--                        </div>--}}
{{--                        <div class="counter-card-wrap" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="500">--}}
{{--                            <div class="counter-card style1">--}}
{{--                                        <span class="counter-icon">--}}
{{--                                            <i class="flaticon-emergency-kit"></i>--}}
{{--                                        </span>--}}
{{--                                <div class="counter-text">--}}
{{--                                    <h2 class="counter-num">--}}
{{--                                        <span class="odometer" data-count="60"></span>--}}
{{--                                        <span class="target">+</span>--}}
{{--                                    </h2>--}}
{{--                                    <p>Project Completed</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="counter-card style1">--}}
{{--                                        <span class="counter-icon">--}}
{{--                                            <i class="flaticon-headache"></i>--}}
{{--                                        </span>--}}
{{--                                <div class="counter-text">--}}
{{--                                    <h2 class="counter-num">--}}
{{--                                        <span class="odometer" data-count="99"></span>--}}
{{--                                        <span class="target">%</span>--}}
{{--                                    </h2>--}}
{{--                                    <p>Patients Satisfied</p>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6">--}}
{{--                    <div class="hero-appointment" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">--}}
{{--                        <img src="{{asset('/')}}frontend/assets/img/hero/hero-shape-4.png" alt="Image" class="hero-shape-two rotate">--}}
{{--                        <div class="hero-appointment-img bg-f" ></div>--}}
{{--                        <div class="hero-appointment-form">--}}
{{--                            <div class="row fg-opt-wrap">--}}
{{--                                <div class="col-sm-5">--}}
{{--                                    <div class="fg-opt">--}}
{{--                                        <span>Date</span>--}}
{{--                                        <p>13 Jul, 20222</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-3">--}}
{{--                                    <div class="fg-opt">--}}
{{--                                        <span>Time</span>--}}
{{--                                        <p>9:30 PM</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-4">--}}
{{--                                    <div class="fg-opt">--}}
{{--                                        <button type="button" class="btn style1">Edit Time</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="row  fg-opt-wrap">--}}
{{--                                <div class="col-sm-5">--}}
{{--                                    <div class="fg-opt">--}}
{{--                                        <span>Doctor</span>--}}
{{--                                        <p>Dr. Kate Winslate</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-3">--}}
{{--                                    <div class="fg-opt">--}}
{{--                                        <span>Branch</span>--}}
{{--                                        <p>Radiology</p>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="col-sm-4">--}}
{{--                                    <div class="fg-opt">--}}
{{--                                        <button type="button" class="btn style2">Book Now</button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="hero-doctor" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">--}}
{{--                        <div class="about-doctor-box">--}}
{{--                            <div class="doctor-img">--}}
{{--                                <img src="{{asset('/')}}frontend/assets/img/about/doctor-1.jpg" alt="Image">--}}
{{--                            </div>--}}
{{--                            <div class="doctor-info">--}}
{{--                                <h5>Dr. Kate Winslet</h5>--}}
{{--                                <span>Radiology</span>--}}
{{--                            </div>--}}
{{--                            <button type="button" class="btn style1">Select</button>--}}
{{--                        </div>--}}
{{--                        <div class="hero-doctor-bg bg-f"></div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
    </section>
    <!-- Hero Section End -->

    <!-- About Section Start -->
    @include('frontend.about.about')
    <!-- About Section End -->

    <!-- Service Section Start -->
    @include('frontend.services.services')

    <!-- Service Section End -->

    <!-- Why Choose Us Section Start -->
    @include('frontend.appointment.appointment')
    <!-- Why Choose Us Section End -->

    <!-- Counter Section Start -->
    @include('frontend.counter.counter')
    <!-- Counter Section End -->

    <!-- Pricing Section Start -->
    @include('frontend.package.package')
    <!-- Pricing Section End -->

    <!-- Team Section Start -->
    @include('frontend.team.team')
    <!-- Team Section End -->

    <!-- Testimonial Section Start -->
    @include('frontend.testimonial.testimonial')
    <!-- Testimonial Section End -->

    {{--    find doctor section start--}}
{{--    <section class="team-wrap ptb-100 bg-chathamas">--}}
{{--        <div class="container">--}}
{{--            <div class="row">--}}
{{--                <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2  col-md-10 offset-md-1" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">--}}
{{--                    <div class="section-title style2 text-center mb-40">--}}
{{--                        <span>Find Doctors</span>--}}
{{--                        <h2>Meet Our Expert &amp; Experienced Team Members</h2>--}}
{{--                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, beatae blanditiis commodi consequatur consequuntur, ea eaque est ex iste nam neque nostrum omnis ratione repellat reprehenderit saepe sit, unde veritatis!</p>--}}

{{--                        <form action="">--}}
{{--                            <div class="sidebar-widget mt-5 d-flex justify-content-center">--}}

{{--                                <div class="form-group">--}}
{{--                                    <select name="select_service" id="select_service" style="height: 54px;padding: 10px 40px 10px 20px;border-radius: 5px 0px 0px 5px;border: 1px solid rgba(0, 0, 0, 0.1);" >--}}
{{--                                        <option value="0" data-display="Select Service">Select Department</option>--}}
{{--                                        <option value="1">Orthopedic</option>--}}
{{--                                        <option value="2">Neurology</option>--}}
{{--                                        <option value="3">Dentristy</option>--}}
{{--                                    </select>--}}
{{--                                </div>--}}
{{--                                <div class="search-box">--}}
{{--                                    <div class="form-group">--}}
{{--                                        <input type="search" placeholder="Search">--}}
{{--                                        <button type="submit">--}}
{{--                                            <i class="flaticon-search"></i>--}}
{{--                                        </button>--}}
{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                        </form>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}

{{--        </div>--}}
{{--    </section>--}}
    {{--    find doctor section end--}}

    <!-- Blog Section Start -->
    @include('frontend.blogs.blogs')
    <!-- Blog Section End -->
@endsection

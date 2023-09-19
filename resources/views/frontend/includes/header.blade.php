<header class="header-wrap style2">
    <div class="header-top d-none d-lg-block">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <div class="header-top-left">
                        <ul class="contact-info list-style">

                            <li>
                                <span><i class="ri-phone-fill"></i></span>
                                <a href="tel:{{$links->number}}">{{$links->number}}</a>
                            </li>
                            <li>
                                <span><i class="ri-map-pin-fill"></i></span>
                                <p>{{$links->address}}</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="header-top-right">

                        <ul class="social-profile list-style style1">
                            <li>
                                <a href="{{$links->facebook}}">
                                    <i class="ri-facebook-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$links->youtube}}">
                                    <i class="ri-youtube-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$links->linkedIn}}">
                                    <i class="ri-linkedin-fill"></i>
                                </a>
                            </li>
                            <li>
                                <a href="{{$links->instagram}}">
                                    <i class="ri-instagram-line"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="header-bottom">
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="{{route('front.page')}}">
                    @php $logo = \App\Models\Logo::latest()->first() @endphp
                    <img class="logo-light" src="{{asset($logo->logo_image??null)}}" height="100px" width="120px" alt="logo">
                    <img class="logo-dark" src="{{asset($logo->logo_image??null)}}" height="100px" width="120px" alt="logo">
{{--                    Medical Care--}}
                </a>
                <div class="collapse navbar-collapse main-menu-wrap" id="navbarSupportedContent">
                    <div class="menu-close d-lg-none">
                        <a href="javascript:void(0)"> <i class="ri-close-line"></i></a>
                    </div>
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a href="{{route('front.page')}}"  class="nav-link {{Request::routeIs('front.page') ? 'active' : ''}}">
                                Home
                            </a>

                        </li>

                        <li class="nav-item">
                            <a href="{{route('about.page')}}" class="nav-link {{Request::routeIs('about.page') ? 'active' : ''}}">
                                About
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('services')}}" class="nav-link {{Request::routeIs('services') ? 'active' : ''}}">
                                Services
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('package.page')}}" class="nav-link {{Request::routeIs('package.page') ? 'active' : ''}}">Service Plan</a>
                        </li>

                        <li class="nav-item">
                            <a href="{{route('team.page')}}" class="nav-link {{Request::routeIs('team.page') ? 'active' : ''}}">Our Doctors</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('management.page')}}" class="nav-link {{Request::routeIs('management.page') ? 'active' : ''}}">Management</a>
                        </li>
{{--                        <li class="nav-item">--}}
{{--                            <a href="#" class="nav-link">--}}
{{--                                Pages--}}
{{--                                <i class="ri-arrow-down-s-line"></i>--}}
{{--                            </a>--}}
{{--                            <ul class="dropdown-menu">--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="{{route('team.page')}}" class="nav-link">Our Doctors</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="appointment.html" class="nav-link">Book Appointment</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="faq.html" class="nav-link">FAQ</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="{{route('package.page')}}" class="nav-link">Pricing Plan</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="{{route('testimonial.page')}}" class="nav-link">Testimonials</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="#" class="nav-link">--}}
{{--                                        User Pages--}}
{{--                                        <i class="ri-arrow-right-s-line"></i>--}}
{{--                                    </a>--}}
{{--                                    <ul class="dropdown-menu">--}}
{{--                                        <li class="nav-item">--}}
{{--                                            <a href="login.html" class="nav-link">Login</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="nav-item">--}}
{{--                                            <a href="register.html" class="nav-link">Register</a>--}}
{{--                                        </li>--}}
{{--                                        <li class="nav-item">--}}
{{--                                            <a href="recover-password.html" class="nav-link">Recover Password</a>--}}
{{--                                        </li>--}}
{{--                                    </ul>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="terms-of-service.html" class="nav-link">Terms of Service</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="privacy-policy.html" class="nav-link">Privacy Policy</a>--}}
{{--                                </li>--}}
{{--                                <li class="nav-item">--}}
{{--                                    <a href="error-404.html" class="nav-link">404 Error Page</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
                        <li class="nav-item">
                            <a href="#" class="nav-link @if(Request::routeIs('gallery.page')) active @elseif(Request::routeIs('video.gallery.page')) active @endif">
                                Gallery
                                <i class="ri-arrow-down-s-line"></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="nav-item">
                                    <a href="{{route('gallery.page')}}" class="nav-link">Photo Gallery</a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{route('video.gallery.page')}}" class="nav-link">Video Gallery</a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('blogs.page')}}" class="nav-link {{Request::routeIs('blogs.page') ? 'active' : ''}}">
                                Blogs
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('contacts')}}" class="nav-link {{Request::routeIs('contacts') ? 'active' : ''}}">Contact Us</a>
                        </li>
                        <li class="nav-item d-lg-none">
                            <a href="{{route('appointment.page')}}" class="nav-link btn style1">Book Appointment</a>
                        </li>
                    </ul>
                    <div class="other-options md-none">
                        {{--                            <div class="option-item">--}}
                        {{--                                <button class="searchbtn"><i class="ri-search-line"></i></button>--}}
                        {{--                            </div>--}}
                        <div class="option-item">
                            <a href="{{route('appointment.page')}}" class="btn style1">Book Appointment</a>
                        </div>
                    </div>
                </div>
            </nav>
            {{--                <div class="search-area">--}}
            {{--                    <input type="search" placeholder="Search Here..">--}}
            {{--                    <button type="submit"><i class="ri-search-line"></i></button>--}}
            {{--                </div>--}}
            <div class="mobile-bar-wrap">
{{--                <button class="searchbtn d-lg-none"><i class="ri-search-line"></i></button>--}}
                <div class="mobile-menu d-lg-none">
                    <a href="javascript:void(0)"><i class="ri-menu-line"></i></a>
                </div>
            </div>
        </div>
    </div>
</header>

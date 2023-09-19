<footer class="footer-wrap">
    <div class="container">
        <div class="row pt-100 pb-75">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="footer-widget">
                    <a href="index.html" class="footer-logo">

                        @php $logo = \App\Models\Logo::latest()->first() @endphp
                        <img src="{{asset($logo->logo_image??null)}}" height="100px" width="120px" alt="Image">
{{--                        Medical Care--}}
                    </a>
                    <p class="comp-desc">
                        {{$footer->details??null}}
                    </p>
                    <ul class="social-profile style1 list-style">
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
                            <a href="{{$links->instagram}}">
                                <i class="ri-instagram-line"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{$links->linkedIn}}">
                                <i class="ri-linkedin-fill"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="footer-widget">
                    <h3 class="footer-widget-title">Company</h3>
                    <ul class="footer-menu list-style">
                        <li>
                            <a href="{{route('front.page')}}">
                                <i class="ri-arrow-right-s-line"></i>
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{route('about.page')}}">
                                <i class="ri-arrow-right-s-line"></i>
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="{{route('services')}}">
                                <i class="ri-arrow-right-s-line"></i>
                                Our Services
                            </a>
                        </li>
                        <li>
                            <a href="{{'team.page'}}">
                                <i class="ri-arrow-right-s-line"></i>
                                Our Doctors
                            </a>
                        </li>
                        <li>
                            <a href="{{'contacts'}}">
                                <i class="ri-arrow-right-s-line"></i>
                                Contact Us
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                <div class="footer-widget">
                    <h3 class="footer-widget-title">Official Info</h3>
                    <ul class="contact-info list-style">
                        <li>
                            <i class="flaticon-map"></i>
                            <h6>Location</h6>
                            <p>{{$links->address}}</p>
                        </li>
                        <li>
                            <i class="flaticon-email-1"></i>
                            <h6>Email</h6>
                            <a href="mailto:{{$links->email}}"><span>{{$links->email}}</span></a>
                        </li>
                        <li>
                            <i class="flaticon-phone-call-1"></i>
                            <h6>Phone</h6>
                            <a href="tel:{{$links->number}}">{{$links->number}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <p class="copyright-text"><i class="ri-copyright-line"></i>  {{$footer->credit}}</p>
</footer>

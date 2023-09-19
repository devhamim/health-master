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
                    <h2>Contact Us</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{route('front.page')}}">Home </a></li>
                        <li>Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Contact Us section Start -->
        <section class="contact-us-wrap ptb-100">
            <div class="container">
                <div class="row justify-content-center pb-75">
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="contact-item">
                                    <span class="contact-icon">
                                        <i class="flaticon-map"></i>
                                    </span>
                            <div class="contact-info">
                                <h3>Visit Us Anytime</h3>
                                <p>{{$links->address}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="contact-item">
                                    <span class="contact-icon">
                                        <i class="flaticon-email-2"></i>
                                    </span>
                            <div class="contact-info">
                                <h3>Send An Email</h3>
                                <a href="mailto:{{$links->email}}"><span>{{$links->email}}</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="contact-item">
                                    <span class="contact-icon">
                                        <i class="flaticon-call"></i>
                                    </span>
                            <div class="contact-info">
                                <h3>Call Center</h3>
                                <a href="tel:{{$links->number}}">{{$links->number}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row gx-5">
                    <div class="col-xl-8 col-lg-7 col-12">
                        <div class="contact-form">
                            <h3>Send Us A Message</h3>
                            <form class="form-wrap" method="POST" action="{{route('contact')}}" >
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="name" class="form-control mt-3 p-3" placeholder="Name*" id="name"
                                                   required data-error="Please enter your name">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" name="email" class="form-control mt-3 p-3" id="email" required
                                                   placeholder="Email*" data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="number" name="number" class="form-control mt-3 p-3" id="phone" required
                                                   placeholder="Phone Number*" data-error="Please enter your email">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" name="subject" class="form-control mt-3 p-3" placeholder="Subject*" id="msg_subject" required data-error="Please enter your subject">
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group v1">
                                            <textarea name="message" id="message" class="form-control mt-3 p-3" placeholder="Your Messages.." cols="30" rows="10" required data-error="Please enter your message"></textarea>
                                            <div class="help-block with-errors"></div>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn style1 mt-3">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-5 col-md-12">
                        <div class="comp-map">
                            {!! $links->map_link !!}
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Contact Us section End -->

    </div>
    <!-- Content wrapper end -->
@endsection

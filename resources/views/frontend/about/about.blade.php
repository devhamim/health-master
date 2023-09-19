<section class="about-wrap style2 ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                <div class="section-title style1 text-center mb-40">
                    <span>About Us</span>

                    <h2>{{$about->title??null}}</h2>
                </div>
            </div>
        </div>
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                <div class="about-img-wrap">
                    <img src="{{asset($about->image1??null)}}" alt="Image" class="about-img-one">
                    <img src="{{asset($about->image2??null)}}" alt="Image" class="about-img-two">
{{--                    <div class="about-promo-box">--}}
{{--                        <span class="promo-icon"><i class="flaticon-medical-operation"></i></span>--}}
{{--                        <h2>700+ <span>Labratory Experts</span></h2>--}}
{{--                    </div>--}}
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                <div class="about-content">
                    <div class="content-title style1">
                        <p>{!! $about->details1??null !!}</p>
                    </div>
                    <div class="feature-item-wrap">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="ri-check-line"></i>
                            </div>
                            <div class="feature-text">
                                {!! $about->details2??null !!}
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="ri-check-line"></i>
                            </div>
                            <div class="feature-text">
                                {!! $about->details3??null !!}
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="ri-check-line"></i>
                            </div>
                            <div class="feature-text">
                                {!! $about->details4??null !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

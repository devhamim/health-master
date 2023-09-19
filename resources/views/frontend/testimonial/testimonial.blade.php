<section class="testimonial-wrap style2 ptb-100 bg-athens">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2  col-md-10 offset-md-1" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                <div class="section-title style1 text-center mb-40">
                    <span>Testimonial</span>
                    @foreach($titles as $data)
                        @if($data->page == 'testimonial' )
                            <h2>{{$data->title}}</h2>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="testimonial-slider-two owl-carousel">
            @foreach($testimonials as $testimonial)
            <div class="testimonial-card style2" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                <div class="client-info-area">
                    <div class="client-info-wrap">
                        <div class="client-img">
                            <img src="{{asset($testimonial->image)}}" alt="Image">
                        </div>
                        <div class="client-info">
                            <h3>{{$testimonial->name}}</h3>
                            <span>{{$testimonial->designation}}</span>
                        </div>
                    </div>
                    <div class="quote-icon">
                        <i class="flaticon-straight-quotes"></i>
                    </div>
                </div>

                <ul class="ratings list-style">
                    @for($i=0;$i<$testimonial->star;$i++)
                    <li><i class="ri-star-fill"></i></li>
                    @endfor
                </ul>
                <p class="client-quote">{!! $testimonial->review !!}</p>
            </div>
            @endforeach
        </div>

    </div>
</section>

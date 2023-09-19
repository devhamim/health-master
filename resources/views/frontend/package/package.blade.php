<section class="pricing-wrap pb-75 pt-75">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2  col-md-10 offset-md-1" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                <div class="section-title style1 text-center mb-40">
                    <span>Medical Packages</span>
                    @foreach($titles as $data)
                        @if($data->page == 'packages' )
                            <h2>{{$data->title}}</h2>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
        <div class="testimonial-slider-two owl-carousel">
            @foreach($packages as $package)
            <div class="">
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
        </div>
    </div>
</section>

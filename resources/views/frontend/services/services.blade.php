<section class="service-wrap style2 pt-100">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 offset-xl-3 col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                <div class="section-title style2 text-center mb-40">
                    <span>Our Services</span>
                    @foreach($titles as $data)
                        @if($data->page == 'services' )
                    <h2>{{$data->title}}</h2>
                        @endif
                    @endforeach

                </div>
            </div>
        </div>
        <!-- Service Section Start -->
        <section class="service-wrap ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    @foreach($services as $service)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="service-card style1">
                            <div class="service-img">
                                <img src="{{asset($service->main_image)}}" height="250px" width="100%" alt="Image">
                            </div>
                            <div class="service-info">
                                <h3><a href="{{route('services.details',['id'=>$service->id])}}">{{$service->service_title}}</a></h3>
                                <small style="color: white;background-color: #d41414;padding: 3px 5px;border-radius: 3px">Home Service</small>
                                <p>{!! $service->service_details_small !!}</p>
                                <a href="{{route('services.details',['id'=>$service->id])}}" class="link style2">Explore More</a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- Service Section End -->
    </div>
</section>

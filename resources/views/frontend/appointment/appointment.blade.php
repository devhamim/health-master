<section class="wh-wrap style2 pb-100">
    <div class="container">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1200" data-aos-delay="200">
                <div class="wh-content">
                    <div class="content-title style1">
                        <span>Appointment</span>
                        <h2>{{$info->title??null}}</h2>
                        <p>{!! $info->details1??null !!}</p>
                    </div>
                    <div class="feature-item-wrap">
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="flaticon-pulse"></i>
                            </div>
                            <div class="feature-text">
                                {!! $info->details2??null !!}
                            </div>
                        </div>
                        <div class="feature-item">
                            <div class="feature-icon">
                                <i class="flaticon-pills"></i>
                            </div>
                            <div class="feature-text">
                                {!! $info->details3??null !!}
                            </div>
                        </div>
                    </div>
                    <a href="{{route('about.page')}}" class="btn style7">Get More info</a>
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1200" data-aos-delay="200">
                <div class="col-xl-8 offset-xl-2 col-lg-10 offset-lg-1">
                    <form action="{{route('appointment')}}" method="POST" class="book-appointment-form mt-5">
                        @csrf
                        <div class="content-title">
                            <h4>Book an Appointment</h4>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" name="name" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="number" name="number" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="service_id" id="select_time">
                                        <option value="0" data-display="Select Doctor" disabled selected>Select Services</option>
                                        @foreach($services as $service)
                                            <option value="{{$service->id}}" >{{$service->service_title}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input name="date" type="date" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <select name="select_time" id="select_time">
                                        <option value="0" data-display="Select Doctor">Select Time</option>
                                        <option value="1" >10:00 AM</option>
                                        <option value="2" >11:00 AM</option>
                                        <option value="3" >12:00 PM</option>
                                    </select>
                                </div>
                            </div>


                        </div>
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn style1 d-block w-100">Book Appointment</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</section>

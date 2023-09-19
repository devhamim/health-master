<section class="counter-wrap ptb-100 bg-blue">
    <div class="container">
        <div class="counter-card-wrap" >
            <div class="counter-card style2" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="300">
                            <span class="counter-icon">
                                <i class="flaticon-doctor"></i>
                            </span>
                <div class="counter-text">
                    <h2 class="counter-num">
                        <span class="odometer" data-count="{{$counter->doctors??null}}"></span>
                        <span class="target">+</span>
                    </h2>
                    <p>Total Doctors</p>
                </div>
            </div>
            <div class="counter-card style2" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="200">
                            <span class="counter-icon">
                                <i class="flaticon-admision-form"></i>
                            </span>
                <div class="counter-text">
                    <h2 class="counter-num">
                        <span class="odometer" data-count="{{$counter->services??null}}"></span>
                        <span class="target">+</span>
                    </h2>
                    <p>Total Service</p>
                </div>
            </div>

            <div class="counter-card style2" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="400">
                            <span class="counter-icon">
                                <i class="flaticon-medical-operation"></i>
                            </span>
                <div class="counter-text">
                    <h2 class="counter-num">
                        <span class="odometer" data-count="{{$counter->clients??null}}"></span>
                        <span class="target">+</span>
                    </h2>
                    <p>Happy Clients</p>
                </div>
            </div>
            <div class="counter-card style2" data-aos="fade-up" data-aos-duration="1200" data-aos-delay="500">
                            <span class="counter-icon">
                                <i class="flaticon-blood-test"></i>
                            </span>
                <div class="counter-text">
                    <h2 class="counter-num">
                        <span class="odometer" data-count="{{$counter->awards??null}}"></span>
                        <span class="target">+</span>
                    </h2>
                    <p>Awards</p>
                </div>
            </div>
        </div>
    </div>
</section>

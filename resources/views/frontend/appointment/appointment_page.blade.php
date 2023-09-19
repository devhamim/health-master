@extends('frontend.master')
@section('title')
    Appointment
@endsection
@section('content')

    <!-- Content Wrapper Start -->
    <div class="content-wrapper">

        <!-- Breadcrumb Start -->
        <div class="breadcrumb-wrap bg-f" style="background-image: url({{asset($banner->image)}});">
            <div class="container">
                <div class="breadcrumb-title">
                    <h2>Book Appointment</h2>
                    <ul class="breadcrumb-menu list-style">
                        <li><a href="{{route('front.page')}}">Home </a></li>
                        <li>Appointment</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Breadcrumb End -->

        <!-- Appointment section Start -->
        <section class="appointment-form-wrap ptb-100">
            <div class="container">
                <div class="row">
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
        </section>
        <!-- Appointment section End -->

    </div>
    <!-- Content wrapper end -->
@endsection

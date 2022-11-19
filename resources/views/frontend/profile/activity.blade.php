@section('title') {{ 'My-Profile' }} @endsection
@extends('frontend.Layouts')
@section('frontend_content')
    <section class="relative lg:py-24 py-16" style="margin-top: 100px;">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="lg:col-span-6 md:col-span-6">
                        <img style="height: 450px" src="{{ asset('frontend/assets/images/activity.png') }}" alt="Empty Booking">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ url('/my-booking') }}" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md">
                                My Booking
                            </a>
                        </div>

                        <div class="col-md-6">
                            <a href="{{ url('/my-order') }}" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md">
                                My Order
                            </a>
                        </div>
                    </div>

                    <br><br>

                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ url('/my-profile') }}"
                               class="btn bg-green-600 hover:bg-green-700 text-white rounded-md">
                                My Profile
                            </a>
                        </div>

                        <div class="col-md-6">
                            <a href="{{ url('/user-change-password') }}" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md">
                                Change Password
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



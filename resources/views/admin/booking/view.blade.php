@extends('admin.Layouts')
@section('admin_content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card shadow p-5">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12 mt-5">
                                <h3 class="page-title mt-3">Booking</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item active">Have A Nice Day!</li>
                                </ul>
                            </div>

                            <div class="col-sm-12">
                                <div class="text-right">
                                    <a href="{{ url('/bookings') }}" class="btn btn-primary">
                                        <i class="fa fa-arrow-left"></i>
                                        Go Booking
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <p style="line-height: 30px">
                                    <b style="color: #009688">ID: </b><br>
                                    <span style="font-weight: bold">
                                        {{ $booking->booking_id }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">User Name: </b><br>
                                    <span style="font-weight: bold">
                                        {{ $booking->name }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Email: </b><br>
                                    <span style="font-weight: bold">
                                        {{ $booking->email }}
                                    </span>
                                </p>


                                <p style="line-height: 30px">
                                    <b style="color: #009688">Phone: </b><br>
                                    <span style="font-weight: bold">
                                        @if($booking->phone)
                                            {{ $booking->phone }}
                                        @else
                                            <span style="font-style: italic">Null</span>
                                        @endif
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Address: </b><br>
                                    <span style="font-weight: bold">
                                        @if($booking->address)
                                            {{ $booking->address }}
                                        @else
                                            <span style="font-style: italic">Null</span>
                                        @endif
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Date Of Birth: </b><br>
                                    <span style="font-weight: bold">
                                        @if($booking->date_of_birth)
                                            {{ $booking->date_of_birth }}
                                        @else
                                            <span style="font-style: italic">Null</span>
                                        @endif
                                    </span>
                                </p>
                            </div>

                            <div class="col-md-4">
                                <p style="line-height: 30px">
                                    <b style="color: #009688">House Title: </b><br>
                                    <span style="font-weight: bold">
                                        {{ $booking->house_title }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">House Price: </b><br>
                                    <span style="font-weight: bold">
                                        {{ $booking->house_price }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">SQF: </b><br>
                                    <span style="font-weight: bold">
                                        {{ $booking->house_sqf }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Bath: </b><br>
                                    <span style="font-weight: bold">
                                        {{ $booking->house_bath }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Bed: </b><br>
                                    <span style="font-weight: bold">
                                        {{ $booking->house_bed }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">House On Day: </b><br>
                                    <span style="font-weight: bold">
                                        {{ $booking->day_on_house }}
                                    </span>
                                </p>

                            </div>

                            <div class="col-md-4">
                                <p style="line-height: 30px">
                                    <b style="color: #009688">House Image: </b><br>
                                    <span style="font-weight: bold">
                                        <img style="width: 80px; height: 80px;"
                                             src="{{ asset('admin/images/upload-house/' . $booking->house_image) }}"
                                             alt="">
                                    </span>
                                </p>

                                <p style="line-height: 30px; margin-top: 50px">
                                    <b style="color: #009688">Gallery Image: </b><br>
                                    <span style="font-weight: bold">
                                        @php
                                            $gallery_images = json_decode($booking->gallery_image)
                                        @endphp
                                        @foreach($gallery_images as $gallery_image)
                                            <img style="width: 70px; height: 70px; margin-right: 20px"
                                                 src="{{ asset('admin/images/upload-house-gallery/' .$gallery_image) }}"
                                                 alt="">
                                        @endforeach
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

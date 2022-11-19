@extends('admin.Layouts')
@section('admin_content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card shadow p-5">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12 mt-5">
                                <h3 class="page-title mt-3">Order Details</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item active">Have A Nice Day!</li>
                                </ul>
                            </div>

                            <div class="col-sm-12">
                                <div class="text-right">
                                    <a href="{{ url('/orders') }}" class="btn btn-primary">
                                        <i class="fa fa-arrow-left"></i>
                                        Go Order
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <h4 class="py-3">Order Information</h4>
                                <p style="line-height: 30px">
                                    <b style="color: #009688">ID: </b><br>
                                    <span style="font-weight: 500">
                                        {{ $order->order_id }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Payer ID: </b><br>
                                    <span style="font-weight: 500">
                                        {{ $order->payer_id }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Transition No: </b><br>
                                    <span style="font-weight: 500">
                                        {{ $order->payment_id }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Amount: </b><br>
                                    <span style="font-weight: 500">
                                        {{ $order->amount }} USD
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Payment Method: </b><br>
                                    <span style="font-weight: 500">
                                        PayPal
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Payment Status: </b><br>
                                    <span style="font-weight: 500">
                                        {{ ucfirst($order->payment_status) }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Order Status: </b><br>
                                    <span style="font-weight: 500">
                                        {{ ucfirst($order->order_status) }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Order Created: </b><br>
                                    <span style="font-weight: 500">
                                        {{ date('j F, Y', strtotime($order->created_at)) }}
                                    </span>
                                </p>

                            </div>

                            <div class="col-md-4">
                                <h4 class="py-3">Item Information</h4>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">House Name: </b><br>
                                    <span style="font-weight: 500">
                                        {{ $order->house_title }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">SQF: </b><br>
                                    <span style="font-weight: 500">
                                        {{ $order->house_sqf }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Bedroom: </b><br>
                                    <span style="font-weight: 500">
                                        {{ $order->house_bed }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Bathroom: </b><br>
                                    <span style="font-weight: 500">
                                        {{ $order->house_bath }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">House On Day: </b><br>
                                    <span style="font-weight: 500">
                                        {{ $order->day_on_house }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">House Image: </b><br>
                                    <span style="font-weight: 500">
                                        <img style="width: 80px; height: 80px;"
                                             src="{{ asset('admin/images/upload-house/' . $order->house_image) }}"
                                             alt="">
                                    </span>
                                </p>

                                <p style="line-height: 30px; margin-top: 50px">
                                    <b style="color: #009688">Gallery Image: </b><br>
                                    <span style="font-weight: 500">
                                        @php
                                            $gallery_images = json_decode($order->gallery_image)
                                        @endphp
                                        @foreach($gallery_images as $gallery_image)
                                            <img style="width: 70px; height: 70px; margin-right: 20px"
                                                 src="{{ asset('admin/images/upload-house-gallery/' .$gallery_image) }}"
                                                 alt="">
                                        @endforeach
                                    </span>
                                </p>

                            </div>

                            <div class="col-md-4">
                                <h4 class="py-3">Billing Address</h4>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">First Name: </b><br>
                                    <span style="font-weight: 500">
                                        {{ $order->first_name }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Last Name: </b><br>
                                    <span style="font-weight: 500">
                                        {{ $order->last_name }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Email: </b><br>
                                    <span style="font-weight: 500">
                                        {{ $order->email }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Phone: </b><br>
                                    <span style="font-weight: 500">
                                        {{ $order->phone }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Country: </b><br>
                                    <span style="font-weight: 500">
                                        {{ $order->country }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">State: </b><br>
                                    <span style="font-weight: 500">
                                        {{ $order->state }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Locality: </b><br>
                                    <span style="font-weight: 500">
                                        {{ $order->locality }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Post Code: </b><br>
                                    <span style="font-weight: 500">
                                        {{ $order->post_code }}
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

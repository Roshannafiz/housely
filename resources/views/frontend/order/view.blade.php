@section('title') {{ 'Order-Details' }} @endsection
@extends('frontend.Layouts')
@section('frontend_content')
    <section class="relative lg:py-24 py-16" style="margin-top: 100px;">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="lg:col-span-6 md:col-span-6">
                    <div class="lg:ml-5">
                        <div
                            class="rounded-md shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 duration-500 ease-in-out"
                            style="box-shadow: 2px 2px #16A34A !important;">
                            <div class="p-6">
                                <h2 style="font-size: 25px">Order Details:</h2>

                                <ul class="list-none">
                                    <li class="text-slate-400 mt-5 pt-2 pt-3">
                                                                        <span class="text-green-600 text-md mr-2">
                                                                            <i class="uil uil-check-circle align-middle"></i>
                                                                        </span>
                                        <b>Payer ID: </b> {{ $user_order->payer_id }}
                                    </li>

                                    <li class="text-slate-400 mt-5 pt-2 pt-3">
                                                                        <span class="text-green-600 text-md mr-2">
                                                                            <i class="uil uil-check-circle align-middle"></i>
                                                                        </span>
                                        <b>Transition: </b> {{ $user_order->payment_id }}
                                    </li>

                                    <li class="text-slate-400 mt-5 pt-2 pt-3">
                                                                        <span class="text-green-600 text-md mr-2">
                                                                            <i class="uil uil-check-circle align-middle"></i>
                                                                        </span>
                                        <b>Payment Method: </b> PayPal
                                    </li>

                                    <li class="text-slate-400 mt-5 pt-2 pt-3">
                                                                        <span class="text-green-600 text-md mr-2">
                                                                            <i class="uil uil-check-circle align-middle"></i>
                                                                        </span>
                                        <b>Payment: </b> {{ $user_order->amount }} USD
                                    </li>

                                    <li class="text-slate-400 mt-5 pt-2 pt-3">
                                                                        <span class="text-green-600 text-md mr-2">
                                                                            <i class="uil uil-check-circle align-middle"></i>
                                                                        </span>
                                        <b>Status: </b> {{ $user_order->status }}
                                    </li>

                                    <li class="text-slate-400 mt-5 pt-2 pt-3">
                                                                        <span class="text-green-600 text-md mr-2">
                                                                            <i class="uil uil-check-circle align-middle"></i>
                                                                        </span>
                                        <b>Order Created: </b> {{ date('j F, Y', strtotime($user_order->created_at)) }}
                                    </li>

                                    <li class="text-slate-400 mt-5 pt-2 pt-5 pb-3">
                                        <a href="{{ url('/my-order') }}"
                                           style="height: 42px; padding-left: 20px; padding-right: 20px"
                                           class="btn btn-lg bg-green-600 hover:bg-green-700 text-white rounded-md">
                                            Go Order
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-6 md:col-span-6">
                    <div class="lg:ml-5">
                        <div
                            class="rounded-md shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 duration-500 ease-in-out"
                            style="box-shadow: 2px 2px #16A34A !important;">
                            <div class="p-6">
                                <h2 style="font-size: 25px">Billing Address:</h2>

                                <ul class="list-none">
                                    <li class="text-slate-400 mt-5 pt-2 pt-3">
                                                                        <span class="text-green-600 text-md mr-2">
                                                                            <i class="uil uil-check-circle align-middle"></i>
                                                                        </span>
                                        <b>First Name: </b> {{ $user_order->first_name }}
                                    </li>

                                    <li class="text-slate-400 mt-5 pt-2 pt-3">
                                                                        <span class="text-green-600 text-md mr-2">
                                                                            <i class="uil uil-check-circle align-middle"></i>
                                                                        </span>
                                        <b>Last Name: </b> {{ $user_order->last_name }}
                                    </li>

                                    <li class="text-slate-400 mt-5 pt-2 pt-3">
                                                                        <span class="text-green-600 text-md mr-2">
                                                                            <i class="uil uil-check-circle align-middle"></i>
                                                                        </span>
                                        <b>Email: </b> {{ $user_order->email }}
                                    </li>

                                    <li class="text-slate-400 mt-5 pt-2 pt-3">
                                                                        <span class="text-green-600 text-md mr-2">
                                                                            <i class="uil uil-check-circle align-middle"></i>
                                                                        </span>
                                        <b>Phone: </b> {{ $user_order->phone }}
                                    </li>

                                    <li class="text-slate-400 mt-5 pt-2 pt-3">
                                                                        <span class="text-green-600 text-md mr-2">
                                                                            <i class="uil uil-check-circle align-middle"></i>
                                                                        </span>
                                        <b>Country: </b> {{ $user_order->country }}
                                    </li>

                                    <li class="text-slate-400 mt-5 pt-2 pt-3">
                                                                        <span class="text-green-600 text-md mr-2">
                                                                            <i class="uil uil-check-circle align-middle"></i>
                                                                        </span>
                                        <b>State: </b> {{ $user_order->state }}
                                    </li>

                                    <li class="text-slate-400 mt-5 pt-2 pt-3">
                                                                        <span class="text-green-600 text-md mr-2">
                                                                            <i class="uil uil-check-circle align-middle"></i>
                                                                        </span>
                                        <b>Locality: </b> {{ $user_order->locality }}
                                    </li>

                                    <li class="text-slate-400 mt-5 pt-2 pt-3">
                                                                        <span class="text-green-600 text-md mr-2">
                                                                            <i class="uil uil-check-circle align-middle"></i>
                                                                        </span>
                                        <b>Post Code: </b> {{ $user_order->post_code }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

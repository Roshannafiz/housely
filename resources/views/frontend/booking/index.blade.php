@section('title') {{ 'My-Bookings' }} @endsection
@extends('frontend.Layouts')
@section('frontend_content')
    <section class="relative lg:py-24 py-16" style="margin-top: 50px;">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                @if($bookings->count() > 0)
                    @foreach($bookings as $booking)
                        <div class="lg:col-span-6 md:col-span-6">
                            <div class="lg:ml-5">
                                <div
                                    class="rounded-md shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 duration-500 ease-in-out">
                                    <div class="border-b dark:border-gray-800 p-6 text-center">
                                        <a href="{{ url('/remove-booking/' . $booking->booking_id) }}"
                                           style="float: right; border-radius: 100px; background: red; color: white"
                                           class="btn btn-sm my-3">
                                            <i class="fa-solid fa-xmark"></i>
                                        </a>
                                        <div>
                                            <img style="border-radius: 10px"
                                                 src="{{ asset('admin/images/upload-house/' . $booking->house_image) }}"
                                                 alt="">
                                        </div>

                                        <h3 class="text-2xl text-green-600 font-medium mt-4">
                                            Price
                                        </h3>
                                        <div class="flex justify-center mt-4">
                                                                            <span class="text-3xl font-semibold">
                                                                                $ {{ $booking->house_price }}
                                                                            </span>
                                        </div>
                                    </div>

                                    <div class="p-6">
                                        <h5>Property Details:</h5>

                                        <ul class="list-none">
                                            <li class="text-slate-400 mt-2">
                                                                        <span class="text-green-600 text-md mr-2">
                                                                            <i class="uil uil-check-circle align-middle"></i>
                                                                        </span>
                                                <b>Name: </b> {{ $booking->house_title }}
                                            </li>

                                            <li class="text-slate-400 mt-2">
                                                                        <span class="text-green-600 text-md mr-2">
                                                                            <i class="uil uil-check-circle align-middle"></i>
                                                                        </span>
                                                <b>Sqf: </b> {{ $booking->house_sqf }}
                                            </li>

                                            <li class="text-slate-400 mt-2">
                                                                        <span class="text-green-600 text-md mr-2">
                                                                            <i class="uil uil-check-circle align-middle"></i>
                                                                        </span>
                                                <b>Bed: </b> {{ $booking->house_bed }}
                                            </li>

                                            <li class="text-slate-400 mt-2">
                                                                        <span class="text-green-600 text-md mr-2">
                                                                            <i class="uil uil-check-circle align-middle"></i>
                                                                        </span>
                                                <b>Bath: </b> {{ $booking->house_bath }}
                                            </li>

                                            <li class="text-slate-400 mt-2">
                                                                        <span class="text-green-600 text-md mr-2">
                                                                            <i class="uil uil-check-circle align-middle"></i>
                                                                        </span>
                                                <b>Days On House: </b> {{ $booking->day_on_house }}
                                            </li>
                                        </ul>
                                        <a href="{{ url('/proceed-to-buy/' . $booking->house_id) }}"
                                           class="btn bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-md w-full mt-4">
                                            Proceed To Buy
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="lg:col-span-6 md:col-span-6">
                        <img src="{{ asset('frontend/assets/images/empty-booking.png') }}" alt="Empty Booking">
                    </div>
                    <div class="lg:col-span-6 md:col-span-6 text-center">
                        <p style="font-size: 18px">Now You Have No Booking!</p>
                        <a href="{{ url('/buy') }}"
                           class="btn bg-green-600 hover:bg-green-700 text-white rounded-md mt-5">
                            Find House
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection



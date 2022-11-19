@section('title') {{ 'House Details' }} @endsection
@extends('frontend.Layouts')
@section('frontend_content')
    <!-- Start Hero -->
    <section
        class="relative table w-full py-32 lg:py-36 bg-[url('frontend/assets/images/bg/01.jpg')] bg-no-repeat bg-center">
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <div class="container">
            <div class="grid grid-cols-1 text-center mt-10">
                <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">
                    House Details
                </h3>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <div class="relative">
        <div class="shape overflow-hidden z-1 text-white dark:text-slate-900">
            <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <!-- End Hero -->

    <section class="relative md:pb-24 pb-16">
        <div class="container-fluid d-flex">
            <div class="row">
                <div class="col mt-3">
                    <div class="group relative overflow-hidden" style="width: 580px !important;">
                        <img style="border-radius: 10px"
                             src="{{ asset('admin/images/upload-house/' . $house_detail->image) }}" alt="">
                        <div class="absolute inset-0 group-hover:bg-slate-900/70 duration-500 ease-in-out"></div>
                        <div
                            class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center invisible group-hover:visible">
                            <a href="{{ asset('admin/images/upload-house/' . $house_detail->image) }}"
                               class="btn btn-icon bg-green-600 hover:bg-green-700 text-white rounded-full lightbox"><i
                                    class="uil uil-camera"></i></a>
                        </div>
                    </div>
                </div>

                @php
                    $gallery_images = json_decode($house_detail->gallery_image)
                @endphp
                @foreach($gallery_images as $gallery_image)
                    <div class="col-md-2 mt-3 pl-0">
                        <div class="group relative overflow-hidden">
                            <img style="border-radius: 10px;"
                                 src="{{ asset('admin/images/upload-house-gallery/' .$gallery_image) }}"
                                 alt="">
                            <div
                                class="absolute top-1/2 -translate-y-1/2 right-0 left-0 text-center invisible group-hover:visible">
                                <a href="{{ asset('admin/images/upload-house-gallery/' .$gallery_image) }}"
                                   class="lightbox">
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="container md:mt-24 mt-16">
            <div class="md:flex">
                <div class="lg:w-2/3 md:w-1/2 md:p-4 px-3">
                    <h4 class="text-2xl font-medium">
                        {{ $house_detail->house_title }}
                    </h4>

                    <ul class="py-6 flex items-center list-none">
                        <li class="flex items-center lg:mr-6 mr-4">
                            <i class="uil uil-compress-arrows lg:text-3xl text-2xl mr-2 text-green-600"></i>
                            <span class="lg:text-xl">
                                {{ $house_detail->house_sqf }} Sqf
                            </span>
                        </li>

                        <li class="flex items-center lg:mr-6 mr-4">
                            <i class="uil uil-bed-double lg:text-3xl text-2xl mr-2 text-green-600"></i>
                            <span class="lg:text-xl">
                                {{ $house_detail->house_bed }} Beds
                            </span>
                        </li>

                        <li class="flex items-center">
                            <i class="uil uil-bath lg:text-3xl text-2xl mr-2 text-green-600"></i>
                            <span class="lg:text-xl">
                                {{ $house_detail->house_bath }} Baths
                            </span>
                        </li>
                    </ul>

                    <p class="text-slate-400">
                        {!! $house_detail->house_description !!}
                    </p>
                </div>

                <div class="lg:w-1/3 md:w-1/2 md:p-4 px-3 mt-8 md:mt-0">
                    <div class="sticky top-20">
                        <div class="rounded-md bg-slate-50 dark:bg-slate-800 shadow dark:shadow-gray-700">
                            <div class="p-6">
                                <h5 class="text-2xl font-medium">Price:</h5>

                                <div class="flex justify-between items-center mt-4">
                                    <span class="text-xl font-medium">$ {{ $house_detail->house_price }}</span>

                                    <span
                                        class="bg-green-600/10 text-green-600 text-sm px-2.5 py-0.75 rounded h-6">For Sale</span>
                                </div>

                                <ul class="list-none mt-4">
                                    <li class="flex justify-between items-center mt-3">
                                        <span class="text-slate-400 text-sm">SQF</span>
                                        <span class="font-medium text-sm">
                                            {{ $house_detail->house_sqf }}
                                        </span>
                                    </li>

                                    <li class="flex justify-between items-center mt-3">
                                        <span class="text-slate-400 text-sm">Bed</span>
                                        <span class="font-medium text-sm">
                                            {{ $house_detail->house_bed }}
                                        </span>
                                    </li>

                                    <li class="flex justify-between items-center mt-3">
                                        <span class="text-slate-400 text-sm">Bath</span>
                                        <span class="font-medium text-sm">
                                            {{ $house_detail->house_bath }}
                                        </span>
                                    </li>

                                    <li class="flex justify-between items-center mt-3">
                                        <span class="text-slate-400 text-sm">Days on House</span>
                                        <span class="font-medium text-sm">
                                            {{ $house_detail->day_on_house }} Days
                                        </span>
                                    </li>
                                </ul>
                            </div>

                            <div class="flex">
                                <div class="ml-4" style="width: 200px !important;">
                                    @if(\Illuminate\Support\Facades\Auth::user())
                                        @if(\App\Models\Booking::where('house_id', $house_detail->id)->where('user_id', \Illuminate\Support\Facades\Auth::id())->exists())
                                            <button disabled type="submit"
                                                    class="btn bg-green-600 btn-block hover:bg-green-700 text-white rounded-md w-full">
                                                Already Booked
                                            </button>
                                        @else
                                            <form action="{{ url('/house-booking/' . $house_detail->id) }}"
                                                  method="POST"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <button type="submit"
                                                        class="btn bg-green-600 hover:bg-green-700 text-white rounded-md w-full">
                                                    Book Now
                                                </button>
                                            </form>
                                        @endif
                                    @else
                                        <a href="{{ url('/login') }}" type="submit"
                                           class="btn bg-green-600 hover:bg-green-700 text-white rounded-md w-full">
                                            Login Then Book
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </div>

                        <div class="mt-12 text-center">
                            <h3 class="mb-6 text-xl leading-normal font-medium text-black dark:text-white">Have Question
                                ?
                                Get in touch!</h3>

                            <div class="mt-6">
                                <a href="{{ url('/contact-us') }}"
                                   class="btn bg-transparent hover:bg-green-600 border border-green-600 text-green-600 hover:text-white rounded-md"><i
                                        class="uil uil-phone align-middle mr-2"></i> Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

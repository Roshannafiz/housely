@section('title') {{ 'Buy' }} @endsection
@extends('frontend.Layouts')
@section('frontend_content')
    <section class="relative lg:py-24 py-16" style="margin-top: 120px">
        <div class="container">
            @if($searching_houses->count() > 0)
                <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">
                    @foreach($searching_houses as $house)
                        <div
                            class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                            <div class="relative">
                                <img src="{{ asset('admin/images/upload-house/'. $house->image) }}" alt="House Image">

                                <div class="absolute top-6 right-6">
                                    <a href="#"
                                       class="btn btn-icon text-lg bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-red-600">
                                        <i class="mdi mdi-heart"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="p-6">
                                <div class="pb-6">
                                    <a href="{{ url('/house-details/' . $house->id) }}"
                                       class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">
                                        {{ $house->house_title }}
                                    </a>
                                </div>

                                <ul class="py-6 border-y dark:border-gray-800 flex items-center list-none">
                                    <li class="flex items-center mr-4">
                                        <i class="uil uil-compress-arrows text-2xl mr-2 text-green-600"></i>
                                        <span>
                                    {{ $house->house_sqf }} sqf
                                </span>
                                    </li>

                                    <li class="flex items-center mr-4">
                                        <i class="uil uil-bed-double text-2xl mr-2 text-green-600"></i>
                                        <span>
                                    {{ $house->house_bed }} Beds
                                </span>
                                    </li>

                                    <li class="flex items-center">
                                        <i class="uil uil-bath text-2xl mr-2 text-green-600"></i>
                                        <span>
                                    {{ $house->house_bath }} Baths
                                </span>
                                    </li>
                                </ul>

                                <ul class="pt-6 flex justify-between items-center list-none">
                                    <li>
                                        <span class="text-slate-400">Price</span>
                                        <p class="text-lg font-medium">
                                            $ {{ $house->house_price }}
                                        </p>
                                    </li>

                                    <li>
                                        <span class="text-slate-400">Rating</span>
                                        <ul class="text-lg font-medium text-amber-400 list-none">
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline"><i class="mdi mdi-star"></i></li>
                                            <li class="inline text-black dark:text-white">5.0(30)</li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div class="row" style="display: flex; align-items: center">
                    <div class="col-md-6">
                        <img style="height: 400px" src="{{ asset('frontend/assets/images/item-not-found.png') }}"
                             alt="Item Not Found">
                    </div>
                    <div class="col-md-6" style="text-align: center">
                        <span style="font-size: 20px">Currently Item Not Found !</span>
                        <br>
                        <br>
                        <a href="{{ url('/') }}" class="btn btn-success mt-5">Back To Home</a>
                    </div>
                </div>
            @endif
        </div>
    </section>
@endsection

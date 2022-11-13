@section('title') {{ 'Contact-Us' }} @endsection
@extends('frontend.Layouts')
@section('frontend_content')
    <section class="relative lg:py-24 py-16" style="margin-top: 80px;">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">

                {{--                @if($booking->count() > 0)--}}
                {{--                    --}}
                {{--                @else--}}
                {{--                    <div class="lg:col-span-6 md:col-span-6">--}}
                {{--                        <img src="{{ asset('frontend/assets/images/empty-booking.png') }}" alt="Empty Booking">--}}
                {{--                    </div>--}}
                {{--                @endif--}}

                <div class="lg:col-span-6 md:col-span-6">
                    <div class="lg:ml-5">
                        <div
                            class="rounded-md shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 duration-500 ease-in-out">
                            <div class="border-b dark:border-gray-800 p-6 text-center">
                                <div>
                                    <img style="border-radius: 10px"
                                         src="{{ asset('admin/images/upload-house/1667968939.jpg') }}" alt="">
                                </div>

                                <h3 class="text-2xl text-green-600 font-medium mt-4">Price</h3>

                                <div class="flex justify-center mt-4">
                                    <span class="text-3xl font-semibold">$ 41519</span>
                                </div>
                            </div>

                            <div class="p-6">
                                <h5>Property Details:</h5>

                                <ul class="list-none">
                                    <li class="text-slate-400 mt-2">
                                        <span class="text-green-600 text-md mr-2">
                                            <i class="uil uil-check-circle align-middle"></i>
                                        </span>
                                        <b>Name: </b> 10765 Hillshire Ave, Baton Rouge, LA 70810, USA
                                    </li>

                                    <li class="text-slate-400 mt-2">
                                        <span class="text-green-600 text-md mr-2">
                                            <i class="uil uil-check-circle align-middle"></i>
                                        </span>
                                        <b>Sqf: </b> 8000
                                    </li>

                                    <li class="text-slate-400 mt-2">
                                        <span class="text-green-600 text-md mr-2">
                                            <i class="uil uil-check-circle align-middle"></i>
                                        </span>
                                        <b>Bed: </b>4
                                    </li>

                                    <li class="text-slate-400 mt-2">
                                        <span class="text-green-600 text-md mr-2">
                                            <i class="uil uil-check-circle align-middle"></i>
                                        </span>
                                        <b>Bath: </b> 2
                                    </li>

                                    <li class="text-slate-400 mt-2">
                                        <span class="text-green-600 text-md mr-2">
                                            <i class="uil uil-check-circle align-middle"></i>
                                        </span>
                                        <b>Day On House: </b> 212 Days
                                    </li>

                                </ul>

                                <a href=""
                                   class="btn bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-md w-full mt-4">Get
                                    Started</a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-6 md:col-span-6">
                    <div class="lg:col-span-5 md:col-span-6">
                        <div class="lg:ml-5">
                            <div class="bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-700 p-6">
                                <h3 class="mb-6 text-2xl leading-normal font-medium pt-2">
                                    Your Profile
                                </h3>
                                @if(session()->has('message'))
                                    <div style="color: green !important;">
                                        <div class="alert alert-success alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            {{ session()->get('message') }}
                                        </div>
                                    </div>
                                @endif
                                <form action="{{ url('/profile-update/' . $user_detail->id) }}" method="POST"
                                      name="myForm" id="myForm" enctype="multipart/form-data">
                                    @csrf
                                    <div class="grid lg:grid-cols-12 lg:gap-6">
                                        <div class="lg:col-span-6 mb-5">
                                            <label for="name" class="font-medium">Name:</label>
                                            <input name="name" value="{{ $user_detail->name }}" id="name" type="text"
                                                   class="form-input mt-2"
                                                   placeholder="Name :">
                                            <div class="py-2">
                                                @if ($errors->has('name'))
                                                    <span style="color: red">{{ $errors->first('name') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="lg:col-span-6 mb-5">
                                            <label for="email" class="font-medium">Email:</label>
                                            <input name="email" value="{{ $user_detail->email }}" id="email"
                                                   type="email" class="form-input mt-2"
                                                   placeholder="Email :">
                                            <div class="py-2">
                                                @if ($errors->has('email'))
                                                    <span style="color: red">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1">
                                        <label for="phone" class="font-medium">Phone:</label>
                                        <input name="phone" value="{{ $user_detail->phone }}" id="phone" type="text"
                                               class="form-input mt-2"
                                               placeholder="Phone :">
                                    </div>

                                    <div class="grid lg:grid-cols-12 lg:gap-6 pt-5">
                                        <div class="lg:col-span-6 mb-5">
                                            <label for="image" class="font-medium">Image:</label>
                                            @if($user_detail->image)
                                                <div>
                                                    <img style="width: 80px; height: 80px"
                                                         src="{{ asset('admin/images/upload-user/' . $user_detail->image) }}"
                                                         alt="User Image">
                                                </div>
                                            @else
                                                <div>
                                                    <img style="width: 80px; height: 80px"
                                                         src="{{ asset('admin/assets/img/profiles/user.png') }}"
                                                         alt="User Image">
                                                </div>
                                            @endif
                                        </div>

                                        <div class="lg:col-span-6 mb-5">
                                            <label for="subject" class="font-medium">Image:</label>
                                            <input type="file" name="image" id="image" class="mt-2"
                                                   placeholder="Subject :">
                                        </div>

                                    </div>

                                    <div class="grid grid-cols-1 pt-5">
                                        <div class="mb-5">
                                            <label for="address" class="font-medium">Address:</label>
                                            <textarea name="address" id="address" class="form-input mt-2 textarea"
                                                      placeholder="Address :">{{ $user_detail->address }}</textarea>
                                        </div>
                                    </div>

                                    <button type="submit" id="submit" name="send"
                                            class="btn bg-green-600 hover:bg-green-700 text-white rounded-md">
                                        Update Profile
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection



@section('title') {{ 'Contact-Us' }} @endsection
@extends('frontend.Layouts')
@section('frontend_content')

    <section
        class="relative table w-full py-32 lg:py-36 bg-[url('frontend/assets/images/bg/01.jpg')] bg-no-repeat bg-center">
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <div class="container">
            <div class="grid grid-cols-1 text-center mt-10">
                <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Contact Us</h3>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->

    <!-- Start Section-->
    <section class="relative lg:py-24 py-16">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="lg:col-span-7 md:col-span-6">
                    <img src="{{ asset('frontend/assets/images/svg/contact.svg') }}" alt="">
                </div>

                <div class="lg:col-span-5 md:col-span-6">
                    <div class="lg:ml-5">
                        <div class="bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-700 p-6">
                            <h3 class="mb-6 text-2xl leading-normal font-medium">Get in touch !</h3>
                            @if(session()->has('message'))
                                <div class="py-3" style="color: green !important;">
                                    <div class="alert alert-success alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                                        {{ session()->get('message') }}
                                    </div>
                                </div>
                            @endif
                            <form action="{{ url('/send-message') }}" method="POST">
                                @csrf
                                <p class="mb-0" id="error-msg"></p>
                                <div id="simple-msg"></div>
                                <div class="grid lg:grid-cols-12 lg:gap-6">
                                    <div class="lg:col-span-6 mb-5">
                                        <label for="name" class="font-medium">Your Name:</label>
                                        <input name="name" id="name" type="text" class="form-input mt-2"
                                               placeholder="Name :">
                                        <div class="py-2">
                                            @if ($errors->has('name'))
                                                <span style="color: red">{{ $errors->first('name') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="lg:col-span-6 mb-5">
                                        <label for="email" class="font-medium">Your Email:</label>
                                        <input name="email" id="email" type="email" class="form-input mt-2"
                                               placeholder="Email :">
                                        <div class="py-2">
                                            @if ($errors->has('email'))
                                                <span style="color: red">{{ $errors->first('email') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1">
                                    <div class="mb-5">
                                        <label for="subject" class="font-medium">Your Question:</label>
                                        <input name="subject" id="subject" class="form-input mt-2"
                                               placeholder="Subject :">
                                        <div class="py-2">
                                            @if ($errors->has('subject'))
                                                <span style="color: red">{{ $errors->first('subject') }}</span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="mb-5">
                                        <label for="comments" class="font-medium">Message:</label>
                                        <textarea name="message" id="comments" class="form-input mt-2 textarea"
                                                  placeholder="Message :"></textarea>
                                        <div class="py-2">
                                            @if ($errors->has('message'))
                                                <span style="color: red">{{ $errors->first('message') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" id="submit" name="send"
                                        class="btn bg-green-600 hover:bg-green-700 text-white rounded-md">Send Message
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--end container-->

        <div class="container lg:mt-24 mt-16">
            <div class="grid grid-cols-1 lg:grid-cols-3 md:grid-cols-2 gap-[30px]">
                <div class="text-center px-6">
                    <div class="relative overflow-hidden text-transparent -m-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-hexagon h-32 w-32 fill-green-600/5 mx-auto">
                            <path
                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                        </svg>
                        <div
                            class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                            <i class="uil uil-phone"></i>
                        </div>
                    </div>

                    <div class="content mt-7">
                        <h5 class="title h5 text-xl font-medium">Phone</h5>
                        <p class="text-slate-400 mt-3">
                            This Is Our Official Phone. You Can Call Any Time
                            Friday Is Off
                        </p>

                        <div class="mt-5">
                            <a href="tel:+01862701717"
                               class="btn btn-link text-green-600 hover:text-green-600 after:bg-green-600 transition duration-500">
                                +880 01862701717
                            </a>
                        </div>
                    </div>
                </div>

                <div class="text-center px-6">
                    <div class="relative overflow-hidden text-transparent -m-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-hexagon h-32 w-32 fill-green-600/5 mx-auto">
                            <path
                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                        </svg>
                        <div
                            class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                            <i class="uil uil-envelope"></i>
                        </div>
                    </div>

                    <div class="content mt-7">
                        <h5 class="title h5 text-xl font-medium">Email</h5>
                        <p class="text-slate-400 mt-3">
                            This Is Our Official Email. You Can Mail Any Time
                            When You Want
                        </p>

                        <div class="mt-5">
                            <a href="mailto:contact@housely.com"
                               class="btn btn-link text-green-600 hover:text-green-600 after:bg-green-600 transition duration-500">
                                contact@housely.com
                            </a>
                        </div>
                    </div>
                </div>

                <div class="text-center px-6">
                    <div class="relative overflow-hidden text-transparent -m-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                             stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                             class="feather feather-hexagon h-32 w-32 fill-green-600/5 mx-auto">
                            <path
                                d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"></path>
                        </svg>
                        <div
                            class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                            <i class="uil uil-map-marker"></i>
                        </div>
                    </div>

                    <div class="content mt-7">
                        <h5 class="title h5 text-xl font-medium">Location</h5>
                        <p class="text-slate-400 mt-3">
                            This Is Our Office. You Can Visit Any Time <br>
                            Friday Is Off
                        </p>

                        <br>

                        <div class="mt-5">
                            <a href="javascript:void(0)"
                               class="btn btn-link text-green-600 hover:text-green-600 after:bg-green-600 transition duration-500 pb-4">
                                C/54 Laxmipur Ralway, Suite 558, <br> Rajshahi, Bangladesh
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section><!--end section-->
    <!-- End Section-->
@endsection

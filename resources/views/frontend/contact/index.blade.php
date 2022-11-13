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
                            <form method="post" name="myForm" id="myForm" onsubmit="return validateForm()">
                                <p class="mb-0" id="error-msg"></p>
                                <div id="simple-msg"></div>
                                <div class="grid lg:grid-cols-12 lg:gap-6">
                                    <div class="lg:col-span-6 mb-5">
                                        <label for="name" class="font-medium">Your Name:</label>
                                        <input name="name" id="name" type="text" class="form-input mt-2"
                                               placeholder="Name :">
                                    </div>

                                    <div class="lg:col-span-6 mb-5">
                                        <label for="email" class="font-medium">Your Email:</label>
                                        <input name="email" id="email" type="email" class="form-input mt-2"
                                               placeholder="Email :">
                                    </div>
                                </div>

                                <div class="grid grid-cols-1">
                                    <div class="mb-5">
                                        <label for="subject" class="font-medium">Your Question:</label>
                                        <input name="subject" id="subject" class="form-input mt-2"
                                               placeholder="Subject :">
                                    </div>

                                    <div class="mb-5">
                                        <label for="comments" class="font-medium">Your Comment:</label>
                                        <textarea name="comments" id="comments" class="form-input mt-2 textarea"
                                                  placeholder="Message :"></textarea>
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
                @foreach($contacts as $contact)
                    <div class="text-center px-6">
                        <div class="relative overflow-hidden text-transparent -m-3">
                            <i data-feather="hexagon" class="h-32 w-32 fill-green-600/5 mx-auto"></i>
                            <div
                                class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                                {!! $contact->icon_code !!}
                            </div>
                        </div>

                        <div class="content mt-7">
                            <h5 class="title h5 text-xl font-medium">
                                {{ $contact->name }}
                            </h5>
                            <p class="text-slate-400 mt-3">
                                {{ $contact->description }}
                            </p>

                            <div class="mt-5">
                                <a href="javascript:void(0)"
                                   class="btn btn-link text-green-600 hover:text-green-600 after:bg-green-600 transition duration-500">
                                    @if($contact->phone)
                                        {{ $contact->phone }}
                                    @elseif($contact->email)
                                        {{ $contact->email }}
                                    @elseif($contact->address)
                                        {{ $contact->address }}
                                    @endif
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End Section-->
@endsection

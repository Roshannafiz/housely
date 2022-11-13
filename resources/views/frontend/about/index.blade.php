@section('title') {{ 'About-Us' }} @endsection
@extends('frontend.Layouts')
@section('frontend_content')

    <!-- Start Hero -->
    <section
        class="relative table w-full py-32 lg:py-36 bg-[url('frontend/assets/images/bg/01.jpg')] bg-no-repeat bg-center">
        <div class="absolute inset-0 bg-black opacity-80"></div>
        <div class="container">
            <div class="grid grid-cols-1 text-center mt-10">
                <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">About Us</h3>
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

    <!-- Start -->
    <section class="relative lg:py-24 py-16">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="md:col-span-5">
                    <div class="relative">
                        <img src="{{ asset('frontend/assets/images/about.jpg') }}" class="rounded-xl shadow-md" alt="">
                        <div class="absolute bottom-2/4 translate-y-2/4 right-0 left-0 text-center">
                            <a href="#!" data-type="youtube" data-id="yba7hPeTSjk"
                               class="lightbox h-20 w-20 rounded-full shadow-md dark:shadow-gyay-700 inline-flex items-center justify-center bg-white dark:bg-slate-900 text-green-600">
                                <i class="mdi mdi-play inline-flex items-center justify-center text-2xl"></i>
                            </a>
                        </div>
                    </div>
                </div><!--end col-->

                <div class="md:col-span-7">
                    <div class="lg:ml-4">
                        <h4 class="mb-6 md:text-3xl text-2xl lg:leading-normal leading-normal font-semibold">Efficiency.
                            Transparency. <br> Control.</h4>
                        <p class="text-slate-400 max-w-xl">Hously developed a platform for the Real Estate marketplace
                            that
                            allows buyers and sellers to easily execute a transaction on their own. The platform drives
                            efficiency, cost transparency and control into the hands of the consumers. Hously is Real
                            Estate
                            Redefined.</p>

                        <div class="mt-4">
                            <a href="#" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md mt-3">Learn
                                More </a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container lg:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">How It Works</h3>

                <p class="text-slate-400 max-w-xl mx-auto">A great plateform to buy your properties without
                    any agent or commisions.</p>
            </div><!--end grid-->

            <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                @foreach($how_works as $how_work)
                    <div
                        class="group relative lg:px-10 transition-all duration-500 ease-in-out rounded-xl bg-white dark:bg-slate-900 overflow-hidden text-center">
                        <div class="relative overflow-hidden text-transparent -m-3">
                            <i data-feather="hexagon" class="h-32 w-32 fill-green-600/5 mx-auto"></i>
                            <div
                                class="absolute top-2/4 -translate-y-2/4 left-0 right-0 mx-auto text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                                {!! $how_work->icon_code !!}
                            </div>
                        </div>

                        <div class="mt-6">
                            <h5 class="text-xl font-medium">
                                {{ $how_work->title }}
                            </h5>
                            <p class="text-slate-400 mt-3">
                                {{ $how_work->description }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

    <!-- Start CTA -->
    <section class="relative py-24 bg-[url('frontend/assets/images/bg/01.jpg')] bg-no-repeat bg-center bg-fixed">
        <div class="absolute inset-0 bg-black/60"></div>
        <div class="container">
            <div class="grid lg:grid-cols-12 grid-cols-1 md:text-left text-center justify-center">
                <div class="lg:col-start-2 lg:col-span-10">
                    <div class="grid md:grid-cols-3 grid-cols-1 items-center">

                        <div class="counter-box text-center">
                            <h1 class="text-white lg:text-5xl text-4xl font-semibold mb-2"><span class="counter-value"
                                                                                                 data-target="1548">1010</span>+
                            </h1>
                            <h5 class="counter-head text-white text-lg font-medium">Properties Sell</h5>
                        </div><!--end counter box-->


                        <div class="counter-box text-center">
                            <h1 class="text-white lg:text-5xl text-4xl font-semibold mb-2"><span class="counter-value"
                                                                                                 data-target="25">2</span>+
                            </h1>
                            <h5 class="counter-head text-white text-lg font-medium">Award Gained</h5>
                        </div><!--end counter box-->


                        <div class="counter-box text-center">
                            <h1 class="text-white lg:text-5xl text-4xl font-semibold mb-2"><span class="counter-value"
                                                                                                 data-target="9">0</span>+
                            </h1>
                            <h5 class="counter-head text-white text-lg font-medium">Years Experience</h5>
                        </div><!--end counter box-->
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End CTA -->

    <!-- Start -->
    <section class="relative lg:py-24 py-16">
        <div class="container">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Meet The Agent
                    Team</h3>

                <p class="text-slate-400 max-w-xl mx-auto">A great plateform to buy your properties without
                    any agent or commisions.</p>
            </div><!--end grid-->

            <div class="grid md:grid-cols-12 grid-cols-1 mt-8 gap-[30px]">
                @foreach($agents as $agent)
                    <div class="lg:col-span-3 md:col-span-6">
                        <div class="group text-center">
                            <div class="relative inline-block mx-auto h-52 w-52 rounded-full overflow-hidden">
                                <img src="{{ asset('admin/images/upload-agent/' . $agent->image) }}" class="" alt="">
                                <div
                                    class="absolute inset-0 bg-gradient-to-b from-transparent to-black h-52 w-52 rounded-full opacity-0 group-hover:opacity-100 transition-all duration-500 ease-in-out"></div>

                                <ul class="list-none absolute right-0 left-0 -bottom-20 group-hover:bottom-5 transition-all duration-500 ease-in-out">
                                    <li class="inline">
                                        <a href="{{ $agent->facebook_link }}"
                                           class="btn btn-icon btn-sm rounded-full border border-green-600 bg-green-600 hover:border-green-600 hover:bg-green-600 text-white">
                                            <i data-feather="facebook" class="h-4 w-4"></i>
                                        </a>
                                    </li>

                                    <li class="inline">
                                        <a href="{{ $agent->instagram_link }}"
                                           class="btn btn-icon btn-sm rounded-full border border-green-600 bg-green-600 hover:border-green-600 hover:bg-green-600 text-white">
                                            <i data-feather="instagram" class="h-4 w-4"></i>
                                        </a>
                                    </li>

                                    <li class="inline">
                                        <a href="{{ $agent->linkedin_link }}"
                                           class="btn btn-icon btn-sm rounded-full border border-green-600 bg-green-600 hover:border-green-600 hover:bg-green-600 text-white">
                                            <i data-feather="linkedin" class="h-4 w-4"></i>
                                        </a>
                                    </li>
                                </ul><!--end icon-->
                            </div>

                            <div class="content mt-3">
                                <a href="#"
                                   class="text-xl font-medium hover:text-green-600 transition-all duration-500 ease-in-out">
                                    {{ $agent->name }}
                                </a>
                                <p class="text-slate-400">
                                    {{ $agent->speciality }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container lg:mt-24 mt-16">
            <div class="grid grid-cols-1 pb-8 text-center">
                <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What Our Client Say
                    ?</h3>

                <p class="text-slate-400 max-w-xl mx-auto">A great plateform to buy, sell and rent your properties
                    without
                    any agent or commisions.</p>
            </div><!--end grid-->

            <div class="flex justify-center relative mt-8">
                <div class="relative w-full">
                    <div class="tiny-three-item">
                        <div class="tiny-slide">
                            <div class="text-center mx-3">
                                <p class="text-lg text-slate-400 italic"> " Hously made the processes so easy. Hously
                                    instantly increased the amount of interest and ultimately saved us over $10,000.
                                    " </p>

                                <div class="text-center mt-5">
                                    <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                    <img src="{{ asset('frontend/assets/images/client/01.jpg') }}"
                                         class="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
                                    <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                                    <span class="text-slate-400 text-sm">Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="text-center mx-3">
                                <p class="text-lg text-slate-400 italic"> " I highly recommend Hously as the new way to
                                    sell
                                    your home "by owner". My home sold in 24 hours for the asking price. Best $400 you
                                    could
                                    spend to sell your home. " </p>

                                <div class="text-center mt-5">
                                    <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                    <img src="{{ asset('frontend/assets/images/client/02.jpg') }}"
                                         class="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
                                    <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                                    <span class="text-slate-400 text-sm">Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="text-center mx-3">
                                <p class="text-lg text-slate-400 italic"> " My favorite part about selling my home
                                    myself
                                    was that we got to meet and get to know the people personally. This made it so much
                                    more
                                    enjoyable! " </p>

                                <div class="text-center mt-5">
                                    <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                    <img src="{{ asset('frontend/assets/images/client/03.jpg') }}"
                                         class="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
                                    <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                                    <span class="text-slate-400 text-sm">Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="text-center mx-3">
                                <p class="text-lg text-slate-400 italic"> " Great experience all around! Easy to use and
                                    efficient. " </p>

                                <div class="text-center mt-5">
                                    <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                    <img src="{{ asset('frontend/assets/images/client/04.jpg') }}"
                                         class="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
                                    <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                                    <span class="text-slate-400 text-sm">Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="text-center mx-3">
                                <p class="text-lg text-slate-400 italic"> " Hously made selling my home easy and stress
                                    free. They went above and beyond what is expected. " </p>

                                <div class="text-center mt-5">
                                    <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                    <img src="{{ asset('frontend/assets/images/client/05.jpg') }}"
                                         class="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
                                    <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                                    <span class="text-slate-400 text-sm">Manager</span>
                                </div>
                            </div>
                        </div>

                        <div class="tiny-slide">
                            <div class="text-center mx-3">
                                <p class="text-lg text-slate-400 italic"> " Hously is fair priced, quick to respond, and
                                    easy to use. I highly recommend their services! " </p>

                                <div class="text-center mt-5">
                                    <ul class="text-xl font-medium text-amber-400 list-none mb-2">
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                        <li class="inline"><i class="mdi mdi-star"></i></li>
                                    </ul>

                                    <img src="{{ asset('frontend/assets/images/client/06.jpg') }}"
                                         class="h-14 w-14 rounded-full shadow-md dark:shadow-gray-700 mx-auto" alt="">
                                    <h6 class="mt-2 fw-semibold">Christa Smith</h6>
                                    <span class="text-slate-400 text-sm">Manager</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container lg:mt-24 mt-16">
            <div class="grid grid-cols-1 text-center">
                <h3 class="mb-6 md:text-3xl text-2xl md:leading-normal leading-normal font-medium text-black dark:text-white">
                    Have Question ? Get in touch!</h3>

                <p class="text-slate-400 max-w-xl mx-auto">A great plateform to buy, sell and rent your properties
                    without
                    any agent or commisions.</p>

                <div class="mt-6">
                    <a href="{{ url('/contact-us') }}"
                       class="btn bg-green-600 hover:bg-green-700 text-white rounded-md"><i
                            class="uil uil-phone align-middle mr-2"></i> Contact us</a>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->

@endsection

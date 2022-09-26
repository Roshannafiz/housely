<!----------- include Head File ----------->
@include('frontend.include._head')

<!----------- include Navbar File ----------->
@include('frontend.include._navbar')

<!-- Start Hero -->
<section
    class="relative table w-full py-32 lg:py-36 bg-[url('frontend/assets/images/bg/01.jpg')] bg-no-repeat bg-center">
    <div class="absolute inset-0 bg-black opacity-80"></div>
    <div class="container">
        <div class="grid grid-cols-1 text-center mt-10">
            <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Services /
                Features</h3>
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
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-x-[30px] gap-y-[50px]">
            <!-- Content -->
            <div
                class="group relative lg:px-10 transition-all duration-500 ease-in-out rounded-xl bg-white dark:bg-slate-900 overflow-hidden">
                <div class="relative overflow-hidden text-transparent -m-3">
                    <i data-feather="hexagon" class="h-32 w-32 fill-green-600/5"></i>
                    <div
                        class="absolute top-[50%] -translate-y-[50%] left-[45px] text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                        <i class="mdi mdi-cards-heart"></i>
                    </div>
                </div>

                <div class="mt-6">
                    <a href="#" class="text-xl hover:text-green-600 font-medium">Comfortable</a>
                    <p class="text-slate-400 mt-3">If the distribution of letters and 'words' is random, the reader will
                        not be distracted from making.</p>
                </div>
            </div>
            <!-- Content -->

            <!-- Content -->
            <div
                class="group relative lg:px-10 transition-all duration-500 ease-in-out rounded-xl bg-white dark:bg-slate-900 overflow-hidden">
                <div class="relative overflow-hidden text-transparent -m-3">
                    <i data-feather="hexagon" class="h-32 w-32 fill-green-600/5"></i>
                    <div
                        class="absolute top-[50%] -translate-y-[50%] left-[45px] text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                        <i class="mdi mdi-shield-sun"></i>
                    </div>
                </div>

                <div class="mt-6">
                    <a href="#" class="text-xl hover:text-green-600 font-medium">Extra Security</a>
                    <p class="text-slate-400 mt-3">If the distribution of letters and 'words' is random, the reader will
                        not be distracted from making.</p>
                </div>
            </div>
            <!-- Content -->

            <!-- Content -->
            <div
                class="group relative lg:px-10 transition-all duration-500 ease-in-out rounded-xl bg-white dark:bg-slate-900 overflow-hidden">
                <div class="relative overflow-hidden text-transparent -m-3">
                    <i data-feather="hexagon" class="h-32 w-32 fill-green-600/5"></i>
                    <div
                        class="absolute top-[50%] -translate-y-[50%] left-[45px] text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                        <i class="mdi mdi-star"></i>
                    </div>
                </div>

                <div class="mt-6">
                    <a href="#" class="text-xl hover:text-green-600 font-medium">Luxury</a>
                    <p class="text-slate-400 mt-3">If the distribution of letters and 'words' is random, the reader will
                        not be distracted from making.</p>
                </div>
            </div>
            <!-- Content -->

            <!-- Content -->
            <div
                class="group relative lg:px-10 transition-all duration-500 ease-in-out rounded-xl bg-white dark:bg-slate-900 overflow-hidden">
                <div class="relative overflow-hidden text-transparent -m-3">
                    <i data-feather="hexagon" class="h-32 w-32 fill-green-600/5"></i>
                    <div
                        class="absolute top-[50%] -translate-y-[50%] left-[45px] text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                        <i class="mdi mdi-currency-usd"></i>
                    </div>
                </div>

                <div class="mt-6">
                    <a href="#" class="text-xl hover:text-green-600 font-medium">Best Price</a>
                    <p class="text-slate-400 mt-3">If the distribution of letters and 'words' is random, the reader will
                        not be distracted from making.</p>
                </div>
            </div>
            <!-- Content -->

            <!-- Content -->
            <div
                class="group relative lg:px-10 transition-all duration-500 ease-in-out rounded-xl bg-white dark:bg-slate-900 overflow-hidden">
                <div class="relative overflow-hidden text-transparent -m-3">
                    <i data-feather="hexagon" class="h-32 w-32 fill-green-600/5"></i>
                    <div
                        class="absolute top-[50%] -translate-y-[50%] left-[45px] text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                        <i class="mdi mdi-map-marker"></i>
                    </div>
                </div>

                <div class="mt-6">
                    <a href="#" class="text-xl hover:text-green-600 font-medium">Stratagic Location</a>
                    <p class="text-slate-400 mt-3">If the distribution of letters and 'words' is random, the reader will
                        not be distracted from making.</p>
                </div>
            </div>
            <!-- Content -->

            <!-- Content -->
            <div
                class="group relative lg:px-10 transition-all duration-500 ease-in-out rounded-xl bg-white dark:bg-slate-900 overflow-hidden">
                <div class="relative overflow-hidden text-transparent -m-3">
                    <i data-feather="hexagon" class="h-32 w-32 fill-green-600/5"></i>
                    <div
                        class="absolute top-[50%] -translate-y-[50%] left-[45px] text-green-600 rounded-xl transition-all duration-500 ease-in-out text-4xl flex align-middle justify-center items-center">
                        <i class="mdi mdi-chart-arc"></i>
                    </div>
                </div>

                <div class="mt-6">
                    <a href="#" class="text-xl hover:text-green-600 font-medium">Efficient</a>
                    <p class="text-slate-400 mt-3">If the distribution of letters and 'words' is random, the reader will
                        not be distracted from making.</p>
                </div>
            </div>
            <!-- Content -->
        </div><!--end grid-->
    </div><!--end container-->

    <div class="container lg:mt-24 mt-16">
        <div class="grid grid-cols-1 pb-8 text-center">
            <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">What Our Client Say
                ?</h3>

            <p class="text-slate-400 max-w-xl mx-auto">A great plateform to buy, sell and rent your properties without
                any agent or commisions.</p>
        </div><!--end grid-->

        <div class="flex justify-center relative mt-16">
            <div class="relative lg:w-1/3 md:w-1/2 w-full">
                <div class="absolute -top-20 md:-left-24 -left-0">
                    <i class="mdi mdi-format-quote-open text-9xl opacity-5"></i>
                </div>

                <div class="absolute bottom-28 md:-right-24 -right-0">
                    <i class="mdi mdi-format-quote-close text-9xl opacity-5"></i>
                </div>

                <div class="tiny-single-item">
                    <div class="tiny-slide">
                        <div class="text-center">
                            <p class="text-xl text-slate-400 italic"> " Hously made the processes so easy. Hously
                                instantly increased the amount of interest and ultimately saved us over $10,000. " </p>

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
                        <div class="text-center">
                            <p class="text-xl text-slate-400 italic"> " I highly recommend Hously as the new way to sell
                                your home "by owner". My home sold in 24 hours for the asking price. Best $400 you could
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
                        <div class="text-center">
                            <p class="text-xl text-slate-400 italic"> " My favorite part about selling my home myself
                                was that we got to meet and get to know the people personally. This made it so much more
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
                        <div class="text-center">
                            <p class="text-xl text-slate-400 italic"> " Great experience all around! Easy to use and
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
                        <div class="text-center">
                            <p class="text-xl text-slate-400 italic"> " Hously made selling my home easy and stress
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
                        <div class="text-center">
                            <p class="text-xl text-slate-400 italic"> " Hously is fair priced, quick to respond, and
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

            <p class="text-slate-400 max-w-xl mx-auto">A great plateform to buy, sell and rent your properties without
                any agent or commisions.</p>

            <div class="mt-6">
                <a href="contact.html" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md"><i
                        class="uil uil-phone align-middle mr-2"></i> Contact us</a>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!------------ include Client Review File --------->
@include('frontend.include._footer')

<!------------ include Switcher File --------->
@include('frontend.include._switcher')

<!-------------- include Back To Top File ------------>
@include('frontend.include._back-to-top')

<!-------------- include Script File ------------>
@include('frontend.include._script')

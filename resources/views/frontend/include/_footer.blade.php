<!-- Start Footer -->
<footer class="relative bg-neutral-900 dark:bg-slate-800 mt-24">
    <div class="container">
        <div class="grid grid-cols-1">
            <div class="relative py-16">
                <!-- Subscribe -->
                <div class="relative w-full">
                    <div
                        class="relative -top-40 bg-white dark:bg-slate-900 lg:px-8 px-6 py-10 rounded-xl shadow-lg dark:shadow-gray-700 overflow-hidden">
                        <div class="grid md:grid-cols-2 grid-cols-1 items-center gap-[30px]">
                            <div class="md:text-left text-center z-1">
                                <h3 class="md:text-3xl text-2xl md:leading-normal leading-normal font-medium text-black dark:text-white">
                                    Subscribe to Newsletter!</h3>
                                <p class="text-slate-400 max-w-xl mx-auto">Subscribe to get latest updates and
                                    information.</p>
                            </div>

                            <div class="subcribe-form z-1">
                                <form class="relative max-w-lg md:ml-auto">
                                    <input type="email" id="subcribe" name="email"
                                           class="rounded-full bg-white dark:bg-slate-900 shadow dark:shadow-gray-700"
                                           placeholder="Enter your email :">
                                    <button type="submit"
                                            class="btn bg-green-600 hover:bg-green-700 text-white rounded-full">
                                        Subscribe
                                    </button>
                                </form><!--end form-->
                            </div>
                        </div>

                        <div class="absolute -top-5 -left-5">
                            <div
                                class="uil uil-envelope lg:text-[150px] text-7xl text-black/5 dark:text-white/5 -rotate-45"></div>
                        </div>

                        <div class="absolute -bottom-5 -right-5">
                            <div class="uil uil-pen lg:text-[150px] text-7xl text-black/5 dark:text-white/5"></div>
                        </div>
                    </div>

                    <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px] -mt-24">
                        <div class="lg:col-span-4 md:col-span-12">
                            <a href="#" class="text-[22px] focus:outline-none">
                                <img src="{{ asset('frontend/assets/images/logo-light.png') }}" alt="">
                            </a>
                            <p class="mt-6 text-gray-300">A great plateform to buy, sell and rent your properties
                                without any agent or commisions.</p>

                        </div><!--end col-->

                        <div class="lg:col-span-2 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Company</h5>
                            <ul class="list-none footer-list mt-6">
                                <li>
                                    <a href="{{ url('/about-us') }}"
                                       class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i
                                            class="uil uil-angle-right-b me-1"></i> About us</a>
                                </li>

                                <li class="mt-[10px]">
                                    <a href="{{ url('/features') }}"
                                       class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i
                                            class="uil uil-angle-right-b me-1"></i> Services</a>
                                </li>

                                <li class="mt-[10px]">
                                    <a href="{{ url('/login') }}"
                                       class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i
                                            class="uil uil-angle-right-b me-1"></i> Login</a>
                                </li>
                            </ul>
                        </div><!--end col-->

                        <div class="lg:col-span-3 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Usefull Links</h5>
                            <ul class="list-none footer-list mt-6">
                                <li>
                                    <a href="{{ url('/terms') }}"
                                       class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i
                                            class="uil uil-angle-right-b me-1"></i> Terms of Services</a>
                                </li>

                                <li class="mt-[10px]">
                                    <a href="{{ url('/privacy') }}"
                                       class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i
                                            class="uil uil-angle-right-b me-1"></i> Privacy Policy</a>
                                </li>

                                <li class="mt-[10px]">
                                    <a href="{{ url('/contact') }}"
                                       class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out"><i
                                            class="uil uil-angle-right-b me-1"></i> Contact</a>
                                </li>
                            </ul>
                        </div><!--end col-->

                        <div class="lg:col-span-3 md:col-span-4">
                            <h5 class="tracking-[1px] text-gray-100 font-semibold">Contact Details</h5>


                            <div class="flex mt-6">
                                <i data-feather="map-pin" class="w-5 h-5 text-green-600 mr-3"></i>
                                <div class="">
                                    <h6 class="text-gray-300 mb-2">
                                        Rajshahi Asam Coloni<br> Suite 558, <br>Bangladesh
                                    </h6>
                                </div>
                            </div>

                            <div class="flex mt-6">
                                <i data-feather="mail" class="w-5 h-5 text-green-600 mr-3"></i>
                                <div class="">
                                    <a href="mailto:mdroshannafiz@gmail.com"
                                       class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out">mdroshannafiz@gmail.com</a>
                                </div>
                            </div>

                            <div class="flex mt-6">
                                <i data-feather="phone" class="w-5 h-5 text-green-600 mr-3"></i>
                                <div class="">
                                    <a href="tel:+152534-468-854"
                                       class="text-slate-300 hover:text-slate-400 duration-500 ease-in-out">
                                        +880 1862701717
                                    </a>
                                </div>
                            </div>
                        </div><!--end col-->
                    </div><!--end grid-->
                </div>
                <!-- Subscribe -->
            </div>
        </div>
    </div><!--end container-->

    <div class="py-[30px] px-0 border-t border-gray-800">
        <div class="container text-center">
            <div class="grid md:grid-cols-2 items-center gap-6">
                <div class="md:text-left text-center">
                    <p class="mb-0 text-gray-300">©
                        <script>document.write(new Date().getFullYear())</script>
                        Hously. Design with <i class="mdi mdi-heart text-red-600"></i> by <a
                            href="http://roshannafiz.com/" target="_blank" class="text-reset">Roshan Nafiz</a>.
                    </p>
                </div>

                <ul class="list-none md:text-right text-center">
                    <li class="inline"><a href="#"
                                          class="btn btn-icon btn-sm text-gray-400 hover:text-white border !border-gray-800 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i
                                data-feather="facebook" class="h-4 w-4"></i></a></li>
                    <li class="inline"><a href="#"
                                          class="btn btn-icon btn-sm text-gray-400 hover:text-white border !border-gray-800 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i
                                data-feather="instagram" class="h-4 w-4"></i></a></li>
                    <li class="inline"><a href="#"
                                          class="btn btn-icon btn-sm text-gray-400 hover:text-white border !border-gray-800 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i
                                data-feather="twitter" class="h-4 w-4"></i></a></li>
                    <li class="inline"><a href="#"
                                          class="btn btn-icon btn-sm text-gray-400 hover:text-white border !border-gray-800 rounded-md hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600"><i
                                data-feather="linkedin" class="h-4 w-4"></i></a></li>
                </ul><!--end icon-->
            </div><!--end grid-->
        </div><!--end container-->
    </div>
</footer><!--end footer-->
<!-- End Footer -->

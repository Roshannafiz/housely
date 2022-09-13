<!----------- include Head File ----------->
@include('frontend.include._head')

<!----------- include Navbar File ----------->
@include('frontend.include._navbar')

<!-- Start Hero -->
<section class="relative table w-full py-32 lg:py-36 bg-[url('frontend/assets/images/bg/01.jpg')] bg-no-repeat bg-center">
    <div class="absolute inset-0 bg-black opacity-80"></div>
    <div class="container">
        <div class="grid grid-cols-1 text-center mt-10">
            <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">
                Find Your Dream Home
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
<div class="container relative -mt-16 z-1">
    <div class="grid grid-cols-1">
        <form class="p-6 bg-white dark:bg-slate-900 rounded-xl shadow-md dark:shadow-gray-700">
            <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-[24px]">
                <div>
                    <label class="form-label font-medium">Search : <span class="text-red-600">*</span></label>
                    <div class="form-icon relative mt-2">
                        <i data-feather="search" class="w-4 h-4 absolute top-3 left-4"></i>
                        <input type="text" id="property-name" name="name" class="form-input pl-12"
                               placeholder="Search your home :" required="">
                    </div>
                </div><!--end col-->

                <div>
                    <label for="buy-properties" class="form-label font-medium">Select Categories:</label>
                    <select id="buy-properties" class="form-input mt-2">
                        <option>Houses</option>
                        <option>Apartment</option>
                        <option>Offices</option>
                        <option>Townhome</option>
                    </select>
                </div><!--end col-->

                <div>
                    <label for="buy-min-price" class="form-label font-medium">Min Price :</label>
                    <select id="buy-min-price" class="form-input mt-2">
                        <option>Min Price</option>
                        <option>500</option>
                        <option>1000</option>
                        <option>2000</option>
                        <option>3000</option>
                        <option>4000</option>
                        <option>5000</option>
                        <option>6000</option>
                    </select>
                </div><!--end col-->

                <div>
                    <label for="buy-max-price" class="form-label font-medium">Max Price :</label>
                    <select id="buy-max-price" class="form-input mt-2">
                        <option>Max Price</option>
                        <option>500</option>
                        <option>1000</option>
                        <option>2000</option>
                        <option>3000</option>
                        <option>4000</option>
                        <option>5000</option>
                        <option>6000</option>
                    </select>
                </div><!--end col-->

                <div class="">
                    <a href="#" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md w-full">Search now</a>
                </div><!--end col-->
            </div><!--end row-->
        </form><!--end form-->
    </div><!--end grid-->
</div><!--end container-->
<!-- End Hero -->

<!-- Start -->
<section class="relative lg:py-24 py-16">
    <div class="container">
        <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-[30px]">
            <div
                class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                <div class="relative">
                    <img src="{{ asset('frontend/assets/images/property/1.jpg') }}" alt="">

                    <div class="absolute top-6 right-6">
                        <a href="#"
                           class="btn btn-icon text-lg bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-red-600"><i
                                class="mdi mdi-heart"></i></a>
                    </div>
                </div>

                <div class="p-6">
                    <div class="pb-6">
                        <a href="property-detail.html"
                           class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">10765 Hillshire
                            Ave, Baton Rouge, LA 70810, USA</a>
                    </div>

                    <ul class="py-6 border-y dark:border-gray-800 flex items-center list-none">
                        <li class="flex items-center mr-4">
                            <i class="uil uil-compress-arrows text-2xl mr-2 text-green-600"></i>
                            <span>8000sqf</span>
                        </li>

                        <li class="flex items-center mr-4">
                            <i class="uil uil-bed-double text-2xl mr-2 text-green-600"></i>
                            <span>4 Beds</span>
                        </li>

                        <li class="flex items-center">
                            <i class="uil uil-bath text-2xl mr-2 text-green-600"></i>
                            <span>4 Baths</span>
                        </li>
                    </ul>

                    <ul class="pt-6 flex justify-between items-center list-none">
                        <li>
                            <span class="text-slate-400">Price</span>
                            <p class="text-lg font-medium">$5000</p>
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
            </div><!--end property content-->

            <div
                class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                <div class="relative">
                    <img src="{{ asset('frontend/assets/images/property/2.jpg') }}" alt="">

                    <div class="absolute top-6 right-6">
                        <a href="#"
                           class="btn btn-icon text-lg bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-red-600"><i
                                class="mdi mdi-heart"></i></a>
                    </div>
                </div>

                <div class="p-6">
                    <div class="pb-6">
                        <a href="property-detail.html"
                           class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">59345 STONEWALL DR,
                            Plaquemine, LA 70764, USA</a>
                    </div>

                    <ul class="py-6 border-y dark:border-gray-800 flex items-center list-none">
                        <li class="flex items-center mr-4">
                            <i class="uil uil-compress-arrows text-2xl mr-2 text-green-600"></i>
                            <span>8000sqf</span>
                        </li>

                        <li class="flex items-center mr-4">
                            <i class="uil uil-bed-double text-2xl mr-2 text-green-600"></i>
                            <span>4 Beds</span>
                        </li>

                        <li class="flex items-center">
                            <i class="uil uil-bath text-2xl mr-2 text-green-600"></i>
                            <span>4 Baths</span>
                        </li>
                    </ul>

                    <ul class="pt-6 flex justify-between items-center list-none">
                        <li>
                            <span class="text-slate-400">Price</span>
                            <p class="text-lg font-medium">$5000</p>
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
            </div><!--end property content-->

            <div
                class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                <div class="relative">
                    <img src="{{ asset('frontend/assets/images/property/3.jpg') }}" alt="">

                    <div class="absolute top-6 right-6">
                        <a href="#"
                           class="btn btn-icon text-lg bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-red-600"><i
                                class="mdi mdi-heart"></i></a>
                    </div>
                </div>

                <div class="p-6">
                    <div class="pb-6">
                        <a href="property-detail.html"
                           class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">3723 SANDBAR DR,
                            Addis, LA 70710, USA</a>
                    </div>

                    <ul class="py-6 border-y dark:border-gray-800 flex items-center list-none">
                        <li class="flex items-center mr-4">
                            <i class="uil uil-compress-arrows text-2xl mr-2 text-green-600"></i>
                            <span>8000sqf</span>
                        </li>

                        <li class="flex items-center mr-4">
                            <i class="uil uil-bed-double text-2xl mr-2 text-green-600"></i>
                            <span>4 Beds</span>
                        </li>

                        <li class="flex items-center">
                            <i class="uil uil-bath text-2xl mr-2 text-green-600"></i>
                            <span>4 Baths</span>
                        </li>
                    </ul>

                    <ul class="pt-6 flex justify-between items-center list-none">
                        <li>
                            <span class="text-slate-400">Price</span>
                            <p class="text-lg font-medium">$5000</p>
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
            </div><!--end property content-->

            <div
                class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                <div class="relative">
                    <img src="{{ asset('frontend/assets/images/property/4.jpg') }}" alt="">

                    <div class="absolute top-6 right-6">
                        <a href="#"
                           class="btn btn-icon text-lg bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-red-600"><i
                                class="mdi mdi-heart"></i></a>
                    </div>
                </div>

                <div class="p-6">
                    <div class="pb-6">
                        <a href="property-detail.html"
                           class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">Lot 21 ROYAL OAK
                            DR, Prairieville, LA 70769, USA</a>
                    </div>

                    <ul class="py-6 border-y dark:border-gray-800 flex items-center list-none">
                        <li class="flex items-center mr-4">
                            <i class="uil uil-compress-arrows text-2xl mr-2 text-green-600"></i>
                            <span>8000sqf</span>
                        </li>

                        <li class="flex items-center mr-4">
                            <i class="uil uil-bed-double text-2xl mr-2 text-green-600"></i>
                            <span>4 Beds</span>
                        </li>

                        <li class="flex items-center">
                            <i class="uil uil-bath text-2xl mr-2 text-green-600"></i>
                            <span>4 Baths</span>
                        </li>
                    </ul>

                    <ul class="pt-6 flex justify-between items-center list-none">
                        <li>
                            <span class="text-slate-400">Price</span>
                            <p class="text-lg font-medium">$5000</p>
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
            </div><!--end property content-->

            <div
                class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                <div class="relative">
                    <img src="{{ asset('frontend/assets/images/property/5.jpg') }}" alt="">

                    <div class="absolute top-6 right-6">
                        <a href="#"
                           class="btn btn-icon text-lg bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-red-600"><i
                                class="mdi mdi-heart"></i></a>
                    </div>
                </div>

                <div class="p-6">
                    <div class="pb-6">
                        <a href="property-detail.html"
                           class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">710 BOYD DR, Unit
                            #1102, Baton Rouge, LA 70808, USA</a>
                    </div>

                    <ul class="py-6 border-y dark:border-gray-800 flex items-center list-none">
                        <li class="flex items-center mr-4">
                            <i class="uil uil-compress-arrows text-2xl mr-2 text-green-600"></i>
                            <span>8000sqf</span>
                        </li>

                        <li class="flex items-center mr-4">
                            <i class="uil uil-bed-double text-2xl mr-2 text-green-600"></i>
                            <span>4 Beds</span>
                        </li>

                        <li class="flex items-center">
                            <i class="uil uil-bath text-2xl mr-2 text-green-600"></i>
                            <span>4 Baths</span>
                        </li>
                    </ul>

                    <ul class="pt-6 flex justify-between items-center list-none">
                        <li>
                            <span class="text-slate-400">Price</span>
                            <p class="text-lg font-medium">$5000</p>
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
            </div><!--end property content-->

            <div
                class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                <div class="relative">
                    <img src="{{ asset('frontend/assets/images/property/6.jpg') }}" alt="">

                    <div class="absolute top-6 right-6">
                        <a href="#"
                           class="btn btn-icon text-lg bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-red-600"><i
                                class="mdi mdi-heart"></i></a>
                    </div>
                </div>

                <div class="p-6">
                    <div class="pb-6">
                        <a href="property-detail.html"
                           class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">5133 MCLAIN WAY,
                            Baton Rouge, LA 70809, USA</a>
                    </div>

                    <ul class="py-6 border-y dark:border-gray-800 flex items-center list-none">
                        <li class="flex items-center mr-4">
                            <i class="uil uil-compress-arrows text-2xl mr-2 text-green-600"></i>
                            <span>8000sqf</span>
                        </li>

                        <li class="flex items-center mr-4">
                            <i class="uil uil-bed-double text-2xl mr-2 text-green-600"></i>
                            <span>4 Beds</span>
                        </li>

                        <li class="flex items-center">
                            <i class="uil uil-bath text-2xl mr-2 text-green-600"></i>
                            <span>4 Baths</span>
                        </li>
                    </ul>

                    <ul class="pt-6 flex justify-between items-center list-none">
                        <li>
                            <span class="text-slate-400">Price</span>
                            <p class="text-lg font-medium">$5000</p>
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
            </div><!--end property content-->

            <div
                class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                <div class="relative">
                    <img src="{{ asset('frontend/assets/images/property/7.jpg') }}" alt="">

                    <div class="absolute top-6 right-6">
                        <a href="#"
                           class="btn btn-icon text-lg bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-red-600"><i
                                class="mdi mdi-heart"></i></a>
                    </div>
                </div>

                <div class="p-6">
                    <div class="pb-6">
                        <a href="property-detail.html"
                           class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">2141 Fiero Street,
                            Baton Rouge, LA 70808</a>
                    </div>

                    <ul class="py-6 border-y dark:border-gray-800 flex items-center list-none">
                        <li class="flex items-center mr-4">
                            <i class="uil uil-compress-arrows text-2xl mr-2 text-green-600"></i>
                            <span>8000sqf</span>
                        </li>

                        <li class="flex items-center mr-4">
                            <i class="uil uil-bed-double text-2xl mr-2 text-green-600"></i>
                            <span>4 Beds</span>
                        </li>

                        <li class="flex items-center">
                            <i class="uil uil-bath text-2xl mr-2 text-green-600"></i>
                            <span>4 Baths</span>
                        </li>
                    </ul>

                    <ul class="pt-6 flex justify-between items-center list-none">
                        <li>
                            <span class="text-slate-400">Price</span>
                            <p class="text-lg font-medium">$5000</p>
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
            </div><!--end property content-->

            <div
                class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                <div class="relative">
                    <img src="{{ asset('frontend/assets/images/property/8.jpg') }}" alt="">

                    <div class="absolute top-6 right-6">
                        <a href="#"
                           class="btn btn-icon text-lg bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-red-600"><i
                                class="mdi mdi-heart"></i></a>
                    </div>
                </div>

                <div class="p-6">
                    <div class="pb-6">
                        <a href="property-detail.html"
                           class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">9714 Inniswold
                            Estates Ave, Baton Rouge, LA 70809</a>
                    </div>

                    <ul class="py-6 border-y dark:border-gray-800 flex items-center list-none">
                        <li class="flex items-center mr-4">
                            <i class="uil uil-compress-arrows text-2xl mr-2 text-green-600"></i>
                            <span>8000sqf</span>
                        </li>

                        <li class="flex items-center mr-4">
                            <i class="uil uil-bed-double text-2xl mr-2 text-green-600"></i>
                            <span>4 Beds</span>
                        </li>

                        <li class="flex items-center">
                            <i class="uil uil-bath text-2xl mr-2 text-green-600"></i>
                            <span>4 Baths</span>
                        </li>
                    </ul>

                    <ul class="pt-6 flex justify-between items-center list-none">
                        <li>
                            <span class="text-slate-400">Price</span>
                            <p class="text-lg font-medium">$5000</p>
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
            </div><!--end property content-->

            <div
                class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                <div class="relative">
                    <img src="{{ asset('frontend/assets/images/property/9.jpg') }}" alt="">

                    <div class="absolute top-6 right-6">
                        <a href="#"
                           class="btn btn-icon text-lg bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-red-600"><i
                                class="mdi mdi-heart"></i></a>
                    </div>
                </div>

                <div class="p-6">
                    <div class="pb-6">
                        <a href="property-detail.html"
                           class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">1433 Beckenham Dr,
                            Baton Rouge, LA 70808, USA</a>
                    </div>

                    <ul class="py-6 border-y dark:border-gray-800 flex items-center list-none">
                        <li class="flex items-center mr-4">
                            <i class="uil uil-compress-arrows text-2xl mr-2 text-green-600"></i>
                            <span>8000sqf</span>
                        </li>

                        <li class="flex items-center mr-4">
                            <i class="uil uil-bed-double text-2xl mr-2 text-green-600"></i>
                            <span>4 Beds</span>
                        </li>

                        <li class="flex items-center">
                            <i class="uil uil-bath text-2xl mr-2 text-green-600"></i>
                            <span>4 Baths</span>
                        </li>
                    </ul>

                    <ul class="pt-6 flex justify-between items-center list-none">
                        <li>
                            <span class="text-slate-400">Price</span>
                            <p class="text-lg font-medium">$5000</p>
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
            </div><!--end property content-->

            <div
                class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                <div class="relative">
                    <img src="{{ asset('frontend/assets/images/property/10.jpg') }}" alt="">

                    <div class="absolute top-6 right-6">
                        <a href="#"
                           class="btn btn-icon text-lg bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-red-600"><i
                                class="mdi mdi-heart"></i></a>
                    </div>
                </div>

                <div class="p-6">
                    <div class="pb-6">
                        <a href="property-detail.html"
                           class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">1574 Sharlo Ave,
                            Baton Rouge, LA 70820, USA</a>
                    </div>

                    <ul class="py-6 border-y dark:border-gray-800 flex items-center list-none">
                        <li class="flex items-center mr-4">
                            <i class="uil uil-compress-arrows text-2xl mr-2 text-green-600"></i>
                            <span>8000sqf</span>
                        </li>

                        <li class="flex items-center mr-4">
                            <i class="uil uil-bed-double text-2xl mr-2 text-green-600"></i>
                            <span>4 Beds</span>
                        </li>

                        <li class="flex items-center">
                            <i class="uil uil-bath text-2xl mr-2 text-green-600"></i>
                            <span>4 Baths</span>
                        </li>
                    </ul>

                    <ul class="pt-6 flex justify-between items-center list-none">
                        <li>
                            <span class="text-slate-400">Price</span>
                            <p class="text-lg font-medium">$5000</p>
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
            </div><!--end property content-->

            <div
                class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                <div class="relative">
                    <img src="{{ asset('frontend/assets/images/property/11.jpg') }}" alt="">

                    <div class="absolute top-6 right-6">
                        <a href="#"
                           class="btn btn-icon text-lg bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-red-600"><i
                                class="mdi mdi-heart"></i></a>
                    </div>
                </div>

                <div class="p-6">
                    <div class="pb-6">
                        <a href="property-detail.html"
                           class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">2528 BOCAGE LAKE
                            DR, Baton Rouge, LA 70809, USA</a>
                    </div>

                    <ul class="py-6 border-y dark:border-gray-800 flex items-center list-none">
                        <li class="flex items-center mr-4">
                            <i class="uil uil-compress-arrows text-2xl mr-2 text-green-600"></i>
                            <span>8000sqf</span>
                        </li>

                        <li class="flex items-center mr-4">
                            <i class="uil uil-bed-double text-2xl mr-2 text-green-600"></i>
                            <span>4 Beds</span>
                        </li>

                        <li class="flex items-center">
                            <i class="uil uil-bath text-2xl mr-2 text-green-600"></i>
                            <span>4 Baths</span>
                        </li>
                    </ul>

                    <ul class="pt-6 flex justify-between items-center list-none">
                        <li>
                            <span class="text-slate-400">Price</span>
                            <p class="text-lg font-medium">$5000</p>
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
            </div><!--end property content-->

            <div
                class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-xl dark:hover:shadow-xl dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500">
                <div class="relative">
                    <img src="{{ asset('frontend/assets/images/property/12.jpg') }}" alt="">

                    <div class="absolute top-6 right-6">
                        <a href="#"
                           class="btn btn-icon text-lg bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-red-600"><i
                                class="mdi mdi-heart"></i></a>
                    </div>
                </div>

                <div class="p-6">
                    <div class="pb-6">
                        <a href="property-detail.html"
                           class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">1533 NICHOLSON DR,
                            Baton Rouge, LA 70802, USA</a>
                    </div>

                    <ul class="py-6 border-y dark:border-gray-800 flex items-center list-none">
                        <li class="flex items-center mr-4">
                            <i class="uil uil-compress-arrows text-2xl mr-2 text-green-600"></i>
                            <span>8000sqf</span>
                        </li>

                        <li class="flex items-center mr-4">
                            <i class="uil uil-bed-double text-2xl mr-2 text-green-600"></i>
                            <span>4 Beds</span>
                        </li>

                        <li class="flex items-center">
                            <i class="uil uil-bath text-2xl mr-2 text-green-600"></i>
                            <span>4 Baths</span>
                        </li>
                    </ul>

                    <ul class="pt-6 flex justify-between items-center list-none">
                        <li>
                            <span class="text-slate-400">Price</span>
                            <p class="text-lg font-medium">$5000</p>
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
            </div><!--end property content-->
        </div><!--en grid-->

        <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
            <div class="md:col-span-12 text-center">
                <nav>
                    <ul class="inline-flex items-center -space-x-px">
                        <li>
                            <a href="#"
                               class="w-10 h-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 bg-white dark:bg-slate-900 hover:text-white shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600">
                                <i class="uil uil-angle-left text-[20px]"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#"
                               class="w-10 h-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 hover:text-white bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600">1</a>
                        </li>
                        <li>
                            <a href="#"
                               class="w-10 h-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 hover:text-white bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600">2</a>
                        </li>
                        <li>
                            <a href="#" aria-current="page"
                               class="z-10 w-10 h-10 inline-flex justify-center items-center mx-1 rounded-full text-white bg-green-600 shadow-sm dark:shadow-gray-700">3</a>
                        </li>
                        <li>
                            <a href="#"
                               class="w-10 h-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 hover:text-white bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600">4</a>
                        </li>
                        <li>
                            <a href="#"
                               class="w-10 h-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 hover:text-white bg-white dark:bg-slate-900 shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600">5</a>
                        </li>
                        <li>
                            <a href="#"
                               class="w-10 h-10 inline-flex justify-center items-center mx-1 rounded-full text-slate-400 bg-white dark:bg-slate-900 hover:text-white shadow-sm dark:shadow-gray-700 hover:border-green-600 dark:hover:border-green-600 hover:bg-green-600 dark:hover:bg-green-600">
                                <i class="uil uil-angle-right text-[20px]"></i>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End -->

<!------------ Include Client Review File --------->
@include('frontend.include._footer')

<!------------ Include Switcher File --------->
@include('frontend.include._switcher')

<!-------------- Include Back To Top File ------------>
@include('frontend.include._back-to-top')

<!-------------- Include Script File ------------>
@include('frontend.include._script')

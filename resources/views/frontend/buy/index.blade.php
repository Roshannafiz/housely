@section('title') {{ 'Buy' }} @endsection
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
            @foreach($houses as $house)
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
                            <a href="property-detail.html"
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
        <div class="mt-5">
            {!! $houses->links() !!}
        </div>
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

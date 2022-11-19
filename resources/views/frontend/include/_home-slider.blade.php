<!-- Hero Start -->
<section class="relative table w-full py-36 lg:py-44 overflow-hidden zoom-image">
    @foreach($banners as $banner)
        <div style="background-image: url('{{ asset('admin/images/upload-banner/' . $banner->image) }}')"
             class="absolute inset-0 image-wrap z-1 bg-no-repeat bg-center"></div>
        <div class="absolute inset-0 bg-black/70 z-2"></div>
        <div class="container z-3">
            <div class="grid grid-cols-1 mt-10">
                <div class="text-center">
                    <h1 class="font-bold text-white lg:leading-normal leading-normal text-4xl lg:text-5xl mb-6">
                        {!! $banner->title !!}
                    </h1>
                    <p class="text-white/70 text-xl max-w-xl mx-auto">
                        {{ $banner->sub_title }}
                    </p>
                </div>
                @endforeach

                <ul style="background: #0F172A !important;" class="inline-block mx-auto sm:w-fit w-full flex-wrap justify-center text-center p-4 bg-white/80 dark:bg-slate-900/80 backdrop-blur-sm rounded-t-xl border-b dark:border-gray-800 mt-10"
                    id="myTab" data-tabs-toggle="#StarterContent" role="tablist">
                    <li role="presentation" class="inline-block">
                        <button style="color: white;"
                            class="sm:px-8 px-6 py-2 text-base font-medium rounded-xl w-full hover:text-green-600 transition-all duration-500 ease-in-out"
                            id="buy-home-tab" data-tabs-target="#buy-home" type="button" role="tab"
                            aria-controls="buy-home" aria-selected="true">Buy Property / Home
                        </button>
                    </li>
                </ul>

                <div id="StarterContent" style="background: #0F172A !important;"
                     class="p-6 bg-white/80 dark:bg-slate-900/80 backdrop-blur-sm rounded-tl-none md:rounded-tl-xl rounded-tr-none md:rounded-tr-xl rounded-xl shadow-md dark:shadow-gray-700">
                    <div class="" id="buy-home" role="tabpanel" aria-labelledby="buy-home-tab">
                        <form action="{{ url('/search-house') }}" method="GET" class="text-start"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-1">

                                </div>
                                <div class="col-md-5">
                                    <label for="buy-properties" style="color: white" class="form-label font-medium">Select
                                        Categories:</label>
                                    <select name="category" id="buy-properties" class="form-input bg-white dark:bg-slate-900 mt-2">
                                        @foreach($categories as $category)
                                            <option
                                                value="{{ $category->id }} {{ request('category') == $category->id ? 'selected' : '' }}">
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="col-md-5" style="margin-top: 40px">
                                    <button type="submit"
                                            class="btn bg-green-600 hover:bg-green-700 text-white rounded-md w-full">
                                        Search
                                        now
                                    </button>
                                </div>

                                <div class="col-md-1">

                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="hidden" id="sell-home" role="tabpanel" aria-labelledby="sell-home-tab">
                        <form class="text-start">
                            <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-[24px]">
                                <div>
                                    <label class="form-label font-medium">Search : <span
                                            class="text-red-600">*</span></label>
                                    <div class="form-icon relative mt-2">
                                        <i data-feather="search" class="w-4 h-4 absolute top-3 left-4"></i>
                                        <input type="text" id="property-name2" name="name"
                                               class="form-input bg-white dark:bg-slate-900 pl-12"
                                               placeholder="Search your home :" required="">
                                    </div>
                                </div><!--end col-->

                                <div>
                                    <label for="buy-properties2" class="form-label font-medium">Select
                                        Categories:</label>
                                    <select id="buy-properties2" class="form-input bg-white dark:bg-slate-900 mt-2">
                                        <option>Houses</option>
                                        <option>Apartment</option>
                                        <option>Offices</option>
                                        <option>Townhome</option>
                                    </select>
                                </div><!--end col-->

                                <div>
                                    <label for="buy-min-price2" class="form-label font-medium">Min Price :</label>
                                    <select id="buy-min-price2" class="form-input bg-white dark:bg-slate-900 mt-2">
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
                                    <label for="buy-max-price2" class="form-label font-medium">Max Price :</label>
                                    <select id="buy-max-price2" class="form-input bg-white dark:bg-slate-900 mt-2">
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

                                <div class="col-12">
                                    <a href="#"
                                       class="btn bg-green-600 hover:bg-green-700 text-white rounded-md w-full">Search
                                        now</a>
                                </div><!--end col-->
                            </div><!--end row-->
                        </form><!--end form-->
                    </div>

                    <div class="hidden" id="rent-home" role="tabpanel" aria-labelledby="rent-home-tab">
                        <form class="text-start">
                            <div class="grid lg:grid-cols-4 md:grid-cols-2 grid-cols-1 gap-[24px]">
                                <div>
                                    <label class="form-label font-medium">Search : <span
                                            class="text-red-600">*</span></label>
                                    <div class="form-icon relative mt-2">
                                        <i data-feather="search" class="w-4 h-4 absolute top-3 left-4"></i>
                                        <input type="text" id="property-name3" name="name"
                                               class="form-input bg-white dark:bg-slate-900 pl-12"
                                               placeholder="Search your home :" required="">
                                    </div>
                                </div><!--end col-->

                                <div>
                                    <label for="buy-properties3" class="form-label font-medium">Select
                                        Categories:</label>
                                    <select id="buy-properties3" class="form-input bg-white dark:bg-slate-900 mt-2">
                                        <option>Houses</option>
                                        <option>Apartment</option>
                                        <option>Offices</option>
                                        <option>Townhome</option>
                                    </select>
                                </div><!--end col-->

                                <div>
                                    <label for="buy-min-price3" class="form-label font-medium">Min Price :</label>
                                    <select id="buy-min-price3" class="form-input bg-white dark:bg-slate-900 mt-2">
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
                                    <label for="buy-max-price3" class="form-label font-medium">Max Price :</label>
                                    <select id="buy-max-price3" class="form-input bg-white dark:bg-slate-900 mt-2">
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

                                <div class="col-12">
                                    <a href="#"
                                       class="btn bg-green-600 hover:bg-green-700 text-white rounded-md w-full">Search
                                        now</a>
                                </div><!--end col-->
                            </div><!--end row-->
                        </form><!--end form-->
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
</section><!--end section-->
<!-- Hero End -->

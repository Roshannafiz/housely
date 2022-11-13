<div class="container lg:mt-24 mt-16">
    <div class="grid grid-cols-1 pb-8 text-center">
        <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">Featured
            Properties</h3>

        <p class="text-slate-400 max-w-xl mx-auto">A great plateform to buy, sell and rent your properties without
            any agent or commisions.</p>
    </div><!--end grid-->

    <div class="grid grid-cols-1 mt-8 relative">
        <div class="tiny-home-slide-three">
            @foreach($feature_houses as $feature_house)
                <div class="tiny-slide">
                    <div
                        class="group rounded-xl bg-white dark:bg-slate-900 shadow hover:shadow-md dark:hover:shadow-md dark:shadow-gray-700 dark:hover:shadow-gray-700 overflow-hidden ease-in-out duration-500 m-3">
                        <div class="relative">
                            <img src="{{ asset('admin/images/upload-house/' . $feature_house->image) }}" alt="">

                            <div class="absolute top-6 right-6">
                                <a href="#"
                                   class="btn btn-icon text-lg bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-full text-red-600"><i
                                        class="mdi mdi-heart"></i></a>
                            </div>
                        </div>

                        <div class="p-6">
                            <div class="pb-6">
                                <a href="{{ url('house-details/' . $feature_house->id) }}"
                                   class="text-lg hover:text-green-600 font-medium ease-in-out duration-500">
                                    {{ $feature_house->house_title }}
                                </a>
                            </div>

                            <ul class="py-6 border-y dark:border-gray-800 flex items-center list-none">
                                <li class="flex items-center mr-4">
                                    <i class="uil uil-compress-arrows text-2xl mr-2 text-green-600"></i>
                                    <span>
                                        {{ $feature_house->house_sqf }} sqf
                                    </span>
                                </li>

                                <li class="flex items-center mr-4">
                                    <i class="uil uil-bed-double text-2xl mr-2 text-green-600"></i>
                                    <span>
                                        {{ $feature_house->house_bed }} Beds
                                    </span>
                                </li>

                                <li class="flex items-center">
                                    <i class="uil uil-bath text-2xl mr-2 text-green-600"></i>
                                    <span>
                                        {{ $feature_house->house_bath }} Baths
                                    </span>
                                </li>
                            </ul>

                            <ul class="pt-6 flex justify-between items-center list-none">
                                <li>
                                    <span class="text-slate-400">Price</span>
                                    <p class="text-lg font-medium">
                                        $ {{ $feature_house->house_price }}
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
                    </div><!--end property content-->
                </div>
            @endforeach
        </div>
    </div><!--en grid-->
</div><!--end container-->

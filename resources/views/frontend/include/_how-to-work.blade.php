<div class="container lg:mt-24 mt-16">
    <div class="grid grid-cols-1 pb-8 text-center">
        <h3 class="mb-4 md:text-3xl md:leading-normal text-2xl leading-normal font-semibold">How It Works</h3>

        <p class="text-slate-400 max-w-xl mx-auto">A great plateform to buy, sell and rent your properties without
            any agent or commisions.</p>
    </div><!--end grid-->

    <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
    @foreach($how_works as $how_work)
        <!-- Content -->
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
            <!-- Content -->
        @endforeach
    </div><!--end grid-->
</div><!--end container-->

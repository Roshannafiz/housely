<!-- Business Partner -->
<section class="pt-10">
    <div class="container">
        <div class="grid md:grid-cols-6 grid-cols-2 justify-center gap-[30px]">
            @foreach($brands as $brand)
                <div class="mx-auto py-4">
                    <img src="{{ asset('admin/images/upload-brand/' . $brand->image) }}" class="h-6" alt="">
                </div>
            @endforeach
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- Business Partner -->

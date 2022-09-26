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
            <h3 class="md:text-4xl text-3xl md:leading-normal leading-normal font-medium text-white">Terms &
                Services</h3>
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

<!-- Start Terms & Conditions -->
<section class="relative lg:py-24 py-16">
    <div class="container">
        <div class="md:flex justify-center">
            <div class="md:w-3/4">
                <div class="p-6 bg-white dark:bg-slate-900 shadow dark:shadow-gray-700 rounded-md">
                    <h5 class="text-xl font-medium mb-4">Introduction :</h5>
                    <p class="text-slate-400">It seems that only fragments of the original text remain in the Lorem
                        Ipsum texts used today. One may speculate that over the course of time certain letters were
                        added or deleted at various positions within the text.</p>

                    <h5 class="text-xl font-medium mb-4 mt-8">User Agreements :</h5>
                    <p class="text-slate-400">The most well-known dummy text is the 'Lorem Ipsum', which is said to have
                        <b class="text-danger-600">originated</b> in the 16th century. Lorem Ipsum is <b
                            class="text-danger-600">composed</b> in a pseudo-Latin language which more or less <b
                            class="text-danger-600">corresponds</b> to 'proper' Latin. It contains a series of real
                        Latin words. This ancient dummy text is also <b class="text-danger-600">incomprehensible</b>,
                        but it imitates the rhythm of most European languages in Latin script. The <b
                            class="text-danger-600">advantage</b> of its Latin origin and the relative <b
                            class="text-danger-600">meaninglessness</b> of Lorum Ipsum is that the text does not
                        attract attention to itself or distract the viewer's <b class="text-danger-600">attention</b>
                        from the layout.</p>
                    <p class="text-slate-400 mt-3">There is now an <b class="text-danger-600">abundance</b> of readable
                        dummy texts. These are usually used when a text is <b class="text-danger-600">required
                            purely</b> to fill a space. These alternatives to the classic Lorem Ipsum texts are often
                        amusing and tell short, funny or <b class="text-danger-600">nonsensical</b> stories.</p>
                    <p class="text-slate-400 mt-3">It seems that only <b class="text-danger-600">fragments</b> of the
                        original text remain in the Lorem Ipsum texts used today. One may speculate that over the course
                        of time certain letters were added or deleted at various positions within the text.</p>

                    <h5 class="text-xl font-medium mb-4 mt-8">Restrictions :</h5>
                    <p class="text-slate-400">You are specifically restricted from all of the following :</p>
                    <ul class="list-none text-slate-400 mt-3">
                        <li class="flex mt-2"><i class="uil uil-arrow-right text-green-600 align-middle mr-2"></i>Digital
                            Marketing Solutions for Tomorrow
                        </li>
                        <li class="flex mt-2"><i class="uil uil-arrow-right text-green-600 align-middle mr-2"></i>Our
                            Talented & Experienced Marketing Agency
                        </li>
                        <li class="flex mt-2"><i class="uil uil-arrow-right text-green-600 align-middle mr-2"></i>Create
                            your own skin to match your brand
                        </li>
                        <li class="flex mt-2"><i class="uil uil-arrow-right text-green-600 align-middle mr-2"></i>Digital
                            Marketing Solutions for Tomorrow
                        </li>
                        <li class="flex mt-2"><i class="uil uil-arrow-right text-green-600 align-middle mr-2"></i>Our
                            Talented & Experienced Marketing Agency
                        </li>
                        <li class="flex mt-2"><i class="uil uil-arrow-right text-green-600 align-middle mr-2"></i>Create
                            your own skin to match your brand
                        </li>
                    </ul>

                    <h5 class="text-xl font-medium mt-8">Users Question & Answer :</h5>

                    <div id="accordion-collapse" data-accordion="collapse" class="mt-6">
                        <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                            <h2 class="text-base font-medium" id="accordion-collapse-heading-1">
                                <button type="button"
                                        class="flex justify-between items-center p-5 w-full font-medium text-left"
                                        data-accordion-target="#accordion-collapse-body-1" aria-expanded="true"
                                        aria-controls="accordion-collapse-body-1">
                                    <span>How does it work ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 rotate-180 shrink-0" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-1" class="hidden"
                                 aria-labelledby="accordion-collapse-heading-1">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages
                                        of Lorem Ipsum available, but the majority have suffered alteration in some
                                        form.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                            <h2 class="text-base font-medium" id="accordion-collapse-heading-2">
                                <button type="button"
                                        class="flex justify-between items-center p-5 w-full font-medium text-left"
                                        data-accordion-target="#accordion-collapse-body-2" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-2">
                                    <span>Do I need a designer to use Hously ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-2" class="hidden"
                                 aria-labelledby="accordion-collapse-heading-2">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages
                                        of Lorem Ipsum available, but the majority have suffered alteration in some
                                        form.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                            <h2 class="text-base font-medium" id="accordion-collapse-heading-3">
                                <button type="button"
                                        class="flex justify-between items-center p-5 w-full font-medium text-left"
                                        data-accordion-target="#accordion-collapse-body-3" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-3">
                                    <span>What do I need to do to start selling ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-3" class="hidden"
                                 aria-labelledby="accordion-collapse-heading-3">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages
                                        of Lorem Ipsum available, but the majority have suffered alteration in some
                                        form.</p>
                                </div>
                            </div>
                        </div>

                        <div class="relative shadow dark:shadow-gray-700 rounded-md overflow-hidden mt-4">
                            <h2 class="text-base font-medium" id="accordion-collapse-heading-4">
                                <button type="button"
                                        class="flex justify-between items-center p-5 w-full font-medium text-left"
                                        data-accordion-target="#accordion-collapse-body-4" aria-expanded="false"
                                        aria-controls="accordion-collapse-body-4">
                                    <span>What happens when I receive an order ?</span>
                                    <svg data-accordion-icon class="w-4 h-4 shrink-0" fill="currentColor"
                                         viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd"
                                              d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                              clip-rule="evenodd"></path>
                                    </svg>
                                </button>
                            </h2>
                            <div id="accordion-collapse-body-4" class="hidden"
                                 aria-labelledby="accordion-collapse-heading-4">
                                <div class="p-5">
                                    <p class="text-slate-400 dark:text-gray-400">There are many variations of passages
                                        of Lorem Ipsum available, but the majority have suffered alteration in some
                                        form.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="mt-6">
                        <a href="#" class="btn bg-green-600 hover:bg-green-700 text-white rounded-md">Accept</a>
                        <a href="#"
                           class="btn bg-transparent hover:bg-green-600 border border-green-600 text-green-600 hover:text-white rounded-md ml-2">Decline</a>
                    </div>
                </div>
            </div><!--end -->
        </div><!--end grid-->
    </div><!--end container-->
</section><!--end section-->
<!-- End Terms & Conditions -->


<!------------ include Client Review File --------->
@include('frontend.include._footer')

<!------------ include Switcher File --------->
@include('frontend.include._switcher')

<!-------------- include Back To Top File ------------>
@include('frontend.include._back-to-top')

<!-------------- include Script File ------------>
@include('frontend.include._script')

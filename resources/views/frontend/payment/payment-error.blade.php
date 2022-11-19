@section('title') {{ 'Payment-Decline' }} @endsection
@extends('frontend.Layouts')
@section('frontend_content')
    <section class="relative">
        <div class="container-fluid relative">
            <div class="grid grid-cols-1">
                <div class="flex flex-col min-h-screen justify-center md:px-10 py-10 px-4" style="height: 900px">
                    <div class="title-heading text-center my-auto">
                        <img style="width: 350px; height: 300px"
                             src="{{ asset('frontend/assets/images/payment-decline.png') }}" class="mx-auto"
                             alt="NJKKM">
                        <h1 class="mt-3 mb-6 md:text-4xl text-3xl font-bold">
                            Payment Not Received
                        </h1>
                        <div class="text-slate-400">
                            @if(session()->has('error_message'))
                                <div style="color: red !important;">
                                    {{ session()->get('message') }}
                                </div>
                            @endif
                        </div>

                        <div class="mt-4">
                            <a href="{{ url('/') }}"
                               class="btn bg-green-600 hover:bg-green-700 border-green-600 hover:border-green-700 text-white rounded-md">
                                Back to Home
                            </a>
                        </div>
                    </div>
                </div>
            </div><!--end grid-->
        </div><!--end container-->
    </section>
@endsection

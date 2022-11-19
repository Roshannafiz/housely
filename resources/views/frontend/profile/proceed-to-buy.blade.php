@section('title') {{ 'Place-Order' }} @endsection
@extends('frontend.Layouts')
@section('frontend_content')
    <section class="relative lg:py-24 py-16" style="margin-top: 40px;">
        <form action="{{ url('/pay-with-paypal') }}" method="POST"
              name="myForm" id="myForm">
        @csrf
        <!-- Hidden Filed -->
            <input type="hidden" name="user_id">
            <input type="hidden" name="house_id" value="{{ $booked_house->id }}">
            <input type="hidden" name="amount" value="{{ $booked_house->house_price }}">
            <input type="hidden" name="total_amount" value="{{ $booked_house->house_price }}">
            <!-- Hidden Filed -->

            <div class="container">
                <div class="row">
                    <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">

                        <!-- Billing Address -->
                        <div class="lg:col-span-8 md:col-span-12 pb-2">
                            <div class="lg:col-span-5 md:col-span-6">
                                <div class="lg:ml-5">
                                    <div class="bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-700 p-6">
                                        <h3 class="mb-6 text-2xl leading-normal font-medium pt-2">
                                            Billing Address
                                        </h3>
                                        <div class="grid lg:grid-cols-12 lg:gap-6">
                                            <div class="lg:col-span-6">
                                                <label for="first_name" class="font-medium">*First Name:</label>
                                                <input name="first_name"
                                                       type="text"
                                                       value="{{ old('first_name') }}"
                                                       class="form-input mt-2"
                                                       placeholder="First Name :">
                                                <div class="py-2">
                                                    @if ($errors->has('first_name'))
                                                        <span
                                                            style="color: red">{{ $errors->first('first_name') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="lg:col-span-6">
                                                <label for="last_name" class="font-medium">*Last Name:</label>
                                                <input name="last_name" type="text" value="{{ old('last_name') }}"
                                                       class="form-input mt-2"
                                                       placeholder="Last Name :">
                                                <div class="py-2">
                                                    @if ($errors->has('last_name'))
                                                        <span
                                                            style="color: red">{{ $errors->first('last_name') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="lg:col-span-6">
                                                <label for="email" class="font-medium">*Email:</label>
                                                <input name="email" value="{{ $user_detail->email }}" id="email"
                                                       type="email" class="form-input mt-2"
                                                       placeholder="Email :">
                                                <div class="py-2">
                                                    @if ($errors->has('email'))
                                                        <span style="color: red">{{ $errors->first('email') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="lg:col-span-6">
                                                <label for="phone" class="font-medium">*Phone:</label>
                                                <input name="phone" value="{{ old('phone') }}" id="phone"
                                                       type="text"
                                                       class="form-input mt-2"
                                                       placeholder="Phone :">
                                                <div class="py-2">
                                                    @if ($errors->has('phone'))
                                                        <span style="color: red">{{ $errors->first('phone') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="lg:col-span-6">
                                                <label for="country" class="font-medium">*Country:</label>
                                                <input name="country" type="text" value="{{ old('country') }}"
                                                       class="form-input mt-2"
                                                       placeholder="Country :">
                                                <div class="py-2">
                                                    @if ($errors->has('country'))
                                                        <span style="color: red">{{ $errors->first('country') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="lg:col-span-6">
                                                <label for="state" class="font-medium">*State:</label>
                                                <input name="state" type="text" value="{{ old('state') }}"
                                                       class="form-input mt-2"
                                                       placeholder="State :">
                                                <div class="py-2">
                                                    @if ($errors->has('state'))
                                                        <span style="color: red">{{ $errors->first('state') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="lg:col-span-6">
                                                <label for="locality" class="font-medium">*Locality:</label>
                                                <input name="locality" type="text" value="{{ old('locality') }}"
                                                       class="form-input mt-2"
                                                       placeholder="Locality :">
                                                <div class="py-2">
                                                    @if ($errors->has('locality'))
                                                        <span style="color: red">{{ $errors->first('locality') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="lg:col-span-6">
                                                <label for="post_code" class="font-medium">*Post Code:</label>
                                                <input name="post_code" type="text" value="{{ old('post_code') }}"
                                                       class="form-input mt-2"
                                                       placeholder="Post Code :">
                                                <div class="py-2">
                                                    @if ($errors->has('post_code'))
                                                        <span
                                                            style="color: red">{{ $errors->first('post_code') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <p style="color: #16A34A" class="mt-3">
                                            <b>Note:</b>
                                            ( Add Your Billing Info Then Pay Your Amount )
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pay With PayPal -->
                        <div class="lg:col-span-4 md:col-span-12 pb-2">
                            <div
                                class="rounded-md shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 duration-500 ease-in-out">
                                <div class="paypal-image pl-3">
                                    <img style="width: 200px; height: 110px"
                                         src="{{ asset('frontend/assets/images/paypal.png') }}" alt="PayPal Image">
                                </div>
                                <div class="p-6">
                                    <h3 class="mb-6 text-2xl leading-normal font-medium pt-2">
                                        Place Your Order
                                    </h3>

                                    <ul class="list-none">
                                        <li class="text-slate-400 mt-2">
                                    <span class="text-green-600 text-lg mr-2">
                                        Payment Method:
                                    </span>
                                            PayPal
                                        </li>

                                        <li class="text-slate-400 mt-2">
                                    <span class="text-green-600 text-lg mr-2">
                                        Sub-Total:
                                    </span>
                                            {{ $booked_house->house_price }} USD
                                        </li>
                                    </ul>

                                    <button type="submit"
                                            class="btn bg-green-600 hover:bg-green-700 border-green-600 dark:border-green-600 text-white rounded-md w-full mt-4">
                                        Pay Now
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </section>
@endsection

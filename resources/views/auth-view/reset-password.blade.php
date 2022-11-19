<!----------- include Head File ----------->
@include('frontend.include._head')

<section class="md:h-screen py-36 flex items-center relative overflow-hidden zoom-image">
    <div
        class="absolute inset-0 image-wrap z-1 bg-[url('frontend/assets/images/bg/01.jpg')] bg-no-repeat bg-center"></div>
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black z-2" id="particles-snow"></div>
    <div class="container z-3">
        <div class="flex justify-center">
            <div
                class="max-w-[400px] w-full m-auto p-6 bg-white dark:bg-slate-900 shadow-md dark:shadow-gray-700 rounded-md">
                <a href="{{ url('/') }}">
                    <img src="{{ asset('frontend/assets/images/logo-icon-64.png') }}"
                         class="mx-auto" alt="">
                </a>

                <h5 class="my-6 text-xl font-semibold">
                    Reset Password
                </h5>

                <form action="{{ route('password.update') }}" method="POST" class="text-left">
                    @csrf
                    <input type="hidden" name="token" value="{{ $token }}">
                    <div class="grid grid-cols-1">
                        <div class="mb-4">
                            <label class="font-semibold" for="LoginEmail">Email Address:</label>
                            <input id="LoginEmail" name="email" value="{{ old('email') }}" type="email"
                                   class="form-input mt-3"
                                   placeholder="name@example.com">
                            <div class="py-2">
                                @if ($errors->has('email'))
                                    <span style="color: red">{{ $errors->first('email') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="font-semibold" for="LoginPassword">Password:</label>
                            <input id="LoginPassword" name="password" type="password" class="form-input mt-3"
                                   placeholder="Password:">
                            <div class="py-2">
                                @if ($errors->has('password'))
                                    <span style="color: red">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="font-semibold" for="LoginPassword">Confirm Password:</label>
                            <input id="LoginPassword" name="password_confirmation" type="password" class="form-input mt-3"
                                   placeholder="Password:">
                            <div class="py-2">
                                @if ($errors->has('password_confirmation'))
                                    <span style="color: red">{{ $errors->first('password_confirmation') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="mb-4">
                            <button type="submit"
                                    class="btn bg-green-600 hover:bg-green-700 text-white rounded-md w-full">
                                Reset
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section><!--end section -->

<div class="fixed bottom-3 right-3 z-10">
    <a href="#" class="back-button btn btn-icon bg-green-600 hover:bg-green-700 text-white rounded-full"><i
            data-feather="arrow-left" class="h-4 w-4"></i></a>
</div>

<!------------ include Switcher File --------->
@include('frontend.include._switcher')

<!-------------- include Back To Top File ------------>
@include('frontend.include._back-to-top')

<!-------------- include Script File ------------>
@include('frontend.include._script')

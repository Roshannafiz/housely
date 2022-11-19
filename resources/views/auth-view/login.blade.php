@section('title') {{ 'Login' }} @endsection
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
                    <img src="{{ asset('frontend/assets/images/logo-icon-64.png') }}" class="mx-auto" alt="">
                </a>

                <h5 class="my-6 text-xl font-semibold">Login</h5>
                <div style="padding-bottom: 20px; color: green !important;">
                    @if(session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                        </div>
                    @endif
                </div>

                <div style="padding-bottom: 20px; color: red !important;">
                    @if(session()->has('error_message'))
                        <div class="alert alert-danger">
                            {{ session()->get('error_message') }}
                        </div>
                    @endif
                </div>

                <div>
                    @if(session('failed'))
                        <p class="py-3" style="color: red">{{ session('failed') }}</p>
                    @elseif(session('status'))
                        <p class="py-3" style="color: green">{{ session('status') }}</p>
                    @endif
                </div>
                <form action="{{ route('login') }}" method="POST" class="text-left">
                    @csrf
                    <div class="grid grid-cols-1">
                        <div class="mb-4">
                            <label class="font-medium" for="LoginEmail">Email Address:</label>
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
                            <label class="font-medium" for="LoginPassword">Password:</label>
                            <input id="LoginPassword" name="password" type="password" class="form-input mt-3"
                                   placeholder="Password:">
                            <div class="py-2">
                                @if ($errors->has('password'))
                                    <span style="color: red">{{ $errors->first('password') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="flex justify-between mb-4">
                            <div class="form-checkbox flex items-center mb-0">
                                <input class="mr-2 border border-inherit w-[14px] h-[14px]" type="checkbox" value=""
                                       id="RememberMe">
                                <label class="text-slate-400" for="RememberMe">Remember me</label>
                            </div>
                            <p class="text-slate-400 mb-0">
                                <a href="{{ route('password.request') }}" class="text-slate-400">
                                    Forgot Password ?
                                </a>
                            </p>
                        </div>

                        <div class="mb-4">
                            <button type="submit"
                                    class="btn bg-green-600 hover:bg-green-700 text-white rounded-md w-full">
                                Sign in
                            </button>
                        </div>

                        <div class="text-center">
                            <span class="text-slate-400 me-2">Don't have an account ?</span>
                            <a href="{{ url('/sign-up') }}" class="text-black dark:text-white font-bold">
                                Sign Up
                            </a>
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

@section('title') {{ 'Change-Password' }} @endsection
@extends('frontend.Layouts')
@section('frontend_content')
    <section class="relative lg:py-24 py-16" style="margin-top: 40px;">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <!-- Profile -->
                <div class="lg:col-span-12 md:col-span-12 pb-2">
                    <div class="lg:col-span-5 md:col-span-6">
                        <div class="lg:ml-5">
                            <div class="bg-white dark:bg-slate-900 rounded-md shadow dark:shadow-gray-700 p-6">
                                <h3 class="mb-6 text-2xl leading-normal font-medium pt-2">
                                    Change Password
                                </h3>
                                <form action="{{ url('user-update-password') }}" method="POST"
                                      name="myForm" id="myForm" enctype="multipart/form-data">
                                    @csrf
                                    <div class="grid lg:grid-cols-12 lg:gap-6">
                                        <div class="lg:col-span-6 mb-5">
                                            <label for="name" class="font-medium">Old Password:</label>
                                            <input name="old_password" type="password" class="form-control">
                                            <div class="py-2">
                                                @if ($errors->has('old_password'))
                                                    <span style="color: red">{{ $errors->first('old_password') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid lg:grid-cols-12 lg:gap-6">
                                        <div class="lg:col-span-6 mb-5">
                                            <label for="email" class="font-medium">New Password:</label>
                                            <input name="new_password" type="password" class="form-control">
                                            <div class="py-2">
                                                @if ($errors->has('new_password'))
                                                    <span style="color: red">{{ $errors->first('new_password') }}</span>
                                                @endif
                                            </div>
                                            <p style="font-size: 14px">
                                                ( Password Must Be 8 Character Or Long )
                                            </p>
                                        </div>

                                        <div class="lg:col-span-6 mb-5">
                                            <label for="phone" class="font-medium">Confirm Password:</label>
                                            <input name="new_password_confirmation" type="password"
                                                   class="form-control">
                                            <div class="py-2">
                                                @if ($errors->has('new_password_confirmation'))
                                                    <span
                                                        style="color: red">{{ $errors->first('new_password_confirmation') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <button type="submit" id="submit" name="send"
                                            class="btn bg-green-600 hover:bg-green-700 text-white rounded-md">
                                        Update Password
                                    </button>

                                    <a href="{{ url('/profile-activity') }}"
                                       class="btn bg-green-600 hover:bg-green-700 text-white rounded-md ml-3">
                                        Not Now
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

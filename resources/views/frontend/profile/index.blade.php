@section('title') {{ 'My-Profile' }} @endsection
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
                                    Your Profile
                                </h3>
                                @if(session()->has('message'))
                                    <div style="color: green !important;">
                                        <div class="alert alert-success alert-dismissible">
                                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                                            {{ session()->get('message') }}
                                        </div>
                                    </div>
                                @endif
                                <form action="{{ url('/profile-update/' . $user_detail->id) }}" method="POST"
                                      name="myForm" id="myForm" enctype="multipart/form-data">
                                    @csrf
                                    <div class="grid lg:grid-cols-12 lg:gap-6">
                                        <div class="lg:col-span-6 mb-5">
                                            <label for="name" class="font-medium">Name:</label>
                                            <input name="name" value="{{ $user_detail->name }}" id="name" type="text"
                                                   class="form-input mt-2"
                                                   placeholder="Name :">
                                            <div class="py-2">
                                                @if ($errors->has('name'))
                                                    <span style="color: red">{{ $errors->first('name') }}</span>
                                                @endif
                                            </div>
                                        </div>

                                        <div class="lg:col-span-6 mb-5">
                                            <label for="email" class="font-medium">Email:</label>
                                            <input name="email" value="{{ $user_detail->email }}" id="email"
                                                   type="email" class="form-input mt-2"
                                                   placeholder="Email :">
                                            <div class="py-2">
                                                @if ($errors->has('email'))
                                                    <span style="color: red">{{ $errors->first('email') }}</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>

                                    <div class="grid grid-cols-1">
                                        <label for="phone" class="font-medium">Phone:</label>
                                        <input name="phone" value="{{ $user_detail->phone }}" id="phone" type="text"
                                               class="form-input mt-2"
                                               placeholder="Phone :">
                                    </div>

                                    <div class="grid lg:grid-cols-12 lg:gap-6 pt-5">
                                        <div class="lg:col-span-6 mb-5">
                                            <label for="image" class="font-medium">Image:</label>
                                            @if($user_detail->image)
                                                <div>
                                                    <img style="width: 80px; height: 80px"
                                                         src="{{ asset('admin/images/upload-user/' . $user_detail->image) }}"
                                                         alt="User Image">
                                                </div>
                                            @else
                                                <div>
                                                    <img style="width: 80px; height: 80px"
                                                         src="{{ asset('admin/assets/img/profiles/user.png') }}"
                                                         alt="User Image">
                                                </div>
                                            @endif
                                        </div>

                                        <div class="lg:col-span-6 mb-5">
                                            <label for="subject" class="font-medium">Image:</label>
                                            <input type="file" name="image" id="image" class="mt-2"
                                                   placeholder="Subject :">
                                        </div>

                                    </div>

                                    <div class="grid grid-cols-1 pt-5">
                                        <div class="mb-5">
                                            <label for="address" class="font-medium">Address:</label>
                                            <textarea name="address" id="address" class="form-input mt-2 textarea"
                                                      placeholder="Address :">{{ $user_detail->address }}</textarea>
                                        </div>
                                    </div>

                                    <button type="submit" id="submit" name="send"
                                            class="btn bg-green-600 hover:bg-green-700 text-white rounded-md">
                                        Update Profile
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



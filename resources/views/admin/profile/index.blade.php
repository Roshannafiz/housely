@extends('admin.Layouts')
@section('admin_content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow p-5">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12 mt-5">
                                <h3 class="page-title mt-3">Your Profile</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item active">Have A Nice Day!</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="profile-header">
                            <div class="row align-items-center">
                                <div class="col-auto profile-image">
                                    @if($user->image)
                                        <img style="width: 120px; height: 120px" class="rounded-circle" alt="User Image"
                                             src="{{ asset('admin/images/upload-user/' . $user->image) }}">
                                    @else
                                        <img style="width: 120px; height: 120px" class="rounded-circle" alt="User Image"
                                             src="{{ asset('admin/assets/img/profiles/user.png') }}">
                                    @endif
                                </div>
                                <div class="col ml-md-n2 profile-user-info">
                                    <h4 class="user-name mb-3">
                                        {{ $user->name }}
                                    </h4>
                                    <p class="mt-3">
                                        <span style="font-weight: bold">Email: </span>{{ $user->email }}
                                    </p>
                                    <p class="mt-3">
                                        <span style="font-weight: bold;">Phone: </span>
                                        @if($user->phone)
                                            {{ $user->phone }}
                                        @else
                                            <span>+880 **********</span>
                                        @endif
                                    </p>
                                    <p class="mt-3">
                                        <span
                                            style="font-weight: bold;">Date Of Birth: </span>
                                        @if($user->date_of_birth)
                                            {{ $user->date_of_birth }}
                                        @else
                                            <span style="font-style: italic">Null</span>
                                        @endif
                                    </p>
                                    <div class="user-Location mt-3">
                                        <i class="fas fa-map-marker-alt"></i>
                                        @if($user->address)
                                            {{ $user->address }}
                                        @else
                                            <span style="font-style: italic">Null</span>
                                        @endif
                                    </div>
                                </div>

                                <div class="col-auto profile-btn">
                                    <a href="{{ url('/change-password') }}" type="submit" class="btn btn-primary">
                                        <i class="fa fa-lock"></i>
                                        Change Password
                                    </a>
                                </div>

                                <div class="col-auto profile-btn">
                                    <a href="{{ url('/profile-edit') }}" type="submit" class="btn btn-primary">
                                        <i class="fa fa-pencil-alt"></i>
                                        Edit Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

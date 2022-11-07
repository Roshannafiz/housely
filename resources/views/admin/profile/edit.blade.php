@extends('admin.Layouts')
@section('admin_content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow p-5">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12 mt-5">
                                <h3 class="page-title mt-3">Profile Update</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item active">Have A Nice Day!</li>
                                </ul>
                            </div>

                            <div class="col-sm-12">
                                <div class="text-right">
                                    <a href="{{ url('/profiles') }}" type="submit" class="btn btn-primary">
                                        <i class="fa fa-arrow-left"></i>
                                        Go Profile
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="content container-fluid">
                            <div class="box inform_css mt-3">
                                <p class="card-title title_menu">Your Profile Info</p>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form action="{{ url('/profile-update/'. $user->id) }}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            @method('PUT')
                                            <div class="row formtype">
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Name</label>
                                                        <input name="name" class="form-control" type="text"
                                                               value="{{ $user->name }}">
                                                        <div class="error-message">
                                                            @error('name')
                                                            <span>! {{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input name="email" class="form-control" type="email"
                                                               value="{{ $user->email }}">
                                                        <div class="error-message">
                                                            @error('email')
                                                            <span>! {{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Phone</label>
                                                        <input name="phone" class="form-control" type="text"
                                                               value="{{ $user->phone }}" placeholder="Phone">
                                                        <div class="error-message">
                                                            @error('phone')
                                                            <span>! {{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Address</label>
                                                        <textarea name="address" class="form-control" cols="30"
                                                                  rows="5">{{ $user->address }}</textarea>
                                                        <div class="error-message">
                                                            @error('address')
                                                            <span>! {{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label>Date Of Birth</label>
                                                        <input name="date_of_birth" type="date" class="form-control"
                                                               value="{{ $user->date_of_birth }}">
                                                        <div class="error-message">
                                                            @error('date_of_birth')
                                                            <span>! {{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label class="col-lg-3 col-form-label">Image</label>
                                                        <div class="col-lg-9">
                                                            <img style="width: 90px; height: 80px" class="mb-3"
                                                                 src="{{ asset('admin/images/upload-user/' . $user->image) }}"
                                                                 alt="User Image">
                                                            <input type="file" name="image"
                                                                   class="form-control dropify">
                                                            <div class="error-message">
                                                                @error('image')
                                                                <span>! {{ $message }}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="submit" class="btn btn-primary buttonedit mt-3">Update</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

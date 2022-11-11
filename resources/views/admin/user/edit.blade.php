@extends('admin.Layouts')
@section('admin_content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow p-5">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12 mt-5">
                                <h3 class="page-title mt-3">User Update</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item active">Have A Nice Day!</li>
                                </ul>
                            </div>

                            <div class="col-sm-12">
                                <div class="text-right mb-2">
                                    <a href="{{ url('/users') }}" type="submit" class="btn btn-primary">
                                        <i class="fa fa-arrow-left"></i>
                                        Go User
                                    </a>
                                </div>

                                <div class="text-right">
                                    <a href="{{ url('/user-change-password/' . $user->id) }}" type="submit"
                                       class="btn btn-primary">
                                        <i class="fa fa-lock"></i>
                                        Change Password
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('user-update/' . $user->id) }}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="row">
                                        <label class="col-lg-3 col-form-label">Name</label>
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" name="name" placeholder="Name"
                                                               class="form-control" value="{{ $user->name }}">
                                                        <div class="error-message">
                                                            @error('name')
                                                            <span>! {{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-lg-3 col-form-label">Email</label>
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="email" name="email" placeholder="Email"
                                                               class="form-control" value="{{ $user->email }}">
                                                        <div class="error-message">
                                                            @error('email')
                                                            <span>! {{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Phone</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="phone" value="{{ $user->phone }}"
                                                   class="form-control" placeholder="Phone">
                                            <div class="error-message">
                                                @error('phone')
                                                <span>! {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Date Of Birth</label>
                                        <div class="col-lg-9">
                                            <input type="date" class="form-control" value="{{ $user->date_of_birth }}"
                                                   name="date_of_birth">
                                            <div class="error-message">
                                                @error('date_of_birth')
                                                <span>! {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Address</label>
                                        <div class="col-lg-9">
                                            <textarea name="address" cols="30" rows="5" class="form-control"
                                                      placeholder="Address">{!! $user->address !!}</textarea>
                                            <div class="error-message">
                                                @error('address')
                                                <span>! {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-xl-5">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Image</label>
                                        <div class="col-lg-9">
                                            <img style="width: 90px; height: 90px" class="mb-3"
                                                 src="{{ asset('admin/images/upload-user/' . $user->image) }}"
                                                 alt="User Image">
                                            <input type="file" name="image" class="form-control dropify">
                                            <div class="error-message">
                                                @error('image')
                                                <span>! {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Update</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

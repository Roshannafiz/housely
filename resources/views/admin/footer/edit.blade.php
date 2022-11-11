@extends('admin.Layouts')
@section('admin_content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow p-5">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12 mt-5">
                                <h3 class="page-title mt-3">Footer Update</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item active">Have A Nice Day!</li>
                                </ul>
                            </div>

                            <div class="col-sm-12">
                                <div class="text-right">
                                    <a href="{{ url('/footers') }}" type="submit" class="btn btn-primary">
                                        <i class="fa fa-arrow-left"></i>
                                        Go Footer
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('footer-update/' . $footer->id) }}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Email</label>
                                        <div class="col-lg-9">
                                            <input type="email" name="email" value="{{ $footer->email }}"
                                                   placeholder="Email"
                                                   class="form-control">
                                            <div class="error-message">
                                                @error('email')
                                                <span>! {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Phone</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="phone" value="{{ $footer->phone }}"
                                                   placeholder="Phone"
                                                   class="form-control">
                                            <div class="error-message">
                                                @error('phone')
                                                <span>! {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Address</label>
                                        <div class="col-lg-9">
                                            <textarea name="address" rows="2" class="form-control"
                                                      placeholder="Address">{{ $footer->address }}</textarea>
                                            <div class="error-message">
                                                @error('address')
                                                <span>! {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Short Description</label>
                                        <div class="col-lg-9">
                                            <textarea name="short_description" class="form-control"
                                                      placeholder="Short Description"
                                                      cols="30"
                                                      rows="3">{{ $footer->short_description }}</textarea>
                                            <div class="error-message">
                                                @error('short_description')
                                                <span>! {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Develop By</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="develop_by" value="{{ $footer->develop_by }}"
                                                   class="form-control" placeholder="Develop By">
                                            <div class="error-message">
                                                @error('develop_by')
                                                <span>! {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Image</label>
                                        <div class="col-lg-9">
                                            <img style="width: 80px; height: 50px" class="mb-3"
                                                 src="{{ asset('admin/images/upload-footer/' . $footer->image) }}"
                                                 alt="Banner Image">
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

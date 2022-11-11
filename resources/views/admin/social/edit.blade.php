@extends('admin.Layouts')
@section('admin_content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow p-5">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12 mt-5">
                                <h3 class="page-title mt-3">Social Update</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item active">Have A Nice Day!</li>
                                </ul>
                            </div>

                            <div class="col-sm-12">
                                <div class="text-right">
                                    <a href="{{ url('/socials') }}" type="submit" class="btn btn-primary">
                                        <i class="fa fa-arrow-left"></i>
                                        Go Social
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('social-update/' . $social->id) }}" method="POST" enctype="multipart/form-data">
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
                                                        <input type="text" name="social_name" placeholder="Social Name"
                                                               class="form-control" value="{{ $social->social_name }}">
                                                        <div class="error-message">
                                                            @error('social_name')
                                                            <span>! {{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-lg-3 col-form-label">Icon Code</label>
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" name="icon_code" placeholder="Icon Code"
                                                               class="form-control" value="{{ $social->icon_code }}">
                                                        <div class="error-message">
                                                            @error('icon_code')
                                                            <span>! {{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                        <p style="font-size: 13px; color: gray">( Must Be Use uil uil icon )</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <label class="col-lg-3 col-form-label">Icon Link</label>
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" name="icon_link" placeholder="Icon Link"
                                                               class="form-control" value="{{ $social->icon_link }}">
                                                        <div class="error-message">
                                                            @error('icon_link')
                                                            <span>! {{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
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

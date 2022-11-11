@extends('admin.Layouts')
@section('admin_content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow p-5">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12 mt-5">
                                <h3 class="page-title mt-3">Contact Update</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item active">Have A Nice Day!</li>
                                </ul>
                            </div>

                            <div class="col-sm-12">
                                <div class="text-right">
                                    <a href="{{ url('/contacts') }}" type="submit" class="btn btn-primary">
                                        <i class="fa fa-arrow-left"></i>
                                        Go Contact
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('contact-update/' . $contact->id) }}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Name</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="name" value="{{ $contact->name }}"
                                                   placeholder="Name"
                                                   class="form-control">
                                            <div class="error-message">
                                                @error('name')
                                                <span>! {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Icon Code</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="icon_code" value="{{ $contact->icon_code }}"
                                                   placeholder="Icon Code"
                                                   class="form-control">
                                            <p style="font-size: 14px; color: gray">( mdi mdi Icon Required )</p>
                                            <div class="error-message">
                                                @error('icon_code')
                                                <span>! {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Phone</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="phone" value="{{ $contact->phone }}"
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
                                        <label class="col-lg-3 col-form-label">Email</label>
                                        <div class="col-lg-9">
                                            <input type="email" name="email" value="{{ $contact->email }}"
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
                                        <label class="col-lg-3 col-form-label">Address</label>
                                        <div class="col-lg-9">
                                            <textarea name="address" rows="2" class="form-control"
                                                      placeholder="Address">{{ $contact->address }}</textarea>
                                            <div class="error-message">
                                                @error('address')
                                                <span>! {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Description</label>
                                        <div class="col-lg-9">
                                            <textarea name="description" class="form-control" placeholder="Description"
                                                      cols="30"
                                                      rows="5">{!! $contact->description !!}</textarea>
                                            <div class="error-message">
                                                @error('description')
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

@extends('admin.Layouts')
@section('admin_content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow p-5">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12 mt-5">
                                <h3 class="page-title mt-3">Agent Update</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item active">Have A Nice Day!</li>
                                </ul>
                            </div>

                            <div class="col-sm-12">
                                <div class="text-right">
                                    <a href="{{ url('/agents') }}" type="submit" class="btn btn-primary">
                                        <i class="fa fa-arrow-left"></i>
                                        Go Agent
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('agent-update/' . $agent->id) }}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Name</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="name" value="{{ $agent->name }}" placeholder="Name"
                                                   class="form-control">
                                            <div class="error-message">
                                                @error('name')
                                                <span>! {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Speciality</label>
                                        <div class="col-lg-9">

                                            <select name="speciality" class="form-control">
                                                <option
                                                    value="Designer" @if ($agent->speciality == "Designer") {{ 'selected' }} @endif>
                                                    Designer
                                                </option>
                                                <option
                                                    value="Developer" @if ($agent->speciality == "Developer") {{ 'selected' }} @endif>
                                                    Developer
                                                </option>
                                                <option
                                                    value="Creator" @if ($agent->speciality == "Creator") {{ 'selected' }} @endif>
                                                    Creator
                                                </option>
                                            </select>

                                            <div class="error-message">
                                                @error('speciality')
                                                <span>! {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Facebook</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="facebook_link" value="{{ $agent->facebook_link }}"
                                                   placeholder="Facebook Link"
                                                   class="form-control">
                                            <div class="error-message">
                                                @error('facebook_link')
                                                <span>! {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Linkedin</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="linkedin_link" value="{{ $agent->linkedin_link }}"
                                                   placeholder="Linkedin Link"
                                                   class="form-control">
                                            <div class="error-message">
                                                @error('linkedin_link')
                                                <span>! {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Instagram</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="instagram_link"
                                                   value="{{ $agent->instagram_link }}"
                                                   placeholder="Instagram Link"
                                                   class="form-control">
                                            <div class="error-message">
                                                @error('instagram_link')
                                                <span>! {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Image</label>
                                        <div class="col-lg-9">
                                            <img style="width: 90px; height: 90px" class="mb-3"
                                                 src="{{ asset('admin/images/upload-agent/' . $agent->image) }}"
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

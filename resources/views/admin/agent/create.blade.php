@extends('admin.Layouts')
@section('admin_content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow p-5">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12 mt-5">
                                <h3 class="page-title mt-3">Agent Create</h3>
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
                        <form action="{{ url('agent-store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Name</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="name" value="{{ old('name') }}" placeholder="Name"
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
                                                <option value="">Select Speciality</option>
                                                <option value="Designer">Designer</option>
                                                <option value="Developer">Developer</option>
                                                <option value="Creator">Creator</option>
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
                                            <input type="text" name="facebook_link" value="{{ old('facebook_link') }}"
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
                                            <input type="text" name="linkedin_link" value="{{ old('linkedin_link') }}"
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
                                            <input type="text" name="instagram_link" value="{{ old('instagram_link') }}"
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
                                            <input type="file" name="image" class="form-control dropify">
                                            <div class="error-message">
                                                @error('image')
                                                <span>! {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="text-right">
                                        <button type="submit" class="btn btn-primary">Create</button>
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

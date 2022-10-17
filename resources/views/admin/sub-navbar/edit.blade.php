@extends('admin.Layouts')
@section('admin_content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow p-5">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12 mt-5">
                                <h3 class="page-title mt-3">Sub-Navbar Update</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item active">Have A Nice Day!</li>
                                </ul>
                            </div>

                            <div class="col-sm-12">
                                <div class="text-right">
                                    <a href="{{ url('/subnavbars') }}" type="submit" class="btn btn-primary">
                                        <i class="fa fa-arrow-left"></i>
                                        Go Sub-Navbar
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('subnavbar-update/' . $subnavbar->id) }}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="row">
                                        <label class="col-lg-3 col-form-label">Navbar</label>
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <select name="navbar_id" class="form-control">
                                                            @foreach ($navbars as $navbar)
                                                                <option value="{{ $navbar->id }}"
                                                                    {{ $navbar->id == $subnavbar->navbar_id ? 'selected' : '' }}>
                                                                    {{ $navbar->name }}
                                                                </option>
                                                            @endforeach
                                                        </select>
                                                        <div class="error-message">
                                                            @error('navbar_id')
                                                            <span>! {{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="row">
                                        <label class="col-lg-3 col-form-label">Sub-Navbar</label>
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" name="sub_navbar_name" placeholder="Name"
                                                               class="form-control"
                                                               value="{{ $subnavbar->sub_navbar_name }}">
                                                        <div class="error-message">
                                                            @error('sub_navbar_name')
                                                            <span>! {{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="row">
                                        <label class="col-lg-3 col-form-label">Link</label>
                                        <div class="col-lg-9">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <input type="text" name="sub_navbar_link" placeholder="Link"
                                                               class="form-control"
                                                               value="{{ $subnavbar->sub_navbar_link }}">
                                                        <div class="error-message">
                                                            @error('sub_navbar_link')
                                                            <span>! {{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-xl-6">
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

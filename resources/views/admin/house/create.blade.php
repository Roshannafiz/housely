@extends('admin.Layouts')
@section('admin_content')
    <div class="content container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card shadow p-5">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12 mt-5">
                                <h3 class="page-title mt-3">Create House</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item active">Have A Nice Day!</li>
                                </ul>
                            </div>

                            <div class="col-sm-12">
                                <div class="text-right">
                                    <a href="{{ url('/houses') }}" type="submit" class="btn btn-primary">
                                        <i class="fa fa-arrow-left"></i>
                                        Go House
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('house-store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Category</label>
                                        <div class="col-lg-9">
                                            <select name="category_id" class="form-control">
                                                <option value="">Select Category</option>
                                                @foreach($categories as $category)
                                                    <option value="{{ $category->id }}">
                                                        {{ $category->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            <div class="error-message">
                                                @error('category_id')
                                                <span>! {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Title</label>
                                        <div class="col-lg-9">
                                            <input type="text" name="house_title" value="{{ old('house_title') }}"
                                                   class="form-control"
                                                   placeholder="House Title">
                                            <div class="error-message">
                                                @error('house_title')
                                                <span>! {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Price</label>
                                        <div class="col-lg-9">
                                            <input type="number" name="house_price" value="{{ old('house_price') }}"
                                                   class="form-control"
                                                   placeholder="House Price">
                                            <div class="error-message">
                                                @error('house_price')
                                                <span>! {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Description</label>
                                        <div class="col-lg-9">
                                            <textarea id="summernote_house" name="house_description" class="form-control"
                                                      placeholder="Description">{{ old('house_description') }}</textarea>
                                            <div class="error-message">
                                                @error('house_description')
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
                                </div>

                                <div class="col-xl-5">
                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Gallery Image</label>
                                        <div class="col-lg-9">
                                            <input type="file" name="gallery_image[]" multiple class="form-control">
                                            <div class="error-message">
                                                @error('gallery_image')
                                                <span>! {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">SQF</label>
                                        <div class="col-lg-9">
                                            <input type="number" name="house_sqf" value="{{ old('house_sqf') }}"
                                                   class="form-control"
                                                   placeholder="House Sqf">
                                            <div class="error-message">
                                                @error('house_sqf')
                                                <span>! {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Beds</label>
                                        <div class="col-lg-9">
                                            <input type="number" name="house_bed" value="{{ old('house_bed') }}"
                                                   class="form-control"
                                                   placeholder="House Bedroom">
                                            <div class="error-message">
                                                @error('house_bed')
                                                <span>! {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Baths</label>
                                        <div class="col-lg-9">
                                            <input type="number" name="house_bath" value="{{ old('house_bath') }}"
                                                   class="form-control"
                                                   placeholder="House Bathroom">
                                            <div class="error-message">
                                                @error('house_bath')
                                                <span>! {{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <label class="col-lg-3 col-form-label">Day On House</label>
                                        <div class="col-lg-9">
                                            <input type="number" name="day_on_house" value="{{ old('day_on_house') }}"
                                                   class="form-control"
                                                   placeholder="Day On House">
                                            <div class="error-message">
                                                @error('day_on_house')
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

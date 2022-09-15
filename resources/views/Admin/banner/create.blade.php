@extends('admin.Layouts')

@section('admin_content')
    <div class="content-wrapper">
        <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif
                        <h4 class="card-title">Create Banner</h4>
                        <p class="card-description">
                            Add Your Banner Details
                        </p>
                        <form action="{{ url('/banner-store') }}" method="POST" class="forms-sample" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" name="title" value="{{ old('title') }}" class="form-control" placeholder="Title">
                            </div>

                            <div class="form-group">
                                <label for="sub_title">Sub Title</label>
                                <input type="text" name="sub_title" value="{{ old('sub_title') }}" class="form-control" placeholder="Sub Title">
                            </div>

                            <div class="form-group">
                                <label for="image">Image</label>
                                <input type="file" name="image" class="dropify">
                            </div>
                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <a href="{{ url('/banners') }}" class="btn btn-light">Cancel</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

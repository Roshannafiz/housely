@extends('admin.Layouts')
@section('admin_content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card shadow p-5">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12 mt-5">
                                <h3 class="page-title mt-3">Footer</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item active">Have A Nice Day!</li>
                                </ul>
                            </div>

                            <div class="col-sm-12">
                                <div class="text-right">
                                    <a href="{{ url('/footers') }}" class="btn btn-primary">
                                        <i class="fa fa-arrow-left"></i>
                                        Go Footer
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-8">
                                <p style="line-height: 30px">
                                    <b style="color: #009688">ID: </b><br>
                                    <span style="font-weight: bold">
                                        {{ $footer->id }}
                                    </span>
                                </p>

                                <p style="line-height: 30px; text-align: justify">
                                    <b style="color: #009688">Address: </b><br>
                                    <span style="font-weight: bold">
                                        {{ $footer->address }}
                                    </span>
                                </p>

                                <p style="line-height: 30px; text-align: justify">
                                    <b style="color: #009688">Short Description: </b><br>
                                    <span style="font-weight: bold">
                                        {{ $footer->short_description }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Image: </b><br>
                                    <span style="font-weight: bold">
                                        <img style="width: 90px; height: 50px;"
                                             src="{{ asset('admin/images/upload-footer/' . $footer->image) }}" alt="">
                                    </span>
                                </p>
                            </div>

                            <div class="col-md-4">
                                <p style="line-height: 30px">
                                    <b style="color: #009688">Email: </b><br>
                                    <span style="font-weight: bold">
                                        {{ $footer->email }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Phone: </b><br>
                                    <span style="font-weight: bold">
                                        {{ $footer->phone }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Develop By: </b><br>
                                    <span style="font-weight: bold">
                                        {{ $footer->develop_by }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Status: </b><br>
                                    <span style="font-weight: bold">
                                        @if($footer->status == 1)
                                            Active
                                        @else
                                            In Active
                                        @endif
                                    </span>
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

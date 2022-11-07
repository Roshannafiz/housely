@extends('admin.Layouts')
@section('admin_content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card shadow p-5">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12 mt-5">
                                <h3 class="page-title mt-3">User</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item active">Have A Nice Day!</li>
                                </ul>
                            </div>

                            <div class="col-sm-12">
                                <div class="text-right">
                                    <a href="{{ url('/users') }}" class="btn btn-primary">
                                        <i class="fa fa-arrow-left"></i>
                                        Go User
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-4">
                                <p style="line-height: 30px">
                                    <b style="color: #009688">ID: </b><br>
                                    <span style="font-weight: bold">
                                        {{ $user->id }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Name: </b><br>
                                    <span style="font-weight: bold">
                                        {{ $user->name }}
                                    </span>
                                </p>
                            </div>

                            <div class="col-md-4">

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Email: </b><br>
                                    <span style="font-weight: bold">
                                        {{ $user->email }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Phone: </b><br>
                                    <span style="font-weight: bold">
                                        {{ $user->phone }}
                                    </span>
                                </p>

                            </div>

                            <div class="col-md-4">
                                <p style="line-height: 30px">
                                    <b style="color: #009688">Address: </b><br>
                                    <span style="font-weight: bold">
                                        {{ $user->address }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Date Of Birth: </b><br>
                                    <span style="font-weight: bold">
                                        {{ $user->date_of_birth }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Image: </b><br>
                                    <span style="font-weight: bold">
                                        <img style="width: 80px; height: 80px;"
                                             src="{{ asset('admin/images/upload-user/' . $user->image) }}" alt="">
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

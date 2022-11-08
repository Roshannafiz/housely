@extends('admin.Layouts')
@section('admin_content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow p-5">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12 mt-5">
                                <h3 class="page-title mt-3">Change User Password</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item active">Have A Nice Day!</li>
                                </ul>
                            </div>

                            <div class="col-sm-12">
                                <div class="text-right">
                                    <a href="{{ url('/users') }}" type="submit" class="btn btn-primary">
                                        <i class="fa fa-arrow-left"></i>
                                        Go User
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <form action="{{ url('user-update-password/' . $user->id) }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Old Password</label>
                                        <input name="old_password" type="password" class="form-control">
                                        <div class="error-message">
                                            @error('old_password')
                                            <span>! {{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="error-message">
                                            @if(session('error'))
                                                <span>! {{ session('error') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>New Password</label>
                                        <input name="new_password" type="password" class="form-control">
                                        <div class="error-message">
                                            @error('new_password')
                                            <span>! {{ $message }}</span>
                                            @enderror
                                        </div>
                                        <p style="font-size: 14px">
                                            ( Password Must Be 8 Character Or Long )
                                        </p>
                                    </div>
                                </div>

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input name="new_password_confirmation" type="password" class="form-control">
                                        <div class="error-message">
                                            @error('new_password_confirmation')
                                            <span>! {{ $message }}</span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary buttonedit mt-3">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

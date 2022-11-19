@extends('admin.Layouts')
@section('admin_content')
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <h3 class="page-title mt-3">Our User</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Have A Nice Day!</li>
                    </ul>
                </div>

                <div class="col-sm-12">
                    <div class="text-right">
                        <a href="{{ url('/user-create') }}" class="btn btn-primary">
                            Create
                            <i class="fa fa-plus"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table class="table table-stripped no-footer"
                                               id="dataTable" role="grid">
                                            <thead>
                                            <tr role="row">
                                                <th class="sorting sorting_asc" tabindex="0"
                                                    aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                    aria-sort="ascending"
                                                    aria-label="#SN: activate to sort column descending"
                                                    style="width: 20px;">#SN
                                                </th>
                                                <th class="sorting sorting_asc" tabindex="0"
                                                    aria-controls="DataTables_Table_0" rowspan="1" colspan="1"
                                                    aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending"
                                                    style="width: 150px;">Name
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Email: activate to sort column ascending"
                                                    style="width: 200px;">Email
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Phone: activate to sort column ascending"
                                                    style="width: 80px;">Phone
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Image: activate to sort column ascending"
                                                    style="width: 120px;">Image
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Status: activate to sort column ascending"
                                                    style="width:80px;">Status
                                                </th>

                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Action: activate to sort column ascending"
                                                    style="width: 10px;">Action
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($users as $key => $user)
                                                <tr class="odd">
                                                    <td class="sorting_1">
                                                        <span style="font-weight: bold">
                                                            {{ $key+1 }}
                                                        </span>
                                                    </td>
                                                    <td class="sorting_1">
                                                        {{ $user->name }}
                                                    </td>
                                                    <td>
                                                        {{ $user->email }}
                                                    </td>
                                                    <td>
                                                        {{ $user->phone }}
                                                    </td>
                                                    <td>
                                                        <img style="width: 80px; height: 80px"
                                                             src="{{ asset('admin/images/upload-user/' . $user->image) }}"
                                                             alt="">
                                                    </td>
                                                    <td>
                                                        <input data-id="{{ $user->id }}" class="toggle-class-user"
                                                               type="checkbox" data-onstyle="success"
                                                               data-offstyle="danger"
                                                               data-toggle="toggle-user" data-on="Active"
                                                               data-off="Inactive" {{ $user->status ? 'checked' : '' }}>
                                                    </td>
                                                    <td class="row">
                                                        <div class="col-md-3 col-sm-12 mt-sm-1 mb-sm-3">
                                                            <a href="{{ url('user-edit/' . $user->id) }}">
                                                                <span class="action_edit_button">
                                                                    <i class="fas fa-pencil-alt"></i>
                                                                </span>
                                                            </a>
                                                        </div>

                                                        <div class="col-md-3 col-sm-12 mt-sm-1 ml-md-3 ml-lg-3">
                                                            <a href="{{ url('user-view/' . $user->id) }}">
                                                                <span class="action_edit_button">
                                                                    <i class="fas fa-eye"></i>
                                                                </span>
                                                            </a>
                                                        </div>

                                                        <div class="col-md-3 col-sm-12 mt-sm-1 ml-md-3 ml-lg-3">
                                                            <a href="{{ url('/user-delete/' . $user->id) }}">
                                                                <span class="action_delete_button">
                                                                    <i class="fas fa-trash-alt"></i>
                                                                </span>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

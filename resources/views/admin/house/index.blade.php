@extends('admin.Layouts')
@section('admin_content')
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <h3 class="page-title mt-3">Our House</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Have A Nice Day!</li>
                    </ul>
                </div>

                <div class="col-sm-12">
                    <div class="text-right">
                        <a href="{{ url('/house-create') }}" class="btn btn-primary">
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
                                                    aria-label="Category: activate to sort column descending"
                                                    style="width: 100px;">Category
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Title: activate to sort column ascending"
                                                    style="width:300px;">Title
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Image: activate to sort column ascending"
                                                    style="width: 50px;">Image
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Status: activate to sort column ascending"
                                                    style="width: 80px;">Status
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Feature: activate to sort column ascending"
                                                    style="width: 30px;">Feature
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Action: activate to sort column ascending"
                                                    style="width: 80px;">Action
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($houses as $key => $house)
                                                <tr class="odd">
                                                    <td class="sorting_1">
                                                        <span style="font-weight: bold">
                                                            {{ $key+1 }}
                                                        </span>
                                                    </td>
                                                    <td class="sorting_1">
                                                        {{ $house->category_name }}
                                                    </td>
                                                    <td class="sorting_1">
                                                        {{ $house->house_title }}
                                                    </td>
                                                    <td>
                                                        <img style="width: 80px; height: 50px"
                                                             src="{{ asset('admin/images/upload-house/' . $house->image) }}"
                                                             alt="">
                                                    </td>
                                                    <td>
                                                        <input data-id="{{ $house->id }}" class="toggle-class-house"
                                                               type="checkbox" data-onstyle="success"
                                                               data-offstyle="danger"
                                                               data-toggle="toggle-house" data-on="Active"
                                                               data-off="Inactive" {{ $house->status ? 'checked' : '' }}>
                                                    </td>
                                                    <td>
                                                        <input data-id="{{ $house->id }}" class="toggle-class-house-feature"
                                                               type="checkbox" data-onstyle="danger"
                                                               data-offstyle="dark"
                                                               data-toggle="toggle-house-feature" data-on="Yes"
                                                               data-off="No" {{ $house->it_feature ? 'checked' : '' }}>
                                                    </td>
                                                    <td class="row">
                                                        <div class="col-md-3 col-sm-12 mt-sm-1">
                                                            <a href="{{ url('house-edit/' . $house->id) }}">
                                                                <span class="action_edit_button">
                                                                    <i class="fas fa-pencil-alt"></i>
                                                                </span>
                                                            </a>
                                                        </div>

                                                        <div class="col-md-3 col-sm-12 mt-sm-1">
                                                            <a href="{{ url('house-view/' . $house->id .'/'. $house->category_id) }}">
                                                                <span class="action_edit_button">
                                                                    <i class="fas fa-eye"></i>
                                                                </span>
                                                            </a>
                                                        </div>

                                                        <div class="col-md-3 col-sm-12 mt-sm-1">
                                                            <a href="{{ url('/house-delete/' . $house->id) }}">
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

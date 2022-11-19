@extends('admin.Layouts')
@section('admin_content')
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <h3 class="page-title mt-3">Our Feature</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Have A Nice Day!</li>
                    </ul>
                </div>

                <div class="col-sm-12">
                    <div class="text-right">
                        <a href="{{ url('/feature-create') }}" class="btn btn-primary">
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
                                                    aria-label="Title: activate to sort column descending"
                                                    style="width: 100px;">Title
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Sub Title: activate to sort column ascending"
                                                    style="width: 200px;">Sub Title
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Icon Code: activate to sort column ascending"
                                                    style="width: 80px;">Icon Code
                                                </th>
                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Status: activate to sort column ascending"
                                                    style="width: 100px;">Status
                                                </th>

                                                <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0"
                                                    rowspan="1" colspan="1"
                                                    aria-label="Action: activate to sort column ascending"
                                                    style="width: 10px;">Action
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            @foreach($features as $key => $feature)
                                                <tr class="odd">
                                                    <td class="sorting_1">
                                                        <span style="font-weight: bold">
                                                            {{ $key+1 }}
                                                        </span>
                                                    </td>
                                                    <td class="sorting_1">
                                                        {{ $feature->title }}
                                                    </td>
                                                    <td>
                                                        {!! $feature->description !!}
                                                    </td>
                                                    <td>
                                                        {{ $feature->icon_code }}
                                                    </td>
                                                    <td>
                                                        <input data-id="{{ $feature->id }}" class="toggle-class-feature"
                                                               type="checkbox" data-onstyle="success"
                                                               data-offstyle="danger"
                                                               data-toggle="toggle-feature" data-on="Active"
                                                               data-off="Inactive" {{ $feature->status ? 'checked' : '' }}>
                                                    </td>
                                                    <td class="row">
                                                        <div class="col-md-3 col-sm-12 mt-sm-1 mb-sm-3">
                                                            <a href="{{ url('feature-edit/' . $feature->id) }}">
                                                                <span class="action_edit_button">
                                                                    <i class="fas fa-pencil-alt"></i>
                                                                </span>
                                                            </a>
                                                        </div>

                                                        <div class="col-md-3 col-sm-12 mt-sm-1 ml-md-3 ml-lg-2">
                                                            <a href="{{ url('/feature-delete/' . $feature->id) }}">
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

@extends('admin.Layouts')
@section('admin_content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card shadow p-5">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12 mt-5">
                                <h3 class="page-title mt-3">House</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item active">Have A Nice Day!</li>
                                </ul>
                            </div>

                            <div class="col-sm-12">
                                <div class="text-right">
                                    <a href="{{ url('/houses') }}" class="btn btn-primary">
                                        <i class="fa fa-arrow-left"></i>
                                        Go House
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
                                        {{ $house->id }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Category Name: </b><br>
                                    <span style="font-weight: bold">
                                        {{ $category->name }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">House Title: </b><br>
                                    <span style="font-weight: bold">
                                        {{ $house->house_title }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">House Price: </b><br>
                                    <span style="font-weight: bold">
                                        {{ $house->house_price }}
                                    </span>
                                </p>

                                <p style="line-height: 30px; text-align: justify">
                                    <b style="color: #009688">Description: </b><br>
                                    <span style="font-weight: bold; text-align: justify">
                                        {!! $house->house_description !!}
                                    </span>
                                </p>
                            </div>

                            <div class="col-md-4">
                                <p style="line-height: 30px">
                                    <b style="color: #009688">SQF: </b><br>
                                    <span style="font-weight: bold">
                                        {{ $house->house_sqf }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Bed: </b><br>
                                    <span style="font-weight: bold">
                                        {{ $house->house_bed }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Bath: </b><br>
                                    <span style="font-weight: bold">
                                        {{ $house->house_bath }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Day On House: </b><br>
                                    <span style="font-weight: bold">
                                        {{ $house->day_on_house }}
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Feature: </b><br>
                                    <span style="font-weight: bold">
                                        @if($house->it_feature == 1)
                                            Yes
                                        @else
                                            No
                                        @endif
                                    </span>
                                </p>

                                <p style="line-height: 30px">
                                    <b style="color: #009688">Status: </b><br>
                                    <span style="font-weight: bold">
                                        @if($house->status == 1)
                                            Active
                                        @else
                                            In Active
                                        @endif
                                    </span>
                                </p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8">
                                <p style="line-height: 30px">
                                    <b style="color: #009688">Image: </b><br>
                                    <span style="font-weight: bold">
                                        <img style="width: 80px; height: 80px;"
                                             src="{{ asset('admin/images/upload-house/' . $house->image) }}" alt="">
                                    </span>
                                </p>
                            </div>

                            <div class="col-md-4">
                                <p style="line-height: 30px">
                                    <b style="color: #009688">Gallery Image: </b><br>
                                    <span style="font-weight: bold">
                                        @php
                                            $gallery_images = json_decode($house->gallery_image)
                                        @endphp
                                        @foreach($gallery_images as $gallery_image)
                                            <img style="width: 70px; height: 70px; margin-right: 20px"
                                                 src="{{ asset('admin/images/upload-house-gallery/' .$gallery_image) }}"
                                                 alt="">
                                        @endforeach
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

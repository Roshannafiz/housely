@extends('admin.Layouts')
@section('admin_content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card shadow p-5">
                    <div class="page-header">
                        <div class="row">
                            <div class="col-sm-12 mt-5">
                                <h3 class="page-title mt-3">Change Order Status</h3>
                                <ul class="breadcrumb">
                                    <li class="breadcrumb-item active">Have A Nice Day!</li>
                                </ul>
                            </div>

                            <div class="col-sm-12">
                                <div class="text-right">
                                    <a href="{{ url('/orders') }}" type="submit" class="btn btn-primary">
                                        <i class="fa fa-arrow-left"></i>
                                        Go Order
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="col-md-12">
                                    <p style="line-height: 30px">
                                        <b style="color: #009688">ID: </b><br>
                                        <span style="font-weight: 500">
                                        {{ $order->order_id }}
                                    </span>
                                    </p>

                                    <p style="line-height: 30px">
                                        <b style="color: #009688">Payer ID: </b><br>
                                        <span style="font-weight: 500">
                                        {{ $order->payer_id }}
                                    </span>
                                    </p>

                                    <p style="line-height: 30px">
                                        <b style="color: #009688">Transition No: </b><br>
                                        <span style="font-weight: 500">
                                        {{ $order->payment_id }}
                                    </span>
                                    </p>

                                    <p style="line-height: 30px">
                                        <b style="color: #009688">Amount: </b><br>
                                        <span style="font-weight: 500">
                                        {{ $order->amount }} USD
                                    </span>
                                    </p>

                                    <p style="line-height: 30px">
                                        <b style="color: #009688">Payment Method: </b><br>
                                        <span style="font-weight: 500">
                                        PayPal
                                    </span>
                                    </p>

                                    <p style="line-height: 30px">
                                        <b style="color: #009688">Payment Status: </b><br>
                                        <span style="font-weight: 500">
                                        {{ ucfirst($order->payment_status) }}
                                    </span>
                                    </p>

                                    <p style="line-height: 30px">
                                        <b style="color: #009688">Order Created: </b><br>
                                        <span style="font-weight: 500">
                                        {{ date('j F, Y', strtotime($order->created_at)) }}
                                    </span>
                                    </p>

                                </div>
                            </div>
                            <div class="col-md-5">
                                <p style="line-height: 30px">
                                    <b style="color: #009688">Payment Status: </b><br>
                                    <span style="font-weight: 500">
                                        {{ $order->order_status }}
                                    </span>
                                </p>
                                <form action="{{ url('order-update/' . $order->order_id) }}" method="POST"
                                      enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <select name="status" class="form-control">
                                                    <option value="Approved">Approved</option>
                                                    <option value="On Hold">On Hold</option>
                                                    <option value="Cancel">Cancel</option>
                                                    <option value="Delivered">Delivered</option>
                                                </select>
                                                <div class="error-message">
                                                    @error('status')
                                                    <span>! {{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>

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
        </div>
    </div>
@endsection

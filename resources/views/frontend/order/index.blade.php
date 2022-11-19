@section('title') {{ 'My-Orders' }} @endsection
@extends('frontend.Layouts')
@section('frontend_content')
    <section class="relative lg:py-24 py-16" style="margin-top: 100px;">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                @if($orders->count() > 0)
                    <div class="lg:col-span-12 md:col-span-12">
                        <div class="lg:ml-5">
                            <div
                                class="rounded-md shadow dark:shadow-gray-700 hover:shadow-md dark:hover:shadow-gray-700 duration-500 ease-in-out">
                                <table class="table table-hover table-success">
                                    <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Payer ID</th>
                                        <th scope="col">Total</th>
                                        <th scope="col">Transition</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($orders as $key => $order)
                                        <tr>
                                            <th scope="row">
                                                {{ $key+1 }}
                                            </th>
                                            <td>
                                                {{ $order->payer_id }}
                                            </td>
                                            <td>
                                                {{ $order->amount }} USD
                                            </td>
                                            <td>
                                                {{ $order->payment_id }}
                                            </td>
                                            <td>
                                                {{ $order->order_status }}
                                            </td>
                                            <td>
                                                <a href="{{ url('/order-details/'. $order->order_id) }}"
                                                   style="height: 32px; padding-left: 18px; padding-right: 18px"
                                                   class="btn btn-sm bg-green-600 hover:bg-green-700 text-white rounded-md">
                                                    View
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                @else
                    <div class="lg:col-span-6 md:col-span-6">
                        <img style="height: 420px" src="{{ asset('frontend/assets/images/no-order.png') }}"
                             alt="Empty Booking">
                    </div>
                    <div class="lg:col-span-6 md:col-span-6 text-center">
                        <p style="font-size: 18px">Now You Have No Order!</p>
                        <a href="{{ url('/buy') }}"
                           class="btn bg-green-600 hover:bg-green-700 text-white rounded-md mt-5">
                            Find House
                        </a>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection

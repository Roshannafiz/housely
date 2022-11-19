@extends('admin.Layouts')
@section('admin_content')
    <div class="content container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <h3 class="page-title mt-3">Dashboard</h3>
                    <ul class="breadcrumb">
                        <li class="breadcrumb-item active">Have A Nice Day!</li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card board1 fill">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <div>
                                <h3 class="card_widget_header">
                                    @if($booking_count > 0)
                                        {{ $booking_count }}
                                    @else
                                        0
                                    @endif
                                </h3>
                                <h6 class="text-muted">Total Booking</h6></div>
                            <div class="ml-auto mt-md-3 mt-lg-0"> <span class="opacity-7 text-muted">
                                    <svg style="color: #009688;" xmlns="http://www.w3.org/2000/svg" width="24"
                                         height="24" fill="currentColor"
                                         class="bi bi-bookmark-check" viewBox="0 0 16 16">
                                      <path fill-rule="evenodd"
                                            d="M10.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
                                      <path
                                          d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/>
                                    </svg>
                                </span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card board1 fill">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <div>
                                <h3 class="card_widget_header">
                                    @if($order_count > 0)
                                        {{ $order_count }}
                                    @else
                                        0
                                    @endif
                                </h3>
                                <h6 class="text-muted">Total Order</h6></div>
                            <div class="ml-auto mt-md-3 mt-lg-0"> <span class="opacity-7 text-muted"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewbox="0 0 24 24"
                                        fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-dollar-sign">
									<line x1="12" y1="1" x2="12" y2="23"></line>
									<path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"></path>
									</svg></span></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card board1 fill">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <div>
                                <h3 class="card_widget_header">
                                    @if($house_count > 0)
                                        {{ $house_count }}
                                    @else
                                        0
                                    @endif
                                </h3>
                                <h6 class="text-muted">Total House</h6></div>
                            <div class="ml-auto mt-md-3 mt-lg-0">
                                <span class="opacity-7 text-muted">
                                    <svg style="color: #009688" xmlns="http://www.w3.org/2000/svg" width="24"
                                         height="24" fill="currentColor" class="bi bi-house-dash"
                                         viewBox="0 0 16 16">
                                      <path
                                          d="M12.5 16a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7ZM11 12h3a.5.5 0 0 1 0 1h-3a.5.5 0 1 1 0-1Z"/>
                                      <path
                                          d="M7.293 1.5a1 1 0 0 1 1.414 0L11 3.793V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v3.293l2.354 2.353a.5.5 0 0 1-.708.708L8 2.207l-5 5V13.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 1 0 1h-4A1.5 1.5 0 0 1 2 13.5V8.207l-.646.647a.5.5 0 1 1-.708-.708L7.293 1.5Z"/>
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 col-12">
                <div class="card board1 fill">
                    <div class="card-body">
                        <div class="dash-widget-header">
                            <div>
                                <h3 class="card_widget_header">
                                    @if($user_count > 0)
                                        {{ $user_count }}
                                    @else
                                        0
                                    @endif
                                </h3>
                                <h6 class="text-muted">Total User</h6></div>
                            <div class="ml-auto mt-md-3 mt-lg-0"> <span class="opacity-7 text-muted"><svg
                                        xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewbox="0 0 24 24"
                                        fill="none" stroke="#009688" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-globe">
									<circle cx="12" cy="12" r="10"></circle>
									<line x1="2" y1="12" x2="22" y2="12"></line>
									<path
                                        d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z">
									</path>
									</svg></span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

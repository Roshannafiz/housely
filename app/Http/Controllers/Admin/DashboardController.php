<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\House;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        // Get All Booking
        $booking_count = Booking::all()->count();

        // Get All Order
        $order_count = Order::all()->count();

        // Get All House
        $house_count = House::all()->count();

        // Get All User
        $user_count = User::all()->count();

        return view('admin.dashboard', compact('booking_count', 'order_count', 'house_count', 'user_count'));
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function index()
    {
        $bookings = DB::table('bookings')
            ->join('houses', 'bookings.house_id', '=', 'houses.id')
            ->join('users', 'bookings.user_id', '=', 'users.id')
            ->select([
                'bookings.*',
                'bookings.id as booking_id',
                'houses.*',
                'users.*',
            ])->orderBy('booking_id', 'DESC')->get();
        return view('admin.booking.index', compact('bookings'));
    }

    public function booking_view($id)
    {
        $booking = DB::table('bookings')
            ->join('houses', 'bookings.house_id', '=', 'houses.id')
            ->join('users', 'bookings.user_id', '=', 'users.id')
            ->select([
                'bookings.*',
                'bookings.id as booking_id',
                'houses.*',
                'houses.image as house_image',
                'users.*',
            ])->where('bookings.id', $id)->first();

        return view('admin.booking.view', compact('booking'));
    }

    public function destroy($id)
    {
        $delete_data = Booking::find($id);
        $delete_data->delete();
        if ($delete_data) {
            return redirect()->back()->with('delete_message', "Booking Deleted Successfully");
        }
    }
}

<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function index(Request $request)
    {
        // Get User With His Booking
        $bookings = DB::table('bookings')
            ->join('houses', 'bookings.house_id', '=', 'houses.id')
            ->join('users', 'bookings.user_id', '=', 'users.id')
            ->select([
                'bookings.id as booking_id',
                'bookings.user_id',
                'houses.*',
                'houses.id as house_id',
                'houses.image as house_image',
                'users.*',
            ])->orderBy('booking_id', 'DESC')->where('user_id', '=', $request->user()->id)->get();

        return view('frontend.booking.index', compact('bookings'));
    }

    public function house_booking($id)
    {
        $user_id = Auth::id();
        $house = House::find($id);
        $house_id = $house->id;

        $booking = new Booking();
        $booking->user_id = $user_id;
        $booking->house_id = $house_id;
        $booking->save();
        return redirect('/my-booking')->with('booking_message', "House Booking Successfully!");
    }

    public function delete_booking($id)
    {
        $delete_data = Booking::find($id);
        $delete_data->delete();
        if ($delete_data) {
            return redirect()->back()->with('delete_message', "Booking Removed Successfully !");
        }
    }
}

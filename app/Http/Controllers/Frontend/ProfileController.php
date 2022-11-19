<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function profile_activity()
    {
        return view('frontend.profile.activity');
    }

    public function index()
    {
        // Get User Info
        if (Auth::user()->user_type == 0) {
            $user_detail = Auth::user();
        } elseif (Auth::user()->user_type == 1) {
            return redirect('/profiles');
        }
        // Get User Booking
        $booking = Booking::where('user_id', Auth::id())->first();

        return view('frontend.profile.index', compact('user_detail', 'booking'));
    }

    public function profile_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $profile = User::find($id);
        $profile->name = $request->name;
        $profile->email = $request->email;
        $profile->phone = $request->phone;
        $profile->address = $request->address;

        // Profile Image Update
        if ($request->hasFile('image')) {
            $path = 'admin/images/upload-user/' . $profile->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('admin/images/upload-user', $filename);
            $profile->image = $filename;
        }
        $profile->update();
        return redirect('/my-profile')->with('message', "Profile Updated Successfully!");
    }

    public function change_password()
    {
        if (Auth::user()->user_type == 0) {
            return view('frontend.profile.change-password');
        } elseif (Auth::user()->user_type == 1) {
            return view('admin.profile.change-password');
        }
    }

    public function update_password(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        if (!Hash::check($request->old_password, Auth::user()->password)) {
            return redirect()->back()->with('error', "Old Password Dose Not Match!");
        }

        User::whereId(Auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        // Change Password Then Logout User
        Session::flush();
        Auth::logout();
        return redirect('/login')->with('message', "Password Changed Successfully Login Again");
    }

    public function proceed_to_buy(Request $request, $id)
    {
        // Get User Info
        if (Auth::user()->user_type == 0) {
            $user_detail = Auth::user();
        } elseif (Auth::user()->user_type == 1) {
            $user_detail = Auth::user();
        }

        // Get Booked House By ID
        $booked_house = DB::table('bookings')
            ->join('houses', 'bookings.house_id', '=', 'houses.id')
            ->select([
                'bookings.id as booking_id',
                'houses.*',
            ])->where('user_id', '=', $request->user()->id)->where('houses.id', $id)->first();

        return view('frontend.profile.proceed-to-buy', compact('user_detail', 'booked_house'));
    }

}

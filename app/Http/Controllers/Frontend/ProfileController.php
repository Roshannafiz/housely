<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function index()
    {
        // Get User Info
        if (Auth::user()->user_type == 0) {
            $user_detail = Auth::user();
        } elseif (Auth::user()->user_type == 1) {
            return redirect('/profiles');
        }
        return view('frontend.profile.index', compact('user_detail'));
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
}

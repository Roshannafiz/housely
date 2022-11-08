<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Testing\Fluent\Concerns\Has;

class ProfileController extends Controller
{
    public function index()
    {
        // Get Login User Profile
        $user = Auth::user();
        return view('admin.profile.index', compact('user'));
    }

    public function profile_edit()
    {
        $user = Auth::user();
        return view('admin.profile.edit', compact('user'));
    }

    public function profile_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
        ]);
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->date_of_birth = $request->date_of_birth;
        // User Image Update
        if ($request->hasFile('image')) {
            $path = 'admin/images/upload-user/' . $user->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('admin/images/upload-user', $filename);
            $user->image = $filename;
        }
        $user->save();
        return redirect('/profiles')->with('update_message', "Profile Updated Successfully");
    }

    public function change_password()
    {
        return view('admin.profile.change-password');
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

}

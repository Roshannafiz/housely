<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        // Get All User
        $users = User::where('user_type', '=', 0)->orderBy('id', 'DESC')->get();
        return view('admin.user.index', compact('users'));
    }

    public function user_create()
    {
        return view('admin.user.create');
    }

    public function user_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->date_of_birth = $request->date_of_birth;
        $user->password = Hash::make($request->password);
        // User Image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('admin/images/upload-user', $filename);
            $user->image = $filename;
        }
        $user->save();
        return redirect()->back()->with('create_message', "User Created Successfully");
    }

    public function user_edit($id)
    {
        $user = User::find($id);
        return view('admin.user.edit', compact('user'));
    }

    public function user_update(Request $request, $id)
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
        $user->update();
        return redirect('/users')->with('update_message', "User Updated Successfully");
    }

    public function change_password($id)
    {
        $user = User::find($id);
        return view('admin.user.change-password', compact('user'));
    }

    public function update_password(Request $request, $id)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:8|confirmed',
        ]);

        $user = User::find($id);
        if (!Hash::check($request->old_password, $user->password)) {
            return redirect()->back()->with('error', "Old Password Dose Not Match!");
        }

        User::whereId($user->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        return redirect('/users')->with('update_message', "User Password Changed Successfully");
    }

    public function user_view($id)
    {
        $user = User::find($id);
        return view('admin.user.view', compact('user'));
    }

    // Change Status Using Ajax
    public function change_status(Request $request)
    {
        $user = User::find($request->user_id);
        $user->status = $request->status;
        $user->save();
    }

    public function destroy($id)
    {
        $delete_data = User::find($id);
        // User Delete With Image
        $path = 'admin/images/upload-user/' . $delete_data->image;
        if (File::exists($path)) {
            File::delete($path);
        }
        $delete_data->delete();
        if ($delete_data) {
            return redirect()->back()->with('delete_message', "User Deleted Successfully");
        }
    }
}

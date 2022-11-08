<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function index()
    {
        $socials = Social::all();
        return view('admin.social.index', compact('socials'));
    }

    public function social_create()
    {
        return view('admin.social.create');
    }

    public function social_store(Request $request)
    {
        $request->validate([
            'social_name' => 'required',
            'icon_code' => 'required',
            'icon_link' => 'required',
        ]);
        $social = new Social();
        $social->social_name = $request->social_name;
        $social->icon_code = $request->icon_code;
        $social->icon_link = $request->icon_link;
        $social->save();
        return redirect()->back()->with('create_message', "Social Created Successfully");
    }

    public function social_edit($id)
    {
        $social = Social::find($id);
        return view('admin.social.edit', compact('social'));
    }

    public function social_update(Request $request, $id)
    {
        $request->validate([
            'social_name' => 'required',
            'icon_code' => 'required',
            'icon_link' => 'required',
        ]);
        $social = Social::find($id);
        $social->social_name = $request->social_name;
        $social->icon_code = $request->icon_code;
        $social->icon_link = $request->icon_link;
        $social->update();
        return redirect('/socials')->with('update_message', "Social Updated Successfully");
    }

    // Change Status Using Ajax
    public function change_status(Request $request)
    {
        $social = Social::find($request->social_id);
        $social->status = $request->status;
        $social->save();
    }

    public function destroy($id)
    {
        $delete_data = Social::find($id);
        $delete_data->delete();
        if ($delete_data) {
            return redirect()->back()->with('delete_message', "Social Deleted Successfully");
        }
    }
}

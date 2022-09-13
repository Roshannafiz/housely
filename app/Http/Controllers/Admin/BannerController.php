<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function index()
    {
        // Get All Banners
        $banners = Banner::all();
        return view('admin.banner.index', compact('banners'));
    }

    public function banner_create()
    {
        return view('admin.banner.create');
    }

    public function banner_store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'image' => 'required | image',
        ]);
        $banner = new Banner();
        $banner->title = $request->title;
        $banner->sub_title = $request->sub_title;
        // Banner Image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('admin/images/upload-banner', $filename);
            $banner->image = $filename;
        }
        $banner->save();
        return redirect('/banners')->with('message', "Banner Created Successfully");
    }

    // Change Status Using Ajax
    public function change_status(Request $request)
    {
        $doctor = Banner::find($request->banner_id);
        $doctor->status = $request->status;
        $doctor->save();
    }
}

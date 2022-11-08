<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BannerController extends Controller
{
    public function index()
    {
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
        return redirect()->back()->with('create_message', "Banner Created Successfully");
    }

    public function banner_edit($id)
    {
        $banner = Banner::find($id);
        return view('admin.banner.edit', compact('banner'));
    }

    public function banner_update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
        ]);
        $banner = Banner::find($id);
        $banner->title = $request->title;
        $banner->sub_title = $request->sub_title;

        // Banner Image Update
        if ($request->hasFile('image')) {
            $path = 'admin/images/upload-banner/' . $banner->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('admin/images/upload-banner', $filename);
            $banner->image = $filename;
        }
        $banner->update();
        return redirect('/banners')->with('update_message', "Banner Update Successfully");
    }

    // Change Status Using Ajax
    public function change_status(Request $request)
    {
        $banner = Banner::find($request->banner_id);
        $banner->status = $request->status;
        $banner->save();
    }

    public function destroy($id)
    {
        $delete_data = Banner::find($id);
        // Banner Delete With Image
        $path = 'admin/images/upload-banner/' . $delete_data->image;
        if (File::exists($path)) {
            File::delete($path);
        }
        $delete_data->delete();
        if ($delete_data) {
            return redirect()->back()->with('delete_message', "Banner Deleted Successfully");
        }
    }

}

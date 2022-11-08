<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function index()
    {
        $brands = Brand::all();
        return view('admin.brand.index', compact('brands'));
    }

    public function brand_create()
    {
        return view('admin.brand.create');
    }

    public function brand_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);
        $brand = new Brand();
        $brand->name = $request->name;
        // Brand Image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('admin/images/upload-brand', $filename);
            $brand->image = $filename;
        }
        $brand->save();
        return redirect()->back()->with('create_message', 'Brand Created Successfully');
    }

    public function brand_edit($id)
    {
        $brand = Brand::find($id);
        return view('admin.brand.edit', compact('brand'));
    }

    public function brand_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $brand = Brand::find($id);
        $brand->name = $request->name;

        // Brand Image Update
        if ($request->hasFile('image')) {
            $path = 'admin/images/upload-brand/' . $brand->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('admin/images/upload-brand', $filename);
            $brand->image = $filename;
        }
        $brand->update();
        return redirect('/brands')->with('update_message', "Brand Updated Successfully");
    }

    // Change Status Using Ajax
    public function change_status(Request $request)
    {
        $brand = Brand::find($request->brand_id);
        $brand->status = $request->status;
        $brand->save();
    }

    public function destroy($id)
    {
        $delete_data = Brand::find($id);
        // Banner Delete With Image
        $path = 'admin/images/upload-brand/' . $delete_data->image;
        if (File::exists($path)) {
            File::delete($path);
        }
        $delete_data->delete();
        if ($delete_data) {
            return redirect()->back()->with('delete_message', "Brand Deleted Successfully");
        }
    }
}

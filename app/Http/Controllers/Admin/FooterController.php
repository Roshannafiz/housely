<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class FooterController extends Controller
{
    public function index()
    {
        $footers = Footer::all();
        return view('admin.footer.index', compact('footers'));
    }

    public function footer_create()
    {
        return view('admin.footer.create');
    }

    public function footer_store(Request $request)
    {
        $request->validate([
            'short_description' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'develop_by' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);
        $footer = new Footer();
        $footer->short_description = $request->short_description;
        $footer->address = $request->address;
        $footer->email = $request->email;
        $footer->phone = $request->phone;
        $footer->develop_by = $request->develop_by;

        // Footer Image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('admin/images/upload-footer', $filename);
            $footer->image = $filename;
        }
        $footer->save();
        return redirect()->back()->with('create_message', "Footer Created Successfully");
    }

    public function footer_edit($id)
    {
        $footer = Footer::find($id);
        return view('admin.footer.edit', compact('footer'));
    }

    public function footer_update(Request $request, $id)
    {
        $request->validate([
            'short_description' => 'required',
            'address' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'develop_by' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);
        $footer = Footer::find($id);
        $footer->short_description = $request->short_description;
        $footer->address = $request->address;
        $footer->email = $request->email;
        $footer->phone = $request->phone;
        $footer->develop_by = $request->develop_by;

        // Footer Image Update
        if ($request->hasFile('image')) {
            $path = 'admin/images/upload-footer/' . $footer->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('admin/images/upload-footer', $filename);
            $footer->image = $filename;
        }
        $footer->update();
        return redirect('/footers')->with('update_message', "Footer Updated Successfully");
    }


    public function footer_view($id)
    {
        $footer = Footer::find($id);
        return view('admin.footer.view', compact('footer'));
    }

    // Change Status Using Ajax
    public function change_status(Request $request)
    {
        $footer = Footer::find($request->footer_id);
        $footer->status = $request->status;
        $footer->save();
    }

    public function destroy($id)
    {
        $delete_data = Footer::find($id);
        // Footer Delete With Image
        $path = 'admin/images/upload-footer/' . $delete_data->image;
        if (File::exists($path)) {
            File::delete($path);
        }
        $delete_data->delete();
        if ($delete_data) {
            return redirect()->back()->with('delete_message', "Footer Deleted Successfully");
        }
    }
}

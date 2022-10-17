<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index()
    {
        // Get All Feature
        $features = Feature::all();
        return view('admin.feature.index', compact('features'));
    }

    public function feature_create()
    {
        return view('admin.feature.create');
    }

    public function feature_store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'icon_code' => 'required',
            'link' => 'required',
        ]);

        $feature = new Feature();
        $feature->title = $request->title;
        $feature->sub_title = $request->sub_title;
        $feature->icon_code = $request->icon_code;
        $feature->link = $request->link;
        $feature->save();
        return redirect()->back()->with('create_message', "Featured Created Successfully");

    }

    public function feature_edit($id)
    {
        // Get Feature
        $feature = Feature::find($id);
        return view('admin.feature.edit', compact('feature'));
    }

    public function feature_update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'sub_title' => 'required',
            'icon_code' => 'required',
            'link' => 'required',
        ]);

        $feature = Feature::find($id);
        $feature->title = $request->title;
        $feature->sub_title = $request->sub_title;
        $feature->icon_code = $request->icon_code;
        $feature->link = $request->link;
        $feature->update();
        return redirect('/features')->with('update_message', "Featured Updated Successfully");

    }

    // Change Status Using Ajax
    public function change_status(Request $request)
    {
        $doctor = Feature::find($request->feature_id);
        $doctor->status = $request->status;
        $doctor->save();
    }

    // Delete Feature
    public function destroy($id)
    {
        $delete_data = Feature::find($id);
        $delete_data->delete();
        if ($delete_data) {
            return redirect()->back()->with('delete_message', "Feature Deleted Successfully");
        }
    }
}

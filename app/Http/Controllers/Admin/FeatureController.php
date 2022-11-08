<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feature;
use Illuminate\Http\Request;

class FeatureController extends Controller
{
    public function index()
    {
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
            'description' => 'required',
            'icon_code' => 'required',
        ]);

        $feature = new Feature();
        $feature->title = $request->title;
        $feature->description = $request->description;
        $feature->icon_code = $request->icon_code;
        $feature->save();
        return redirect()->back()->with('create_message', "Featured Created Successfully");

    }

    public function feature_edit($id)
    {
        $feature = Feature::find($id);
        return view('admin.feature.edit', compact('feature'));
    }

    public function feature_update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'icon_code' => 'required',
        ]);

        $feature = Feature::find($id);
        $feature->title = $request->title;
        $feature->description = $request->description;
        $feature->icon_code = $request->icon_code;
        $feature->update();
        return redirect('/features')->with('update_message', "Featured Updated Successfully");

    }

    // Change Status Using Ajax
    public function change_status(Request $request)
    {
        $feature = Feature::find($request->feature_id);
        $feature->status = $request->status;
        $feature->save();
    }

    public function destroy($id)
    {
        $delete_data = Feature::find($id);
        $delete_data->delete();
        if ($delete_data) {
            return redirect()->back()->with('delete_message', "Feature Deleted Successfully");
        }
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\House;
use Illuminate\Http\Request;

class HouseController extends Controller
{
    public function index()
    {
        return view('admin.house.index');
    }

    public function house_create()
    {
        // Get Active Category
        $categories = Category::where('status', '=', 1)->get();
        return view('admin.house.create', compact('categories'));
    }

    public function house_store(Request $request)
    {
        $request->validate([
            'category_id' => 'required',
            'house_title' => 'required',
            'house_price' => 'required',
            'house_description' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
            'gallery_image.*' => 'required|mimes:jpeg,jpg,png',
            'house_sqf' => 'required',
            'house_bed' => 'required',
            'house_bath' => 'required',
            'day_on_house' => 'required',
        ]);
        $house = new House();
        $house->category_id = $request->category_id;
        $house->house_title = $request->house_title;
        $house->house_price = $request->house_price;
        $house->house_description = $request->house_description;
        $house->house_sqf = $request->house_sqf;
        $house->house_bed = $request->house_bed;
        $house->house_bath = $request->house_bath;
        $house->day_on_house = $request->day_on_house;

        // House Image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('admin/images/upload-house', $filename);
            $house->image = $filename;
        }

        // House Gallery Image
        $images = array();
        if ($request->hasFile('gallery_image')) {
            $files = $request->file('gallery_image');
            foreach ($files as $file) {
                $name = $file->getClientOriginalName();
                $file->move('admin/images/upload-house-gallery', $name);
                $images[] = $name;
            }
        }
        $house->gallery_image = json_encode($images);
        $house->save();
        return redirect()->back()->with('create_message', 'House Created Successfully');
    }
}

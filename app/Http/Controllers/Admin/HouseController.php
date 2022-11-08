<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\House;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class HouseController extends Controller
{
    public function index()
    {
        // Get All House With Category
        $houses = DB::table('houses')
            ->join('categories', 'houses.category_id', '=', 'categories.id')->select([
                'houses.*',
                'categories.id as category_id',
                'categories.name as category_name',
            ])->get();
        return view('admin.house.index', compact('houses'));
    }

    public function house_create()
    {
        // Get All Active Category
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
            'gallery_image' => 'required',
            'gallery_image.*' => 'mimes:jpeg,jpg,png',
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
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $file->move('admin/images/upload-house-gallery', $image_full_name);
                $images[] = $image_full_name;
            }
        }
        $house->gallery_image = json_encode($images);
        $house->save();
        return redirect()->back()->with('create_message', 'House Created Successfully');
    }

    public function house_edit($id)
    {
        // Get All Category
        $categories = Category::all();
        $house = House::find($id);
        return view('admin.house.edit', compact('house', 'categories'));
    }

    public function house_update(Request $request, $id)
    {
        $request->validate([
            'category_id' => 'required',
            'house_title' => 'required',
            'house_price' => 'required',
            'house_description' => 'required',
            'house_sqf' => 'required',
            'house_bed' => 'required',
            'house_bath' => 'required',
            'day_on_house' => 'required',
        ]);
        $house = House::find($id);
        $house->category_id = $request->category_id;
        $house->house_title = $request->house_title;
        $house->house_price = $request->house_price;
        $house->house_description = $request->house_description;
        $house->house_sqf = $request->house_sqf;
        $house->house_bed = $request->house_bed;
        $house->house_bath = $request->house_bath;
        $house->day_on_house = $request->day_on_house;

        // House Image Update
        if ($request->hasFile('image')) {
            $path = 'admin/images/upload-house/' . $house->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('admin/images/upload-house', $filename);
            $house->image = $filename;
        }

        // House Gallery Image Update
        $images = [];
        if ($request->hasfile('gallery_image')) {
            $files = $request->file('gallery_image');
            foreach ($files as $file) {
                $image_name = md5(rand(1000, 10000));
                $ext = strtolower($file->getClientOriginalExtension());
                $image_full_name = $image_name . '.' . $ext;
                $file->move('admin/images/upload-house-gallery', $image_full_name);
                $images[] = $image_full_name;
            }
            $house->gallery_image = json_encode($images);
        }
        $house->save();
        return redirect('/houses')->with('update_message', 'House Updated Successfully');
    }


    public function house_view($id, $category_id)
    {
        $category = Category::find($category_id);
        $house = House::find($id);
        return view('admin.house.view', compact('house', 'category'));
    }

    // Change Status Using Ajax
    public function change_status(Request $request)
    {
        $house = House::find($request->house_id);
        $house->status = $request->status;
        $house->save();
    }

    // Change Feature Using Ajax
    public function change_feature(Request $request)
    {
        $house = House::find($request->house_id);
        $house->it_feature = $request->it_feature;
        $house->save();
    }

    public function destroy($id)
    {
        $delete_data = House::find($id);
        // House Delete With Image
        $path = 'admin/images/upload-house/' . $delete_data->image;
        if (File::exists($path)) {
            File::delete($path);
        }
        // House Delete With Gallery Image
        $images = json_decode($delete_data->gallery_image);
        foreach ($images as $image) {
            $image_path = 'admin/images/upload-house-gallery/' . $image;
            if (File::exists($image_path)) {
                File::delete($image_path);
            }
        }
        $delete_data->delete();
        if ($delete_data) {
            return redirect()->back()->with('delete_message', "House Deleted Successfully");
        }
    }
}

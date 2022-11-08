<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('admin.category.index', compact('categories'));
    }

    public function category_create()
    {
        return view('admin.category.create');
    }

    public function category_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png',
        ]);

        $category = new Category();
        $category->name = $request->name;

        // Category Image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('admin/images/upload-category', $filename);
            $category->image = $filename;
        }
        $category->save();
        return redirect()->back()->with('create_message', "Category Created Successfully");
    }

    public function category_edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact('category'));
    }

    public function category_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
        ]);
        $category = Category::find($id);
        $category->name = $request->name;

        // Category Image Update
        if ($request->hasFile('image')) {
            $path = 'admin/images/upload-category/' . $category->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('admin/images/upload-category', $filename);
            $category->image = $filename;
        }
        $category->update();
        return redirect('/categories')->with('update_message', "Category Updated Successfully");
    }

    // Change Status Using Ajax
    public function change_status(Request $request)
    {
        $category = Category::find($request->category_id);
        $category->status = $request->status;
        $category->save();
    }

    public function destroy($id)
    {
        $delete_data = Category::find($id);
        // Category Delete With Image
        $path = 'admin/images/upload-category/' . $delete_data->image;
        if (File::exists($path)) {
            File::delete($path);
        }
        $delete_data->delete();
        if ($delete_data) {
            return redirect()->back()->with('delete_message', "Category Deleted Successfully");
        }
    }
}

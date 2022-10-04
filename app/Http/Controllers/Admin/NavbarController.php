<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Navbar;
use Illuminate\Http\Request;

class NavbarController extends Controller
{
    public function index()
    {
        // Get All Navbar
        $navbars = Navbar::all();
        return view('admin.navbar.index', compact('navbars'));
    }

    public function navbar_create()
    {
        return view('admin.navbar.create');
    }

    public function navbar_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required',
        ]);
        $brand = new Navbar();
        $brand->name = $request->name;
        $brand->link = $request->link;
        $brand->save();
        return redirect()->back()->with('message', 'Navbar Created Successfully');
    }

    public function navbar_edit($id)
    {
        // Get Navbar
        $navbar = Navbar::find($id);
        return view('admin.navbar.edit', compact('navbar'));
    }

    public function navbar_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'link' => 'required',
        ]);
        $navbar = Navbar::find($id);
        $navbar->name = $request->name;
        $navbar->link = $request->link;
        $navbar->update();
        return redirect('/navbars')->with('update_message', "Navbar Updated Successfully");
    }

    // Change Status Using Ajax
    public function change_status(Request $request)
    {
        $brand = Navbar::find($request->navbar_id);
        $brand->status = $request->status;
        $brand->save();
    }

    // Delete Navbar
    public function destroy($id)
    {
        $delete_data = Navbar::find($id);
        $delete_data->delete();
        if ($delete_data) {
            return redirect()->back()->with('delete_message', "Navbar Deleted Successfully");
        }
    }
}

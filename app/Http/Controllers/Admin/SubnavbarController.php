<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Navbar;
use App\Models\Subnavbar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubnavbarController extends Controller
{
    public function index()
    {
        // Get Sub-Navbar With Navbar
        $subnavbars = DB::table('subnavbars')
            ->join('navbars', 'subnavbars.navbar_id', '=', 'navbars.id')->select([
                'subnavbars.*',
                'navbars.name as navbar_name',
            ])->get();
        return view('admin.sub-navbar.index', compact('subnavbars'));
    }

    public function sub_navbar_create()
    {
        // Get All Active Navbar
        $navbars = Navbar::where('status', '=', 1)->get();
        return view('admin.sub-navbar.create', compact('navbars'));
    }

    public function sub_navbar_store(Request $request)
    {
        $request->validate([
            'navbar_id' => 'required',
            'sub_navbar_name' => 'required',
            'sub_navbar_link' => 'required',
        ]);

        $sub_navbar = new Subnavbar();
        $sub_navbar->navbar_id = $request->navbar_id;
        $sub_navbar->sub_navbar_name = $request->sub_navbar_name;
        $sub_navbar->sub_navbar_link = $request->sub_navbar_link;
        $sub_navbar->save();
        return redirect()->back()->with('create_message', 'Sub Navbar Added Successfully');
    }

    public function sub_navbar_edit($id)
    {
        // Get All Navbar
        $navbars = Navbar::all();
        $subnavbar = SubNavbar::find($id);
        return view('admin.sub-navbar.edit', compact('subnavbar', 'navbars'));
    }

    public function sub_navbar_update(Request $request, $id)
    {
        $request->validate([
            'navbar_id' => 'required',
            'sub_navbar_name' => 'required',
            'sub_navbar_link' => 'required',
        ]);
        $subnavbar = Subnavbar::find($id);
        $subnavbar->navbar_id = $request->navbar_id;
        $subnavbar->sub_navbar_name = $request->sub_navbar_name;
        $subnavbar->sub_navbar_link = $request->sub_navbar_link;
        $subnavbar->update();
        return redirect('/subnavbars')->with('update_message', "Sub-Navbar Updated Successfully");
    }

    public function destroy($id)
    {
        $delete_data = Subnavbar::find($id);
        $delete_data->delete();
        if ($delete_data) {
            return redirect()->back()->with('delete_message', "Sub-Navbar Deleted Successfully");
        }
    }
}

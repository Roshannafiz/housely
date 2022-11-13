<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Privacy;
use Illuminate\Http\Request;

class PrivacyController extends Controller
{
    public function index()
    {
        $privacys = Privacy::all();
        return view('admin.privacy.index', compact('privacys'));
    }

    public function privacy_create()
    {
        return view('admin.privacy.create');
    }

    public function privacy_store(Request $request)
    {
        $request->validate([
            'overview' => 'required',
            'information' => 'required',
        ]);
        $privacy = new Privacy();
        $privacy->overview = $request->overview;
        $privacy->information = $request->information;
        $privacy->save();
        return redirect()->back()->with('create_message', "Privacy Created Successfully");
    }

    public function privacy_edit($id)
    {
        $privacy = Privacy::find($id);
        return view('admin.privacy.edit', compact('privacy'));
    }

    public function privacy_update(Request $request, $id)
    {
        $request->validate([
            'overview' => 'required',
            'information' => 'required',
        ]);
        $privacy = Privacy::find($id);
        $privacy->overview = $request->overview;
        $privacy->information = $request->information;
        $privacy->update();
        return redirect('/privacys')->with('update_message', "Privacy Updated Successfully");
    }

    // Change Status Using Ajax
    public function change_status(Request $request)
    {
        $privacy = Privacy::find($request->privacy_id);
        $privacy->status = $request->status;
        $privacy->save();
    }

    public function destroy($id)
    {
        $delete_data = Privacy::find($id);
        $delete_data->delete();
        if ($delete_data) {
            return redirect()->back()->with('delete_message', "Privacy Deleted Successfully");
        }
    }
}

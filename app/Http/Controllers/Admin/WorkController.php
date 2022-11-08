<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Work;
use Illuminate\Http\Request;

class WorkController extends Controller
{
    public function index()
    {
        $works = Work::all();
        return view('admin.work.index', compact('works'));
    }

    public function work_create()
    {
        return view('admin.work.create');
    }

    public function work_store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'icon_code' => 'required',
        ]);

        $work = new Work();
        $work->title = $request->title;
        $work->description = $request->description;
        $work->icon_code = $request->icon_code;
        $work->save();
        return redirect()->back()->with('create_message', "Work Created Successfully");
    }

    public function work_edit($id)
    {
        $work = Work::find($id);
        return view('admin.work.edit', compact('work'));
    }

    public function work_update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'icon_code' => 'required',
        ]);

        $work = Work::find($id);
        $work->title = $request->title;
        $work->description = $request->description;
        $work->icon_code = $request->icon_code;
        $work->update();
        return redirect('/works')->with('update_message', "Work Updated Successfully");
    }

    // Change Status Using Ajax
    public function change_status(Request $request)
    {
        $work = Work::find($request->work_id);
        $work->status = $request->status;
        $work->save();
    }

    public function destroy($id)
    {
        $delete_data = Work::find($id);
        $delete_data->delete();
        if ($delete_data) {
            return redirect()->back()->with('delete_message', "Work Deleted Successfully");
        }
    }
}

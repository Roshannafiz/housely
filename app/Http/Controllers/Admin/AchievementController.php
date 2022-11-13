<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Achievement;
use Illuminate\Http\Request;

class AchievementController extends Controller
{
    public function index()
    {
        $achievements = Achievement::all();
        return view('admin.achievement.index', compact('achievements'));
    }

    public function achievement_create()
    {
        return view('admin.achievement.create');
    }

    public function achievement_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'how_much' => 'required',
        ]);
        $achievement = new Achievement();
        $achievement->name = $request->name;
        $achievement->how_much = $request->how_much;
        $achievement->save();
        return redirect()->back()->with('create_message', "Achievement Created Successfully");
    }

    public function achievement_edit($id)
    {
        $achievement = Achievement::find($id);
        return view('admin.achievement.edit', compact('achievement'));
    }

    public function achievement_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'how_much' => 'required',
        ]);
        $achievement = Achievement::find($id);
        $achievement->name = $request->name;
        $achievement->how_much = $request->how_much;
        $achievement->update();
        return redirect('/achievements')->with('update_message', "Achievement Updated Successfully");
    }

    // Change Status Using Ajax
    public function change_status(Request $request)
    {
        $achievement = Achievement::find($request->achievement_id);
        $achievement->status = $request->status;
        $achievement->save();
    }

    public function destroy($id)
    {
        $delete_data = Achievement::find($id);
        $delete_data->delete();
        if ($delete_data) {
            return redirect()->back()->with('delete_message', "Achievement Deleted Successfully");
        }
    }
}

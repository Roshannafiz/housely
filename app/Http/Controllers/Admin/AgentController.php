<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Agent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class AgentController extends Controller
{
    public function index()
    {
        $agents = Agent::all();
        return view('admin.agent.index', compact('agents'));
    }

    public function agent_create()
    {
        return view('admin.agent.create');
    }

    public function agent_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'speciality' => 'required',
            'image' => 'required',
        ]);
        $agent = new Agent();
        $agent->name = $request->name;
        $agent->speciality = $request->speciality;
        $agent->facebook_link = $request->facebook_link;
        $agent->linkedin_link = $request->linkedin_link;
        $agent->instagram_link = $request->instagram_link;

        // Agent Image
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('admin/images/upload-agent', $filename);
            $agent->image = $filename;
        }
        $agent->save();
        return redirect()->back()->with('create_message', "Agent Created Successfully");
    }

    public function agent_edit($id)
    {
        $agent = Agent::find($id);
        return view('admin.agent.edit', compact('agent'));
    }

    public function agent_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'speciality' => 'required',
        ]);
        $agent = Agent::find($id);
        $agent->name = $request->name;
        $agent->speciality = $request->speciality;
        $agent->facebook_link = $request->facebook_link;
        $agent->linkedin_link = $request->linkedin_link;
        $agent->instagram_link = $request->instagram_link;
        // Agent Image Update
        if ($request->hasFile('image')) {
            $path = 'admin/images/upload-agent/' . $agent->image;
            if (File::exists($path)) {
                File::delete($path);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('admin/images/upload-agent', $filename);
            $agent->image = $filename;
        }
        $agent->update();
        return redirect('/agents')->with('message', 'Speciality Updated Successfully');
    }

    // Change Status Using Ajax
    public function change_status(Request $request)
    {
        $agent = Agent::find($request->agent_id);
        $agent->status = $request->status;
        $agent->save();
    }

    public function destroy($id)
    {
        $delete_data = Agent::find($id);
        // Delete Agent With Image
        $path = 'admin/images/upload-agent/' . $delete_data->image;
        if (File::exists($path)) {
            File::delete($path);
        }
        $delete_data->delete();
        if ($delete_data) {
            return redirect()->back()->with('delete_message', "Agent Deleted Successfully");
        }
    }
}

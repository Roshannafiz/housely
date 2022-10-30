<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        // Get All Contact
        $contacts = Contact::all();
        return view('admin.contact.index', compact('contacts'));
    }

    public function contact_create()
    {
        return view('admin.contact.create');
    }

    public function contact_store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $contact = new Contact();
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->description = $request->description;
        $contact->save();
        return redirect()->back()->with('create_message', "Contact Created Successfully");
    }

    public function contact_edit($id)
    {
        $contact = Contact::find($id);
        return view('admin.contact.edit', compact('contact'));
    }

    public function contact_update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
        $contact = Contact::find($id);
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->description = $request->description;
        $contact->update();
        return redirect('/contacts')->with('update_message', "Contact Updated Successfully");
    }

    // Change Status Using Ajax
    public function change_status(Request $request)
    {
        $social = Contact::find($request->contact_id);
        $social->status = $request->status;
        $social->save();
    }

    public function destroy($id)
    {
        $delete_data = Contact::find($id);
        $delete_data->delete();
        if ($delete_data) {
            return redirect()->back()->with('delete_message', "Contact Deleted Successfully");
        }
    }
}
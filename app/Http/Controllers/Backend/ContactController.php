<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\Contact;
use App\Model\Communicate;

class ContactController extends Controller
{
    public function view(){    
        $data['countContact'] = Contact::count();
         
        $data['allData'] = Contact::all();
        
        return view('backend.contact.view-contact', $data);
    }

    public function add(){
    
        return view('backend.contact.add-contact');
    }

    public function store(Request $request){
        $data = new Contact();
        $data->address = $request->address;
        $data->mobile_no = $request->mobile_no;
        $data->email = $request->email;
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->linkedin = $request->linkedin;
        $data->instagram = $request->instagram;
        $data->created_by = Auth::user()->id;
        $data->save();

        return redirect()->route('contacts.view')->with('success', 'Contact inserted successfully');
    }

    public function edit($id){
        $editData = Contact::find($id);

        return view('backend.contact.edit-contact', compact('editData'));
    }

    public function update(Request $request, $id){
        $data = Contact::find($id);
        $data->address = $request->address;
        $data->mobile_no = $request->mobile_no;
        $data->email = $request->email;
        $data->facebook = $request->facebook;
        $data->twitter = $request->twitter;
        $data->linkedin = $request->linkedin;
        $data->instagram = $request->instagram;
        $data->updated_by = Auth::user()->id;
        $data->save();

        return redirect()->route('contacts.view')->with('success', 'Data updated successfully');

    }

    public function delete(Request $request){
        $contact = Contact::find($request->id);
        $contact->delete();

        return redirect()->route('contacts.view')->with('success', 'Data deleted successfully');
    }

    public function viewCommunicate(){
        $allData = Communicate::orderBy('id', 'desc')->get();
        
        return view('backend.contact.view-communicate', compact('allData'));
    }

    public function deleteCommunicate($id){
        $communicate = Communicate::find($id);
        $communicate->delete();

        return redirect()->route('contacts.communicate')->with('success', 'Data deleted  successfully');
    }
}

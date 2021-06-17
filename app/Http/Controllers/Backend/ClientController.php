<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Client;
use Auth;

class ClientController extends Controller
{
    public function view(){      
        $data['allData'] = Client::all();
        
        return view('backend.client.view-client', $data);
    }

    public function add(){
    
        return view('backend.client.add-client');
    }

    public function store(Request $request){
        $data = new Client();
        if($request->file('image')){
            $file = $request->file('image');
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/client_images'), $fileName);
            $data['image'] = $fileName;
        }
        $data->save();

        return redirect()->route('clients.view')->with('success', 'Data inserted successfully');
    }

    public function edit($id){
        $editData = Client::find($id);

        return view('backend.client.edit-client', compact('editData'));
    }

    public function update(Request $request, $id){
        $data = Client::find($id);
        // $data->updated_by = Auth::user()->id;
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/client_images/'.$data->image));
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/client_images'), $fileName);
            $data['image'] = $fileName;

        }
        $data->save();

        return redirect()->route('clients.view')->with('success', 'Data updated successfully');

    }

    public function delete(Request $request){
        $client = Client::find($request->id);
        if(file_exists('public/upload/client_images/' . $client->image) AND ! empty($client->image)){
            unlink('public/upload/client_images/' . $client->image);
        }
        $client->delete();

        return redirect()->route('clients.view')->with('success', 'Data deleted successfully');
    }
}

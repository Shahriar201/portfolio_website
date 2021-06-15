<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Model\About;

class AboutController extends Controller
{
    public function view(){    
        $data['countAbout'] = About::count();
         
        $data['allData'] = About::all();
        
        return view('backend.about.view-about', $data);
    }

    public function add(){
    
        return view('backend.about.add-about');
    }

    public function store(Request $request){
        $data = new About();

        $data->title = $request->title;
        $data->description = $request->description;
        $data->created_by = Auth::user()->id;
        if($request->file('image')){
            $file = $request->file('image');
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/about_images'), $fileName);
            $data['image'] = $fileName;
        }
        $data->save();

        return redirect()->route('abouts.view')->with('success', 'Data inserted successfully');
    }

    public function edit($id){
        $editData = About::find($id);

        return view('backend.about.edit-about', compact('editData'));
    }

    public function update(Request $request, $id){
        $data = About::find($id);

        $data->title = $request->title;
        $data->description = $request->description;
        $data->updated_by = Auth::user()->id;
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/about_images/'.$data->image));
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/about_images'), $fileName);
            $data['image'] = $fileName;

        }
        $data->save();

        return redirect()->route('abouts.view')->with('success', 'Data updated successfully');

    }

    public function delete(Request $request){
        $about = About::find($request->id);
        $about->delete();

        return redirect()->route('abouts.view')->with('success', 'Data deleted successfully');
    }
}

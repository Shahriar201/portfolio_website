<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Team;
use Auth;

class TeamController extends Controller
{
    public function view(){     
        $data['allData'] = Team::all();
        
        return view('backend.team.view-team', $data);
    }

    public function add(){
    
        return view('backend.team.add-team');
    }

    public function store(Request $request){
        $data = new Team();

        // $data->title = $request->title;
        $data->member_name = $request->member_name;
        $data->description = $request->description;
        $data->designation = $request->designation;
        $data->twitter = $request->twitter;
        $data->facebook = $request->facebook;
        $data->linkedin = $request->linkedin;
        $data->github = $request->github;
        $data->image = $request->image;
        // $data->created_by = Auth::user()->id;
        if($request->file('image')){
            $file = $request->file('image');
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/team_images'), $fileName);
            $data['image'] = $fileName;
        }
        $data->save();

        return redirect()->route('teams.view')->with('success', 'Data inserted successfully');
    }

    public function edit($id){
        $editData = Team::find($id);

        return view('backend.team.edit-team', compact('editData'));
    }

    public function update(Request $request, $id){
        $data = Team::find($id);

        // $data->title = $request->title;
        $data->member_name = $request->member_name;
        $data->designation = $request->designation;
        $data->description = $request->description;
        $data->twitter = $request->twitter;
        $data->facebook = $request->facebook;
        $data->linkedin = $request->linkedin;
        $data->github = $request->github;
        // $data->updated_by = Auth::user()->id;
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/team_images/'.$data->image));
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/team_images'), $fileName);
            $data['image'] = $fileName;

        }
        $data->save();

        return redirect()->route('teams.view')->with('success', 'Data updated successfully');

    }

    public function delete(Request $request){
        $team = Team::find($request->id);
        if(file_exists('public/upload/team_images/' . $team->image) AND ! empty($team->image)){
            unlink('public/upload/team_images/' . $team->image);
        }
        $team->delete();

        return redirect()->route('teams.view')->with('success', 'Data deleted successfully');
    }
}

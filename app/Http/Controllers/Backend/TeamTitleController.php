<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\TeamTitle;

class TeamTitleController extends Controller
{
    public function view(){     
        $data['allData'] = TeamTitle::all();
        
        return view('backend.team_title.view-team_title', $data);
    }

    public function add(){
    
        return view('backend.team_title.add-team_title');
    }

    public function store(Request $request){
        $data = new TeamTitle();
        $data->title = $request->title;
        // $data->created_by = Auth::user()->id;
        $data->save();

        return redirect()->route('team_titles.view')->with('success', 'Data inserted successfully');
    }

    public function edit($id){
        $editData = TeamTitle::find($id);

        return view('backend.team_title.edit-team_title', compact('editData'));
    }

    public function update(Request $request, $id){
        $data = TeamTitle::find($id);

        $data->title = $request->title;
        // $data->updated_by = Auth::user()->id;
        $data->save();

        return redirect()->route('team_titles.view')->with('success', 'Data updated successfully');

    }

    public function delete(Request $request){
        $team = TeamTitle::find($request->id);
        $team->delete();

        return redirect()->route('team_titles.view')->with('success', 'Data deleted successfully');
    }
}

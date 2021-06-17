<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Portfolio;
use Auth;

class PortfolioController extends Controller
{
    public function view(){      
        $data['allData'] = Portfolio::all();
        
        return view('backend.portfolio.view-portfolio', $data);
    }

    public function add(){
    
        return view('backend.portfolio.add-portfolio');
    }

    public function store(Request $request){
        $data = new Portfolio();
        $data->title = $request->title;
        if($request->file('image')){
            $file = $request->file('image');
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/portfolio_images'), $fileName);
            $data['image'] = $fileName;
        }
        $data->save();

        return redirect()->route('portfolios.view')->with('success', 'Data inserted successfully');
    }

    public function edit($id){
        $editData = Portfolio::find($id);

        return view('backend.portfolio.edit-portfolio', compact('editData'));
    }

    public function update(Request $request, $id){
        $data = Portfolio::find($id);
        $data->title = $request->title;
        // $data->updated_by = Auth::user()->id;
        if($request->file('image')){
            $file = $request->file('image');
            @unlink(public_path('upload/portfolio_images/'.$data->image));
            $fileName = date('YmdHi').$file->getClientOriginalName();
            $file->move(public_path('upload/portfolio_images'), $fileName);
            $data['image'] = $fileName;

        }
        $data->save();

        return redirect()->route('portfolios.view')->with('success', 'Data updated successfully');

    }

    public function delete(Request $request){
        $portfolio = Portfolio::find($request->id);
        if(file_exists('public/upload/portfolio_images/' . $portfolio->image) AND ! empty($portfolio->image)){
            unlink('public/upload/portfolio_images/' . $portfolio->image);
        }
        $portfolio->delete();

        return redirect()->route('portfolios.view')->with('success', 'Data deleted successfully');
    }
}

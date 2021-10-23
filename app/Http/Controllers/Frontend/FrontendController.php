<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Logo;
use App\Model\Slider;
use App\Model\Contact;
use App\Model\About;
use App\Model\Communicate;
use App\Model\Client;
use App\Model\Portfolio;
use App\Model\Service;
use App\Model\Team;
use App\Model\TeamTitle;
use Mail;
use DB;

class FrontendController extends Controller
{
    public function index(){
        $data['logo'] = Logo::first();
        $data['slider'] = Slider::first();
        $data['about'] = About::first();
        $data['services'] = Service::all();
        $data['portfolios'] = Portfolio::all();
        $data['clients'] = Client::all();
        $data['team_title'] = TeamTitle::first();
        $data['teams'] = Team::all();
        $data['contact'] = Contact::first();

        return view('frontend.index', $data);
    }

    public function aboutUS(){
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();
        $data['about'] = About::first();
        
        return view('frontend.single_pages.about-us', $data);
    }

    public function contactUs(){
        $data['logo'] = Logo::first();
        $data['contact'] = Contact::first();

        return view('frontend.single_pages.contact-us', $data);
    }

    public function store(Request $request){
        dd('Ok');
    }

}

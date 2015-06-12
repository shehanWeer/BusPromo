<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

    public function login(){
        return view('pages.login');
    }

    public function home(){
        return view('pages.home');
    }

    public function clients(){
        return view('pages.clients');
    }

    public function bus_owners(){
        return view('pages.bus_owners');
    }

    public function advertisers(){
        return view('pages.advertisers');
    }

    public function agents(){
        return view('pages.agents');
    }

    public function reports(){
        return view('pages.reports');
    }

    public function create_report(){
        return view('pages.create_report');
    }

    public function daily_log(){
        return view('pages.daily_log');
    }

    public function statistics(){
        return view('pages.statistics');
    }

    public function advertisements(){
        return view('pages.advertisements');
    }

    public function about(){
        return view('pages.about');
    }

    public function users(){
        return "Users";
    }

    public function routes(){
        return "Routes";
    }

    public function coaches(){
        return "Coaches";
    }

}

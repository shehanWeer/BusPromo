<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Auth;



class PagesController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');

    }

    public function login(){
        return view('auth.login');
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
        return view('pages.routes');
    }

    public function coaches(){
        return "Coaches";
    }

    public function settings(){
        return view('pages.settings');
    }

    public function new_members(){
        return view('pages.new_members');
    }

    public function transaction_done(){
        return view('pages.transaction_done');
    }

    public function transaction_pending(){
        return view('pages.transaction_pending');
    }

    public function transaction_failed(){
        return view('pages.transaction_failed');
    }

    public function view_routes(){
        return view('pages.view_routes');
    }

    public function add_route(){
        return view('pages.add_route');
    }

    public function edit_route(){
        return view('pages.edit_route');
    }

    public function remove_route(){
        return view('pages.remove_route');
    }

    public function all_owners(){
        return view('pages.all_owners');
    }

    public function add_owner(){
        return view('pages.add_owner');
    }

    public function edit_owner(){
        return view('pages.edit_owner');
    }

    public function remove_owner(){
        return view('pages.remove_owner');
    }

    public function view_advertisers(){
        return view('pages.view_advertisers');
    }

    public function add_advertiser(){
        return view('pages.add_advertiser');
    }

    public function edit_advertiser(){
        return view('pages.edit_advertiser');
    }

    public function remove_advertiser(){
        return view('pages.remove_advertiser');
    }

    public function user(){
        return view('pages.user');
    }
}

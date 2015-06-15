<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Advertiser;
use Auth;
use Input;

class AdvertiserController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $no_advertisers = Advertiser::count();
        return view('pages.advertisers')->with('no_advertisers', $no_advertisers);;

    }

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
        $input = Input::only('advertiser_id','advertiser_name','advertiser_address', 'advertiser_tel');
        $advertiser = new Advertiser;
        $advertiser->id = $input['advertiser_id'];
        $advertiser->name = $input['advertiser_name'];
        $advertiser->address = $input['advertiser_address'];
        $advertiser->contact_no = $input['advertiser_tel'];
        $advertiser->added_by = Auth::user()->id;
        $advertiser->save();

        return view('pages.message')->with('message', 'Advertiser added successfully!');


	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show()
	{
        $advertisers = Advertiser::all();
        return view('pages.view_advertisers', ['advertisers' => $advertisers]);
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}

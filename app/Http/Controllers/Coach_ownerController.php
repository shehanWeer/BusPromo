<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Coach_owner;
use Auth;
use Input;

class Coach_ownerController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $no_owners = Coach_owner::count();
        return view('pages.bus_owners')->with('no_owners', $no_owners);
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
        $input = Input::only('owner_id','name','contact_no', 'address', 'added_by', 'agreement_start', 'agreement_end');
        $advertiser = new Coach_owner;
        $advertiser->owner_id = $input['owner_id'];
        $advertiser->name = $input['owner_name'];
        $advertiser->contact_no = $input['owner_contact_no'];
        $advertiser->address = $input['owner_address'];
        $advertiser->added_by = Auth::user()->id;
        $advertiser->agreement_start = $input['agreement_start'];
        $advertiser->agreement_end = $input['agreement_end'];
        $advertiser->save();

        return view('pages.message')->with('message', 'Coach owner added successfully!');

    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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

<?php namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use App\Http\Controllers\Controller;
use App\updatedata;
use Illuminate\Http\Request;

class Apicontroller extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}
    public function getupdatestamp()
    {
        //
        $rootid = Input::get('rootid');


        //$data = DB::select('select * from updatedata JOIN coach_info on coach_info.root_no=roots.root_no where licence_no = ?', [0]);
        //$data = updatedata::
        $users=\DB::table('updatedata')
            ->join('coach_info', 'coach_info.root_no', '=', 'updatedata.root_no')
            ->select('lastupdate')
            ->where('updatedata.root_no',$rootid)
            ->get();
        $x=null;
        $out=null;
        foreach($users as $x){
            $out=array(
                'lastupdate'=>$x->lastupdate
            );

        }
        if ($out==null){
            $out=array(
                'lastupdate'=>'ErrorInvalidBusId'
            );

        }
        echo json_encode($out);
        //echo $data->findMany("*");//return view('pages.advertisers')->with('no_advertisers', 5);
        //var_dump($data-);
        //echo "dgjvgdsv";
    }

    public function getdata($busid)
    {
        //
        $rootid = Input::get('rootid');
        $busid = Input::get('busid');


        //$data = DB::select('select * from updatedata JOIN coach_info on coach_info.root_no=roots.root_no where licence_no = ?', [0]);
        //$data = updatedata::
        $users=\DB::table('advert')
            ->join('coach_info', 'coach_info.root_no', '=', 'updatedata.root_no')
            ->select('lastupdate')
            ->where('updatedata.root_no',$rootid)
            ->get();
        $x=null;
        $out=null;
        foreach($users as $x){
            $out=array(
                'lastupdate'=>$x->lastupdate
            );

        }
        if ($out==null){
            $out=array(
                'lastupdate'=>'ErrorInvalidBusId'
            );

        }
        echo json_encode($out);
        //echo $data->findMany("*");//return view('pages.advertisers')->with('no_advertisers', 5);
        //var_dump($data-);
        //echo "dgjvgdsv";

    }

    public function submitdata($x,$y,$z){

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
		//
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

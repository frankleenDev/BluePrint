<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BluePrintController extends Controller
{
    //

	public function index()
	{

		$om = DB::table('spaces')->get();
		$ng = DB::table('ng')->get();

		//dd($om);

		return view('blue_print')->with(['om'=>$om]);

	}

	public function get_space($id)
	{

		//dd($id);
		$space = DB::table('spaces')->where('id','=', $id)->first();

		//dd($space);

		return view('form')->with('space', $space);

	}

}

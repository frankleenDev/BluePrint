<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Exhibitor;
use Session;
use Stripe\Stripe;
use Stripe\Charge;

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

	public function submission(Request $request)
	{
		//dd($request->all());

		$exibitors = new Exhibitor();

		$exibitors->contact_name = $request->contact_name;
		$exibitors->organisation = $request->organisation;
		$exibitors->phone_number = $request->phone_number;
		$exibitors->email 		 = $request->email;
		$exibitors->street 		 = $request->street;
		$exibitors->city 		 = $request->city;
		$exibitors->country 	 = $request->country;
		$exibitors->website 	 = $request->website;
		$exibitors->space 		 = $request->space;
		$exibitors->fascia_board = $request->fascia_board;
		$exibitors->product 	 = $request->product;
		$exibitors->full_stand 	 = $request->full_stand;
		$exibitors->half_stand	 = $request->half_stand;
		$exibitors->premium_stand= $request->premium_stand;
		$exibitors->table_chairs = $request->table_chairs;
		$exibitors->arts_crafts	 = $request->arts_crafts;
		$exibitors->adverts		 = $request->adverts;
		$exibitors->option 	 	 = $request->option;
		$exibitors->total 	 	 = $request->total;
		$exibitors->status 	 	 = 'Pending';
		$exibitors->space_id	 = $request->space_id;

		$exibitors->save();	

		DB::table('spaces')->where('id','=', $request->space_id)->update(['status'=>'Pending']);

		$request->session()->put('exhibitor', $exibitors);
		//dd($request->session()->get('exhibitor'));
		return view('checkOut');	

	}

	public function postcheckOut(Request $request, $id)
	{
		if(!Session::has('exhibitor')){

			return redirect()->route('reg');
		}

		$exhibito = $request->session()->get('exhibitor');

		//dd($exhibito);

		Stripe::setApiKey('sk_test_IgawcPjz6en2IoG9QCeGP4Sa00V6M5IEQq');
		try{

			Charge::create(array(
				"address"=> "Zanzibar",
				"amount"=> $exhibito->total,
				"currency"=>"usd",
				"source" => $request->input('strpeToken'),
				"description" => "Testing"
			));
		}

		catch(\Exception $e){

			return view('order_submitted')->with('error',$e->getMessage());
		}


		Session::forget('exhibitor');

		//dd('ffranlk');

		return view('order_submitted');

	}

	public function form()
	{

	}

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use PDF;

class DynamicPDFController extends Controller
{
    //
    function index()
    {
     
     $customer_data = $this->get_customer_data();

     $view = view('ticket');

	//$contents = (string) $view;
	// or
	$contents = $view->render();

     file_put_contents(public_path() . '/static/index.html', $contents);

     return view('ticket')->with('customer_data', $customer_data);
    }

    function get_customer_data()
    {
     $customer_data = DB::table('spaces')
         ->limit(10)
         ->get();
     return $customer_data;
    }

    function pdf()
    {
     $pdf = \App::make('dompdf.wrapper');
     $pdf->loadHTML(\File::get(public_path() . '/static/index.html'));
     return $pdf->stream();
    }

    function convert_customer_data_to_html()
    {
     $customer_data = $this->get_customer_data();
     $output = '
    <!DOCTYPE html>
<html>
<head>
	<title></title>

  <style type="text/css">
  	.container {
		  width: 70%;
		  padding-right: 0.75rem;
		  padding-left: 0.75rem;
		  margin-right: auto;
		  margin-left: auto;
		}
		.table {
		  width: 100%;
		  margin-bottom: 1rem;
		  color: #858796;
		}
		.border {
		  border: 1px solid #e3e6f0 !important;
		}
		.p-3 {
		  padding: 1rem !important;
		}
		.mb-5,
		.my-5 {
		  margin-bottom: 3rem !important;
		}
		.mt-5,
		.my-5 {
		  margin-top: 3rem !important;
		}
		.text-center {
		  text-align: center !important;
		}
		.text-left {
		  text-align: left !important;
		}
		.table th,
		.table td {
		  padding: 0.75rem;
		  vertical-align: top;
		}

		.table thead th {
		  vertical-align: bottom;
		}

		.table tbody + tbody {
		}

		.table-sm th,
		.table-sm td {
		  padding: 0.3rem;
		}


  </style>
</head>
<body>


	<div class="container">
		
		<table class="table border p-3 mb-5 mt-5 text-center">
			
			<tr>
				<td rowspan="5" class="p-3">
					{!! QrCode::size(250)->generate('."ItSolutionStuff.com".'); !!}
				</td>
				<td class="text-left" colspan="1">
					<b>LOGO</b><br>Slogan
				</td>
				<td colspan="2">
					<b>ZanzibarTourismShow</b><br>Unrivaled Tourism & Travel Show
				</td>
			</tr>
			<tr>
				<td class="text-left" colspan="2"><i>Ticket Type</i></td>
			</tr>
			<tr>
				<td>
					<b>Customer Name;</b><br>Frank Gilbert
				</td>
				<td>
					<b>Preferred Stand;</b><br>CM8
				</td>
				<td rowspan="2">
					<b>Space;</b><br>*Full Stand (3mx3m) 
				</td>
			</tr>
			<tr>
				<td>
					<b>Organisation;</b><br>Zenj Food Lovers
				</td>
				<td>
					<b>Fascia Board;</b><br>Advert
				</td>
				
			</tr>
			<tr>
				<td>
					<b>Website;</b><br>www.zenjfoodlovers.com
				</td>
				<td>
					<b>Product to Exhibit;</b><br>Food
				</td>
				
			</tr>

		</table>

	</div>

</body>
</html>
      ';
     return $output;
    }
}

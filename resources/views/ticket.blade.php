<!DOCTYPE html>
<html>
<head>
	<title></title>
  <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
</head>
<body>


	<div class="container">

		<div class="col-sm-6 col-md-4 col-md-offset-4 col-sm-offset-3">

			@if(Session::has('success_message'))
			<div id="charge-message" class="alert alert-success">
				{{ Session::get('success_message') }}
			</div>
			@endif

		</div>
		<center>
			<h2 class="mt-4">Your Order was submitted successfully.</h2>
		</center>
		
		<table class="table border p-3 mb-5 mt-5 text-center">
			
			<tr>
				<td class="bg-info" rowspan='5'>
					{!! QrCode::size(200)->generate(0715755223); !!}
				</td>
				<td class="text-left bg-dark" colspan='2'>
					<b>LOGO</b><br>Slogan
				</td>
				<td class="bg-dark">
					<b>ZanzibarTourismShow</b><br>Unrivaled Tourism & Travel Show
				</td>
			</tr>
			<tr>
				<td class="text-left" colspan='2'><i>Ticket Type</i></td>
				<td></td>
			</tr>
			<tr>
				<td>
					<b>Customer Name;</b><br>Frank Gilbert
				</td>
				<td>
					<b>Preferred Stand;</b><br>CM8
				</td>
				<td rowspan="1">
					<b>Space;</b><br>*Full Stand (3mx3m) 
				</td>
			</tr>
			<tr>
				<td>
					<b>Organisation;</b><br>Zenj Food Lover's
				</td>
				<td>
					<b>Fascia Board;</b><br>Advert
				</td>
				<td>
					
				</td>
				
			</tr>
			<tr>
				<td>
					<b>Website;</b><br>www.zenjfoodlovers.com
				</td>
				<td>
					<b>Product to Exhibit;</b><br>Food
				</td>
				<td>
					
				</td>
				
			</tr>

		</table>

	</div>

</body>
</html>
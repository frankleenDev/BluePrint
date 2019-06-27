<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	
</style>

</head>
<body>

	<div class="container pt-4 mt-5">
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

	</div>

</body>
</html>
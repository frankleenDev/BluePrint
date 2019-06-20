<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<style>
    .disabled {
        pointer-events: none;
        cursor: default;
    }
    .vertical-text {
    	 -moz-transform: rotate(-90deg);
         -webkit-transform: rotate(-90deg);
}
</style>

</head>
<body>

	<div class="container">
		<center>
			<div class="col-md-10">

				<h2 class="text-center mt-5" >EXHIBITOR REGISTRATION FORM</h2>

				<p class="text-center">If you wish to book a stand at Zanzibar Tourism Show 2019. Fill in the registration form and pay online directly to us.</p>
				
				<form>
				  <div class="form-row">
				    <div class="form-group col-md-12">
				      <label for="inputEmail4"></label>
				      <input type="text" class="form-control" name="contact_name" id="inputEmail4" placeholder="Contact Name:">
				    </div>
				    <div class="form-group col-md-12">
				      <label for="inputPassword4"></label>
				      <input type="text" class="form-control" name="organisation" id="inputPassword4" placeholder="Name of Organisation:">
				    </div>
				  </div>
				  <div class="form-row	">
					  <div class="form-group col-md-6">
					    <label for="inputAddress"></label>
					    <input type="number" class="form-control" name="phone_number" id="inputAddress" placeholder="Phone number">
					  </div>
					  <div class="form-group col-md-6">
					    <label for="inputAddress2"></label>
					    <input type="email" class="form-control" name="email" id="inputAddress2" placeholder="Email">
					  </div>
				  </div>
				  <div class="form-row">
				    <div class="form-group col-md-12">
				      <label for="inputCity"></label>
				      <input type="text" class="form-control" id="inputCity" placeholder="Street Adress">
				    </div>
				  </div>
				  <div class="form-row	">
					  <div class="form-group col-md-6">
					    <label for="inputAddress"></label>
					    <input type="text" class="form-control" id="inputAddress" placeholder="City">
					  </div>
					  <div class="form-group col-md-6">
					    <label for="inputAddress2"></label>
					    <input type="text" class="form-control" id="inputAddress2" placeholder="Country">
					  </div>
				  </div>
				  <div class="form-row	">
					  <div class="form-group col-md-12">
					    <label for="inputAddress2"></label>
					    <input type="text" class="form-control" id="inputAddress2" placeholder="Website">
					  </div>
				  </div>
				  <div class="form-row">
					  <div class="form-group col-md-6">
					    <label for="inputAddress2"><h6>Preferred Stand Number</h6></label>
					    <input type="text" class="form-control" readonly value="{!! $space->title !!}" id="inputAddress2" placeholder="Website">
					  </div>
				  </div>
				   <div class="form-row">
					  <div class="form-group col-md-12">
					    <label for="inputAddress2"><h6></h6></label>
					    <input type="text" class="form-control" id="inputAddress2" placeholder="Fascia Board (Name you would like to appear on fascia board stickers);">
					  </div>
				  </div>
				  <div class="form-row">
					  <div class="form-group col-md-12">
					    <label for="inputAddress2"><h6></h6></label>
					    <input type="text" class="form-control" id="inputAddress2" placeholder="Product to exhibit or for sale;">
					  </div>
				  </div>
				  <div class="form-row">
					<label for="inputAddress2" class="text-left"><h6>Exhibition Space Required:</h6>
					<div class="col-md-12 pl-4 pr-4 row">
					<div class="col-md-8 pl-4 pr-4">
						<small class="text-left row">Please choose atleast one of the following:</small></label>
						 <div class="form-group row">
						 	<input type="checkbox" class="form-check-input" name="">
						 	<label class="form-check-label">Full Stand (3mx3m) Prefab partitioned electricity point included US$1300‎</label>
						 </div>
						 <div class="form-group row">
						 	<input type="checkbox" class="form-check-input" name="">
						 	<label class="form-check-label">Half Stand (1.5mx3m) US$650 (Shared with another exhibitor)‎</label>
						 </div>
						 <div class="form-group row">
						 	<input type="checkbox" class="form-check-input" name="">
						 	<label class="form-check-label">Premium Double Stand 5x6m - inclusive carpets (Please inquire for pricing)‎</label>
						 </div>
						 <div class="form-group row">
						 	<input type="checkbox" class="form-check-input" name="">
						 	<label class="form-check-label">Table & 2 Chairs (Carpets not available) US$400‎</label>
						 </div>
						 <div class="form-group row">
						 	<input type="checkbox" class="form-check-input" name="">
						 	<label class="form-check-label">Arts & Crafts / NGO's (3mx3m) US$350‎</label>
						 </div>
						  <div class="form-group row">
						 	<input type="checkbox" class="form-check-input" name="">
						 	<label class="form-check-label">Full page advert in catalogue US$300‎</label>
						 </div>
					</div>
					<div class="col-md-4">
						<small>Optional:</small></label>
						 <div class="container form-group row">
						 	<input type="checkbox" class="form-check-input" name="">
						 	<label class="form-check-label">Carpet for stands, 9 square meters (Options Blue, Red & Brown) US$135‎</label>
						 </div>
					</div>
					</div>
				  </div>
				  <div class="form-row	">
					  <div class="form-group col-md-6">
					    <label for="inputAddress2" class="row pl-3"><b>Total: US$</b></label>
					    <input type="number" class="form-control" id="inputAddress2" placeholder="0.00">
					  </div>
				  </div>
				  <div class="form-row">
					  <div class="form-group form-row col-md-6">
					  	<div class="row col-md-12 pl-3">
					  		<h6><b>Terms of Service</b></h6>
					  	</div>
					  <div class="form-group form-row col-md-12 pl-4">
					    <input type="checkbox" class="form-check-input" name="">
						 <label class="form-check-label">I agree to the <a href="">terms of service.</a></label>
					  </div>
					  </div>
				  </div>
				  <button type="submit" class="btn btn-lg mb-5 float-left btn-primary">Register</button>
				</form>
			
			</div>
		</center>
	</div>


</body>
</html>
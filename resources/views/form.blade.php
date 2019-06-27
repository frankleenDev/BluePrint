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
				
				<form id="" action=" {!! route('form-submission') !!}" method="GET">
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
				  @csrf
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
				      <input type="text" class="form-control" name="street" id="inputCity" placeholder="Street Adress">
				    </div>
				  </div>
				  <div class="form-row	">
					  <div class="form-group col-md-6">
					    <label for="inputAddress"></label>
					    <input type="text" class="form-control" name="city" id="inputAddress" placeholder="City">
					  </div>
					  <div class="form-group col-md-6">
					    <label for="inputAddress2"></label>
					    <input type="text" class="form-control" name="country" id="inputAddress2" placeholder="Country">
					  </div>
				  </div>
				  <div class="form-row	">
					  <div class="form-group col-md-12">
					    <label for="inputAddress2"></label>
					    <input type="text" class="form-control" name="website" id="inputAddress2" placeholder="Website">
					  </div>
				  </div>
				  <div class="form-row">
					  <div class="form-group col-md-6">
					    <label for="inputAddress2" class="form-row pl-2"><h6>Preferred Stand Number</h6></label>
					    <input type="text" class="form-control" name="space" readonly value="{!! $space->title !!}" id="inputAddress2" placeholder="">
					    <input type="text" hidden class="form-control" name="space_id" readonly value="{!! $space->id !!}" id="inputAddress2" placeholder="">
					  </div>
				  </div>
				   <div class="form-row">
					  <div class="form-group col-md-12">
					    <label for="inputAddress2"><h6></h6></label>
					    <input type="text" class="form-control" name="fascia_board" id="inputAddress2" placeholder="Fascia Board (Name you would like to appear on fascia board stickers);">
					  </div>
				  </div>
				  <div class="form-row">
					  <div class="form-group col-md-12">
					    <label for="inputAddress2"><h6></h6></label>
					    <input type="text" class="form-control" name="product" id="inputAddress2" placeholder="Product to exhibit or for sale;">
					  </div>
				  </div>
				  <div class="form-row pl-2">
					<label for="inputAddress2" class="text-left"><h6>Exhibition Space Required:</h6>
					<div class="col-md-12 pl-4 pr-4 row">
					<div class="col-md-8 pl-4 pr-4">
						<small class="text-left row">Please choose atleast one of the following:</small></label>
						 <div class="form-group row">
						 	<input type="checkbox" name="full_stand" class="form-check-input" id="full_stand" value="1300" onchange="fullstand()">
						 	<label class="form-check-label">Full Stand (3mx3m) Prefab partitioned electricity point included US$1300‎</label>
						 </div>
						 <div class="form-group row">
						 	<input type="checkbox" name="half_stand" class="form-check-input" value="650" id="half_stand" onclick="halfstand()" name="">
						 	<label class="form-check-label">Half Stand (1.5mx3m) US$650 <b>(Shared with another exhibitor)‎</b></label>
						 </div>
						 <div class="form-group row">
						 	<input type="checkbox" name="premium_stand" id="premium" value="0" onclick="premiumstand()" class="form-check-input" name="">
						 	<label class="form-check-label">Premium Double Stand 5x6m - inclusive carpets <b>(Please inquire for pricing)‎</b></label>
						 </div>
						 <div class="form-group row">
						 	<input type="checkbox" name="table_chairs" id="table_chairs" value="400" onclick="tablechairs()" class="form-check-input" name="">
						 	<label class="form-check-label">Table & 2 Chairs (Carpets not available) US$400‎</label>
						 </div>
						 <div class="form-group row">
						 	<input type="checkbox" name="arts_crafts" id="arts_crafts" value="350" onclick="artscrafts()" class="form-check-input" name="">
						 	<label class="form-check-label">Arts & Crafts / NGO's (3mx3m) US$350‎</label>
						 </div>
						  <div class="form-group row">
						 	<input type="checkbox" name="adverts" id="advert" onclick="adverts()" value="300"  class="form-check-input" name="">
						 	<label class="form-check-label">Full page advert in catalogue US$300‎</label>
						 </div>
					</div>
					<div class="col-md-4">
						<small>Optional:</small></label>
						 <div class="container form-group row">
						 	<input type="checkbox" name="option" id="option" onclick="optional()" value="135"  class="form-check-input" name="">
						 	<label class="form-check-label">Carpet for stands, 9 square meters (Options Blue, Red & Brown) US$135‎</label>
						 </div>
					</div>
					</div>
				  </div>
				  <div class="form-row	">
					  <div class="form-group col-md-6">
					    <label for="inputAddress2" class="row pl-3"><b>Total: US$</b></label>
					    <input type="number" name="total" value="0" readonly id="total" class="form-control" id="inputAddress2" placeholder="0.00">
					  </div>
				  </div>
				  <div class="form-row pl-2">
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

	<script type="text/javascript">

			function fullstand(){

	        if (document.getElementById('full_stand').checked==true) {
	        	$full  = document.getElementById('full_stand');
	        	$total = document.getElementById('total');
	            //alert(Number($total.value) + Number($full.value));
	        	$total.value = Number($total.value) + Number($full.value);
	        	 //document.getElementById('total').value = $$half + $total_value;
	            //alert($half);
	        } else if (document.getElementById('full_stand').checked==false) {
	        	$full  = document.getElementById('full_stand');
	        	$total = document.getElementById('total');
	            //alert($total.value + $half);
	        	$total.value = Number($total.value) - Number($full.value);

	        }

	    }


	    function halfstand(){

	        if (document.getElementById('half_stand').checked==true) {
	        	$half  = document.getElementById('half_stand');
	        	$total = document.getElementById('total');
	            //alert(Number($total.value) + Number($full.value));
	        	$total.value = Number($total.value) + Number($half.value);
	        	 //document.getElementById('total').value = $$half + $total_value;
	            //alert($half);
	        } else if (document.getElementById('half_stand').checked==false) {
	        	$half  = document.getElementById('half_stand');
	        	$total = document.getElementById('total');
	            //alert($total.value + $half);
	        	$total.value = Number($total.value) - Number($half.value);

	        }


	       
    	}

    	function premiumstand(){

	        if (document.getElementById('premium').checked==true) {
	        	$pre  = document.getElementById('premium');
	        	$total = document.getElementById('total');
	            //alert(Number($total.value) + Number($full.value));
	        	$total.value = Number($total.value) + Number($pre.value);
	        	 //document.getElementById('total').value = $$half + $total_value;
	            //alert($half);
	        } else if (document.getElementById('premium').checked==false) {
	        	$pre  = document.getElementById('premium');
	        	$total = document.getElementById('total');
	            //alert($total.value + $half);
	        	$total.value = Number($total.value) - Number($pre.value);

	        }


	       
    	}

    	function tablechairs(){

	        if (document.getElementById('table_chairs').checked==true) {
	        	$tablechairs  = document.getElementById('table_chairs');
	        	$total = document.getElementById('total');
	            //alert(Number($total.value) + Number($full.value));
	        	$total.value = Number($total.value) + Number($tablechairs.value);
	        	 //document.getElementById('total').value = $$half + $total_value;
	            //alert($half);
	        } else if (document.getElementById('table_chairs').checked==false) {
	        	$tablechairs  = document.getElementById('table_chairs');
	        	$total = document.getElementById('total');
	            //alert($total.value + $half);
	        	$total.value = Number($total.value) - Number($tablechairs.value);

	        }


	       
    	}

    	function artscrafts(){

	        if (document.getElementById('arts_crafts').checked==true) {
	        	$crafts  = document.getElementById('arts_crafts');
	        	$total = document.getElementById('total');
	            //alert(Number($total.value) + Number($full.value));
	        	$total.value = Number($total.value) + Number($crafts.value);
	        	 //document.getElementById('total').value = $$half + $total_value;
	            //alert($half);
	        } else if (document.getElementById('arts_crafts').checked==false) {
	        	$crafts  = document.getElementById('arts_crafts');
	        	$total = document.getElementById('total');
	            //alert($total.value + $half);
	        	$total.value = Number($total.value) - Number($crafts.value);

	        }


	       
    	}

    	function adverts(){

	        if (document.getElementById('advert').checked==true) {
	        	$advert  = document.getElementById('advert');
	        	$total = document.getElementById('total');
	            //alert(Number($total.value) + Number($full.value));
	        	$total.value = Number($total.value) + Number($advert.value);
	        	 //document.getElementById('total').value = $$half + $total_value;
	            //alert($half);
	        } else if (document.getElementById('advert').checked==false) {
	        	$advert  = document.getElementById('advert');
	        	$total = document.getElementById('total');
	            //alert($total.value + $half);
	        	$total.value = Number($total.value) - Number($advert.value);

	        }


	       
    	}


    	function optional(){

	        if (document.getElementById('option').checked==true) {
	        	$option  = document.getElementById('option');
	        	$total = document.getElementById('total');
	            //alert(Number($total.value) + Number($full.value));
	        	$total.value = Number($total.value) + Number($option.value);
	        	 //document.getElementById('total').value = $$half + $total_value;
	            //alert($half);
	        } else if (document.getElementById('option').checked==false) {
	        	$option  = document.getElementById('option');
	        	$total = document.getElementById('total');
	            //alert($total.value + $half);
	        	$total.value = Number($total.value) - Number($option.value);

	        }


	       
    	}

	</script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</body>
</html>
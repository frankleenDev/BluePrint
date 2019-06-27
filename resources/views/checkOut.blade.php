<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<script type="text/javascript" src="https://js.stripe.com/v3/"></script>

	<style type="text/css">
		
				/**
		 * The CSS shown here will not be introduced in the Quickstart guide, but shows
		 * how you can use CSS to style your Element's container.
		 */
		.StripeElement {
		  box-sizing: border-box;

		  height: 40px;

		  padding: 10px 12px;

		  border: 1px solid #ccc;
		  border-radius: 4px;
		  background-color: white;

		  box-shadow: 0 1px 3px 0 #e6ebf1;
		  -webkit-transition: box-shadow 150ms ease;
		  transition: box-shadow 150ms ease;
		}

		.StripeElement--focus {
		  box-shadow: 0 1px 3px 0 #cfd7df;
		}

		.StripeElement--invalid {
		  border-color: #fa755a;
		}

		.StripeElement--webkit-autofill {
		  background-color: #fefde5 !important;
		}

		#card-errors{
			color:#fa755a;
		}

	</style>
	

</head>
<body>

	<div class="container pt-4 mt-5">
	  
	  <center>

		<div class="col-md-8">

			@if(Session::has('success'))
			<div id="charge-error" class="alert alert-danger {{!Session::has('error') ? 'hidden' : '' }}" >
					{{ Session::get('error') }}
				</div>
			@endif

		<form id="payment-form" action="{{ route('checkout.store', 1) }}" method="POST">
			@csrf
				  <div class="form-group">
				  	<div class="form-group col-md-">
				      <label for="inputEmail4"></label>
				      <input type="text" hidden class="form-control" name="address" value="Mbweni, Zanzibar" id="address" placeholder="Address:">
				    </div>
				    <div class="form-row">
					    <div class="form-group col-md-4">
					      <label for="inputEmail4"></label>
					      <input type="text" hidden class="form-control" value="Zanzibar" name="city" id="city" placeholder="City:">
					    </div>

					     <div class="form-group col-md-4">
					      <label for="inputEmail4"></label>
					      <input type="text" hidden class="form-control" name="province" value="Town, West" id="province" placeholder="Province:">
					    </div>

					    <div class="form-group col-md-4">
					      <label for="inputEmail4"></label>
					      <input type="text" hidden class="form-control" value="25555" name="postalcode" id="postalcode" placeholder="Postal Code:">
					    </div>
					</div>

				    <div class="form-group">
				      <label for="inputEmail4"></label>
				      <input type="text" class="form-control" name="name_on_card" id="name_on_card" placeholder="Card Holder's Name:">
				    </div>

				    <div class="form-group">

				    	<label for="card- text-left">
					      Credit or debit card
					    </label>
					    <div id="card-element">
					      <!-- A Stripe Element will be inserted here. -->
					    </div>

					    <!-- Used to display form errors. -->
					    <div id="card-errors" role="alert"></div>

				    </div>


				  </div>
				  <button id="complete-order" type="submit" class="btn btn-lg mt-5 float-left btn-primary">Register</button>
				</form>

		</div>

	  </center>

	</div>

  	<!--<script src="{{ asset('js/checkout.js') }}" type="text/javascript"></script>-->

  	<script type="text/javascript">
  		
		  		// Create a Stripe client.
		var stripe = Stripe('pk_test_KRnJDEkn5DOLeBb19wQJwqYI00ZPo1cInN');

		// Create an instance of Elements.
		var elements = stripe.elements();

		// Custom styling can be passed to options when creating an Element.
		// (Note that this demo uses a wider set of styles than the guide below.)
		var style = {
		  base: {
		    color: '#32325d',
		    fontFamily: '"Helvetica Neue", Helvetica, sans-serif',
		    fontSmoothing: 'antialiased',
		    fontSize: '16px',
		    '::placeholder': {
		      color: '#aab7c4'
		    }
		  },
		  invalid: {
		    color: '#fa755a',
		    iconColor: '#fa755a'
		  }
		};

		// Create an instance of the card Element.
		var card = elements.create('card', {
			style: style,
			hidePostalCode: true
		});

		// Add an instance of the card Element into the `card-element` <div>.
		card.mount('#card-element');

		// Handle real-time validation errors from the card Element.
		card.addEventListener('change', function(event) {
		  var displayError = document.getElementById('card-errors');
		  if (event.error) {
		    displayError.textContent = event.error.message;
		  } else {
		    displayError.textContent = '';
		  }
		});

		// Handle form submission.
		var form = document.getElementById('payment-form');
		form.addEventListener('submit', function(event) {
		  event.preventDefault();

		//Disable the submit button to prevent repeated clicks
		document.getElementById('complete-order').disabled = true;

		  var options = {
                name: document.getElementById('name_on_card').value,
                address_line1: document.getElementById('address').value,
                address_city: document.getElementById('city').value,
                address_state: document.getElementById('province').value,
                address_zip: document.getElementById('postalcode').value
              }

		  stripe.createToken(card).then(function(result) {
		    if (result.error) {
		      // Inform the user if there was an error.
		      var errorElement = document.getElementById('card-errors');
		      errorElement.textContent = result.error.message;

		      //Disable the submit button to prevent repeated clicks
			  document.getElementById('complete-order').disabled = true;
		    } else {
		      // Send the token to your server.
		      stripeTokenHandler(result.token);
		    }
		  });
		});

		// Submit the form with the token ID.
		function stripeTokenHandler(token) {
		  // Insert the token ID into the form so it gets submitted to the server
		  var form = document.getElementById('payment-form');
		  var hiddenInput = document.createElement('input');
		  hiddenInput.setAttribute('type', 'hidden');
		  hiddenInput.setAttribute('name', 'stripeToken');
		  hiddenInput.setAttribute('value', token.id);
		  form.appendChild(hiddenInput);

		  // Submit the form
		  form.submit();
		}

  	</script>

</body>
</html>
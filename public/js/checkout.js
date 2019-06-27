Stripe.setPublishableKey('pk_test_KRnJDEkn5DOLeBb19wQJwqYI00ZPo1cInN');

var $form = $('#checkout_form');

$form.submit(function(event) {

	$('charge-error').addClass('hidden');
	$form.find('button').prop('disable', true);

	Stripe.createToken({
	  // country and account_number are automatically populated from the IBAN Element.
	  number: $('#card_number').val(),
	  cvc: $('#cvc').val(),
	  name: $('#card_name').val(),
	  exp_month: $('#exp_month').val(),
	  exp_year: $('#exp_year').val()
	}, stripeResponseHandler);

	return false;

});

function stripeResponseHandler(status, response)
{

	if(response.error){

		$('charge-error').removeClass('hidden');
		$('charge-error').text(response.error.message);

		$form.find('button').prop('disabled',false);
	}
	else{

		var token = response.id;
		$form.append($('<input type="hidden" name="stripeToken" />').val(token));

		$form.get(0).submit();
	}


}



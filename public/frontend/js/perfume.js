$(document).ready(function () {

	var $input = $('#number-of-prod');
	var $labelN = $('.label-cont .n');


	$('.plus').click(function () {


		$input.val(parseInt($input.val()) + 1);
		$input.change();
		$labelN.text($input.val());


		return false;

	});


	$('.minus').click(function () {

		var count = parseInt($input.val()) - 1;

		count = count < 1 ? 1 : count;

		$input.val(count);
		$input.change();
		$labelN.text($input.val());

		return false;
	});


	$('.other-img figure').click(function () {
		src = $(this).children('img').attr('src');
		$('#main-img').attr('src', src);
		return false;
	});


}); //End ready() ==> End Code JQuery
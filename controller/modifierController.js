$(document).ready(function() {
		var inputNom = $('#nom');
		var inputPrenom = $('#prenom');
		var inputMail = $('#mail');
		var inputTel = $('#tel');

	$(document).on('click', '.radio', function() {

		var parentTR = $(this).parent().parent();

		console.log(parentTR);
		var col1 = parentTR.find('.col1');
		var col2 = parentTR.find('.col2');
		var col3 = parentTR.find('.col3');
		var col4 = parentTR.find('.col4');

		var val1 = col1.text();
		var val2 = col2.text();
		var val3 = col3.text();
		var val4 = col4.text();

		inputNom.val(val1);
		inputPrenom.val(val2);
		inputMail.val(val3);
		inputTel.val(val4);
	});
});
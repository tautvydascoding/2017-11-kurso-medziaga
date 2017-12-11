//function roundNumber(number, decimal_points);
//number - kintamasis kuri apvalinsime
//decimal_points - kiek skaiciu po kablelio paliksime
//RETURN: FLOAT
function roundNumber(number, decimal_points) {
	if(!decimal_points) return Math.round(number);

	if (number == 0) {
		var decimals = "";
		for (var i = 0; i < decimal_points; i++) decimals += "0";

		return parseFloat("0." + decimals);
	} else {
    var exponent = Math.pow(10,decimal_points);
    var num = Math.round((number * exponent)).toString();

    return parseFloat(num.slice(0,-1 * decimal_points) + "." + num.slice(-1 * decimal_points));
  }
}

function validateContactForm()
{
	var errorMsg = "";
	var emailInputField = $('#section04 input.form-control');
	var emailValue = emailInputField.val();
	var dotPos = emailValue.lastIndexOf(".");
	var etaPos = emailValue.indexOf("@");
	var emailCheck = false;

	var regex = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

	 if (emailValue == false) {
			errorMsg = "Email: field must be filled.";
			$('#labelToError').text(errorMsg).removeClass('valid-contact').addClass('error-contact');
	 }
	 else if(dotPos + 2 >= emailValue.length){
		 errorMsg = "Email: ending is missing (i.e. '.com', '.lt', '.org')";
		 $('#labelToError').text(errorMsg).removeClass('valid-contact').addClass('error-contact');
	 }
	 else if (etaPos == -1){
		 errorMsg = "Email: '@' character is missing (example@example.com)";
		 $('#labelToError').text(errorMsg).removeClass('valid-contact').addClass('error-contact');
	 }
	 else if (regex.test(emailValue) == false) {
	 		errorMsg = "Email: your address is not valid.";
			$('#labelToError').text(errorMsg).removeClass('valid-contact').addClass('error-contact');
	 }
	 else{
		 $('#labelToError').text("Email: looks good :)").removeClass('error-contact').addClass('valid-contact');
		 emailCheck = true;
	 }

	 var questionInputField = $('#section04 textarea.form-control');
	 var questionValue = questionInputField.val();
	 var questionCheck = false;

	 if (questionValue == false) {
	 	errorMsg = "Question: field must be filled.";
		$('#QlabelToError').text(errorMsg).removeClass('valid-contact').addClass('error-contact');
	 }
	 else if (questionValue.length < 15) {
	 	errorMsg = "Question: input text cannot be less than 15 characters";
		$('#QlabelToError').text(errorMsg).removeClass('valid-contact').addClass('error-contact');
	 }
	 else if (questionValue.length > 255) {
		errorMsg = "Question: input text cannot be bigger than 255 characters";
		$('#QlabelToError').text(errorMsg).removeClass('valid-contact').addClass('error-contact');
	 }
	 else {
		 errorMsg = "Question:";
		 $('#QlabelToError').text(errorMsg).removeClass('error-contact').addClass('valid-contact');
		 questionCheck = true;
	 }

	 if(emailCheck == true && questionCheck == true) {
		 $('#hidden-contact-form-checker').val("ok");
	 }
}

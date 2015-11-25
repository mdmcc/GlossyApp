// JavaScript Document
//window.onload = function () {
//    "use strict";

document.stylist_signup.onsubmit = function signupval() {
		var isValid = passwrdConfirm() && input_fn() && input_ln() && input_email() && input_pass();
		//console.log('is valid', isValid);
		//alert('yay');
		//return isValid;
		return false;
	};
	
function passwrdConfirm() {
	var pass1 = document.getElementById("pass1").value;
	var pass2 = document.getElementById("pass2").value;
	var txt1 = "Your passwords have to match";
	if (pass1 !== pass2) {
		//document.getElementById("pass1").setAttribute('placeholder', 'Passwords must match');
		document.getElementById("signerror").innerHTML = txt1;
		return false;
	} else {
	return true;
	}
}
		
function input_fn() {
	var fn_length = document.getElementById("firstname").value;
	var textLength = fn_length.length;
	var txt2 = "Your First name has to be between 1 and 50 characters";
	if (textLength < 1 || textLength > 50) {
	  // document.getElementById("firstname").setAttribute('placeholder', 'First Name must be between 1 and 50 characters');
	  document.getElementById("signerror").innerHTML = txt2;
		return false;
	} else if (textLength > 1 || textLength < 50 ) {
		return true;
	}
}

function input_ln() {
	var ln_length = document.getElementById("lastname").value;
	var textLength = ln_length.length;
	var txt3 = "Your last name has to be between 5 and 50 characters";
	if (textLength < 5 || textLength > 50 ) {
	   //document.getElementById("lastname").setAttribute('placeholder', 'Last name must be between 5 and 50 characters');
	   document.getElementById("signerror").innerHTML = txt3;
		return false;
	}  else if (textLength > 1 || textLength < 50 ) {
		return true;
	}
}

function input_email() {
	var email_length = document.getElementById("email").value;
	var textLength = email_length.length;
	var txt4 = "Your email has to be between 5 and 50 characters";
	document.getElementById("signerror").innerHTML = txt4;
	if (textLength < 5 || textLength > 50) {
	 // document.getElementById("email").setAttribute('placeholder', 'Email must be between 5 and 50 characters');
		return false;
	}  else if (textLength > 1 || textLength < 50 ) {
		return true;
	}
}

function input_pass() {
	var pass_length = document.getElementById("pass1").value;
	var textLength = pass_length.length;
	var txt5 = "Your password has to be between 5 and 50 characters";
	document.getElementById("signerror").innerHTML = txt5;
	if (textLength < 5 || textLength > 50 ) {
	 //  document.getElementById("pass1").setAttribute('placeholder', 'Password must be between 5 and 50 characters');
		return false;
	}  else if (textLength > 1 || textLength < 50 ) {
		return true;
	}
}
	
	
//};
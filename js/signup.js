$('.login-click').click(function() {
	event.preventDefault();
  $('.sign-in-container').addClass("d-block");
  $('.sign-up-container').addClass("d-none");
  $('.sign-up-container').removeClass("d-block");
  event.preventDefault();
});
$('.register-click').click(function() {
	event.preventDefault();
  $('.sign-in-container').addClass("d-none");
  $('.sign-up-container').addClass("d-block");
  $('.sign-in-container').removeClass("d-block");
  event.preventDefault();
});

const signUpButton = document.getElementById('signUp');
const signInButton = document.getElementById('signIn');
const container = document.getElementById('container');

signUpButton.addEventListener('click', () => {
	container.classList.add("right-panel-active");
});

signInButton.addEventListener('click', () => {
	container.classList.remove("right-panel-active");
});



//FORM VALIDATION//

function matchPasswords() {
	let valid = true;
	let firstPassword = document.getElementById("password1").value;
	let secondPassword = document.getElementById("password2").value;
	let text;
	if (firstPassword.length < 6) {
		text = "Password must contain at least 6 characters!";
		document.getElementById("msg").innerHTML = text;
		valid = false;
	} else if (firstPassword != secondPassword) {
		text = "Passwords must be the same!";
		document.getElementById("msg").innerHTML = text;
		valid = false;
	} else {
		document.getElementById("msg").innerText = '';
		return valid;
	} 
	
}

function validateEmail() {
	let enteredEmail = document.getElementById("email").value;
	let atPosition = enteredEmail.indexOf("@");
	let dotPosition = enteredEmail.indexOf(".");
	let text;
	if (enteredEmail == null || enteredEmail == "") {
		text = "This field can't be blank!";
		document.getElementById("email").innerHTML = text;
		valid = false;
	}
	if (atPosition < 1 || dotPosition < atPosition + 2 || dotPosition + 2 >= enteredEmail.length) {
		text = "Please enter a valid e-mail address!";
		document.getElementById("emailMsg").innerHTML = text;
		return false;
	} else {
		document.getElementById("emailMsg").innerText = '';
		return true;
	}
}

function nameValidation() {
	let valid = true;
	let txt;
	let x = document.getElementById("username").value;
	if (x == null || x == "") {
		txt = "This field can't be blank!";
		document.getElementById("nameMsg").innerHTML = txt;
		valid = false;
	} else {
		document.getElementById("nameMsg").innerHTML = '';
		return true;
	}
	
}

function validate(event) {	
	var password = matchPasswords();
	var email = validateEmail(email);
	var name = nameValidation();
	if(!(password && email && name)) {

		event.preventDefault();
		let elements = document.getElementsByClassName('error-msg');
		for (let i = 0; i < elements.length; i++) {
			elements[i].style.color = 'red';
		}
		
	}
	return true;
}




jQuery(document).ready(function($) {
	$(".disable").prop('disabled',true); 
    // Show the login dialog box on click
    $('a#show_login').on('click', function(e){
        $('body').prepend('<div class="login_overlay"></div>');
        $('form#login').fadeIn(500);
        $('div.login_overlay, form#login a.close').on('click', function(){
            $('div.login_overlay').remove();
            $('form#login').hide();
        });
        e.preventDefault();
    });

    // Perform AJAX login on form submit
    $('form#login').on('submit', function(e){
        $('form#login p.status').show().text(ajax_login_object.loadingmessage);
        $.ajax({
            type: 'POST',
            dataType: 'json',
            url: ajax_login_object.ajaxurl,
            data: { 
                'action': 'ajaxlogin', //calls wp_ajax_nopriv_ajaxlogin
                'username': $('form#login #username').val(), 
                'password': $('form#login #password').val(), 
                'security': $('form#login #security').val() },
            success: function(data){
                $('form#login p.status').text(data.message);
                if (data.loggedin == true){
					document.location.href = ajax_login_object.redirecturl;
					
                }
            }
        });
        e.preventDefault();
	});

});

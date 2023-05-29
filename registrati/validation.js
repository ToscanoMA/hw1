
function checkConfirmPassword (event) {
	const input = event.currentTarget;
	const pwd = document.querySelector("#password").value;

	if (pwd.localeCompare(input.value) === 0) {
		input.parentNode.classList.remove("errorj");
		document.querySelector("#confirm-password-error").innerHTML = "";
	} else {
		input.parentNode.classList.add("errorj");
		document.querySelector("#confirm-password-error").innerHTML = "ATTENZIONE! Le due password non coincidono";
	}

}

function checkPassword (event) {
	const input = event.currentTarget;
	password = input.value;

	let error_flag = false;

	// controllo la presenza di caratteri speciali
	if (!password || password.length < 6) {
		error_flag = true;
	}	
	// controllo la lunghezza della password
	if (!/[^a-zA-Z\d]/.test(password)) {
		error_flag = true;
	  }
	// Controlla se la password contiente almeno una lettera maiuscola
	if (password.search(/[A-Z]/) == -1 ) {
		error_flag = true;
	}
	
	// Controlla se la password contiene almeno una lettera minuscola
	if (password.search(/[a-z]/) == -1 ) {
		error_flag = true;
	}

	// Controlla se la password contiene almeno un numero
	if (password.search(/\d/) == -1 ) {
		error_flag = true;
	}


	// se presente cancella l'errore
	if(error_flag === false) {
		input.parentNode.classList.remove("errorj");
		document.querySelector("#password-error").innerHTML = "";
		
	}
	else {
		
		document.querySelector("#password-error").innerHTML = "ATTENZIONE! Password non valida!";
		input.parentNode.classList.add("errorj");
	}

}

function checkEmail (event) {
	const input = event.currentTarget;
	
	var emailRegEx = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
	email = input.value;

	if (!email || !emailRegEx.test(email)) {
		input.parentNode.classList.add("errorj");
		document.querySelector("#email-error").innerHTML = "ATTENZIONE! Email non valida";
	} else {
		input.parentNode.classList.remove("errorj");
		document.querySelector("#email-error").innerHTML = "";
	}


}

function checkUserName(event){
	const input = event.currentTarget;


	if(input.value.length < 3){
		input.parentNode.classList.add("errorj");
		document.querySelector("#username-error").innerHTML =  "ATTENZIONE! L'username deve contenere almeno 3 caratteri";
	}
	else  
	{
		input.parentNode.classList.remove("errorj");
		document.querySelector("#username-error").innerHTML =  "";
	}
}


document.querySelector("#username").addEventListener('blur', checkUserName);
document.querySelector("#email").addEventListener('blur', checkEmail);
document.querySelector("#password").addEventListener('blur', checkPassword);
document.querySelector("#confirm_password").addEventListener('blur', checkConfirmPassword);
setTimeout(()=>{

	let successMessage = document.querySelector('.profile__success-message');
	let errorMessage = document.querySelector('.login__error-message');
	successMessage.style.display = 'none';
	errorMessage.style.display = 'none';

},3000);

let signupLink = document.querySelector('#signupLink');
let loginLink = document.querySelector('#loginLink');

loginLink.addEventListener('onhashchange',checkLoginOn,false);

function checkLoginOn(){

	if(window.location.hash === '#login'){

		let loginForm = document.getElementById('loginSection');
		loginForm.style.display = 'block';
		let signupForm = document.querySelector('#signupSection');
		signupForm.style.display = 'none';

	}

}
checkLoginOn();

signupLink.addEventListener('onhashchange',checkSignupOn,false);

function checkSignupOn(){

	if(window.location.hash === '#signup'){

		let loginForm = document.querySelector('#loginSection');
		loginForm.style.display = 'none';
		let signupForm = document.querySelector('#signupSection');
		signupForm.style.display = 'block';

	}

}
checkSignupOn();


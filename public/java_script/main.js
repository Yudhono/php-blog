setTimeout(()=>{

	let successMessage = document.querySelector('.profile__success-message');
	let errorMessage = document.querySelector('.login__error-message');
	successMessage.style.display = 'none';
	errorMessage.style.display = 'none';

},3000);

let loginLink = document.querySelector('#loginLink');
loginLink.addEventListener('click',checkLoginOn,false);

function checkLoginOn(){

	if(window.location.href.includes('#login')){

		let loginForm = document.getElementById('loginSection');
		loginForm.style.display = 'block';
		let signupForm = document.querySelector('#signupSection');
		signupForm.style.display = 'none';

	}

}
checkLoginOn();

// sign up

const signupForm = document.querySelector('#signup-form');

signupForm.addEventListener('submit', (e) => {
	e.preventDefault();

	// usr info

	const username = signupForm['signup-usrname'].value;
	const email = signupForm['signup-email'].value;
	const password = signupForm['signup-pass'].value;

	console.log("ee", username, email, password);
});
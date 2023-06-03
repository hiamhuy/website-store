const registerButton = document.querySelector(".btn-register");
const loginButton = document.querySelector(".btn-login");
const _container = document.getElementById("container");

const _reg = document.querySelector(".register");
const _login = document.querySelector(".login");

registerButton.addEventListener("click", () => {
	_container.classList.add("right-panel-active");
});
loginButton.addEventListener("click", () => {
	_container.classList.remove("right-panel-active");
});

//show in reponsive
_reg.addEventListener("click", () => {
	_container.classList.add("right-panel-active");
});
_login.addEventListener("click", () => {
	_container.classList.remove("right-panel-active");
});

const regFirstName = document.getElementById("reg_firstname");
const regLastName = document.getElementById("reg_lastname");
const regEmail = document.getElementById("reg_email");
const regPass = document.getElementById("reg_password");
const regNumber = document.getElementById("reg_phonenumber");

regFirstName.addEventListener("change", (e) => {
	e.preventDefault();
	const r_firstName = regFirstName.value.trim();
	if (r_firstName === "") {
		checkField(regFirstName, "Firt name cannot be blank !");
	} else {
		checkField(regFirstName, "");
	}
});
regLastName.addEventListener("change", (e) => {
	e.preventDefault();
	const r_lastName = regLastName.value.trim();
	if (r_lastName === "") {
		checkField(regLastName, "Last name cannot be blank !");
	} else {
		checkField(regLastName, "");
	}
});
regEmail.addEventListener("change", (e) => {
	e.preventDefault();
	const r_email = regEmail.value.trim();
	if (r_email === "") {
		checkField(regEmail, "Email cannot be blank !");
	} else if (!isEmail(r_email)) {
		checkField(regEmail, "Not a valid email !");
	} else {
		checkField(regEmail, "");
	}
});

regPass.addEventListener("change", (e) => {
	e.preventDefault();
	const r_pass = regPass.value.trim();
	if (r_pass === "") {
		checkField(regPass, "Password cannot be blank !");
	} else if (r_pass.length < 6) {
		checkField(regPass, "Word count must be greater than 6 !");
	} else {
		checkField(regPass, "");
	}
});

regNumber.addEventListener("change", (e) => {
	e.preventDefault();
	const r_number = regNumber.value.trim();
	if (r_number === "") {
		checkField(regNumber, "Number phone cannot be blank");
	} else {
		checkField(regNumber, "");
	}
});

function checkField(_value, _errorMess) {
	const formControl = _value.parentElement;
	const errorMess = formControl.querySelector(".error-message");
	errorMess.innerHTML = _errorMess;
}

function isEmail(email) {
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(
		email
	);
}

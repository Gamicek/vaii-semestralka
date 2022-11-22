"use strict";

let timeout;
const password = document.querySelector(".registerForm .password");
const strong = new RegExp(
  "(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{6,})"
);
function checkPassword(pass) {
  if (strong.test(pass)) {
    password.style.outlineColor = "green";
  } else {
    password.style.outlineColor = "red";
  }
}
password.addEventListener("input", () => {
  clearTimeout(timeout);
  timeout = setTimeout(() => checkPassword(password.value), 500);
});

const form = document.querySelector(".registerForm");
const registerName = document.querySelector(".registerForm .registerName");
const email = document.querySelector(".registerForm .registerEmail");
const errContainer = document.querySelector(".err.register");
const error = document.querySelector(".err.register p");

form.addEventListener("submit", function (event) {
    if(registerName.value == ""){
        error.textContent = "Missing name!";
        registerName.style.outlineColor = "red";
        errContainer.style.display = "block";
        event.preventDefault();
    }
    else if (email.value.indexOf("@") == -1) {
        error.textContent = "Not valid email!";
        email.style.outlineColor = "red";
        errContainer.style.display = "block";
        event.preventDefault();
    } else {
        errContainer.style.display = "none";
        error.textContent = "";
    }
});
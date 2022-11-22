"use strict";

const password = document.querySelector(".registerForm .password");
const form = document.querySelector(".registerForm");
const registerName = document.querySelector(".registerForm .registerName");
const email = document.querySelector(".registerForm .registerEmail");
const errContainer = document.querySelector(".err.register");
const error = document.querySelector(".err.register p");

let timeout;

const strong = new RegExp(
    "(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[^A-Za-z0-9])(?=.{6,})"
);

function checkPassword(pass) {
    if (strong.test(pass)) {
        password.style.outlineColor = "green";
        return true;
    } else {
        password.style.outlineColor = "red";
        return false;
    }
}
password.addEventListener("input", () => {
    clearTimeout(timeout);
    timeout = setTimeout(() => checkPassword(password.value), 500);
});

form.addEventListener("submit", function (event) {
    if (registerName.value == "") {
        error.textContent = "Missing name!";
        registerName.style.outlineColor = "red";
        errContainer.style.display = "block";
        event.preventDefault();
        return;
    }

    if (email.value.indexOf("@") == -1) {
        error.textContent = "Not valid email!";
        email.style.outlineColor = "red";
        errContainer.style.display = "block";
        event.preventDefault();
        return;
    }

    if (!checkPassword(password.value)) {
        error.textContent = "Not valid password!";
        errContainer.style.display = "block";
        password.style.outlineColor = "red";
        event.preventDefault();
        return;
    }

    errContainer.style.display = "none";
    error.textContent = "";
});

"use strict";

const form = document.querySelector(".loginForm");
const email = document.querySelector(".loginForm .loginName");
const pass = document.querySelector(".loginForm .loginPassword");
const errContainer = document.querySelector(".err.login");
const error = document.querySelector(".err.login p");

form.addEventListener("submit", function (event) {
    if (email.value.indexOf("@") == -1) {
        error.textContent = "Not valid email!";
        email.style.outlineColor = "red";
        errContainer.style.display = "block";
        event.preventDefault();
    } else if (pass.value === "") {
        error.textContent = "Missing password!";
        pass.style.outlineColor = "red";
        errContainer.style.display = "block";
        event.preventDefault();
    } else {
        errContainer.style.display = "none";
        error.textContent = "";
    }
});
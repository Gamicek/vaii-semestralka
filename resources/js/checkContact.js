"use strict";

const form = document.querySelector(".contact_forms");
const contactName = document.querySelector(".contact_forms .contactName");
const email = document.querySelector(".contact_forms .contactEmail");
const text = document.querySelector(".contact_forms .contactText");
const errContainer = document.querySelector(".err.contact");
const error = document.querySelector(".err.contact p");

form.addEventListener("submit", function (event) {
    if(contactName.value == ""){
        error.textContent = "Missing name!";
        contactName.style.outlineColor = "red";
        errContainer.style.display = "block";
        event.preventDefault();
    }
    else if (email.value.indexOf("@") == -1) {
        error.textContent = "Not valid email!";
        email.style.outlineColor = "red";
        errContainer.style.display = "block";
        event.preventDefault();
    } else if (text.value === "" || text.value.length < 10 ) {

        error.textContent = "Missing text! or Text is too short!";
        text.style.outlineColor = "red";
        errContainer.style.display = "block";
        event.preventDefault();
    } else {
        errContainer.style.display = "none";
        error.textContent = "";
    }
});
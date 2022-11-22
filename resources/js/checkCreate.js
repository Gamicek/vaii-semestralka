"use strict";

const form = document.querySelector(".create_form");
const title = document.querySelector(".create_form .createTitle");
const description = document.querySelector(".create_form .createDescription");
const image = document.querySelector(".create_form .createImage");
const errContainer = document.querySelector(".err.create");
const error = document.querySelector(".err.create p");
console.log(form);

form.addEventListener("submit", function (event) {
    if(title.value == ""){
        error.textContent = "Missing name!";
        title.style.outlineColor = "red";
        errContainer.style.display = "block";
        event.preventDefault();
    }
    else if (description.value === "" || description.value.length < 25) {
        error.textContent = "Missing description! or Description is too short!";
        description.style.outlineColor = "red";
        errContainer.style.display = "block";
        event.preventDefault();
    } else if (image.value == "") {
        error.textContent = "Missing text! or Text is too short!";
        image.style.outlineColor = "red";
        errContainer.style.display = "block";
        event.preventDefault();
    } else {
        errContainer.style.display = "none";
        error.textContent = "";
    }
});
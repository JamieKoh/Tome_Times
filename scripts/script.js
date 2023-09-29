/*Form Validation*/

var gErrorMsg = "";

function init() {
	var service_form = document.getElementById("service_form");
	service_form.onsubmit = validateForm;
	
	displayitem()
}

window.onload = init;

function validateForm(){
	"use strict";
	var isAllOK = false;
	gErrorMsg = "";
	var fnameOK = fnamechk();
	var lnameOK = lnamechk();
	var emailOK = emailchk();
	var streetOK = st_achk();
	var townOK = t_achk();
	var stateOK = statechk();
	var postcodeOK = postcodechk();
	var phonechkOK = phonechk();
	var subjectOK = subjectchk();
	if (fnameOK && lnameOK && emailOK && streetOK && townOK && stateOK && postcodeOK && phoneOK && subjectOK){
		isAllOK = true;
	}
	else{
		alert(gErrorMsg);
		gErrorMsg = "";
		isAllOK = false;
	}
	return isAllOK;
}

function fnamechk() {
	var fname = document.getElementById("fname").value;
	var pattern = /^[a-zA-Z ]+$/;
	var fnameOk = true;
	if (fname.length == 0){
		gErrorMsg = gErrorMsg + "Please enter your first name.\n"
		fnameOk = false;
	}
	else{
		if (!pattern.test(fname)){
			gErrorMsg = gErrorMsg + "Your first name must only contain alpha characters.\n"
			fnameOk = false;
		}
	}
	return fnameOk
}

function lnamechk() {
	var lname = document.getElementById("lname").value;
	var pattern = /^[a-zA-Z ]+$/;
	var lnameOk = true;
	if (lname.length == 0){
		gErrorMsg = gErrorMsg + "Please enter your last name.\n"
		lnameOk = false;
	}
	else{
		if (!pattern.test(lname)){
			gErrorMsg = gErrorMsg + "Your last name must only contain alpha characters.\n"
			lnameOk = false;
		}
	}
	return lnameOk
}

function emailchk() {
	var email = document.getElementById("email");
	var result = false;
	var pattern = /[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-za-zA-Z0-9.-]{1,4}$/;
	if (pattern.test(email.value)){
		result = true;
	}
	else{
		result = false;
		gErrorMsg = gErrorMsg + "Enter a valid email address\n"
	}
	return result;
}

function st_achk() {
	var street = document.getElementById("st_a").value;
	var streetOk = true;
	if (street.length == 0){
		gErrorMsg = gErrorMsg + "Please enter your street address.\n"
		streetOk = false;
	}
	else{
		streetOk = true;
	}
	return streetOk
}

function t_achk() {
	var town = document.getElementById("t_a").value;
	var townOk = true;
	if (town.length == 0){
		gErrorMsg = gErrorMsg + "Please enter a city.\n"
		townOk = false;
	}
	else{
		townOk = true;
	}
	return townOk
}

function statechk() {
	var selected = false;
	var state = document.getElementById("state").value;
	if (state!="none"){
		selected = true;
	}
	else{
		selected = false;
		gErrorMsg = gErrorMsg + "Please select a state.\n"
	}
	return selected;
}

function postcodechk() {
	var postcode = document.getElementById("postcode");
	var result = false;
	var pattern = /^[0-9]+$/;
	if (pattern.test(postcode.value)){
		result = true;
	}
	else{
		result = false;
		gErrorMsg = gErrorMsg + "Enter a valid postcode.\n"
	}
	return result;
}

function phonechk() {
	var phone = document.getElementById("phone");
	var result = false;
	var pattern = /^[0-9]+$/;
	if (pattern.test(phone.value)){
		result = true;
	}
	else{
		result = false;
		gErrorMsg = gErrorMsg + "Enter a valid phone number.\n"
	}
	return result;
}

function subjectchk() {
	var subject = document.getElementById("subject");
	var pattern = /^[a-zA-Z ]+$/;
	var subjectOk = true;
	if (subject.length == 0){
		gErrorMsg = gErrorMsg + "Please enter the subject of enquiry.\n"
		subjectOk = false;
	}
	else{
		if (!pattern.test(subject)){
			gErrorMsg = gErrorMsg + "Your subject of enquiry must only contain alpha characters.\n"
			subjectOk = false;
		}
		else{
			subjectOk = true;
		}
	}
	return subjectOk
}

function servicechk() {
	var selected = false;
	var service = document.getElementById("service").value;
	if (service!="none"){
		selected = true;
	}
	else{
		selected = false;
		gErrorMsg = gErrorMsg + "Please select a subject of enquiry.\n"
	}
	return selected;
}

function validateInputOnBlur(){
	var objectLostFocus_id = this.id;
	var isOk = false;
	switch (objectLostFocus_id){
		case "fname":
		isOk = fnamechk();
		break;
		case "lname":
		isOk = lnamechk();
		break;
		case "email":
		isOk = emailchk();
		break;
		case "st_a":
		isOk = st_achk();
		break;
		case "t_a": 
		isOk = t_achk();
		break;
		case "state": 
		isOk = statechk();
		break;
		case "postcode": 
		isOk = postcodechk();
		break;
		case "phone": 
		isOk = phonechk();
		break;
		case "service": 
		isOk = servicechk();
		break;
	}
	if (!isOk) {
		document.getElementById(objectLostFocus_id).style.borderColor = "yellow";
		document.getElementById(objectLostFocus_id).style.backgroundColor = "lightgray";
		gErrorMsg = "";
	}
}

function resetFormat(){
	var clicked_id = this.id; //gives us the id of the input control that was clicked
	document.getElementById(clicked_id).style.backgroundColor = "white";
	document.getElementById(clicked_id).style.borderColor = "grey";
}

function registerInputsOnClick(){
	var inputElements = document.getElementById("service_form").getElementsByTagName("input");
	for (var i = 0; i < inputElements.length; i++){
		inputElements[i].onclick = resetFormat;
	}
}

/*Array for states*/

function state_list() {
    var select = document.getElementById("state");

    var options = ["Johor", "Kedah", "Kelantan", "Melaka", "Negeri Sembilan", "Pahang", "Penang", "Perak", "Perlis", "Sabah", "Sarawak", "Terengganu", "Kuala Lumpur", "Labuan", "Putrajaya"];

    for (var i = 0; i < options.length; i++) {
        var opt = options[i];
        var el = document.createElement("option");
        el.textContent = opt;
        el.value = opt;
        select.appendChild(el);
    }
}

/*Within Page*/

function change(){
	var service = document.getElementById("service").value;
    sessionStorage.service = service;
    document.getElementById("subject").value = sessionStorage.service;
}

function production_list() {
    var select = document.getElementById("service");

    var options = ["Editors", "Beta readers", "Cover designers", "Narrators"];

    for (var i = 0; i < options.length; i++) {
        var opt = options[i];
        var el = document.createElement("option");
        el.textContent = opt;
        el.value = opt;
        select.appendChild(el);
    }
}

function publishing_list() {
    var select = document.getElementById("service");

    var options = ["Hardcover publishing", "Paperback publishing", "E-book publishing", "Audiobook publishing"];

    for (var i = 0; i < options.length; i++) {
        var opt = options[i];
        var el = document.createElement("option");
        el.textContent = opt;
        el.value = opt;
        select.appendChild(el);
    }
}

function marketing_list() {
    var select = document.getElementById("service");

    var options = ["Distribution to bookstores", "Distribution to libraries", "Distribution to online bookstores", "Distribution to audiobook stores"];

    for (var i = 0; i < options.length; i++) {
        var opt = options[i];
        var el = document.createElement("option");
        el.textContent = opt;
        el.value = opt;
        select.appendChild(el);
    }
}

function promotion_list() {
    var select = document.getElementById("service");

    var options = ["Magazine advertisements", "Book fair promotions", "Social media shoutouts", "Newspaper advertisements"];

    for (var i = 0; i < options.length; i++) {
        var opt = options[i];
        var el = document.createElement("option");
        el.textContent = opt;
        el.value = opt;
        select.appendChild(el);
    }
}

/*Between Pages*/

function storeitem(item_id) {
    sessionStorage.setItem("item_id", item_id);
    window.location.replace("enquiry.php");
}

function displayitem() {
    document.getElementById("subject").value = sessionStorage.getItem("item_id");
}

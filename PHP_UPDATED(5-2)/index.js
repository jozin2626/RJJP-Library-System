'use strict';
var fname = document.getElementById('fname');
var lname = document.getElementById('lname');
var pass = document.getElementById('password');
var passConfirm = document.getElementById('passConfirm');
var email = document.getElementById('email');
var address = document.getElementById('address');

//Regex to match expected email format
var emailReg = /\b[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}\b/g;

//Regex to match expected first and last name format
var nameReg = /\t\n\r!@#$%^&*\(\);:,\.=\+<>\/\\\?~/g;

//Regex to match expected password format
var passReg = /^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/;

//Regex to match expected address format
var addReg = /\d{1,}(\s{1}\w{1,})(\s{1}?\w{1,})+/g;

function validate() {
    let isValid = true;
    if (!fname.value || !lname.value || !pass.value || !passConfirm.value || !email.value || !address.value) {
        console.log('One or more field is empty');
        return;
    }
    else {
        checkName(fname.value);
        checkLastName(lname.value);
        checkEmail(email.value);
        checkPass(pass.value);
        
        if (pass.value === passConfirm.value) {
            console.log('passwords match');
            passConfirm.style.border = '3px solid green';
        }
        else {
            console.log('passwords do not match');
            passConfirm.style.border = '3px solid red';
        }

        checkAddress(address.value);
    }
}

/**
 * Validates the first or last names passed into funcion
 * @param {first name passed to check for validiation} name 
 */
function checkName(name) {
    if (!nameReg.test(name)) {
        console.log('Valid name entry');
        fname.style.border = '3px solid green';
    }
    else {
        console.log('Invalid name entry');
        fname.style.border = '3px solid red';
        //TODO generate error message to appear in html document
    }
}

/**
 * Validates last name
 * @param {last name passed to check for validation} name 
 */
function checkLastName(name) {
    if (!nameReg.test(name)) {
        console.log('Valid last name');
        lname.style.border = '3px solid green';
    }
    else {
        console.log('Invalid last name');
        lname.style.border = '3px solid red';
    }
}

/**
 * Validates email address
 * @param {email address to be checked} email 
 */
function checkEmail(emaill) {
    if (emailReg.test(emaill)) {
        console.log('Valid email entry');
        email.style.border = '3px solid green';
        sessionStorage.setItem('email', email);
    }
    else {
        console.log('Invalid email entry');
        email.style.border = '3px solid red';
        //TODO generate error message to appear in html document
    }
}

/**
 * Validates password to match expected format
 * @param {password to be validated} password 
 */
function checkPass(password) {
    if (passReg.test(password)) {
        console.log('Valid password entry');
        pass.style.border = '3px solid green';
    }
    else {
        console.log('Invalid password entry');
        passConfirm.style.border = '3px solid red';
    }
}

/**
 * Validates street address to appear in expected format
 * @param {street address to be validated} address 
 */
function checkAddress(addresss) {
    if (addReg.test(addresss)) {
        console.log('Valid address entry');
        address.style.border = '3px solid green';
    }
    else {
        console.log('Invalid address entry');
        address.style.border = '3px solid red';
    }
}
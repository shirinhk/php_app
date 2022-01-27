<?php

function isFieldEmpty($input) {
    return $input == "";
}

//validating first name data if the input is empty or not
function isFirstNameValid($firstName) {
    if(isFieldEmpty($firstName)) {
        return false;
    }
    // it should be more than 3 characters
    if (strlen($firstName) < 3) {
        return false;
    }

    return true;
}
//validating last name data if the input is empty or not
function isLastNameValid($lastName) {
    if(isFieldEmpty($lastName)) {
        return false;
    }
    // it should be more than 3 characters
    if (strlen($lastName) < 3) {
        return false;
    }

    return true;
}

//validating email data if the input is empty or not
function isEmailValid($email) {
    if(isFieldEmpty($email)) {
        return false;
    }
    // it should be more than 6 characters
    if (strlen($email) < 6) {
        return false;
    }
    // it should be in the format of email with @ and .
    if(! filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return false;
    }

    return true;
}
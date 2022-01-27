<?php 

function mustPresentSubmitionData() {
    return count($_POST) > 0;
}

// if our values are true send them back and return the values otherwise return default
function getDataWithDefault($key) {
    if (array_key_exists($key, $_POST)) {
        return $_POST[$key];
    }
    return "";
}

function errorMessageFromSession($key) {
    //if session variable is not set we return empty string
    if (! isset($_SESSION)) {
        return "";
    }

    // if key array does not exist or run error session return empty value
    if (! array_key_exists('errors', $_SESSION)) {
        return "";
    }

    // if there is not error for the key array in the session return the empty string
    if (! array_key_exists($key, $_SESSION['errors'])) {
        return "";
    }

    // if there is error in key in the session, return the specific error massage
    return $_SESSION['errors'][$key];
}


function submitFormFromSession($key) {
    //if session variable is not set we return empty string
    if (! isset($_SESSION)) {
        return "";
    }

    // if key array does not exist in submission return empty value
    if (! array_key_exists('submission', $_SESSION)) {
        return "";
    }
    // if there is not key in the session submission, return empty string
    if (! array_key_exists($key, $_SESSION['submission'])) {
        return "";
    }

    // if there is key session submission, return the value
    return $_SESSION['submission'][$key];
}

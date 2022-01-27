<?php 
//starts new or resume existing session, it should be the very first thing in the page
// when we call it in contact page and submit page they start sharing session together
session_start();

include 'function.php';
include 'validation.php';

// when we hit the submit page, it is going to set the value of that errors key in session with empty array
// and fill up the array with the value of error of that specific thing
$_SESSION['errors'] =[];

// when we submit to the server we get the post array in session
$_SESSION['submission'] = $_POST;

//if there is no previous page to go back to, stop executing
if(! array_key_exists('HTTP_REFERER', $_SERVER)) {
    die;
}

// if there is previuos page to go back to but we didn't post request or there is nothing in the submission post request
//redirect it to the last page was running
if (count($_POST) <= 0) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);

    die;
}

// if our values are true send them back and return the values otherwise return default with same function
$firstName = getDataWithDefault('first_name');
$lastName = getDataWithDefault('last_name');
$email = getDataWithDefault('email');

// if the data that entered are valid, use the submitted data
$firstNameValid = isFirstNameValid($firstName);
$lastNameValid = isLastNameValid($lastName);
$emailValid = isEmailValid($email);

// if the name validation fails it will show the error message
if(! $firstNameValid) {
    $_SESSION['errors']['first_name'] = 'First name is not valid';
}

// if the last name validation fails it will show the error message
if(! $lastNameValid) {
    $_SESSION['errors']['last_name'] = 'Last name is not valid';
}

// if the email validation fails it will show the error message
if(! $emailValid) {
    $_SESSION['errors']['email'] = 'Email is not valid';
}

// if any of the data does not validate successfully it will direct us to the last page it was showing
// with the related error massage
if(! $firstNameValid || ! $lastNameValid || ! $emailValid) {
    header('Location: ' . $_SERVER['HTTP_REFERER']);

    die;
}

// the email we send the form to, also other information we send in our submission
$to = "shirinhk@hotmail.com";
$subject = "You've got an email from your Contact Form";
$message .= "<html><body>";
$message .= "First name: " . $firstName . "<br>";
$message .= "Last name: " . $lastName . "<br>";
$message .= "Email: " . $email . "<br>";
$message .= "</body></html>";

mail($to, $subject, $message);
$_SESSION['submission'] = [];


header('Location: ' . $_SERVER['HTTP_REFERER']);
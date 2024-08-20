<?php

require_once("./connection.php");

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirm_password = $_POST["confirm_password"];

$error = false;
$message = [];

// Validate username
if (!isset($username) || strlen($username) > 255 || !preg_match("/^[a-zA-Z- ]+$/", $username)) {
    $error = true;
    //echo ("The username contains NOT allowed characters");
    array_push($message, "The username contains NOT allowed characters");
}

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!isset($email) || strlen($email) > 255 || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $error = true;
    //echo ("This is NOT a valid email address");
    array_push($message, "This is NOT a valid email address");
} else if (!checkdnsrr(substr($email, strpos($email, "@") + 1), "MX")) {
    $error = true;
    //echo ("There is NO corresponding DNS record for the email domain name");
    array_push($message, "There is NO corresponding DNS record for the email domain name");
}

// Password must include at least one upper case letter, one lower case letter, one numeric digit, one special character and a minimum length of 8.
if (!isset($password) || !preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-])(?=.{8,})/", $password)) {
    $error = true;
    //echo ("The Password does NOT meet the complexity requirements");
    array_push($message, "The Password does NOT meet the complexity requirements");
} else if (!isset($confirm_password) || $confirm_password !== $password) {
    $error = true;
    //echo ("The Passwords do NOT match");
    array_push($message, "The Passwords do NOT match");
}

// No errors from above occurs, register user
if ($error == false) {
    register_user($username, $email, $password);
} else {
    // If errors send them to error.php
    $json = json_encode($message);
    header("Location: ../error.php?message=" . $json);
}
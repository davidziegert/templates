<?php

require_once("connection.php");

$username = $_POST["username"];
$password = $_POST["password"];

$error = false;
$message = [];

if (!isset($_POST["username"], $_POST["password"]) || empty($_POST["username"]) || empty($_POST["password"])) {
    $error = true;
    //echo ("Please fill both the username and password fields!);
    array_push($message, "Please fill both the username and password fields!");
}

// No errors from above occurs, register user
if ($error == false) {
    login_user($username, $password);
} else {
    // If errors send them to error.php
    $json = json_encode($message);
    header("Location: ../error.php?message=" . $json);
}
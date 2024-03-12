<?php

// check if not post request
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: /src/Public/auth/signin.php");
    exit;
}

require_once __DIR__ . "/../../bootstrap.php";

$username = $_POST["username"];
$password = $_POST["password"];

// validate username and password
if (!$username || !$password) {
    $_SESSION["error"] = "Invalid username or password";
    header("Location: /src/Public/auth/signup.php");
    exit;
}

$validationMsg = null;
if (!preg_match("/^[a-zA-Z0-9](_(?!(\.|_))|\.(?!(_|\.))|[a-zA-Z0-9]){6,18}[a-zA-Z0-9]$/", $username)) {
    $validationMsg = "Username must be 8-20 characters long and contain at least one uppercase letter and one number. ";
}

if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/", $password)) {
    $validationMsg .= "Password must be 8 characters long and contain at least one uppercase letter and one number.";
}

if ($validationMsg) {
    $_SESSION["error"] = $validationMsg;
    header("Location: /src/Public/auth/signup.php");
    exit;
}

$checkUser = User::where("username", "=", $username)->first();
if ($checkUser) {
    $_SESSION["error"] = "Username already exists";
    header("Location: /src/Public/auth/signup.php");
    exit;
}

$checkUser = new User();
$checkUser->username = $username;
$checkUser->password = password_hash($password, PASSWORD_BCRYPT);
$checkUser->save();

$_SESSION["message"] = "Account created successfully. Please sign in.";
header("Location: /src/Public/auth/signin.php");
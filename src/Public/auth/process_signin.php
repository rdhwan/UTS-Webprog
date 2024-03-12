<?php

// check if not post request
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: /src/Public/auth/signin.php");
    exit;
}

require_once __DIR__ . "/../../bootstrap.php";

function generateToken()
{
    return bin2hex(random_bytes(32));
}

$username = $_POST["username"];
$password = $_POST["password"];

// validate username and password
if (!$username || !$password) {
    $_SESSION["error"] = "Invalid username or password";
    header("Location: /src/Public/auth/signin.php");
    exit;
}

$validationMsg = null;
if (!preg_match("/^[a-zA-Z0-9](_(?!(\.|_))|\.(?!(_|\.))|[a-zA-Z0-9]){6,18}[a-zA-Z0-9]$/", $username)) {
    $validationMsg = "Invalid username. ";
}

if (!preg_match("/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)[a-zA-Z\d]{8,}$/", $password)) {
    $validationMsg .= "Invalid password.";
}

if ($validationMsg) {
    $_SESSION["error"] = $validationMsg;
    header("Location: /src/Public/auth/signin.php");
    exit;
}

$checkUser = User::where("username", "=", $username)->first();
if ($checkUser) {
    if (password_verify($password, $checkUser->password)) {
        $token = generateToken();
        $checkUser->remember_token = $token;
        $checkUser->save();

        setcookie("auth", $token, time() + 3600 * 24, "/");
        header("Location: /src/Public/contacts/index.php");
        exit;
    } else {
        $_SESSION["error"] = "Wrong password.";
        header("Location: /src/Public/auth/signin.php");
        exit;

    }
}

$_SESSION["error"] = "Account not found";
header("Location: /src/Public/auth/signin.php");
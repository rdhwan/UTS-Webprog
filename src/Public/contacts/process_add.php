<?php

// check if not post request
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: /src/Public/contacts/index.php");
    exit;
}

require_once __DIR__ . "/../../bootstrap.php";
require_once __DIR__ . "/../../Middleware/checkAuth.php";


$name = $_POST["name"];
$companyName = $_POST["companyName"];
$email = $_POST["email"];
$phoneNumber = $_POST["phoneNumber"];
$isFavorite = $_POST["isFavorite"];

// validate name, company name, email, and phone number
if (!$name || !$companyName || !$email || !$phoneNumber) {
    $_SESSION["error"] = "Invalid name, company name, email, or phone number";
    header("Location: /src/Public/contacts/add.php");
    exit;
}

if (!preg_match("/^[a-zA-Z ]{3,50}$/", $name)) {
    $_SESSION["error"] = "Invalid name";
    header("Location: /src/Public/contacts/add.php");
    exit;
}

if (!preg_match("/^[a-zA-Z0-9 ._]{3,50}$/", $companyName)) {
    $_SESSION["error"] = "Invalid company name";
    header("Location: /src/Public/contacts/add.php");
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION["error"] = "Invalid email";
    header("Location: /src/Public/contacts/add.php");
    exit;
}

if (!preg_match("/^[0-9]{10,15}$/", $phoneNumber)) {
    $_SESSION["error"] = "Invalid phone number";
    header("Location: /src/Public/contacts/add.php");
    exit;
}

$customer = Customer::create([
    "name" => $name,
    "companyName" => $companyName,
    "phoneNumber" => $phoneNumber,
    "email" => $email,
    "isFavorite" => isset($isFavorite),
    "user_id" => $user->id
]);

$_SESSION["message"] = "Contact {$name} added successfully";
header("Location: /src/Public/contacts/index.php");
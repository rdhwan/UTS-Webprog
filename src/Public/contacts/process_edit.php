<?php

// check if not post request
if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: /src/Public/contacts/index.php");
    exit;
}

require_once __DIR__ . "/../../bootstrap.php";
require_once __DIR__ . "/../../Middleware/checkAuth.php";

$id = $_GET["id"];

$name = $_POST["name"];
$companyName = $_POST["companyName"];
$email = $_POST["email"];
$phoneNumber = $_POST["phoneNumber"];
$isFavorite = $_POST["isFavorite"];

if (!isset($id) || !is_numeric($id) || $id < 1) {
    $_SESSION["error"] = "Invalid contact";
    header("Location: /src/Public/contacts/edit.php?id={$id}");
    exit;
}

// validate name, company name, email, and phone number
if (!$name || !$companyName || !$email || !$phoneNumber) {
    $_SESSION["error"] = "Invalid name, company name, email, or phone number";
    header("Location: /src/Public/contacts/edit.php?id={$id}");
    exit;
}

if (!preg_match("/^[a-zA-Z ]{3,50}$/", $name)) {
    $_SESSION["error"] = "Invalid name";
    header("Location: /src/Public/contacts/edit.php?id={$id}");
    exit;
}

if (!preg_match("/^[a-zA-Z0-9 ._]{3,50}$/", $companyName)) {
    $_SESSION["error"] = "Invalid company name";
    header("Location: /src/Public/contacts/edit.php?id={$id}");
    exit;
}

if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $_SESSION["error"] = "Invalid email";
    header("Location: /src/Public/contacts/edit.php?id={$id}");
    exit;
}

if (!preg_match("/^[0-9]{10,15}$/", $phoneNumber)) {
    $_SESSION["error"] = "Invalid phone number";
    header("Location: /src/Public/contacts/edit.php?id={$id}");
    exit;
}

$contact = Customer::where("id", "=", $id)
    ->where("user_id", "=", $user->id)
    ->first();

if (!$contact) {
    $_SESSION["error"] = "Contact not found";
    header("Location: /src/Public/contacts/index.php");
    exit;
}

$contact->name = $name;
$contact->companyName = $companyName;
$contact->email = $email;
$contact->phoneNumber = $phoneNumber;
$contact->isFavorite = isset($isFavorite);

$contact->save();
$_SESSION["message"] = "Contact {$contact->name} updated successfully";
header("Location: /src/Public/contacts/index.php");
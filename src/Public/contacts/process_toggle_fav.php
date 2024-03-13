<?php

// check if not post request
if ($_SERVER["REQUEST_METHOD"] !== "GET") {
    header("Location: /src/Public/contacts/index.php");
    exit;
}

require_once __DIR__ . "/../../bootstrap.php";
require_once __DIR__ . "/../../Middleware/checkAuth.php";

$id = $_GET["id"];

if (!isset($id) || !is_numeric($id) || $id < 1) {
    $_SESSION["error"] = "Invalid contact";
    header("Location: /src/Public/contacts/index.php");
    exit;
}

$contact = Customer::where("id", "=", $id)->where("user_id", "=", $user->id)->first();
if (!$contact) {
    $_SESSION["error"] = "Contact not found";
    header("Location: /src/Public/contacts/index.php");
    exit;
}

$contact->isFavorite = !$contact->isFavorite;
$contact->save();

$_SESSION["message"] = "Contact {$contact->name} is " . ($contact->isFavorite ? "added to" : "removed from") . " favorites";
header("Location: /src/Public/contacts/index.php");
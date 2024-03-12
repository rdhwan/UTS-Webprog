<?php
require_once __DIR__ . "/../../bootstrap.php";

// delete cookies
setcookie("auth", "", time() - 3600, "/");

header("Location: /src/Public/auth/signin.php");
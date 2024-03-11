<?php

require "../bootstrap.php";

$users = User::get();
print_r($users->toArray());

// get customers where user_id is 1
$customers = User::where("user_id", "=", 1)->get();
print_r($customers->toArray());

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/output.css">
    <title>UnityBook</title>
</head>

<body>

    <p class="text-3xl">Tes</p>

</body>

</html>
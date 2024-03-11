<?php

require "../bootstrap.php";

?>


<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/output.css">
    <link rel="shortcut icon" href="./images/favicon.png" type="image/x-icon">
    <title>UnityBook</title>
</head>

<body class="flex flex-col min-h-screen min-w-full bg-[url('../images/bg.png')] bg-cover font-inter">
    <div class="flex flex-col flex-1 justify-center items-center">
        <img src="./images/logo.png" alt="unity book logo" class="h-[12rem] md:h-[16rem]" />

        <div class="flex flex-col md:flex-row gap-4">
            <a href="./auth/login.php">
                <button
                    class="btn btn-circle w-48 bg-gradient-to-r from-[#67C6E3] to-white border-none text-[#1B77D9]">Login</button>
            </a>
            <a href="./auth/register.php">
                <button
                    class="btn btn-circle w-48 bg-transparent border-[#DFF5FF] border-2 text-[#DFF5FF] hover:bg-[#DFF5FF] hover:text-[#1B77D9]">Register</button>
            </a>

        </div>
    </div>

    <footer
        class="flex items-center justify-center text-white font-semibold bg-[url('../images/bottom.svg')] bg-cover bg-top">
        <p class="text-center z-10 p-4">©2024 UnityBook. All rights reserved.</p>
    </footer>

</body>

</html>
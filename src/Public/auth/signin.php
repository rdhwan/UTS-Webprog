<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/output.css">
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
    <title>UnityBook</title>
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
</head>

<body class="flex flex-col min-h-screen min-w-full bg-[url('../images/bg.png')] bg-cover font-inter">
    <div class="flex flex-col flex-1 justify-center items-center">

        <a href="/">
            <img src="../images/logo.png" alt="unity book logo" class="h-[10rem]" />
        </a>

        <div class="flex flex-col rounded-3xl items-center justify-evenly bg-white p-10 md:p-16 gap-4 m-4">
            <div class="flex flex-col items-center">
                <span class="text-4xl font-bold">Welcome Back!</span>
                <span class="text-xs font-extralight">Enter your credentials to login</span>
            </div>
            <div class="flex flex-col align-center w-[16rem]">
                <span class="text-sm font-light">Username</span>
                <label class="bg-transparent rounded-none border-b-2 h-10">
                    <i class="ph ph-user opacity-35"></i>
                    <input type="text" class="grow h-9" placeholder="Type your username" />
                </label>
                </br>
                <span class="text-sm font-light">Password</span>
                <label class="bg-transparent rounded-none border-b-2 h-10">
                    <i class="ph ph-lock opacity-35 h-10"></i>
                    <input type="text" class="grow h-9" placeholder="Type your password" />
                </label>

            </div>

            <div class="flex flex-col items-center mt-5 gap-2">
                <button type="button"
                    class="btn btn-circle w-56 text-2xl  bg-gradient-to-r from-[#67C6E3] to-[#396D7D] border-none text-[#DFF5FF]">Sign
                    In</button>
                <span class="text-xs">Or sign up using</span>
                <a href="/auth/signup.php" class="font-bold text-[#5356FF]">SIGN UP</a>
            </div>

        </div>
    </div>

    <footer
        class="flex items-center justify-center text-white font-semibold bg-[url('../images/bottom.svg')] bg-cover bg-top">
        <p class="text-center z-10 p-4">©2024 UnityBook. All rights reserved.</p>
    </footer>

</body>

</html>
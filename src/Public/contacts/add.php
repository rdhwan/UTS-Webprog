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
    <div class="flex flex-1 justify-center items-center">

        <div class="flex flex-rows flex-1 justify-between m-8">
            <div class="flex items-start">
                <a href="/">
                    <img src="../images/icons/backBtn.svg" alt="Back Button" class="h-[4rem]">
                </a>
            </div>
            <div class="flex items-center justify-center">
                <a href="/">
                    <img src="../images/icons/profileLogo.svg" alt="Back Button" class="h-[8rem]">
                </a>
            </div>
            <div class="flex items-end">
                <a href="/">
                    <img src="../images/icons/FavOffBtn.svg" alt="Back Button" class="h-[4rem]">
                </a>
            </div>
        </div>

    </div>
    <div class="flex flex-col flex-1 justify-center items-center">
        <div class="flex flex-col rounded-3xl items-center justify-evenly bg-white p-10 md:p-10 gap-4 m-4">
            <div class="flex flex-col items-center mb-6">
                <span class="text-4xl font-bold text-center">Add New Customer</span>
                <span class="text-xs font-extralight">Create a new customer by filling below</span>
            </div>
            <div class="flex flex-col align-center w-[16rem]">
                <span class="text-sm font-light">Username</span>
                <label class="bg-transparent rounded-none border-b-2 h-10" style="display: flex; align-items: center;">
                    <i class="ph ph-user opacity-35 text-2xl justify-center" style="margin-right: 1rem;"></i>
                    <input type="text" class="grow h-9" placeholder="Type your username" />
                </label>
                </br>
                <span class="text-sm font-light">Password</span>
                <label class="bg-transparent rounded-none border-b-2 h-10" style="display: flex; align-items: center;">
                    <i class="ph ph-lock opacity-35 text-2xl justify-center" style="margin-right: 1rem;"></i>
                    <input type="text" class="grow h-9" placeholder="Type your password" />
                </label>
                </br>
                <span class="text-sm font-light">Email</span>
                <label class="bg-transparent rounded-none border-b-2 h-10" style="display: flex; align-items: center;">
                    <i class="ph ph-at opacity-35 text-2xl justify-center" style="margin-right: 1rem;"></i>
                    <input type="text" class="grow h-9" placeholder="Type your password" />
                </label>
                </br>
                <span class="text-sm font-light">Phone Number</span>
                <label class="bg-transparent rounded-none border-b-2 h-10" style="display: flex; align-items: center;">
                    <i class="ph ph-phone opacity-35 text-2xl justify-center" style="margin-right: 1rem;"></i>
                    <input type="text" class="grow h-9" placeholder="Type your password" />
                </label>
                </br>
            </div>

            <div class="flex flex-col items-center mt-5 gap-2">
                <button type="button"
                    class="btn btn-circle w-56 text-2xl  bg-gradient-to-r from-[#378CE7] to-[#5356FF] border-none text-[#DFF5FF]">CREATE!</button>
            </div>

        </div>
    </div>
</body>

</html>
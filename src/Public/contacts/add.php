<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/output.css">
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
    <title>UnityBook - Create Contact</title>
</head>

<body class="flex flex-col min-h-screen min-w-full bg-[url('../images/bg.png')] bg-cover font-inter">
    <div class="flex flex-col flex-1 justify-center items-center">

        <h1 class="text-2xl font-bold">Contact</h1>

        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-circle bg-[#DFF5FF]">
                <img src="../images/icons/profile.svg" alt="my profile" />
            </div>
            <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52 gap-2">
                <li class="p-4">Username</li>
                <hr />
                <li>
                    <a class="flex flex-row justify-between text-red-500">
                        Log out
                        <i class="ph-bold ph-sign-out"></i>
                    </a>
                </li>
            </ul>
        </div>

    </div>

</body>

</html>
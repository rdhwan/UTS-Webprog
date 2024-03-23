<?php

require_once __DIR__ . "/../../bootstrap.php";
require_once __DIR__ . "/../../Middleware/checkAuth.php";

$error = $_SESSION["error"] ?? null;
$_SESSION["error"] = null;

$id = $_GET["id"];
$customer = Customer::where("id", "=", $id)
    ->where("user_id", "=", $user->id)
    ->first();

if (!$customer) {
    $_SESSION["error"] = "Contact not found";
    header("Location: /src/Public/contacts/index.php");
    exit;
}

?>

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
    <form class="flex flex-col flex-1" method="post" action="process_edit.php?id=<?= $customer->id ?>">
        <div class="flex justify-center items-center">

            <div class="flex flex-rows flex-1 justify-between items-center m-8">
                <a href="/src/Public/contacts/index.php" class="btn w-12 h-12 rounded-full text-2xl">
                    <i class="ph-bold ph-arrow-left"></i>
                </a>
                <div class="flex bg-[#DFF5FF] w-24 h-24 rounded-full items-center justify-center">
                    <i class="ph ph-user text-5xl"></i>
                </div>
                <label class="btn btn-circle w-12 h-12 swap">

                    <?php if ($customer->isFavorite): ?>
                        <input type="checkbox" name="isFavorite" value="on" checked />
                    <?php else: ?>
                        <input type="checkbox" name="isFavorite" value="on" />
                    <?php endif; ?>

                    <i class="ph ph-star text-yellow-600 swap-off text-2xl"></i>

                    <i class="ph-fill ph-star text-yellow-600 swap-on text-2xl"></i>
                </label>
            </div>

        </div>
        <div class="flex flex-col flex-1 justify-center items-center">
            <div class="flex flex-col rounded-3xl items-center justify-evenly bg-white p-10 md:p-10 gap-4 m-4">
                <div class="flex flex-col items-center mb-6">
                    <span class="text-4xl font-bold text-center">Edit Data
                    </span>
                    <span class="text-xs font-extralight">Edit
                        <?= $customer->name ?> data by filling below
                    </span>
                </div>

                <?php if ($error): ?>
                    <div role="alert" class="alert alert-error">
                        <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current shrink-0 h-6 w-6" fill="none"
                            viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M10 14l2-2m0 0l2-2m-2 2l-2-2m2 2l2 2m7-2a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>
                            <?= $error ?>
                        </span>
                    </div>
                <?php endif; ?>


                <div class="flex flex-col align-center w-[16rem]">
                    <span class="text-sm font-light">Name</span>
                    <label class="bg-transparent rounded-none border-b-2 h-10"
                        style="display: flex; align-items: center;">
                        <i class="ph ph-user opacity-35 text-2xl justify-center" style="margin-right: 1rem;"></i>
                        <input type="text" name="name" value="<?= $customer->name ?>" required class="grow h-9"
                            placeholder="Type your username" />
                    </label>
                    </br>
                    <span class="text-sm font-light">Company Name</span>
                    <label class="bg-transparent rounded-none border-b-2 h-10"
                        style="display: flex; align-items: center;">
                        <i class="ph ph-buildings opacity-35 text-2xl justify-center" style="margin-right: 1rem;"></i>
                        <input type="text" name="companyName" value="<?= $customer->companyName ?>" required
                            class="grow h-9" placeholder="Type your company name" />
                    </label>
                    </br>
                    <span class="text-sm font-light">Email</span>
                    <label class="bg-transparent rounded-none border-b-2 h-10"
                        style="display: flex; align-items: center;">
                        <i class="ph ph-at opacity-35 text-2xl justify-center" style="margin-right: 1rem;"></i>
                        <input type="email" name="email" value="<?= $customer->email ?>" required class="grow h-9"
                            placeholder="Type your email" />
                    </label>
                    </br>
                    <span class="text-sm font-light">Phone Number</span>
                    <label class="bg-transparent rounded-none border-b-2 h-10"
                        style="display: flex; align-items: center;">
                        <i class="ph ph-phone opacity-35 text-2xl justify-center" style="margin-right: 1rem;"></i>
                        <input type="tel" name="phoneNumber" value="<?= $customer->phoneNumber ?>" required
                            maxlength="12" class="grow h-9" placeholder="Type your phone number" />
                    </label>
                    </br>
                </div>

                <div class="flex flex-col items-center mt-5 gap-2">
                    <button type="submit"
                        class="btn btn-circle w-56 text-2xl  bg-gradient-to-r from-[#378CE7] to-[#5356FF] border-none text-[#DFF5FF]">EDIT!</button>
                </div>

            </div>
        </div>
    </form>
</body>

</html>
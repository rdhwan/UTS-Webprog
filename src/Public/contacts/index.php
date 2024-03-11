<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/output.css">
    <link rel="shortcut icon" href="../images/favicon.png" type="image/x-icon">
    <script src="https://unpkg.com/@phosphor-icons/web"></script>
    <title>UnityBook</title>
</head>

<body class="flex flex-col h-screen min-w-full bg-[url('../images/bg-transparent.png')] bg-cover font-inter">
    <div class="flex flex-col h-96 p-6 md:p-8 md:px-64 gap-6 justify-evenly">
        <div class="flex flex-row items-center justify-between">
            <h1 class="text-2xl font-bold">Contact</h1>
            <button class="btn btn-circle bg-[#DFF5FF]">
                <img src="../images/icons/profile.svg" alt="my profile" />
            </button>
        </div>

        <label class="input w-full bg-[#D9D9D9] flex items-center gap-2 rounded-full">
            <i class="ph ph-magnifying-glass opacity-35 text-2xl"></i>
            <input type="text" class="grow" placeholder="Search contact" />
        </label>

        <div class="flex flex-col w-full gap-2">
            <h2 class="font-bold text-[#5356FF]">Favourites</h2>
            <div class="flex flex-row gap-4 overflow-scroll disable-scroll">

                <!-- dummy -->
                <?php for ($i = 0; $i < 10; $i++): ?>
                <button class="avatar placeholder">
                    <div class="bg-[#DFF5FF] text-neutral rounded-full w-16">
                        <span>AN</span>
                    </div>
                </button>

                <?php endfor ?>

                <!-- add button -->
                <button
                    class="btn btn-ghost btn-circle w-16 h-16 bg-transparent border-dashed border-2 border-black hover:border-dashed hover:border-2 hover:border-black">
                    <i class="ph ph-plus
                        text-3xl"></i>
                </button>

            </div>
        </div>

        <div class="flex flex-row items-center justify-between">
            <!-- filter button -->

            <div class="dropdown">
                <div tabindex="0" role="button" class="btn btn-ghost px-0 pr-2 text-[#5356FF]">
                    <i class="ph ph-faders-horizontal text-xl"></i>
                    Filter
                </div>
                <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                    <li><a>Item 1</a></li>
                    <li><a>Item 2</a></li>
                </ul>
            </div>

            <p class="font-bold">8 entries</p>
        </div>


    </div>

    <div
        class="relative flex flex-1 flex-col gap-3 p-6 md:p-8 md:px-64 pb-20 bg-gradient-to-b from-[#67C6E3] to-[#5356FF] rounded-t-3xl overflow-scroll overflow-y-scroll disable-scroll shadow-inner">
        <!-- dummy contact list -->
        <?php for ($i = 0; $i < 10; $i++): ?>
        <!-- contact lists -->
        <div class="flex flex-row items-center justify-between bg-white rounded-full p-4 shadow-md">
            <div class="avatar placeholder">
                <div class="bg-[#DFF5FF] text-neutral rounded-full w-12">
                    <span>AN</span>
                </div>
            </div>

            <div class="flex flex-col flex-1 px-4">
                <p>Aditya Nugraha</p>
                <p class=" text-gray-400 font-medium">+62 1234 5678 9332</p>
            </div>

            <div class="flex flex-row items-center">
                <i class="ph-fill ph-star text-yellow-500"></i>
                <div class="dropdown dropdown-left">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-sm">
                        <i class="ph-fill ph-dots-three-outline-vertical"></i>
                    </div>
                    <ul tabindex="0" class="dropdown-content z-[1] menu p-2 shadow bg-base-100 rounded-box w-52">
                        <li><a>Item 1</a></li>
                        <li><a>Item 2</a></li>
                    </ul>
                </div>
            </div>

        </div>

        <?php endfor ?>


        <a href="./add.php" class="fixed bottom-0 right-0 btn btn-circle w-16 h-16 m-4">
            <i class="ph ph-user-circle-plus text-4xl"></i>
        </a>

    </div>




</body>

</html>
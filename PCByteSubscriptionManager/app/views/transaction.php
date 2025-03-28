<?php

global $imageLogo2Source, $imageLogoSource, $imageDataCalendarSource, $imageProfile1Source;
require '../app/core/imageConfig.php';

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'Cashier') {
    $uri = str_replace('/notifications', '/login', $_SERVER['REQUEST_URI']);
    header('Location: ' . $uri);
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cashier || Subscription Manager</title>
    <link rel="icon" href="<?php echo $imageLogo2Source ?>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Poppins:400,600&display=swap" rel="stylesheet" />
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="<?php echo ROOT?>assets/css/home.css">
</head>
<body>

<div class="w-full min-h-screen relative overflow-hidden">
    <!-- Background Blobs -->
    <div class="absolute w-full h-full -z-10">
        <div class="absolute w-[50vw] h-[50vw] max-w-[783px] max-h-[783px] -top-[15%] left-[50%] translate-x-[-50%] bg-[#e4e3f6] rounded-full blur-[20vw]"></div>
        <div class="absolute w-[50vw] h-[50vw] max-w-[783px] max-h-[783px] top-[5%] left-[30%] bg-[#e4e3f6] rounded-full blur-[20vw]"></div>
        <div class="absolute w-[70vw] h-[70vw] max-w-[1205px] max-h-[1205px] -top-[30%] left-[-20%] bg-[#e1f9fe] rounded-full blur-[35vw]"></div>
        <div class="absolute w-[70vw] h-[70vw] max-w-[1205px] max-h-[1205px] -top-[25%] left-[75%] bg-[#e1f9fe] rounded-full blur-[35vw]"></div>
        <div class="absolute w-[30vw] h-[30vw] max-w-[452px] max-h-[452px] top-[5%] left-[85%] bg-[#c9c2fb] opacity-50 rounded-full blur-[35vw]"></div>
        <div class="absolute w-[60vw] h-[60vw] max-w-[1079px] max-h-[1079px] top-[75%] left-[-10%] bg-[#f6f2ea] rounded-full blur-[35vw]"></div>
        <div class="absolute w-[60vw] h-[60vw] max-w-[1073px] max-h-[1073px] top-[75%] left-[80%] bg-[#f6f2ea] rounded-full blur-[35vw]"></div>
    </div>

    <!-- Logo Section -->
    <?php include '../app/views/header.php'?>

    <!-- Sidebar -->
    <?php include '../app/views/sidebarCashier.php'?>


    <!-- Logout Confirmation Modal -->
    <div id="logoutModal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 w-[350px] text-center">
            <h2 class="text-lg font-semibold text-gray-800">Confirm Logout</h2>
            <p class="text-sm text-gray-600 mt-2">Are you sure you want to log out?</p>

            <div class="mt-4 flex justify-center space-x-4">
                <button onclick="closeLogoutModal()" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400 transition">Cancel</button>
                <a href="<?php echo ROOT?>logout" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700 transition">Log Out</a>
            </div>
        </div>
    </div>
    <script>
        function openLogoutModal() {
            document.getElementById('logoutModal').classList.remove('hidden');
        }

        function closeLogoutModal() {
            document.getElementById('logoutModal').classList.add('hidden');
        }
    </script>

    <!-- JavaScript -->
    <script src="<?php echo ROOT?>assets/js/home.js"></script>


    <div class="max-w-full w-[1077px] mx-auto bg-white rounded-lg shadow-md p-6">
        <div class="flex justify-between border-b pb-2">
            <div class="text-center text-[#515050] text-[13px] font-medium">Recent Transactions</div>
            <div class="text-center text-[#515050] text-[13px] font-medium"></div>
        </div>

        <!-- Scrollable Notifications -->
        <div class="mt-4 max-h-[400px] overflow-y-auto space-y-4">
            <!-- Notification Item -->
            <div class="bg-gray-50 p-4 rounded-lg shadow flex items-center justify-between">
                <!-- Transaction Icon -->
                <div class="flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="5" width="20" height="14" rx="2" ry="2"></rect>
                        <line x1="2" y1="10" x2="22" y2="10"></line>
                    </svg>

                    <div>
                        <p class="text-[#3ecc25] text-[13px] font-medium">Paid 1,600 pesos</p>
                        <p class="text-[#515050] text-[13px] font-medium">Ding Dong Jr.</p>
                        <p class="text-[#c5c5c5] text-[10px] font-medium">0384587658</p>
                    </div>
                </div>

                <p class="text-[#515050] text-[13px] font-medium">02/14/2025</p>
                <p class="text-[#515050] text-[13px] font-medium">3 hours ago</p>
            </div>


            <!-- Another Notification -->
            <div class="bg-gray-50 p-4 rounded-lg shadow flex items-center justify-between">
                <!-- Transaction Icon -->
                <div class="flex items-center gap-3">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 text-green-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <rect x="2" y="5" width="20" height="14" rx="2" ry="2"></rect>
                        <line x1="2" y1="10" x2="22" y2="10"></line>
                    </svg>

                    <div>
                        <p class="text-[#3ecc25] text-[13px] font-medium">Paid 1,600 pesos</p>
                        <p class="text-[#515050] text-[13px] font-medium">Ding Dong Jr.</p>
                        <p class="text-[#c5c5c5] text-[10px] font-medium">0384587658</p>
                    </div>
                </div>

                <p class="text-[#515050] text-[13px] font-medium">02/14/2025</p>
                <p class="text-[#515050] text-[13px] font-medium">3 hours ago</p>
            </div>


            <!-- Add more notifications as needed -->
        </div>
    </div>
</div>
</body>
</html>
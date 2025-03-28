<?php

global $imageLogo2Source, $imageLogoSource, $imageDataCalendarSource, $imageProfile1Source, $imageProfile2Source, $imageProfile3Source;
require '../app/core/imageConfig.php';

if (!isset($_SESSION['username']) || $_SESSION['role'] !== 'Cashier') {
    $uri = str_replace('/cashier', '/login', $_SERVER['REQUEST_URI']);
    header('Location: ' . $uri);
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin || Subscription Manager</title>
    <link rel="icon" href="<?php echo $imageLogo2Source ?>">

    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="<?php echo ROOT?>assets/css/home.css">
</head>
<body class="bg-gray-100">

    <div class="relative min-h-screen flex flex-col md:flex-row">

        <!-- Sidebar -->
        <?php include '../app/views/sidebarCashier.php' ?>

        <div class="w-full min-h-screen relative overflow-hidden">
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



            <!-- Notifications Section -->
            <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 p-4">

                <!-- Payment Due Update -->
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h2 class="text-2xl font-medium text-gray-700 text-center">Payment Due Update</h2>
                    <p class="text-center text-gray-500 mb-4">11 customers</p>

                    <div class="space-y-4">
                        <!-- Customer Row -->
                        <div class="flex flex-wrap items-center justify-between bg-gray-100 p-4 rounded-lg">
                            <img class="w-12 h-12 rounded-full" src="<?php echo $imageProfile1Source?>" alt="User">
                            <p class="font-medium flex-1 text-center sm:text-left">John Doe</p>

                            <p class="font-medium text-red-500">Due Today!</p>
                        </div>

                        <div class="flex flex-wrap items-center justify-between bg-gray-100 p-4 rounded-lg">
                            <img class="w-12 h-12 rounded-full" src="<?php echo $imageProfile2Source?>" alt="User">
                            <p class="font-medium flex-1 text-center sm:text-left">Jamie Murphy</p>

                            <p class="font-medium text-yellow-500">Due Tomorrow</p>
                        </div>

                        <div class="flex flex-wrap items-center justify-between bg-gray-100 p-4 rounded-lg">
                            <img class="w-12 h-12 rounded-full" src="<?php echo $imageProfile3Source?>" alt="User">
                            <p class="font-medium flex-1 text-center sm:text-left">Mark Adams</p>

                            <p class="font-medium text-yellow-500">Due Tomorrow</p>
                        </div>

                        <!-- View More Button -->
                        <div class="text-center">
                            <button class="bg-purple-500 text-white px-6 py-2 rounded-full font-bold">View More</button>
                        </div>
                    </div>

                    <h2 class="text-2xl font-medium text-gray-700 text-center mt-6">Overdue Customers</h2>
                    <p class="text-center text-gray-500 mb-4">2 customers</p>

                    <!-- Overdue Customers Grid -->
                    <div class="space-y-4">
                        <div class="flex flex-wrap items-center justify-between bg-gray-100 p-4 rounded-lg">
                            <img class="w-12 h-12 rounded-full" src="<?php echo $imageProfile1Source?>" alt="User">
                            <p class="font-medium flex-1 text-center sm:text-left">Daniel Adel</p>

                            <p class="font-medium text-red-700">Overdue</p>
                        </div>

                        <div class="flex flex-wrap items-center justify-between bg-gray-100 p-4 rounded-lg">
                            <img class="w-12 h-12 rounded-full" src="<?php echo $imageProfile3Source?>" alt="User">
                            <p class="font-medium flex-1 text-center sm:text-left">Brook Walker</p>

                            <p class="font-medium text-red-700">Overdue</p>
                        </div>

                        <!-- View More Button -->
                        <div class="text-center">
                            <button class="bg-purple-500 text-white px-6 py-2 rounded-full font-bold">View More</button>
                        </div>
                    </div>
                </div>

                <!-- Include SweetAlert2 -->
                <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                <!-- Receive Cash -->
                <?php
                // Dummy customers
                $customers = ["John Doe", "Jane Smith", "Michael Johnson"];
                ?>
                <div class="bg-white shadow-lg rounded-lg p-6">
                    <h2 class="text-xl font-semibold text-gray-700 mb-4">💵 Receive Payment</h2>

                    <form action="<?php echo ROOT?>processPayment" method="post" class="space-y-4">
                        <!-- Customer Search -->
                        <div class="relative">
                            <label for="customerInput" class="text-gray-600 font-medium">Customer</label>
                            <input type="text" id="customerInput" class="bg-gray-100 rounded-lg py-2 px-4 text-gray-700 w-full focus:ring focus:ring-blue-300" placeholder="Enter Customer Details (ID or Name)">
                            <ul id="customerList" class="absolute z-10 bg-white border border-gray-300 rounded-lg mt-1 w-full hidden shadow-lg max-h-60 overflow-y-auto">
                                <?php foreach ($customers as $customer): ?>
                                    <li class="px-4 py-2 cursor-pointer hover:bg-gray-100" onclick="selectCustomer('<?php echo $customer; ?>')">
                                        <?php echo $customer; ?>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>

                        <!-- Cash Input -->
                        <div class="relative">
                            <label for="cashInput" class="text-gray-600 font-medium">Amount</label>
                            <input type="number" id="cashInput" class="bg-gray-100 rounded-lg py-4 px-6 text-center text-gray-800 text-2xl font-semibold w-full focus:ring focus:ring-blue-300" placeholder="Enter Amount">
                        </div>

                        <!-- Numeric Keypad -->
                        <div class="grid grid-cols-3 gap-4 mt-4">
                            <?php
                            $keys = [7, 8, 9, 4, 5, 6, 1, 2, 3, '00', 0, 'C'];
                            foreach ($keys as $key): ?>
                                <div class="flex items-center justify-center bg-blue-200 hover:bg-blue-300 text-gray-900 rounded-lg w-full h-20 sm:h-24 text-3xl font-bold cursor-pointer transition" onclick="appendNumber('<?php echo $key; ?>')">
                                    <?php echo ($key === 'C') ? '<i class="fas fa-times text-red-500"></i>' : $key; ?>
                                </div>
                            <?php endforeach; ?>
                        </div>

                        <!-- Submit Button -->
                        <button type="submit" class="w-full bg-blue-500 hover:bg-blue-600 text-white rounded-lg py-3 text-lg font-bold transition shadow-md">💰 Confirm Payment</button>
                    </form>
                </div>

                <script src="<?php echo ROOT?>assets/js/cashier.js"></script>
            </div>

        </div>


    </div>

    <!-- Logout Modal -->
    <div id="logoutModal" class="fixed inset-0 flex items-center justify-center bg-gray-900 bg-opacity-50 hidden">
        <div class="bg-white rounded-lg shadow-lg p-6 w-80 text-center">
            <h2 class="text-lg font-semibold text-gray-800">Confirm Logout</h2>
            <p class="text-sm text-gray-600 mt-2">Are you sure you want to log out?</p>
            <div class="mt-4 flex justify-center space-x-4">
                <button onclick="closeLogoutModal()" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-lg hover:bg-gray-400">Cancel</button>
                <a href="<?php echo ROOT?>logout" class="px-4 py-2 bg-red-600 text-white rounded-lg hover:bg-red-700">Log Out</a>
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

    <script src="<?php echo ROOT?>assets/js/home.js"></script>

</body>
</html>

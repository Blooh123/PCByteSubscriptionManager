<?php

global $imageLogo2Source, $imageLogoSource, $imageDataCalendarSource, $imageProfile1Source, $imageProfile2Source, $imageProfile3Source;
require '../app/core/imageConfig.php';

if (!isset($_SESSION['username']) || !$_SESSION['role'] == 'Admin') {
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
    <?php include '../app/views/sidebar.php' ?>

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



        <!-- Container for Info -->
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6 p-4">

            <!-- Personal Information -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-700 text-center">Personal Information</h2>
                <p class="text-center text-gray-500 mb-4"></p>

                <!-- User Details -->
                <div class="space-y-4 border border-gray-300 rounded-lg p-6">

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="text-gray-500 text-sm">Name</p>
                            <p class="text-gray-700 font-medium"><?php echo $data['name']?></p>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Sex</p>
                            <p class="text-gray-700 font-medium"><?php echo $data['sex']?></p>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Contact</p>
                            <p class="text-gray-700 font-medium"><?php echo $data['contact']?></p>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Birthday</p>
                            <p class="text-gray-700 font-medium">
                                <?php echo date('M j, Y', strtotime($data['birthday'])); ?>
                            </p>
                        </div>

                    </div>

                    <h3 class="text-xl font-semibold text-gray-700 mt-4">Account Information</h3>

                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <p class="text-gray-500 text-sm">Username</p>
                            <p class="text-gray-700 font-medium"><?php echo $data['username']?></p>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Role</p>
                            <p class="text-gray-700 font-medium"><?php echo $data['role']?></p>
                        </div>
                        <div>
                            <p class="text-gray-500 text-sm">Password</p>
                            <p class="text-gray-700 font-medium">••••••••••••••</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Change Password Section -->
            <div class="bg-white shadow-lg rounded-lg p-6">
                <h2 class="text-2xl font-semibold text-gray-700 text-center">Change Password</h2>

                <form class="space-y-6 mt-4">
                    <div>
                        <label class="block text-gray-600 text-sm mb-1">Current Password</label>
                        <input type="password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500" placeholder="Enter current password">
                    </div>
                    <div>
                        <label class="block text-gray-600 text-sm mb-1">New Password</label>
                        <input type="password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500" placeholder="Enter new password">
                    </div>
                    <div>
                        <label class="block text-gray-600 text-sm mb-1">Confirm Password</label>
                        <input type="password" class="w-full px-3 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500" placeholder="Confirm new password">
                    </div>
                    <button type="submit" class="w-full bg-indigo-600 text-white py-2 rounded-lg hover:bg-indigo-700 transition">Save Changes</button>
                </form>
            </div>

        </div>

        <!-- Include SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="<?php echo ROOT?>assets/js/cashier.js"></script>


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
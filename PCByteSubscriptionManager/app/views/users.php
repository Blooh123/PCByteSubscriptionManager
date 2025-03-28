<?php

global $imageLogo2Source, $imageLogoSource, $imageDataCalendarSource, $imageProfile1Source;
require '../app/core/imageConfig.php';





?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin || Subscription Manager</title>
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
<?php include '../app/views/sidebar.php'?>


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



<div class="flex justify-center items-center min-h-screen">
    <div class="w-[90%] min-h-screen p-4 sm:p-6"> <!-- Custom width -->
    <!-- Customers Header -->
    <div class="text-[#515050] text-lg sm:text-2xl font-medium font-['Poppins'] mb-4">Users</div>

        <!-- Search-->
        <div class="w-full bg-white rounded-[15px] shadow-md p-4 mb-6">
            <div class="flex flex-col sm:flex-row items-center justify-between space-y-4 sm:space-y-0">

                <!-- Search Bar -->
                <div class="w-full sm:w-[383px] h-[45px] bg-[#f8f8f8] rounded-[10px] border border-[#bbb7b7] flex items-center px-4">
                    <i class="fas fa-search text-gray-500 mr-3"></i> <!-- FontAwesome Search Icon -->
                    <input type="text" placeholder="Search..." class="w-full bg-transparent text-[#515050] text-sm sm:text-base font-medium font-['Poppins'] outline-none" />
                </div>

                <!-- Buttons Container -->
                <div class="flex gap-4">
                    <!-- Add Button -->
                    <a href="<?php echo ROOT?>add_user" class="w-[120px] h-[46px] bg-[#4635b1] rounded-[61px] flex items-center justify-center space-x-2 px-4">
                        <i class="fas fa-plus text-white"></i> <!-- FontAwesome Plus Icon -->
                        <span class="text-white text-sm sm:text-base font-bold font-['Poppins']">Add</span>
                    </a>

                    <!-- Search Button -->
                    <button class="w-[120px] h-[46px] bg-[#4635b1] rounded-[61px] flex items-center justify-center space-x-2 px-4">
                        <i class="fas fa-search text-white"></i> <!-- FontAwesome Search Icon -->
                        <span class="text-white text-sm sm:text-base font-bold font-['Poppins']">Search</span>
                    </button>
                </div>

            </div>
        </div>

    <!-- Customers Table / Card Layout -->
    <div class="w-full bg-white rounded-lg shadow-md p-4 overflow-x-auto">
        <!-- Table Header (Only for larger screens) -->
        <div class="hidden sm:grid grid-cols-6 gap-4 text-[#292929] text-sm font-medium font-['Poppins'] mb-4">
            <div class="text-center">Username</div>
            <div class="text-center">Role</div>
            <div class="text-center">Contact</div>
            <div class="text-center"></div>
            <div class="text-center"></div>
            <div class="text-center">Status</div>
        </div>

        <!-- User List -->
        <div class="w-full space-y-4">
            <!-- Customer Card for Mobile / Table Row for Desktop -->
            <?php foreach ($data['users'] as $user):?>
                <div class="w-full bg-gray-100 p-4 rounded-lg shadow-md sm:grid sm:grid-cols-6 sm:gap-4 sm:bg-transparent sm:shadow-none">
                    <div class="flex items-center space-x-2">
                        <img class="w-[40px] h-[40px] rounded-full" src="data:image/png;base64,<?php echo $user['user_profile']; ?>" />
                        <div class="text-[#515050] font-medium"><?php echo $user['username']?></div>
                    </div>

                    <div class="text-[#515050] text-center sm:text-center"><?php echo $user['role']?></div>
                    <div class="hidden sm:block text-center"><?php echo $user['contact']?></div>
                    <div class="hidden sm:block text-center"></div>
                    <div class="hidden sm:block text-center"></div>
                    <div class="text-green-500 text-center font-medium"><?php  $status = isset($user['state']) ?  $user['state'] : 'N/A'; echo $status?></div>

                    <!-- Mobile Card Details -->
                    <div class="sm:hidden mt-2 text-xs text-[#515050]">
                        <p><strong>Full Name:</strong> <?php echo $user['name']?></p>
                        <p><strong>Contact:</strong> <?php echo $user['contact']?></p>
                    </div>
                </div>
            <?php endforeach;?>

        </div>
    </div>


    <!-- Pagination -->
    <div class="w-full flex items-center justify-center space-x-4 mt-6">
        <button class="w-[60px] sm:w-[76px] h-[40px] sm:h-[46px] bg-[#4635b1] rounded-[61px] flex items-center justify-center">
            <div class="text-white text-lg sm:text-2xl font-medium font-['Poppins']">&lt;</div>
        </button>
        <div class="text-[#4c4a4a] text-lg sm:text-2xl font-medium font-['Poppins']">1</div>
        <button class="w-[60px] sm:w-[76px] h-[40px] sm:h-[46px] bg-[#4635b1] rounded-[61px] flex items-center justify-center">
            <div class="text-white text-lg sm:text-2xl font-medium font-['Poppins']">&gt;</div>
        </button>
    </div>
</div>
</div>
</div>

</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Poppins:400,600&display=swap" rel="stylesheet" />
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="<?php echo ROOT?>assets/css/home.css"> 

    <title>Document</title>
</head>
<body>
<div id="sidebar" class="sidebar fixed left-4 top-[150px] z-10 bg-white rounded-[20px] shadow-lg p-4 cursor-pointer w-[80px] transition-all duration-300 overflow-hidden"">
    <div class="flex flex-col items-start space-y-6">

        <div class="sidebar-btn flex items-center space-x-3 p-2 w-full" onclick="toggleSidebar2()">
            <i class="fas fa-bars text-2xl text-gray-600"></i>
            <span class="sidebar-text text-gray-700 font-medium hidden"></span>
        </div>


        <a class="sidebar-btn flex items-center space-x-3 p-2 w-full" href="<?php echo ROOT?>dashboard">
            <i class="fas fa-tachometer-alt text-2xl text-gray-600"></i>
            <span class="sidebar-text text-gray-700 font-medium hidden">Dashboard</span>
        </a>
        <a class="sidebar-btn flex items-center space-x-3 p-2 w-full" href="<?php echo ROOT?>customer">
            <i class="fas fa-users text-2xl text-gray-600"></i>
            <span class="sidebar-text text-gray-700 font-medium hidden" >Customers</span>
        </a>
        <a class="sidebar-btn flex items-center space-x-3 p-2 w-full" href="<?php echo ROOT?>users">
            <i class="fas fa-user text-2xl text-gray-600"></i>
            <span class="sidebar-text text-gray-700 font-medium hidden">Users</span>
        </a>
        <a class="sidebar-btn flex items-center space-x-3 p-2 w-full" href="<?php echo ROOT?>AdminProfile">
            <i class="fas fa-user-circle text-2xl text-gray-600"></i>
            <span class="sidebar-text text-gray-700 font-medium hidden">Profile</span>
        </a>
        <a class="sidebar-btn flex items-center space-x-3 p-2 w-full" href="<?php echo ROOT?>notifications">
            <i class="fas fa-bell text-2xl text-gray-600"></i>
            <span class="sidebar-text text-gray-700 font-medium hidden">Notifications</span>
        </a>
        <!-- Logout Button -->
        <a class="sidebar-btn flex items-center space-x-3 p-2 w-full" href="javascript:void(0);" onclick="openLogoutModal()">
            <i class="fas fa-sign-out text-2xl text-gray-600"></i>
            <span class="sidebar-text text-gray-700 font-medium hidden">Logout</span>
        </a>
    </div>
</div>
</body>
</html>
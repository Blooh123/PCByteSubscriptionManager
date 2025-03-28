<?php

global $imageLogo2Source, $imageLogoSource, $imageDataCalendarSource, $imageProfile1Source;
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
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
<div class="relative flex flex-col md:flex-row items-center md:justify-between px-4 sm:px-6 py-4">

    <!-- Logo and Title -->
    <div class="flex items-center space-x-4 w-full md:w-auto justify-center md:justify-start">
        <img class="w-[60px] sm:w-[80px] md:w-[95px]" src="<?php echo $imageLogoSource ?>" alt="Logo"/>
        <div class="text-center md:text-left">
            <div class="text-xl sm:text-2xl md:text-3xl font-medium font-['Poppins']">
                <span class="text-[#e59c24]">PC</span>
                <span class="text-[#515050]"> </span>
                <span class="text-[#2471e5]">BYTE</span>
            </div>
            <div class="text-lg sm:text-xl md:text-2xl text-[#515050] font-medium font-['Poppins']">
                Subscription Manager
            </div>
        </div>
    </div>

    <!-- Mobile Menu Toggle -->
    <button class="absolute top-4 right-6 md:hidden text-gray-700 text-2xl" onclick="toggleSidebar()">
        <i class="fas fa-bars"></i>
    </button>

    <!-- Date Section -->
    <div class="flex w-full md:w-auto flex-col md:flex-row items-center justify-center md:justify-end px-4 sm:px-6 py-4">
        <div class="flex items-center space-x-2">
            <img class="w-[50px] h-[50px] sm:w-[74px] sm:h-[74px]" src="<?php echo $imageDataCalendarSource?>" />
            <button class="w-32 sm:w-52 h-[50px] sm:h-[69px] bg-[#4635b1] rounded-[61px] border border-black flex items-center justify-center">
                <div class="text-white text-lg sm:text-[25px] font-bold font-['Poppins']">07 FEB 2025</div>
            </button>
        </div>
    </div>

</div>
</body>
</html>

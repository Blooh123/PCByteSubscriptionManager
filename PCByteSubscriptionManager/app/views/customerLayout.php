<?php
global $imageLogo2Source, $imageLogoSource, $imageDataCalendarSource, $imageProfile1Source, $imageProfile2Source;

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
<div class="w-full bg-white rounded-lg shadow-md p-4 overflow-x-auto">
    <!-- Table Header (Only for larger screens) -->
    <div class="hidden sm:grid grid-cols-6 gap-4 text-[#292929] text-sm font-medium font-['Poppins'] mb-4">
        <div class="text-center">Name</div>
        <div class="text-center">Address</div>
        <div class="text-center">Contact</div>
        <div class="text-center">Date Start</div>
        <div class="text-center">Due Date</div>
        <div class="text-center">Status</div>
    </div>

    <!-- Customer List -->
    <div class="w-full space-y-4">
        <!-- Customer Card for Mobile / Table Row for Desktop -->
        <a href="<?php echo ROOT ?>customerDetails" class="w-full block bg-gray-100 p-4 rounded-lg shadow-md sm:grid sm:grid-cols-6 sm:gap-4 sm:bg-transparent sm:shadow-none">
            <div class="flex items-center space-x-2">
                <img class="w-[40px] h-[40px] rounded-full" src="<?php echo $imageProfile1Source ?>" />
                <div class="text-[#515050] font-medium">Dodong Meow</div>
            </div>

            <div class="text-[#515050] text-center hidden sm:block">Tagum City</div>
            <div class="hidden sm:block text-center">09847362642</div>
            <div class="hidden sm:block text-center">Jan 1, 2025</div>
            <div class="hidden sm:block text-center">Feb 1, 2025</div>
            <div class="text-red-500 text-center font-medium">Disconnected</div>

            <!-- Mobile Card Details -->
            <div class="sm:hidden mt-3 bg-white p-3 rounded-lg shadow-md border border-gray-200">
                <p class="text-[#515050] text-sm"><strong>Address:</strong> Tagum City</p>
                <p class="text-[#515050] text-sm"><strong>Contact:</strong> 09847362642</p>
                <p class="text-[#515050] text-sm"><strong>Start Date:</strong> Jan 1, 2025</p>
                <p class="text-[#515050] text-sm"><strong>Due Date:</strong> Feb 1, 2025</p>
            </div>
        </a>

        <!-- Another Customer -->
        <a class="w-full block bg-gray-100 p-4 rounded-lg shadow-md sm:grid sm:grid-cols-6 sm:gap-4 sm:bg-transparent sm:shadow-none">
            <div class="flex items-center space-x-2">
                <img class="w-[40px] h-[40px] rounded-full" src="<?php echo $imageProfile2Source ?>" />
                <div class="text-[#515050] font-medium">Juan Dela Cruz</div>
            </div>

            <div class="text-[#515050] text-center hidden sm:block">Davao City</div>
            <div class="hidden sm:block text-center">09123456789</div>
            <div class="hidden sm:block text-center">Feb 5, 2025</div>
            <div class="hidden sm:block text-center">Mar 5, 2025</div>
            <div class="text-green-500 text-center font-medium">Connected</div>

            <!-- Mobile Card Details -->
            <div class="sm:hidden mt-3 bg-white p-3 rounded-lg shadow-md border border-gray-200">
                <p class="text-[#515050] text-sm"><strong>Address:</strong> Davao City</p>
                <p class="text-[#515050] text-sm"><strong>Contact:</strong> 09123456789</p>
                <p class="text-[#515050] text-sm"><strong>Start Date:</strong> Feb 5, 2025</p>
                <p class="text-[#515050] text-sm"><strong>Due Date:</strong> Mar 5, 2025</p>
            </div>
        </a>
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
</body>
</html>
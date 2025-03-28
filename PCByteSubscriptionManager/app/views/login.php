<?php
global $imageLogo2Source, $imageLogoSource, $imageBackSource;
require '../app/core/imageConfig.php';

?>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login || PCByte Subscription Manager</title>
    <link rel="icon" href="<?php echo $imageLogo2Source?>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Poppins:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body class="antialiased bg-[#f8f9fa] flex items-center justify-center min-h-screen relative">

    <!-- Centered Background Image -->
    <div class="absolute inset-0 flex items-center justify-center z-0">
        <img class="w-[600px] h-[600px] object-cover opacity-100" src="<?php echo $imageBackSource?>" alt="Background Image">
        <div class="eclipse eclipse3"></div>
        <div class="eclipse eclipse3side"></div>
        <div class="eclipse eclipseTopMiddlePurp"></div>
    </div>

    <!-- PC BYTE Logo and Text (Top Left) -->
    <div class="absolute top-6 left-6 flex items-center space-x-3">
        <img class="w-20 h-20" src="<?php echo $imageLogoSource?>" alt="Logo">
        <div>
            <h1 class="text-3xl font-bold text-[#e59c24]">PC <span class="text-[#2471e5]">BYTE</span></h1>
            <p class="text-lg text-gray-700">Subscription Manager</p>
        </div>
    </div>

    <!-- Login Form -->
    <div class="relative z-10 flex flex-col items-center">
        <div class="bg-white bg-opacity-70 shadow-lg p-10 h-[350px] rounded-xl max-w-sm w-full">

            <!-- Error Message (Pop-Up) -->
            <?php if (isset($_SESSION['error'])): ?>
                <div id="error-message" class="fixed top-10 left-1/2 transform -translate-x-1/2 bg-red-500 text-white text-sm p-3 rounded-lg shadow-lg text-center transition-opacity duration-500 opacity-100">
                    <?php echo $_SESSION['error']; ?>
                </div>

            <?php endif; ?>

            <script>
                // Automatically hide the error message after 3 seconds
                setTimeout(() => {
                    const errorMessage = document.getElementById('error-message');
                    if (errorMessage) {
                        errorMessage.style.opacity = '0'; // Fade out
                        setTimeout(() => {
                            errorMessage.remove(); // Remove from DOM
                        }, 500); // Wait for fade-out transition
                    }
                }, 3000);
            </script>


            <h2 class="text-2xl font-semibold text-center text-black mb-6">LOG IN</h2>
            <form method="post" action="<?php echo ROOT?>login">
                <div class="mb-4">
                    <input type="text" name="username" class="w-full px-10 py-2 border-2 border-gray-900 rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Username">
                </div>
                <div class="mb-6">
                    <input type="password" name="password" class="w-full px-10 py-2 border-2 border-gray-900 rounded-2xl focus:outline-none focus:ring-2 focus:ring-blue-400" placeholder="Password">
                </div>
                <button class="w-full py-3 bg-[#4635b1] text-white text-xl font-semibold rounded-2xl hover:bg-[#b238cc] transition">LOG IN</button>
            </form>
        </div>
    </div>
</body>
</html>

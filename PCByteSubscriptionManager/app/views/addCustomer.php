<?php
global $imageLogo2Source, $imageLogoSource, $imageDataCalendarSource, $imageProfile1Source, $imageProfile2Source;
require '../app/core/imageConfig.php';

$currentDate = date("Y-m-d");

if (!isset($_SESSION['username'])) {
    $uri = str_replace('/add_customer', '/login', $_SERVER['REQUEST_URI']);
    header('Location: ' . $uri);
    exit;
}

$backPage = '';
if ($_SESSION['role'] === 'Admin') {
    $backPage = 'customer';
}else{
    $backPage = 'customers';
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin || Add Customer</title>
    <link rel="icon" href="<?php echo $imageLogo2Source ?>">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Styles -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="<?php echo ROOT?>assets/css/home.css">
</head>

<body class="bg-gray-600 flex justify-center items-center h-screen">
<div class="bg-white shadow-lg rounded-lg p-6 w-full max-w-lg">
    <h2 class="text-xl font-semibold text-gray-700 mb-4">
        <i class="fas fa-user-plus text-blue-500"></i> Add New Subscriber
    </h2>

    <?php if (!empty($data['error'])): ?>
        <div class="bg-red-100 text-red-700 p-2 rounded mb-3">
            <i class="fas fa-exclamation-circle"></i> <?= $data['error'] ?>
        </div>
    <?php endif; ?>

    <?php if (!empty($data['success'])): ?>
        <div class="bg-green-100 text-green-700 p-2 rounded mb-3">
            <i class="fas fa-check-circle"></i> <?= $data['success'] ?>
        </div>
    <?php endif; ?>


    <form method="POST" action="">
        <!-- Full Name -->
        <div class="mb-4">
            <label class="block text-gray-600 font-medium">Full Name</label>
            <input type="text" name="full_name" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Enter full name">
        </div>


        <!-- Phone -->
        <div class="mb-4">
            <label class="block text-gray-600 font-medium">Phone</label>
            <input type="text" name="phone" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Enter phone number">
        </div>

        <!-- Monthly required payment -->
        <div class="mb-4">
            <label class="block text-gray-600 font-medium">Monthly Payment Amount</label>
            <input type="number" name="monthly_payment_amount" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Enter Monthly Payment Amount">
        </div>

        <!-- Forwarded Balance -->
        <div class="mb-4">
            <label class="block text-gray-600 font-medium">Forwarded Balance Amount</label>
            <input type="number" name="forwarded_balance" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Enter forwarded balance">
        </div>
        <!-- Date for Forwarded Balance -->
        <div class="mb-4">
            <label class="block text-gray-600 font-medium">Forwarded Balance Date</label>
            <input type="date" name="forwarded_balance_date" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-300" value="<?= $currentDate ?>">
        </div>

        <!-- Address -->
        <div class="mb-4">
            <label class="block text-gray-600 font-medium">Address</label>
            <textarea name="address" rows="3" class="w-full px-4 py-2 border rounded focus:outline-none focus:ring-2 focus:ring-blue-300" placeholder="Enter address"></textarea>
        </div>

        <!-- Buttons -->
        <div class="flex justify-between">
            <!-- Back Button -->
            <a href="<?php echo ROOT.$backPage?>" class="px-4 py-2 bg-gray-300 text-gray-700 rounded hover:bg-gray-400 transition">
                <i class="fas fa-arrow-left"></i> Back
            </a>

            <!-- Submit Button -->
            <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 transition">
                <i class="fas fa-save"></i> Save Subscriber
            </button>
        </div>
    </form>
</div>
</body>
</html>

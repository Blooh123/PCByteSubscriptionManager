<?php
global $imageLogo2Source, $imageLogoSource, $imageProfile1Source;
require '../app/core/imageConfig.php';

if (!isset($_SESSION['username'])){
    $uri = str_replace('/customerDetails', '/login', $_SERVER['REQUEST_URI']);
    header('Location: ' . $uri);
}

$backPage = '';
if ($_SESSION['role'] === 'Admin') {
    $backPage = 'customer';
}else{
    $backPage = 'customers';
}

// Sample customer data
$customer = [
    'name' => 'Dodong Meow',
    'address' => 'Tagum City',
    'contact' => '09847362642',
    'start_subscription' => 'Jan 1, 2025',
    'due_date' => 'Feb 1, 2025',
    'last_payment' => 'Jan 1, 2025',
    'status' => 'Disconnected',
    'payment_status' => 'Overdue',
    'overdue_days' => 5,
];

// Sample payment history
$recent_payments = [
    ["date" => "Jan 1, 2025", "amount" => "₱1,600", "status" => "Paid"],
    ["date" => "Dec 1, 2024", "amount" => "₱1,600", "status" => "Paid"],
    ["date" => "Nov 1, 2024", "amount" => "₱2,600", "status" => "Paid"],
    ["date" => "Sep 1, 2024", "amount" => "₱600", "status" => "Not fully Paid"],
];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer Details || Subscription Manager</title>
    <link rel="icon" href="<?php echo $imageLogo2Source ?>">

    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <link rel="stylesheet" href="<?php echo ROOT ?>assets/css/home.css">
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen p-4">

<div class="bg-white shadow-xl rounded-lg p-8 w-full max-w-md relative">

    <!-- Back Button -->
    <a href="<?php echo ROOT.$backPage?>" class="absolute top-4 left-4 bg-gray-200 hover:bg-gray-300 text-gray-700 px-3 py-1 rounded-full flex items-center text-sm shadow-md transition">
        <i class="fas fa-arrow-left mr-2"></i> Back
    </a>

    <!-- Profile Picture -->
    <div class="flex flex-col items-center mb-6">
        <img src="<?php echo $imageProfile1Source; ?>" alt="Profile Picture"
             class="w-28 h-28 rounded-full border-4 border-gray-300 shadow-lg">
        <h2 class="text-2xl font-semibold text-gray-800 mt-3"><?php echo $customer['name']; ?></h2>
    </div>

    <!-- Customer Information -->
    <div class="mt-4 space-y-4 text-gray-700">
        <div class="flex justify-between border-b pb-2">
            <span class="font-semibold">Address:</span> <span><?php echo $customer['address']; ?></span>
        </div>
        <div class="flex justify-between border-b pb-2">
            <span class="font-semibold">Contact:</span> <span><?php echo $customer['contact']; ?></span>
        </div>
        <div class="flex justify-between border-b pb-2">
            <span class="font-semibold">Start Subscription:</span> <span><?php echo $customer['start_subscription']; ?></span>
        </div>
        <div class="flex justify-between border-b pb-2">
            <span class="font-semibold">Due Date:</span> <span><?php echo $customer['due_date']; ?></span>
        </div>
        <div class="flex justify-between border-b pb-2">
            <span class="font-semibold">Last Payment:</span> <span><?php echo $customer['last_payment']; ?></span>
        </div>

        <!-- Payment Status -->
        <div class="flex justify-between border-b pb-2">
            <span class="font-semibold">Payment Status:</span>
            <span class="<?php echo ($customer['payment_status'] === 'Paid on Time') ? 'text-green-600 font-bold' : 'text-red-600 font-bold'; ?>">
                <?php echo ($customer['payment_status'] === 'Paid on Time') ? '✅ Paid on Time' : '❌ Overdue (' . $customer['overdue_days'] . ' days)'; ?>
            </span>
        </div>

        <!-- Connection Status -->
        <div class="flex justify-between">
            <span class="font-semibold">Status:</span>
            <span class="<?php echo ($customer['status'] === 'Connected') ? 'text-green-600 font-bold' : 'text-red-600 font-bold'; ?>">
                <?php echo ($customer['status'] === 'Connected') ? '🟢 Connected' : '🔴 Disconnected'; ?>
            </span>
        </div>
    </div>

    <!-- Recent Payments Section -->
    <div class="mt-8">
        <h3 class="text-xl font-semibold text-gray-800 border-b pb-2">Recent Payments</h3>
        <ul class="mt-4 space-y-3">
            <?php foreach ($recent_payments as $payment): ?>
                <a href="<?php echo ROOT?>receipts" class="flex justify-between p-3 bg-gray-50 rounded-lg shadow">
                    <span class="text-gray-700 font-medium"><?php echo $payment['date']; ?></span>
                    <span class="text-gray-900 font-semibold"><?php echo $payment['amount']; ?></span>
                    <span class="text-green-600 font-semibold"><?php echo $payment['status']; ?></span>
                </a>
            <?php endforeach; ?>
        </ul>
    </div>

</div>

</body>
</html>

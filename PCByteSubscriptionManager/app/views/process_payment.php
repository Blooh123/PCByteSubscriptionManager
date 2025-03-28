<?php

global $imageLogo2Source, $imageLogoSource, $imageDataCalendarSource, $imageProfile1Source, $imageProfile2Source, $imageProfile3Source;
require '../app/core/imageConfig.php';

if (!isset($_SESSION['username']) || !$_SESSION['role'] == 'Cashier') {
    $uri = str_replace('/processPayment', '/login', $_SERVER['REQUEST_URI']);
    header('Location: ' . $uri);
}

?>


<!doctype html>




<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Processing || Subscription Manager</title>
    <link rel="icon" href="<?php echo $imageLogo2Source ?>">

    <!-- Fonts & Icons -->
    <link href="https://fonts.bunny.net/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
        .fade-in {
            opacity: 0;
            animation: fadeIn 0.5s forwards;
        }
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

<!-- Loading Screen -->
<div id="loadingScreen" class="fixed inset-0 flex flex-col items-center justify-center bg-white z-50">
    <div class="animate-spin rounded-full h-16 w-16 border-t-4 border-blue-500"></div>
    <p class="text-gray-600 mt-4 text-lg font-semibold">Processing...</p>
</div>

<!-- Payment Processing UI -->
<div id="paymentContainer" class="hidden w-full max-w-lg p-6 bg-white rounded-lg shadow-lg fade-in">
    <h2 class="text-2xl font-bold text-gray-800 text-center mb-6">Payment Processing</h2>

    <!-- Customer Details -->
    <div class="mb-6 p-4 bg-gray-50 rounded-lg shadow-inner">
        <h3 class="text-xl font-semibold text-gray-700 mb-2">Customer Details</h3>
        <p class="text-gray-600"><strong>Name:</strong> <span id="customerName">John Doe</span></p>
        <p class="text-gray-600"><strong>Email:</strong> <span id="customerEmail">johndoe@example.com</span></p>
        <p class="text-gray-600"><strong>Contact:</strong> <span id="customerContact">+1 234 567 890</span></p>
    </div>

    <!-- Recent Payments -->
    <div class="mb-6 p-4 bg-gray-50 rounded-lg shadow-inner">
        <h3 class="text-xl font-semibold text-gray-700 mb-2">Recent Payments</h3>
        <ul class="list-disc pl-5 text-gray-600 space-y-1">
            <li>Date: 01/25/2025 - Amount: ₱600.00</li>
            <li>Date: 12/25/2024 - Amount: ₱1600.00</li>
            <li>Date: 11/25/2024 - Amount: ₱1600.00</li>
        </ul>
    </div>

    <div class="mb-6 p-4 bg-gray-50 rounded-lg shadow-inner">
        <h3 class="text-xl font-semibold text-gray-700 mb-2">To be paid</h3>
        <ul class="list-disc pl-5 text-gray-600 space-y-1">
            <li>Amount: ₱2600.00</li>
        </ul>
    </div>

    <!-- Payment Confirmation -->
    <div class="mb-6">
        <h3 class="text-xl font-semibold text-gray-700 mb-2">💰 Payment Confirmation</h3>

        <!-- Payment Method Selection -->
        <label for="paymentMethod" class="text-gray-600 font-medium">Select Payment Method</label>
        <select id="paymentMethod" class="bg-gray-200 rounded-lg py-2 px-4 text-gray-700 w-full mb-4 text-lg font-medium focus:ring focus:ring-blue-300">
            <option value="gcash">📱 GCash</option>
            <option value="cash">💵 Cash</option>
        </select>

        <!-- Payment Amount -->
        <input type="number" id="paymentAmount" class="bg-gray-200 rounded-lg py-2 px-4 text-gray-700 w-full mb-4 text-center text-lg font-medium focus:ring focus:ring-blue-300" placeholder="Enter Payment Amount" value="1600">
    </div>

    <!-- Action Buttons -->
    <div class="flex space-x-4">
        <button onclick="confirmPayment()" class="bg-blue-500 hover:bg-blue-600 text-white rounded-lg py-3 w-1/2 font-semibold transition duration-300">
            <i class="fas fa-check-circle mr-2"></i> Confirm Payment
        </button>
        <button onclick="cancelPayment()" class="bg-red-500 hover:bg-red-600 text-white rounded-lg py-3 w-1/2 font-semibold transition duration-300">
            <i class="fas fa-times-circle mr-2"></i> Cancel
        </button>
    </div>

</div>

<!-- Success Modal -->
<div id="successModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <form action="<?php echo ROOT?>cashier">
        <div class="bg-white rounded-lg shadow-lg p-6 text-center max-w-sm">
            <h3 class="text-xl font-semibold text-green-600 mb-4">Payment Successful!</h3>
            <p class="text-gray-600">Payment has been processed successfully.</p>
            <button onclick="closeModal()" class="mt-4 bg-green-500 hover:bg-green-600 text-white rounded-lg py-2 px-4 transition duration-300">
                OK
            </button>
        </div>
    </form>

</div>

<!-- Cancel Modal -->
<div id="cancelModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
    <form action="<?php echo ROOT?>cashier">
        <div class="bg-white rounded-lg shadow-lg p-6 text-center max-w-sm">
            <h3 class="text-xl font-semibold text-red-600 mb-4">Transaction Canceled</h3>
            <p class="text-gray-600">The payment process has been canceled.</p>
            <button onclick="closeCancelModal()" type="submit" class="mt-4 bg-gray-500 hover:bg-gray-600 text-white rounded-lg py-2 px-4 transition duration-300">
                OK
            </button>
        </div>
    </form>

</div>

<script>
    // Loading Screen Logic
    window.onload = function() {
        setTimeout(function() {
            document.getElementById('loadingScreen').classList.add('hidden');
            document.getElementById('paymentContainer').classList.remove('hidden');
        }, 3000); // 3-second delay
    };

    // Confirm Payment
    function confirmPayment() {
        let amount = document.getElementById('paymentAmount').value;
        if (amount === "" || amount <= 0) {
            alert("Please enter a valid payment amount.");
        } else {
            document.getElementById('successModal').classList.remove('hidden');
        }
    }

    // Cancel Payment
    function cancelPayment() {
        document.getElementById('cancelModal').classList.remove('hidden');
    }

    // Close Success Modal
    function closeModal() {
        document.getElementById('successModal').classList.add('hidden');
        document.getElementById('paymentAmount').value = "";
    }

    // Close Cancel Modal
    function closeCancelModal() {
        document.getElementById('cancelModal').classList.add('hidden');
        document.getElementById('paymentAmount').value = "";
    }
</script>

</body>
</html>

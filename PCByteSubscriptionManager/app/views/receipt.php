<?php
global $imageLogo2Source, $imageLogoSource;
require '../app/core/imageConfig.php';

if (!isset($_SESSION['username'])) {
    $uri = str_replace('/receipts', '/login', $_SERVER['REQUEST_URI']);
    header('Location: ' . $uri);
}

// Sample customer data
$customer = [
    'name' => 'Dodong Meow',
    'address' => 'Tagum City',
    'contact' => '09847362642',
    'last_payment' => 'Jan 1, 2025',
];

// Sample payment details
$payment = [
    'date' => 'Jan 1, 2025',
    'amount' => '₱1,600',
    'status' => 'Paid',
    'method' => 'Cash',
    'reference' => 'PMT123456',
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Receipt</title>
    <link rel="icon" href="<?php echo $imageLogo2Source ?>">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        @media print {
            body {
                margin: 0;
                padding: 0;
                background: white !important;
                width: 100%;
                height: 100%;
            }

            .receipt-container {
                width: 100%;
                max-width: 100%;
                padding: 2rem;
                border: none;
            }

            .print-button {
                display: none;
            }
        }

        .receipt-container {
            background: white;
            padding: 2rem;
            width: 100%;
            max-width: 8.5in; /* Standard receipt width */
            border: 2px solid black;
        }

        .header-logo {
            width: 80px;
            height: auto;
        }

        .receipt-table {
            width: 100%;
            border-collapse: collapse;
        }

        .receipt-table th, .receipt-table td {
            border: 1px solid black;
            padding: 10px;
            text-align: left;
        }

        .company-info {
            text-align: center;
            margin-bottom: 20px;
        }

        .company-info h2 {
            font-size: 24px;
            font-weight: bold;
            margin: 5px 0;
        }

        .company-info p {
            font-size: 14px;
            margin: 2px 0;
        }

    </style>
</head>
<body class="bg-gray-100 flex justify-center items-center min-h-screen p-4">

<div class="receipt-container">
    <!-- Company Header -->
    <div class="company-info">
        <img src="<?php echo $imageLogoSource ?>" alt="Company Logo" class="header-logo">
        <h2>PC BYTE COMPUTERS CORP.</h2>
        <p>Tagum City, Philippines</p>
        <p>Contact: 0984-736-2642</p>
        <hr>
    </div>

    <!-- Receipt Details -->
    <h3 class="text-lg font-bold text-center">OFFICIAL PAYMENT RECEIPT</h3>

    <table class="receipt-table mt-4">
        <tr>
            <th>Customer Name</th>
            <td><?php echo $customer['name']; ?></td>
        </tr>
        <tr>
            <th>Address</th>
            <td><?php echo $customer['address']; ?></td>
        </tr>
        <tr>
            <th>Contact</th>
            <td><?php echo $customer['contact']; ?></td>
        </tr>
    </table>

    <h3 class="text-lg font-bold mt-6">Payment Details</h3>
    <table class="receipt-table">
        <tr>
            <th>Payment Date</th>
            <td><?php echo $payment['date']; ?></td>
        </tr>
        <tr>
            <th>Discount</th>
            <td><?php echo 'N/A' ?></td>
        </tr>
        <tr>
            <th>Amount Paid</th>
            <td><strong class="text-green-600"><?php echo $payment['amount']; ?></strong></td>
        </tr>
        <tr>
            <th>Payment Status</th>
            <td><strong class="text-green-600"><?php echo $payment['status']; ?></strong></td>
        </tr>
        <tr>
            <th>Payment Method</th>
            <td><?php echo $payment['method']; ?></td>
        </tr>
        <tr>
            <th>Reference No</th>
            <td><?php echo $payment['reference']; ?></td>
        </tr>
    </table>

    <p class="text-center text-gray-700 mt-6">Thank you for your payment!</p>

    <!-- Print Button -->
    <button onclick="window.print()" class="print-button w-full mt-4 bg-blue-600 hover:bg-blue-700 text-white py-2 rounded-md font-semibold text-sm transition">
        Print Receipt
    </button>
</div>

</body>
</html>

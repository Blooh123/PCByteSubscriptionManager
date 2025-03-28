<?php
// Dummy sales data (Replace this with real data later)
$dailySales = [
    ["date" => "2025-02-07", "total_sales" => 5000, "gcash" => 3000, "cash" => 2000],
    ["date" => "2025-02-06", "total_sales" => 6000, "gcash" => 3500, "cash" => 2500],
    ["date" => "2025-02-05", "total_sales" => 4500, "gcash" => 2500, "cash" => 2000],
    ["date" => "2025-02-04", "total_sales" => 7000, "gcash" => 4000, "cash" => 3000],
    ["date" => "2025-02-03", "total_sales" => 5500, "gcash" => 2800, "cash" => 2700]
];
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin || Subscription Manager</title>

    <!-- Fonts & Icons -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<div class="container mx-auto p-6">
    <h2 class="text-2xl font-semibold text-gray-700 mb-4">📊 Daily Sales Report</h2>

    <div class="bg-white rounded-lg shadow-lg p-6 overflow-x-auto">
        <table class="w-full border border-gray-200 rounded-lg">
            <thead class="bg-gray-100">
            <tr class="text-left text-gray-700">
                <th class="p-3 border-b">Date</th>
                <th class="p-3 border-b">Sales Amount (₱)</th>
                <th class="p-3 border-b">Gcash (₱)</th>
                <th class="p-3 border-b">Cash (₱)</th>
                <th class="p-3 border-b">Total Sales</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($dailySales as $sale): ?>
                <tr class="border-b hover:bg-gray-50">
                    <td class="p-3"><?php echo $sale['date']; ?></td>
                    <td class="p-3 font-semibold text-blue-600">₱<?php echo number_format($sale['total_sales'], 2); ?></td>
                    <td class="p-3 text-green-500">₱<?php echo number_format($sale['gcash'], 2); ?></td>
                    <td class="p-3 text-yellow-500">₱<?php echo number_format($sale['cash'], 2); ?></td>
                    <td class="p-3 font-bold text-gray-800">₱<?php echo number_format($sale['gcash'] + $sale['cash'], 2); ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</body>
</html>

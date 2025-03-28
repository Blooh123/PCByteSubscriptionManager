<?php
global $imageLogo2Source, $imageLogoSource, $imageDataCalendarSource, $imageProfile2Source, $imageProfile1Source, $imageProfile3Source;
require '../app/core/imageConfig.php';


// Generate daily income data (example values)
$dailyIncome = [1200, 1350, 1100, 1800, 1500, 1650, 1700, 1900, 2000, 1250, 1400, 1550, 1600, 1750, 1800, 1950, 2050, 2150, 2200, 1900, 1850, 1750, 1700, 1650, 1600, 1550, 1500, 1450, 1400, 1350];
$days = range(1, count($dailyIncome)); // 1 to 30 (days of the month)
$maxIncome = max($dailyIncome);
$incomeStep = ceil($maxIncome / 2);

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
<body class="bg-[#f8f9fa]">

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

    <!-- Main Content -->
    <div class="main-content ml-0 md:ml-[160px] p-4 sm:p-6">

        <!-- Payment Due Update -->
        <div class="mb-8">
            <div class="text-[#515050] text-xl sm:text-[25px] font-medium font-['Poppins'] mb-4">Payment Due Update</div>
            <div class="bg-white rounded-[10px] shadow-lg p-4 sm:p-6">
                <div class="text-[#515050] text-sm sm:text-[15px] font-medium font-['Poppins'] mb-4">4 customers</div>
                <div class="space-y-4">

                    <?php
                    // Sample Customers Data
                    $customers = [
                        ["name" => "John Doe", "amount" => "₱ 1,600", "due" => "Due Today!", "image" => $imageProfile2Source],
                        ["name" => "Jamie Murphy", "amount" => "₱ 1,600", "due" => "Due Tomorrow", "image" => $imageProfile1Source],
                        ["name" => "Mark Adams", "amount" => "₱ 1,600", "due" => "Due Tomorrow", "image" => $imageProfile3Source],
                    ];
                    // Sample Customers Data
                    $customers2 = [
                        ["name" => "John Doe", "amount" => "₱ 1,600", "due" => "Due Today!", "image" => $imageProfile2Source],
                        ["name" => "Jamie Murphy", "amount" => "₱ 1,600", "due" => "Due Tomorrow", "image" => $imageProfile1Source],
                        ["name" => "Mark Adams", "amount" => "₱ 1,600", "due" => "Due Tomorrow", "image" => $imageProfile3Source],
                        ["name" => "Dill Doe", "amount" => "₱ 1,600", "due" => "Due Today!", "image" => $imageProfile2Source],
                    ];

                    foreach ($customers as $customer): ?>
                        <div class="grid grid-cols-1 sm:grid-cols-4 items-center text-center sm:text-left gap-x-2">
                            <div class="flex items-center gap-x-2 sm:gap-x-3 justify-center sm:justify-start">
                                <img class="w-[50px] h-[50px] sm:w-[69px] sm:h-[69px] rounded-full" src="<?php echo $customer['image']; ?>" />
                                <div class="text-black text-lg sm:text-xl font-medium font-['Poppins']"><?php echo $customer['name']; ?></div>
                            </div>
                            <div class="text-black text-lg sm:text-xl font-medium font-['Poppins']"><?php echo $customer['amount']; ?></div>
                            <div class="text-black text-lg sm:text-xl font-medium font-['Poppins']"><?php echo $customer['due']; ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <button data-modal-target="paymentModal" class="w-full sm:w-[230px] h-[40px] sm:h-[46px] bg-[#4635b1] rounded-[61px] mt-6 flex items-center justify-center">
                    <div class="text-white text-sm font-bold font-['Poppins']">View more</div>
                </button>

            </div>
        </div>

        <!-- Modal (Fixed & Full-Screen) -->
        <div id="paymentModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center z-50">
            <div class="bg-white p-6 rounded-lg shadow-lg w-[90%] max-w-lg">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">All Payment Due Customers</h2>

                <div class="space-y-4 max-h-[400px] overflow-y-auto">
                    <?php foreach ($customers2 as $customer): ?>
                        <div class="flex items-center gap-4 border-b pb-2">
                            <img class="w-[50px] h-[50px] rounded-full" src="<?php echo $customer['image']; ?>" />
                            <div class="text-lg font-medium text-black"><?php echo $customer['name']; ?></div>
                            <div class="ml-auto text-red-500"><?php echo $customer['due']; ?></div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Close Button -->
                <button data-modal-close="paymentModal" class="w-full bg-red-500 text-white py-2 rounded mt-4 hover:bg-red-600">
                    Close
                </button>

            </div>
        </div>


        <?php
        // Sample Customers Data with Due Dates
        $customers = [
            ["name" => "John Mulit", "amount" => "₱ 1,600", "due" => "2025-02-03", "image" => $imageProfile2Source],
            ["name" => "Mulet Check", "amount" => "₱ 1,600", "due" => "2025-01-25", "image" => $imageProfile1Source],
            ["name" => "Arthur Nerri", "amount" => "₱ 1,600", "due" => "2025-02-01", "image" => $imageProfile3Source],
        ];

        // Get current date
        $today = new DateTime();
        $overdueCustomers = [];

        // Filter overdue customers
        foreach ($customers as $customer) {
            $dueDate = new DateTime($customer['due']);
            if ($dueDate < $today) {
                $daysOverdue = $dueDate->diff($today)->days;
                $customer['days_overdue'] = $daysOverdue;
                $overdueCustomers[] = $customer;
            }
        }
        ?>

        <!-- Overdue Customers Overview -->
        <div class="mb-8">
            <div class="text-[#515050] text-xl sm:text-[25px] font-medium font-['Poppins'] mb-4">Overdue Customers</div>
            <div class="bg-white rounded-[10px] shadow-lg p-4 sm:p-6">
                <div class="text-[#515050] text-sm sm:text-[15px] font-medium font-['Poppins'] mb-4">
                    <?= count($overdueCustomers) ?> Overdue Customers
                </div>

                <div class="space-y-4">
                    <?php foreach ($overdueCustomers as $customer): ?>
                        <div class="grid grid-cols-1 sm:grid-cols-4 items-center text-center sm:text-left gap-x-2">
                            <div class="flex items-center gap-x-2 sm:gap-x-3 justify-center sm:justify-start">
                                <img class="w-[50px] h-[50px] sm:w-[69px] sm:h-[69px] rounded-full" src="<?php echo $customer['image']; ?>" />
                                <div class="text-black text-lg sm:text-xl font-medium font-['Poppins']"><?php echo $customer['name']; ?></div>
                            </div>
                            <div class="text-red-500 text-lg sm:text-xl font-medium font-['Poppins']"><?php echo $customer['amount']; ?></div>
                            <div class="text-red-500 text-lg sm:text-xl font-medium font-['Poppins']">
                                <?= $customer['days_overdue'] ?> days overdue
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <button data-modal-target="overdueCustomersModal" class="w-full sm:w-[230px] h-[40px] sm:h-[46px] bg-[#b13535] rounded-[61px] mt-6 flex items-center justify-center">
                    <div class="text-white text-sm font-bold font-['Poppins']">View more</div>
                </button>
            </div>
        </div>

        <!-- Modal (Overdue Customers) -->
        <div id="overdueCustomersModal" class="fixed inset-0 bg-black bg-opacity-50 hidden flex items-center justify-center z-50">
            <div class="bg-white p-6 rounded-lg shadow-lg w-[90%] max-w-lg">
                <h2 class="text-xl font-semibold text-gray-700 mb-4">Overdue Customers</h2>
                <div class="space-y-4 max-h-[400px] overflow-y-auto">
                    <?php foreach ($overdueCustomers as $customer): ?>
                        <div class="flex items-center gap-4 border-b pb-2">
                            <img class="w-[50px] h-[50px] rounded-full" src="<?php echo $customer['image']; ?>" />
                            <div class="text-lg font-medium text-black"><?php echo $customer['name']; ?></div>
                            <div class="ml-auto text-red-500"><?= $customer['days_overdue'] ?> days overdue</div>
                        </div>
                    <?php endforeach; ?>
                </div>

                <!-- Close Button -->
                <button data-modal-close="overdueCustomersModal" class="w-full bg-red-500 text-white py-2 rounded mt-4 hover:bg-red-600">
                    Close
                </button>
            </div>
        </div>


        <!-- JavaScript for Modal -->
        <script src="<?php echo ROOT?>assets/js/modal.js"></script>




        <div class="grid grid-cols-1 lg:grid-cols-1 gap-8">
            <h2 class="text-[#515050] text-lg sm:text-xl font-semibold font-['Poppins'] mb-4">
                Daily Income Report
            </h2>
            <div class="bg-white rounded-lg shadow-lg p-6 overflow-x-auto">
                <div class="flex items-end space-x-2">
                    <!-- Scale -->
                    <div class="flex flex-col justify-between h-[200px] pr-3 text-[#515050] text-xs sm:text-sm">
                        <?php for ($i = $maxIncome; $i >= 0; $i -= $incomeStep): ?>
                            <div><?= number_format($i, 2) ?></div>
                        <?php endfor; ?>
                    </div>

                    <!-- Bars Wrapper -->
                    <div class="flex flex-nowrap md:flex-wrap items-end border-l border-gray-300 h-[200px] w-full overflow-x-auto">
                        <?php foreach ($dailyIncome as $index => $value):
                            $barHeight = ($value / $maxIncome) * 200;
                            ?>
                            <div class="relative flex flex-col items-center group min-w-[30px] w-[2vw] md:w-6">
                                <div class="absolute -top-8 bg-gray-700 text-white text-xs px-2 py-1 rounded opacity-0 group-hover:opacity-100 transition-opacity">
                                    ₱<?= number_format($value, 2) ?>
                                </div>
                                <div class="w-6 bg-orange-400 rounded group-hover:bg-orange-500 transition-all duration-300"
                                     style="height: <?= $barHeight ?>px !important;"></div>
                                <div class="text-[#515050] text-xs mt-1"><?= $days[$index] ?></div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- Styled Summary -->
                <?php
                $totalIncome = array_sum($dailyIncome);
                $highestIncome = max($dailyIncome);
                $lowestIncome = min($dailyIncome);
                $averageIncome = round($totalIncome / count($dailyIncome), 2);
                $highestIncomeDay = array_search($highestIncome, $dailyIncome) + 1;
                $lowestIncomeDay = array_search($lowestIncome, $dailyIncome) + 1;
                ?>

                <div class="mt-6 bg-gray-100 p-4 rounded-lg shadow-md">
                    <a class="text-lg font-semibold text-[#515050] mb-3" href="<?php echo ROOT?>dailySales">📊 Summary</a>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-[#515050]">
                        <div class="p-3 bg-[#f0f4ff] rounded-md shadow">
                            <strong class="text-[#5a67d8]">Total:</strong> ₱<?= number_format($totalIncome, 2) ?>
                        </div>
                        <div class="p-3 bg-[#fef3c7] rounded-md shadow">
                            <strong class="text-[#d97706]">Highest:</strong> Day <?= $highestIncomeDay ?> (₱<?= number_format($highestIncome, 2) ?>)
                        </div>
                        <div class="p-3 bg-[#fce7f3] rounded-md shadow">
                            <strong class="text-[#db2777]">Lowest:</strong> Day <?= $lowestIncomeDay ?> (₱<?= number_format($lowestIncome, 2) ?>)
                        </div>
                        <div class="p-3 bg-[#dcfce7] rounded-md shadow">
                            <strong class="text-[#16a34a]">Average:</strong> ₱<?= number_format($averageIncome, 2) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

<script src="<?php echo ROOT?>assets/js/home.js"></script>

</body>
</html>


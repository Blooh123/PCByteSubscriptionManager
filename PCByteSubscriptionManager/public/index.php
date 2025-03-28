<?php
    require '../app/core/init.php';

    $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

    $routes =[
        '/dashboard' => '../app/Controller/AdminHome.php',
        '/login' => '../app/Controller/Login.php',
        'logout' => '../app/Controller/Logout.php',
        '/customer' => '../app/Controller/Customer.php',
        '/users' => '../app/Controller/Users.php',
        '/notifications' => '../app/Controller/Notifications.php',
        '/cashier' => '../app/Controller/Cashier.php',
        '/customers' => '../app/Controller/CustomerCashier.php',
        '/transactions' => '../app/Controller/TransactionController.php',
        '/AdminProfile' => '../app/Controller/AdminProfile.php',
        '/cashierProfile' => '../app/Controller/CashierProfile.php',
        '/customerDetails' => '../app/Controller/CustomerDetails.php',
        '/receipts' => '../app/Controller/ReceiptController.php',
        '/add_customer' => '../app/Controller/AddCustomer.php',
        '/add_user' => '../app/Controller/AddUser.php',
        '/processPayment' => '../app/Controller/ProcessPayment.php',
        '/dailySales' => '../app/Controller/DailySales.php',

        '/PCByteSubscriptionManager/public/dashboard' => '../app/Controller/AdminHome.php',
        '/PCByteSubscriptionManager/public/login' => '../app/Controller/Login.php',
        '/PCByteSubscriptionManager/public/logout' => '../app/Controller/Logout.php',
        '/PCByteSubscriptionManager/public/customer' => '../app/Controller/Customer.php',
        '/PCByteSubscriptionManager/public/users' => '../app/Controller/Users.php',
        '/PCByteSubscriptionManager/public/notifications' => '../app/Controller/Notifications.php',
        '/PCByteSubscriptionManager/public/cashier' => '../app/Controller/Cashier.php',
        '/PCByteSubscriptionManager/public/customers' => '../app/Controller/CustomerCashier.php',
        '/PCByteSubscriptionManager/public/transactions' => '../app/Controller/TransactionController.php',
        '/PCByteSubscriptionManager/public/AdminProfile' => '../app/Controller/AdminProfile.php',
        '/PCByteSubscriptionManager/public/cashierProfile' => '../app/Controller/CashierProfile.php',
        '/PCByteSubscriptionManager/public/customerDetails' => '../app/Controller/CustomerDetails.php',
        '/PCByteSubscriptionManager/public/receipts' => '../app/Controller/ReceiptController.php',
        '/PCByteSubscriptionManager/public/add_customer' => '../app/Controller/AddCustomer.php',
        '/PCByteSubscriptionManager/public/add_user' => '../app/Controller/AddUser.php',
        '/PCByteSubscriptionManager/public/processPayment' => '../app/Controller/ProcessPayment.php',
        '/PCByteSubscriptionManager/public/dailySales' => '../app/Controller/DailySales.php',
    ];


    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    }else{
        require '../app/Controller/_404.php';
    }
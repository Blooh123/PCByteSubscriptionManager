<?php

if ($_SERVER['SERVER_NAME'] == 'localhost') {

//    defined('DBNAME') or define('DBNAME', 'attendance_system');
//    defined('DBUSER') or define('DBUSER', 'root');
//    defined('DBPASS') or define('DBPASS', '');
//    defined('DBHOST') or define('DBHOST', 'localhost');
//    defined('DBPORT') or define('DBPORT', '3306');

    defined('ROOT') or define("ROOT", 'https://localhost/PCByteSubscriptionManager/public/');

} else {
//    defined('DBNAME') or define('DBNAME', 'attendance_system');
//    defined('DBUSER') or define('DBUSER', 'root');
//    defined('DBPASS') or define('DBPASS', '');    
//    defined('DBHOST') or define('DBHOST', 'localhost');
//    defined('DBPORT') or define('DBPORT', '3306');

    defined('ROOT') or define("ROOT", 'http://192.168.110.66/PCByteSubscriptionManager/public/');
}

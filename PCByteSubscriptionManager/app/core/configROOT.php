<?php
if ($_SERVER['SERVER_NAME'] == 'localhost') {
    define("ROOT", 'https://localhost/PCByteSubscriptionManager/public/');
}else{
    define("ROOT", 'http://192.168.110.66/PCByteSubscriptionManager/public/');
}
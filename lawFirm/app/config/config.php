<?php

    

$servername = "localhost";
$dBUsername = "root";
$dBPassword = "";
$dBName = "lawFirm";
$dbPort = "";
//$dsn = "mysql:host=$servername;port=$dbPort;dbname=$dBName";

    define('DB_HOST',$servername);
    define('DB_USER',$dBUsername);
    define('DB_NAME',$dBName);
    define('DB_PASS',$dBPassword);
    define('DB_PORT',$dbPort);
    

    define("APPROOT",dirname(dirname(__FILE__)));
    define('URLROOT','http://localhost/lawFirm');
    define('SITENAME','LawFirm');
?>
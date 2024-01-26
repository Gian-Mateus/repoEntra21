<?php
use pdo\Mysql;
require_once "Autoload.php";
$load = new Autoload();
const config = [
    'host' => 'localhost',
    'dbName' => 'entra21',
    'username' => 'root',
    'password' => ''
];

session_start();
?>
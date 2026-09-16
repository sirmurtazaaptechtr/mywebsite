<?php
ob_start();
session_start();
function pr ($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
}

function prx ($data) {
    echo "<pre>";
    print_r($data);
    echo "</pre>";
    die();
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'northwind';

$conn = mysqli_connect($hostname, $username, $password, $database);
?>
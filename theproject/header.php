<?php
    function pr ($data) {
        echo "<pre>";
        print_r($data);
        echo "</pre>";
    }
    
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'northwind';

    if($conn = mysqli_connect($hostname, $username, $password, $database)) {
        echo "<p>$database connected successfully!</p>";
    }    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
</head>
<body>
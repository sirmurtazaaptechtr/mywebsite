<?php
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'northwind';

    if($conn = mysqli_connect($hostname, $username, $password, $database)) {
        echo "<p>$database connected successfully!</p>";
    }

    $sql = "SELECT * FROM `customers`";
    $result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customers</title>
</head>
<body>
    <h1>Customers</h1>
    <table>
        <thead>
            <tr>
                <th>CustomerID</th>
                <th>CustomerName</th>
                <th>ContactName</th>
                <th>Address</th>
                <th>City</th>
                <th>PostalCode</th>
                <th>Country</th>
            </tr>
        </thead>
        <tbody>
            <?php while($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td><?php echo $row['CustomerID']; ?></td>
                <td><?php echo $row['CustomerName']; ?></td>
                <td><?php echo $row['ContactName']; ?></td>
                <td><?php echo $row['Address']; ?></td>
                <td><?php echo $row['City']; ?></td>
                <td><?php echo $row['PostalCode']; ?></td>
                <td><?php echo $row['Country']; ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>
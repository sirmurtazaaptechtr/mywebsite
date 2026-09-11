<?php
    require('header.php');    
    $sql = "SELECT * FROM `customers`";
    $result = mysqli_query($conn, $sql);
?>
<main class="container">
    <h1>Customers</h1>
    <div>
        <a type="button" class="btn btn-outline-primary btn-sm" href="customer.add.php">
            + Add New Customer
        </a>
    </div>
    <table class="table table-striped table-hover">
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
</main>
    
<?php require('footer.php') ?>
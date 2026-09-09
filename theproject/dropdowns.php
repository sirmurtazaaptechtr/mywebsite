<?php 
require('header.php');

$categories_sql = "SELECT * FROM categories ORDER BY CategoryName";
$categories = mysqli_query($conn, $categories_sql);

$suppliers_sql = "SELECT * FROM suppliers ORDER BY SupplierName";
$suppliers = mysqli_query($conn, $suppliers_sql);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    pr($_POST);
}
?>
<main>
    <h1>Dropdowns</h1>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        
        <div>
            <label for="categoryId">Category</label>
            <select name="CategoryID" id="categoryId">
                <option value="0">Select Category</option>
                <?php while($category = mysqli_fetch_assoc($categories)) { ?>
                <option value="<?php echo $category['CategoryID']; ?>">
                    <?php echo $category['CategoryName']; ?>
                </option>
                <?php } ?>                
            </select>
        </div>
        
        <br>
        
        <div>
            <label for="supplierId">Supplier</label>
            <select name="SupplierID" id="supplierId">
                <option value="0">Select Supplier</option>
                <?php while($supplier = mysqli_fetch_assoc($suppliers)) { ?>
                <option value="<?php echo $supplier['SupplierID']; ?>">
                    <?php echo $supplier['SupplierName'], " | ", $supplier['ContactName']; ?>
                </option>
                <?php } ?>                
            </select>
        </div>
        
        <br>
        
        <div>
            <input type="submit" id="submitBtn" name="SubmitBtn" value="Submit">
        </div>        
    </form>
</main>
<?php require('footer.php'); ?>
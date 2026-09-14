<?php 
require('header.php');
$CustomerName = $ContactName = $Address = $City = $PostalCode = $Country = '';
$errors = [];

$cities_sql = "SELECT DISTINCT City FROM customers ORDER BY City";
$cities = mysqli_query($conn, $cities_sql);

$countries_sql = "SELECT DISTINCT Country FROM customers ORDER BY Country";
$countries = mysqli_query($conn, $countries_sql);

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['AddBtn'])) {    
    if(empty($_POST['CustomerName'])) {
        array_push($errors, "Customer name is required");
    }else {
        $CustomerName = test_input($_POST['CustomerName']);
    }
    
    if(empty($_POST['ContactName'])) {
        array_push($errors, "Customer contact name is required");
    }else {
        $ContactName = test_input($_POST['ContactName']);
    }
        
    $Address = test_input($_POST['Address']);
    $City = test_input($_POST['City']);
    $PostalCode = test_input($_POST['PostalCode']);
    $Country = test_input($_POST['Country']);

    if(empty($errors)) {
        pr($_POST);
    }
}
?>
<main class="container">
    <h1>Add New Customer</h1>
    <div>
        <a type="button" class="btn btn-sm btn-outline-secondary" href="customers.php">
            Back
        </a>
    </div>
    <h4>Enter Customer Details</h4>
    <p class="text-danger">* required field</p>
    <!-- Dismissible Bootstrap Alert for Errors -->
    <?php if (!empty($errors)) { ?>
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <h5 class="alert-heading mb-2">Please fix the following errors:</h5>
            <ul class="mb-0 ps-3">
                <?php foreach ($errors as $error) { ?>
                    <li><?php echo htmlspecialchars($error); ?></li>
                <?php } ?>
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php } ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
        <div class="row mb-3">
            <label for="customerName" class="col-sm-2 col-form-label">Customer Name <span class="text-danger">*</span></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="customerName" name="CustomerName" value="<?php echo $CustomerName; ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="contactName" class="col-sm-2 col-form-label">Contact Name <span class="text-danger">*</span></label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="contactName" name="ContactName" value="<?php echo $ContactName; ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="address" class="col-sm-2 col-form-label">Address</label>
            <div class="col-sm-10">
                <textarea class="form-control" id="address" name="Address" rows="3"><?php echo $Address; ?></textarea>
            </div>
        </div>
        <div class="row mb-3">
            <label for="city" class="col-sm-2 col-form-label">City</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="city" name="City" list="cityOptions" placeholder="Type to search or enter a new city..." autocomplete="off" value="<?php echo $City; ?>">
                <!-- Datalist containing database suggestions -->
                <datalist id="cityOptions">
                    <?php while($city = mysqli_fetch_assoc($cities)) { ?>
                    <option value="<?php echo $city['City']; ?>">
                    <?php } ?>
                </datalist>
            </div>
        </div>
        <div class="row mb-3">
            <label for="postalCode" class="col-sm-2 col-form-label">Postal Code</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="postalCode" name="PostalCode" value="<?php echo $PostalCode; ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="country" class="col-sm-2 col-form-label">Country</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="country" name="Country" list="countryOptions" placeholder="Type to search or enter a new country..." autocomplete="off" value="<?php echo $Country; ?>">
                <!-- Datalist containing database suggestions -->
                <datalist id="countryOptions">
                    <?php while($country = mysqli_fetch_assoc($countries)) { ?>
                    <option value="<?php echo $country['Country']; ?>">
                    <?php } ?>
                </datalist>
            </div>
        </div>
        <button type="submit" class="btn btn-sm btn-outline-primary" id="addBtn" name="AddBtn">+ Add Customer</button>
    </form>
</main>
<?php require('footer.php'); ?>
<?php
// Include the header file (contains database connection, HTML head, etc.)
include('header.php');

// Initialize variables to hold customer data and errors
$CustomerID = $CustomerName = $ContactName = $Address = $City = $PostalCode = $Country = '';
$errors = [];

// Fetch distinct cities from the customers table for the datalist
$cities_sql = "SELECT DISTINCT City FROM customers ORDER BY City";
$cities = mysqli_query($conn, $cities_sql);

// Fetch distinct countries from the customers table for the datalist
$countries_sql = "SELECT DISTINCT Country FROM customers ORDER BY Country";
$countries = mysqli_query($conn, $countries_sql);

// Handle GET request when editing an existing customer
if($_SERVER['REQUEST_METHOD'] == 'GET' && isset($_GET['id'])) {
    $CustomerID = $_GET['id'];

    // Retrieve customer details by ID
    $customer_sql = "SELECT * FROM customers WHERE CustomerID = '$CustomerID'";
    $customer_result = mysqli_query($conn, $customer_sql);
    $customer = mysqli_fetch_assoc($customer_result);

    if($customer) {
        // Populate variables with customer data
        $CustomerName = $customer['CustomerName'];
        $ContactName = $customer['ContactName'];
        $Address = $customer['Address'];
        $City = $customer['City'];
        $PostalCode = $customer['PostalCode'];
        $Country = $customer['Country'];
    } else {
        // Redirect if customer not found
        header("Location: customers.php");
        exit();
    }
}

// Handle POST request when form is submitted
if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['SubmitBtn'])) {
    
    // Sanitize CustomerID
    $CustomerID = test_input($_POST['CustomerID']);

    // Validate CustomerName
    if(empty($_POST['CustomerName'])) {
        array_push($errors, "Customer name is required");
    } else {
        $CustomerName = test_input($_POST['CustomerName']);
    }

    // Validate ContactName
    if(empty($_POST['ContactName'])) {
        array_push($errors, "Contact name is required");
    } else {
        $ContactName = test_input($_POST['ContactName']);
    }

    // Sanitize other fields (optional fields can be empty)
    $Address = test_input($_POST['Address']);
    $City = test_input($_POST['City']);
    $PostalCode = test_input($_POST['PostalCode']);
    $Country = test_input($_POST['Country']);

    // If no validation errors, update the customer record
    if(empty($errors)) {
        $update_sql = "UPDATE customers 
                       SET CustomerName='$CustomerName', 
                           ContactName='$ContactName', 
                           Address='$Address', 
                           City='$City', 
                           PostalCode='$PostalCode', 
                           Country='$Country' 
                       WHERE CustomerID='$CustomerID'";

        $isUpdated = mysqli_query($conn, $update_sql);

        // Redirect to customers list if update successful
        if($isUpdated) {
            header("Location:customers.php");
            exit();
        }
    }
}
?>

<!-- Main content area -->
<main id="main" class="main">

    <!-- Page title and breadcrumb navigation -->
    <div class="pagetitle">
        <h1>Edit Customers</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                <li class="breadcrumb-item"><a href="customers.php">Customers</a></li>
                <li class="breadcrumb-item active">Edit Customers</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Customer Details</h5>

                        <!-- Customer update form -->
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                            <!-- Hidden field to store CustomerID -->
                            <input type="hidden" name="CustomerID" value="<?php echo $customer['CustomerID']; ?>">

                            <!-- Customer Name input -->
                            <div class="row mb-3">
                                <label for="customerName" class="col-sm-2 col-form-label">Customer Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="customerName" name="CustomerName" value="<?php echo $CustomerName;?>">
                                </div>
                            </div>

                            <!-- Contact Name input -->
                            <div class="row mb-3">
                                <label for="contactName" class="col-sm-2 col-form-label">Contact Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="contactName" name="ContactName" value="<?php echo $ContactName;?>">
                                </div>
                            </div>

                            <!-- Address textarea -->
                            <div class="row mb-3">
                                <label for="address" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" style="height: 100px" id="address"
                                        name="Address"><?php echo $Address; ?></textarea>
                                </div>
                            </div>

                            <!-- City input with datalist suggestions -->
                            <div class="row mb-3">
                                <label for="city" class="col-sm-2 col-form-label">City</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="city" name="City" list="cityOptions"
                                        placeholder="Type to search or enter a new city..." autocomplete="off"
                                        value="<?php echo $City; ?>">
                                    <!-- Datalist containing database suggestions -->
                                    <datalist id="cityOptions">
                                        <?php while($city = mysqli_fetch_assoc($cities)) { ?>
                                        <option value="<?php echo $city['City']; ?>">
                                            <?php } ?>
                                    </datalist>
                                </div>
                            </div>

                            <!-- Postal Code input -->
                            <div class="row mb-3">
                                <label for="postalCode" class="col-sm-2 col-form-label">Postal Code</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="postalCode" name="PostalCode"
                                        value="<?php echo $PostalCode; ?>">
                                </div>
                            </div>

                            <!-- Country input with datalist suggestions -->
                            <div class="row mb-3">
                                <label for="country" class="col-sm-2 col-form-label">Country</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="country" name="Country"
                                        list="countryOptions" placeholder="Type to search or enter a new country..."
                                        autocomplete="off" value="<?php echo $Country; ?>">
                                    <!-- Datalist containing database suggestions -->
                                    <datalist id="countryOptions">
                                        <?php while($country = mysqli_fetch_assoc($countries)) { ?>
                                        <option value="<?php echo $country['Country']; ?>">
                                            <?php } ?>
                                    </datalist>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <div class="row mb-3">                                
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary" id="submitBtn" name="SubmitBtn">Update Customer</button>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->

<!-- Include footer file -->
<?php include('footer.php');?>

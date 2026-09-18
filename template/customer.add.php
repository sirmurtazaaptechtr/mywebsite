<?php
include('header.php');
$CustomerName = $ContactName = $Address = $City = $PostalCode = $Country = '';
$errors = [];

$cities_sql = "SELECT DISTINCT City FROM customers ORDER BY City";
$cities = mysqli_query($conn, $cities_sql);

$countries_sql = "SELECT DISTINCT Country FROM customers ORDER BY Country";
$countries = mysqli_query($conn, $countries_sql);

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['SubmitBtn'])) {
    if(empty($_POST['CustomerName'])) {
        array_push($errors, "Customer name is required");
    }else {
        $CustomerName = test_input($_POST['CustomerName']);
    }

    if(empty($_POST['ContactName'])) {
        array_push($errors, "Contact name is required");
    }else {
        $ContactName = test_input($_POST['ContactName']);
    }

    $Address = test_input($_POST['Address']);
    $City = test_input($_POST['City']);
    $PostalCode = test_input($_POST['PostalCode']);
    $Country = test_input($_POST['Country']);

    if(empty($errors)) {
        $insert_sql = "INSERT INTO customers (CustomerName, ContactName, Address, City, PostalCode, Country) VALUES ('$CustomerName', '$ContactName', '$Address', '$City', '$PostalCode', '$Country')";

        $isAdded = mysqli_query($conn, $insert_sql);

        if($isAdded) {
            header("Location:customers.php");
            exit();
        }
    }
}

?>
<main id="main" class="main">

    <div class="pagetitle">
        <h1>Form Elements</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item">Forms</li>
                <li class="breadcrumb-item active">Elements</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">General Form Elements</h5>

                        <!-- General Form Elements -->
                        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                            <div class="row mb-3">
                                <label for="customerName" class="col-sm-2 col-form-label">Customer Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="customerName" name="CustomerName">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="contactName" class="col-sm-2 col-form-label">Contact Name</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="contactName" name="ContactName">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="address" class="col-sm-2 col-form-label">Address</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" style="height: 100px" id="address"
                                        name="Address"></textarea>
                                </div>
                            </div>

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
                            <div class="row mb-3">
                                <label for="postalCode" class="col-sm-2 col-form-label">Postal Code</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="postalCode" name="PostalCode"
                                        value="<?php echo $PostalCode; ?>">
                                </div>
                            </div>
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

                            <div class="row mb-3">                                
                                <div class="col-sm-10">
                                    <button type="submit" class="btn btn-primary" id="submitBtn" name="SubmitBtn">Add</button>
                                </div>
                            </div>

                        </form><!-- End General Form Elements -->

                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->
<?php include('footer.php');?>
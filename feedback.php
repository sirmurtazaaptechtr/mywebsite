<?php
function clean_input ($input) {
    $input = trim($input);
    $input = stripcslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}
$first_name = $last_name = $gender = $email = $dob = $comments = '';
$errors = [];
$first_name_err = '';

if($_SERVER["REQUEST_METHOD"] == 'POST') {
    if(empty($_POST["first_name"])) {
        array_push($errors,"please enter first name");
        $first_name_err = "please enter first name";
    }elseif(preg_match("/^[a-zA-Z-' ]*$/",$_POST["first_name"])) {
        $first_name = clean_input($_POST["first_name"]);
    }else {
        array_push($errors,"Only letters and white space allowed");
        $first_name_err = "Only letters and white space allowed";
    }
    $last_name = clean_input($_POST["last_name"]);
    $gender = clean_input($_POST["gender"]);
    if(!empty($_POST["email"])) {
        $email = clean_input($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors,"Invalid email format");
        }
    }else {
        array_push($errors,"Email is required");
    } 
        
    
    $dob = clean_input($_POST["dob"]);
    $comments = clean_input($_POST["comments"]);
}

?>
<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Feedback Form</h1>
        <h2>Enter Details</h2>
        <div>
            <?php if(!empty($errors)){
                echo "<pre>";
                print_r($errors);                
                echo "</pre>";
            }?>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                <label class="form-label" for="firstName">First Name</label>
                <input class="form-control" type="text" name="first_name" id="firstName" value="<?php echo $first_name;?>">
                <span class="text-danger"><?php echo $first_name_err;?></span>
            </div>
            <div class="mb-3">
                <label class="form-label" for="lastName">Last Name</label>
                <input class="form-control" type="text" name="last_name" id="lastName" value="<?php echo $last_name;?>">
            </div>
            <div class="mb-3">
                <label class="form-label" for="gender">Select Gender</label>
                <select class="form-select" name="gender" id="gender">
                    <option value="M" <?php if($gender == "M") {echo "selected";}?>>Male</option>
                    <option value="F" <?php if($gender == "F") {echo "selected";}?>>Female</option>
                    <option value="O" <?php if($gender == "O") {echo "selected";}?>>Others</option>
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label" for="email">Email</label>
                <input class="form-control" type="email" name="email" id="email" value="<?php echo $email;?>">
            </div>
            <div class="mb-3">
                <label class="form-label" for="dob">Date of Birth</label>
                <input class="form-control" type="date" name="dob" id="dob" value="<?php echo $dob;?>">
            </div>
            <div class="mb-3">
                <label class="form-label" for="image">Image</label>
                <input class="form-control" type="file" name="image" id="image">
            </div>
            <div class="mb-3">
                <label class="form-label" for="comments">Comments</label>
                <textarea class="form-control" name="comments" id="comments"><?php echo $comments;?></textarea>
            </div>
            <div class="mb-3">
                <button class="btn btn-outline-success" type="submit">Submit</button>
            </div>
        </form>
        <?php if($_SERVER['REQUEST_METHOD'] == 'POST' && empty($errors)) {?>
        <div>
            <h2>Feedback Summary</h2>
            <ul>
                <li><strong>First Name : </strong><?php echo $first_name;?></li>
                <li><strong>Last Name : </strong><?php echo $last_name;?></li>
                <li><strong>Gender : </strong><?php echo $gender;?></li>
                <li><strong>Email : </strong><?php echo $email;?></li>
                <li><strong>Date of Birth : </strong><?php echo $dob;?></li>
                <li><strong>Comments : </strong><?php echo $comments;?></li>
            </ul>
        </div>
        <?php }?>
    </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>
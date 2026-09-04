<?php
session_start();
function clean_input ($input) {
    $input = htmlspecialchars($input);
    $input = stripcslashes($input);
    $input = trim($input);
    return $input;
}
$user_name = $password = '';
$_SESSION['is_login'] = false;

if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login_btn'])) {
    $user_name = clean_input($_POST['user_name']);
    $password = clean_input($_POST['password']);

    if($user_name == 'Admin' && $password == '123') {
        $_SESSION['is_login'] = true;
        $_SESSION['user_name'] = $user_name;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website - Login</title>
</head>
<body>
    <h1>Login to My Website</h1>
    <h2>Enter Username and Password to login</h2>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <div>
            <label for="userName">Username</label>
            <input type="text" name="user_name" id="userName" value="<?php echo $user_name;?>">
        </div>
        <br>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" value="">
        </div>
        <br>
        <div>
            <input type="submit" value="Login" name="login_btn" id="loginBtn">
        </div>
    </form>
    
    <?php if($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login_btn']) && $_SESSION['is_login']) {?>
    <div>
        <h1>Welcome <?php echo $user_name;?></h1>
    </div>
    <?php }?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website - Home</title>
</head>
<body>
    <h1>Welcome to my Website</h1>
    <h2>This is Home Page</h2>
    <?php 
    EcHo "<h3>Hello, World!</h3>"; 
    // this is a single line comment
    # this is also a single line comment
    /*
    This is a multi-line comment
    that spans multiple lines
    this is another line in the multi-line comment
    */

    $full_name = "Syed Murtaza Hussain";

    echo $full_name;
    echo "<br>";
    echo "My name is $full_name";
    echo "<br>";
    echo "<h4>$full_name</h4>";
    echo '<h4>$full_name</h4>';
    ?>

    <!-- This is an HTML comment -->

    <script>
        // This is a JavaScript comment
        /* This is a multi-line JavaScript comment
           that spans multiple lines */
    </script>
</body>
</html>
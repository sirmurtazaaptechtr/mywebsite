<?php
date_default_timezone_set("Asia/Karachi");
echo date_default_timezone_get();

// Display the Date
// date(format, timestamp)
echo "<p>" . date("d-m-Y") . "</p>";
echo "<p>Today is " . date("Y/m/d") . "</p>";
echo "<p>Today is " . date("Y.m.d") . "</p>";
echo "<p>Today is " . date("Y-m-d") . "</p>";
echo "<p>Today is " . date("l") . "</p>";
echo "<p>Today is " . date('l, F j, Y') . "</p>";

// Display the Time
echo "<p>The time is " . date("H:i:s") . "</p>";
echo "<p>The time is " . date("h:i:s a") . "</p>";
echo "<p>The time is " . date("H:i") . "</p>";
echo "<p>The time is " . date("h:i a") . "</p>";

// The PHP mktime() Function
// mktime(hour, minute, second, month, day, year)
$dt = mktime(19,30,35,7,3,1983);
echo "<p>My date of birth is " . date("l, F j, Y h:i:s a", $dt) . "</p>";

// The PHP time() Function
echo "<p>" . time() . "</p>";
echo "<p>Today is " . date('l, F j, Y',time()) . "</p>";

// The PHP strtotime() Function
// strtotime(datetime_string, basetimestamp)
$dt = strtotime("3-July-1983 7:30 pm");
echo "<p>My date of birth is " . date("l, F j, Y h:i:s a", $dt) . "</p>";

$dt = strtotime("today");
echo "<p>Today is " . date("l, F j, Y h:i:s a", $dt) . "</p>";

$dt = strtotime("tomorrow");
echo "<p>Tomorrow will be " . date("l, F j, Y h:i:s a", $dt) . "</p>";

$dt = strtotime("yesterday");
echo "<p>Yesterday was " . date("l, F j, Y h:i:s a", $dt) . "</p>";

$dt = strtotime("+3 days");
echo "<p>Three days from now the date will be " . date("l, F j, Y h:i:s a", $dt) . "</p>";

$dt = strtotime("+1 week");
echo "<p>Next week the date will be " . date("l, F j, Y h:i:s a", $dt) . "</p>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Date and Time</title>
    <style>
    footer {
        text-align: center;
        padding: 1px;
        background-color: black;
        color: white;        
    }
    </style>
</head>
<body>
  
    <footer>
        <p>Author: Hege Refsnes <span>&copy; 2011 - <?php echo date("Y")?></span> <br>
        <a href="mailto:hege@example.com">hege@example.com</a></p>
         
    </footer>
</body>
</html>
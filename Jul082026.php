<?php
function pr ($input) {
    echo "<pre>";
    print_r($input);
    echo "</pre>";
}
// PHP Superglobals
$age = 16;
$fullname = "Sara Khan";
$gender = "female";

pr($GLOBALS);

echo "<p>" . $GLOBALS["age"] . "</p>";
echo "<p>" . $GLOBALS["fullname"] . "</p>";
echo "<p>" . $GLOBALS["gender"] . "</p>";

pr($_SERVER);
<?php
function pr ($input) {
    echo "<pre>";
    print_r($input);
    echo "</pre>";
}

pr($_REQUEST);

pr($_POST);

pr($_FILES);
pr($_FILES["image"]);
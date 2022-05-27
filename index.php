<?php
error_reporting(0);
$input = $_GET["input"];
if($input != ''){
    $hashed = hash('sha256', $input);
    echo $hashed;
}
else{
    echo "Invalid request. Please use: http://localhost/?input=YOUR_TEXT_HERE";
}
?>
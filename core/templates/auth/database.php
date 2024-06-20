<?php

$server = "localhost";
$username = "root";
$password = "root";
$database = "sistema";

$connection = new mysql(
    $server,
    $username,
    $password,
    $database
)

if($connection -> connect_error) {
    echo ("Bad connection");
} else {
    echo ("Connection successfully")
}



?>
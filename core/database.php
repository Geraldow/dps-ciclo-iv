<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "cajero";
$port = "3309";

$connection = new mysqli(
    $server,
    $username,
    $password,
    $database,
    $port
);

if($connection -> connect_error) {
    echo ("Bad connection");
} else {
    echo ("Connection successfully");
}



?>
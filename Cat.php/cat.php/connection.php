<?php
//connectivity of database.
$connection = new mysqli("localhost", "Enock", "222014403", "nursery management system");

if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}
?>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "myshop";

if(isset($_GET['id']) ) {
    $id = $_GET['id'];

//create connection
$connection = new mysqli($servername, $username, $password,$database);

$sql = "DELETE FROM client WHERE id = $id";
$connection->query($sql);
}

header("location: /educativeProject/index.php");
exit;
?>
<?php
require_once 'config.php'; 

$id = $_GET['id'];

$sql = "DELETE FROM items WHERE id=$id";
mysqli_query($link, $sql);

header('Location: homepage.php');

?>

<link rel="stylesheet" href="styles.css">
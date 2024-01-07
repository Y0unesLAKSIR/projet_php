<?php
require_once 'config.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];
  $sql = "INSERT INTO items (name, description, price) 
          VALUES ('$name', '$description', $price)";
  
  mysqli_query($link, $sql);

  header('Location: homepage.php');
  exit;

}
?>

<link rel="stylesheet" href="styles.css">
<form method="post">
  <input name="name" placeholder="Product Name">
  <input name="description" placeholder="Description">
  <input name="price" placeholder="Price">
  <button>Submit</button>
</form>

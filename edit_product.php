<?php
require_once 'config.php';

$id = $_GET['id']; 

$sql = "SELECT * FROM items WHERE id=$id";
$result = mysqli_query($link, $sql);
$product = mysqli_fetch_assoc($result);

if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $name = $_POST['name'];
  $description = $_POST['description'];
  $price = $_POST['price'];

  $sql = "UPDATE items 
          SET name='$name', description='$description', price=$price
          WHERE id=$id";

  mysqli_query($link, $sql);

  header('Location: homepage.php');
  exit;

}

?>
<link rel="stylesheet" href="styles.css">
<form method="post">
  <input name="name" value="<?php echo $product['name']; ?>">
  <textarea name="description"><?php echo $product['description']; ?></textarea>
  <input name="price" value="<?php echo $product['price']; ?>">
  
  <button>Update Product</button>
</form>

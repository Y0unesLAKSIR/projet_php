

<!DOCTYPE html>
<html>
<head>
  <title>Homepage</title>
  <header>
  <nav>
    <a href="homepage.php">Home</a>
    <a href="logout.php">Logout</a>
    <a href="editor.php">Edit Product</a>
    <a href="add_product.php">Add Product</a>
  </nav>
</header>

</head>
<body>

  <h1>Items for Sale</h1>
  
  <?php foreach ($items as $item): ?>
  
    <div class="item">
  <h2><?php echo $item['name']; ?></h2>
  
  <p><?php echo $item['description']; ?></p>
  
  <p class="price">$<?php echo $item['price']; ?></p>
</div>

    
  <?php endforeach; ?>
  
</body>
</html>

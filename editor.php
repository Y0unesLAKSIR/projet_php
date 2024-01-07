<?php
require 'homepage.php';
foreach($items as $item) {

  echo "<div class='product'>";

    echo "<h2>{$item['name']}</h2>";

    echo "<div class='buttons'>";
      echo "<a class='btn edit' href='edit_product.php?id={$item['id']}'>Edit</a>";

      echo "<a class='btn delete' href='delete_product.php?id={$item['id']}'>Delete</a>"; 
    echo "</div>";

  echo "</div>";

}
?>
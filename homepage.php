<?php

require_once 'config.php';

$sql = "SELECT * FROM items";
$result = mysqli_query($link, $sql);

$items = mysqli_fetch_all($result, MYSQLI_ASSOC);

require 'homepage_view.php';
?>

<!DOCTYPE html>
<link rel="stylesheet" href="styles.css">
</html>

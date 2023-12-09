<?php
// Get product data
$sql = "SELECT * FROM products WHERE id = 1"; 
$result = $con->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    $name = $row["name"];
    $price = $row["price"]; 
    $quantity = $row["quantity"];
    $image = $row["image"];
?>
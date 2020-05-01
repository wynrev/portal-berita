<?php

include 'connection.php';

$sql = "CREATE TABLE IF NOT EXISTS user (
  id INT(255) AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255) UNIQUE NOT NULL,
  phone VARCHAR(255) UNIQUE NOT NULL,
  password VARCHAR(255) NOT NULL)";

if (mysqli_query($connection, $sql)) {
  echo "Table User created successfully";
} else {
  echo "Error creating table: " . mysqli_error($connection);
}

$sql = "CREATE TABLE IF NOT EXISTS new_category (
  id INT(255) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) UNIQUE NOT NULL)";

if (mysqli_query($connection, $sql)) {
  echo "Table New Category created successfully";
} else {
  echo "Error creating table: " . mysqli_error($connection);
}
mysqli_close($connection);

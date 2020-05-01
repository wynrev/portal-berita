<?php

include 'connection.php';

$sql = "CREATE TABLE user (
  id INT(255) AUTO_INCREMENT PRIMARY KEY,
  email VARCHAR(255) UNIQUE NOT NULL,
  phone VARCHAR(255) UNIQUE NOT NULL,
  password VARCHAR(255) NOT NULL)";

if (mysqli_query($connection, $sql)) {
  echo "Table User created successfully";
} else {
  echo "Error creating table: " . mysqli_error($connection);
}

mysqli_close($connection);

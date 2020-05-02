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

$sql = "CREATE TABLE IF NOT EXISTS news_category (
  id INT(255) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) UNIQUE NOT NULL)";

if (mysqli_query($connection, $sql)) {
	echo "Table News Category created successfully";
} else {
	echo "Error creating table: " . mysqli_error($connection);
}

$sql = "CREATE TABLE IF NOT EXISTS news (
  id INT(255) AUTO_INCREMENT PRIMARY KEY,
  id_user INT(255) ,
  category_id INT(255),
  title VARCHAR(255) UNIQUE NOT NULL,
  slug VARCHAR(255) UNIQUE NOT NULL,
  body TEXT,
  created DATETIME,
  FOREIGN KEY (id_user) REFERENCES user (id),
  FOREIGN KEY (category_id) REFERENCES news_category (id)
  )";

if (mysqli_query($connection, $sql)) {
	echo "Table News created successfully";
} else {
	echo "Error creating table: " . mysqli_error($connection);
}

$sql = "CREATE TABLE IF NOT EXISTS news_category (
  id INT(255) AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(255) UNIQUE NOT NULL)";

if (mysqli_query($connection, $sql)) {
  echo "Table New Category created successfully";
} else {
  echo "Error creating table: " . mysqli_error($connection);
}
mysqli_close($connection);

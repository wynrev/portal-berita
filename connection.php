<?php

$host = ("localhost");
$username = ("root");
$password = ("");
$database = ("infoterkni");

if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

<?php

$host = "";
$user = "";
$pass = "";
$dbname = "";

try {
	$conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
} catch (PDOException $err) {
	echo "<script> alert('Indisponível'); </script>";
}


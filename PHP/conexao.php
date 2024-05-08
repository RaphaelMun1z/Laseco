<?php

$host = "localhost";
$user = "cieli609_laseco2";
$pass = "laseco2";
$dbname = "cieli609_laseco2";

try {
	$conn = new PDO("mysql:host=$host;dbname=" . $dbname, $user, $pass);
} catch (PDOException $err) {
	echo "<script> alert('Indisponível'); </script>";
}


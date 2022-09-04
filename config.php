<?php
$config = new mysqli("127.0.0.1:3306", "root", "", "metodesaw");

if ($config->connect_errno) {
	echo "Failed to connect to MySQL: " . $mysqli->connect_error;
	exit();
}

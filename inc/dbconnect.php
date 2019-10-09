<?php
$config = require(dirname(dirname(__FILE__)) . '/config.php');

//PDO OOP approach//////////////////////////////////////////////////////////
/*
Requires a database name or will return error
PDO works with 12 different database systems, whereas MySQLi 
only works with MySQL databases
You only have to change the connection string and a few queries
see excpetions/trycatch.php for details on exceptions
*/
$servername = $config['db']['host'];
$username = $config['db']['username'];
$password = $config['db']['password'];
$database = $config['db']['database'];
$port = $config['db']['port'];

try {
	$conn = new PDO("mysql:host=$servername;port=$port;dbname=$database", $username, $password);
    // set the PDO error mode to exception
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
?> 
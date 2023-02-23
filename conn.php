<?php

try {
    $host = "localhost";
    $dbname = "webpage";
    $username = "root";
    $password = "";

    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC]);

	} catch (PDOException $e) {
		die("Could not connect to the database $dbname :" . $e->getMessage());
	}

?>
<?php
require 'config.php';

try{
	$conn = new PDO('mysql:host=mitr.dev;dbname=citygate', $config['DB_USERNAME'], $config['DB_PASSWORD']);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
	echo "ERROR:" . $e->getMessage();
}
<?php

require 'config.php';



try{
	$connection = new PDO("mysql:host=$host", $username, $password, $options);
	$sql = file_get_contents("php\init.sql");
	$connection->exec($sql);
	
} catch (PDOException $error){
    echo $sql."<br>".$error->getMessage();
}

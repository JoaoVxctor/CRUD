<?php
$index =  'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; 

$host       = "localhost";
$username   = "root";
$password   = "";
$dbname     = "crud"; // will use later
$dsn        = "mysql:host=$host;dbname=$dbname"; // will use later
$options    = array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);


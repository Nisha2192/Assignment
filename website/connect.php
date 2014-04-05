<?php

try{
$dsn= 'mysql:host=localhost;dbname=trading_card';
$username = 'root';
$password= '';

$db= new PDO($dsn, $username, $password);
}
catch(PDOException $db) {
    echo $db->getMessage();
    echo $msg = "Error!";
} 

?>
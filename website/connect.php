<!--
Design by Nisha Dhanwani

File Name: connect.php
Author's Name: Nisha Dhanwani
File Description: This php page establishes the 
connection to the database containing authenticated
users' details. 
-->

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
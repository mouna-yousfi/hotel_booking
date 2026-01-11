<?php
$servername = "localhost";
$username = "root";       
$password = "";           
$dbname = "hotel_booking"; 


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("échac de la connexion a la base de données " . $conn->connect_error);
}
?>
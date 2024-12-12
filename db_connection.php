<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "afrinova";

$conn = mysqli_connect($servername , $username , $password , $dbname, 3307 );

if (!$conn){
    die("Erreur de connection : " . mysqli_connect_error());
}
?>
<?php
$server="localhost";
$user="root";
$password="";
$dbname="crud_umc";

$conn= new mysqli($server, $user, $password, $dbname);
if ($conn->connect_error){
    echo "Conexão Falhou";
}


?>
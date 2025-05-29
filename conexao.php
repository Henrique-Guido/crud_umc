<?php
$server="localhost";
$user="";               // informações do seu db
$password="";           // informações do seu db
$dbname="crud_umc";

$conn= new mysqli($server, $user, $password, $dbname);

if ($conn->connect_error){
    echo "Erro ao conectar com banco de dados: " . $conn->connect_error;
}
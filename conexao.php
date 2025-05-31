<?php

// criar um db com o nome "crud_umc"
// criar uma tabela chamada registros e com campos relativos aos inputs de cadastro.php 

$server="localhost";
$user="root";               // informações do seu db
$password="";           // informações do seu db
$dbname="crud_umc";

$conn= new mysqli($server, $user, $password, $dbname);

if ($conn->connect_error){
    echo "Erro ao conectar com banco de dados: " . $conn->connect_error;
}
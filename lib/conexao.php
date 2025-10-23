<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "gurunator";

$mysqli = new mysqli($host, $user, $pass, $db);

if ($mysqli->connect_errno) {
    echo "Erro ao conectar com o banco de dados: " . $mysqli->connect_error;
    exit();
}
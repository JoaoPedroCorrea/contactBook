<?php

$host = "localhost";
$dbname = "agenda";
$user = "joao";
$pass = "senha123";

try {

    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

    // Active debug error mode
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    // Connection Error
    $error = $e->getMessage();
    echo "Erro: $error";
}
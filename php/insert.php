<?php

require "connect.php";

$json = file_get_contents("php://input");
$dados = json_decode($json, true);

$nome = $dados["nome"];
$telefone = $dados["telefone"];
$email = $dados["email"];

$query = "INSERT INTO usuarios (nome, telefone, email) VALUES (?, ?, ?)";
$stmt = $conn->prepare($query);
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $telefone);
$stmt->bindParam(3, $email);
$stmt->execute();

echo "Informações enviadas com sucesso!";

?>
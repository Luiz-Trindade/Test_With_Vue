<?php

require "connect.php";

$json = file_get_contents("php://input");
$dados = json_decode($json, true);

$id = $dados["id"];

$query = "DELETE FROM usuarios WHERE id = $id";
$stmt = $conn->query($query);
$stmt->execute();

echo "Informações deletadas com sucesso!";

?>
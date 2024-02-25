<?php

require "connect.php";

$query = "SELECT * FROM usuarios";
$stmt = $conn->query($query);
$stmt->execute();
$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($resultados);

?>
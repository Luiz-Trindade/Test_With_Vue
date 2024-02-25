<?php

$host = "localhost"; 
$usuario = "root"; 
$senha = ""; 
$bancoDeDados = "database_test"; 

try {
    $conn = new PDO("mysql:host=$host;dbname=$bancoDeDados", $usuario, $senha);
    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Conexão realizada com sucesso!<br>";
} catch (\PDOException $erro) {
    echo "Erro ao conectar-se ao banco de dados: " . $erro -> getMessage();
    exit;
}

$query = "CREATE TABLE IF NOT EXISTS usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nome TEXT NOT NULL,
    telefone TEXT NOT NULL,
    email TEXT NOT NULL
)";

try {
    $conn->exec($query);
    //echo "Tabela criada com sucesso";
} catch (\PDOException $erro) {
    echo "Erro ao criar a tabela: " . $erro->getMessage();
}

?>
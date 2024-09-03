<?php
require 'config/db.php';

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];

$query = $pdo->prepare("INSERT INTO categorias (nome, descricao) VALUES (:nome, :descricao)");
$quer->bindParam(':nome', $nome);
$query->bindParam(':descricao', $descricao);

if ($query->execute()){
    echo "Categoria cadastrada com sucesso!";
} else {
    echo "Erro ao cadastrar categoria";
}
?>
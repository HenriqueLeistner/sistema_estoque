<?php
require 'config/db.php';

$id = $_POST['id'];
$nome = $_POST['nome'];
$descricao = $_POST['descricao'];

$query = $pdo->prepare("UPDATE categorias SET nome = :nome, descricao = :descricao WHERE id = :id");
$query->bindParam(':id', $id);
$query->bindParam(':nome', $nome);
$query->bindParam(':descricao', $descricao);

if ($query->execute()) {
    echo "Categoria atualizada com sucesso!";
} else {
    echo "Erro ao atualizar a categoria.";
}
?>
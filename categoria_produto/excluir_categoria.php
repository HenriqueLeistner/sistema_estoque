<?php
require 'config/db.php';

$id = $_GET['id'];

$query = $pdo->prepare("DELETE FROM categorias WHERE id = :id");
$query->bindParam(':id', $id);

if ($query->execute()) {
    echo "Categoria excluída com sucesso!";
} else {
    echo "Erro ao excluir categoria.";
}
?>
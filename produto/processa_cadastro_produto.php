<?php
require 'config/db.php';

$nome = $_POST['nome'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$quantidade = $_POST['quantidade'];
$id_categoria = $_POST['id_categoria'];
$id_distribuidor = $_POST['id_distribuidor'];

$query = $pdo->prepare("INSERT INTO produtos (nome, descricao, preco, quantidade, id_categoria, id_distribuidor) 
                        VALUES (:nome, :descricao, :preco, :quantidade, :id_categoria, :id_distribuidor)");
$query->bindParam(':nome', $nome);
$query->bindParam(':descricao', $descricao);
$query->bindParam(':preco', $preco);
$query->bindParam(':quantidade', $quantidade);
$query->bindParam(':id_categoria', $id_categoria);
$query->bindParam('id_distribuidor', $id_distribuidor);

if ($query->execute()) {
    echo "Produto cadastrado com sucesso!";
} else {
    echo "Erro ao cadastrar produto.";
}
?>
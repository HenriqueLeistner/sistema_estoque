<?php
require 'config/db.php';

$tipo = $_POST['tipo'];
$id_produto = $_POST ['id_produto'];
$quantidade = $_POST ['quantidade'];
$motivo = $_POST['motivo'];

// Ver qual é o tipo de movimentação

if ($tipo == 'entrada') {
    $query = $pdo->prepare("UPDATE produtos SET quantidade = quantidade + :quantidade WHERE id = :id_produto");
} else {
    //Verificar se há qiamtodade suficiente no estoque para a saída
    $queryVerifica = $pdo->prepare("SELECT quantidade FROM produtos WHERE id = :id_produto");
    $queryVerifica =bindParam(':id_produto', $id_produto);
    $queryVerifica->execute();
    $produto = $queryVerifica->fetch(PDO::FETCH_ASSOC);

    if ($produto['quantidade'] < $quantidade) {
        die("ERRO: Quantidade insuficiente no estoque");
    }

    // Subtrai a quantidade do estoque
    $query = $pdo->prepare("UPDATE produtos SET quantidade = quantidade - :quantidade WHERE id = :id_produto");
}

$query->bindParam(':quantidade', $quantidade);
$query->bindParam(':id_produto', $id_produto);

// inserir o registro na tabela de movi

$registro->bindParam(':tipo', $tipo);
$registro->bindParam(':quantidade', $quantidade);
$registro->bindParam(':id_produto', $id_produto);
$registro->bindParam(':motivo', $motivo);

if ($query->execute() && $registro->execute()) {
    echo "Movimentação registrada com sucesso!";
} else {
    echo "Erro ao registrar movimentação.";
}
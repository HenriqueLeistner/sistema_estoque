<?php
require 'config/db.php';

$query = $pdo->query("SELECT m.id, m.tipo, m.quantidade, m.motivo, m.data_movimentacao, p.nome AS produto_nome 
                      FROM movimentacoes m 
                      JOIN produtos p ON m.id_produto = p.id 
                      ORDER BY m.data_movimentacao DESC");
$movimentacoes = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Movimentações de Estoque</title>
</head>
<body>
<h2>Movimentações de Estoque</h2>
    <a href="movimentacao_estoque.php">Registrar Nova Movimentação</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Tipo</th>
            <th>Produto</th>
            <th>Quantidade</th>
            <th>Motivo</th>
            <th>Data</th>
        </tr>
        <?php foreach ($movimentacoes as $mov): ?>
        <tr>
            <td><?php echo $mov['id']; ?></td>
            <td><?php echo $mov['tipo']; ?></td>
            <td><?php echo $mov['produto_nome']; ?></td>
            <td><?php echo $mov['quantidade']; ?></td>
            <td><?php echo $mov['motivo']; ?></td>
            <td><?php echo $mov['data_movimentacao']; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
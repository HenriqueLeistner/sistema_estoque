<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Movimentação de Estoque</title>
</head>
<body>
    <h2>Registrar Movimentação de Estoque</h2>
    <form action="processa_movimentacao.php" method="POST">
        <label for="tipo">Tipo de Movimentação:</label>
        <select name="tipo" required>
            <option value="entrada">Entrada</option>
            <option value="saida">Saída</option>
        </select>
        <br>
        <label for="id_produto">Produto:</label>
        <select name="id_produto" required>
        <?php
            require 'config/db.php';
            $query = $pdo->query("SELECT id, nome FROM produtos");
            while ($produto = $query->fetch(PDO::FETCH_ASSOC)) {
                echo "<option value='{$produto['id']}'>{$produto['nome']}</option>";
            }
            ?>
        </select>
        <br>
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" required>
        <br>
        <label for="motivo">Motivo:</label>
        <input type="text" name="motivo">
        <br>
        <button type="submit">Registrar Movimentação</button>
    </form>
</body>
</html>
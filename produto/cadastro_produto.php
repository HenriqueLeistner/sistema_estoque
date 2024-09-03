<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Produto</title>
</head>
<body>
    <h2>Cadastrar Produto</h2>
    <form action="processa_cadastro_produto.php" method="POST">
        <label for="nome">Nome do Produto:</label>
        <input type="text" name="nome" required>
        <br>
        <label for="descricao">Descrição:</label>
        <textarea name="descricao"></textarea>
        <br>
        <label for="preco">Preço:</label>
        <input type="number" step="0.01" name="preco" required>
        <br>
        <label for="quantidade">Quantidade:</label>
        <input type="number" name="quantidade" required>
        <br>
        <label for="categoria">Categoria:</label>
        <select name="id_categoria">
            <!-- Carregar opções do banco de dados -->
        </select>
        <br>
        <label for="distribuidor">Distribuidor:</label>
        <select name="id_fornecedor">
            <!-- Carregar opções do banco de dados -->
        </select>
        <br>
        <button type="submit">Cadastrar</button>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Categoria</title>
</head>
<body>
    <h2>Cadastrar Categoria</h2>
    <form action="processa_cadastro_categoria.php" method="POST">
        <label for="nome">Nome da Categoria:</label>
        <input type="text" name="nome" required>
        <br>
        <label for="descricao">Descrição:</label>
        <textarea name="descricao"></textarea>
        <br>
        <button class="submit">Cadastrar</button>
    </form>
</body>
</html>
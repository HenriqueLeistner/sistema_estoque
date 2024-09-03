<?php
require 'config/db.php';

$query = $pdo->query("SELECT * FROM categorias");
$categorias = $query->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Lista de Categorias</title>
</head>
<body>
    <h2>Lista de Categorias</h2>
    <a href="cadastro_categoria.php">Adicionar Nova Categoria</a>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Descrição</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($categorias as $categoria): ?>
        <tr>
            <td><?php echo $categoria['id']; ?></td>
            <td><?php echo $categoria['nome']; ?></td>
            <td><?php echo $categoria['descricao']; ?></td>
            <td>
                <a href="editar_categoria.php?id=<?php echo $categoria['id']; ?>">Editar</a>
                <a href="excluir_categoria.php?id=<?php echo $categoria['id']; ?>" onclick="return confirm('Tem certeza que deseja excluir esta categoria?');">Excluir</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
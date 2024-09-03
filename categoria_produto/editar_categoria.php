<?php
require 'config/db.php';

$id = $_GETa['id'];

$query = $pdo->prepare("SELECT * FROm categorias WHERE id = :id");
$query->bindParam(':id', $id);
$query->execute();
$categorias = $query->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Editar Categorias</title>
</head>
<body>
    <h2>Editar Categoria</h2>
    <form action="processa_editar_categoria.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $categoria['id']; ?>">
        <label for="nome">Nome da Categoria:</label>
        <input type="text" name="nome" value="<?php echo $categoria['nome']; ?>" required>
        <br>
        <label for="descricao">Descricao</label>
        <textarea name="descricao"><?php echo $categoria['descricao']; ?></textarea>
        <br>
        <button class="submit">Salvar Alterações</button>
    </form>
</body>
</html>
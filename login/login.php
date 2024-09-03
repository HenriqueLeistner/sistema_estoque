<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Login</h2>
    <form action="processa_login.php" method="post">
        <label for="email">E-mail:</label>
        <input type="email" name="Email" required>
        <br>
        <label for="senha">Senha:</label>
        <input type="password" name="Senha" required>
        <br>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>
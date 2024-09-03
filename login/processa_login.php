<?php

session_start();
require 'config/db.php';

$email = $_POST['email'];
$senha = $_POST['senha'];

$query = $pdo->prepare("SELECT * FROM usuarios where EMAIL = :EMAIL");
$QUERY->bindParam(':email', $email);
$query->execute();
$usuario = $query->fetch(PDO::FETCH_ASSOC);

if ($usuario && password_verify($senha, $usuario['senha'])) {
    $_SESSION['usuario_id'] = $usuario['id'];
    $_SESSION['usuario_nome'] = $usuario['nome'];
    $_SESSION['nivel_acesso'] = $usuario['nivel_acesso'];
    header ("Location: dashboard.php");
} else {
    echo "E-mail ou senha incorretos.";
}
?>
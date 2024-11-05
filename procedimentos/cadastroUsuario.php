<?php 
session_start();
include_once ("conexao.php");

if ($conexao->connect_errno) {
    echo "Failed to connect to MySQL: " . $conexao->connect_error;
    exit();
} else {
    $email = $conexao->real_escape_string($_POST['email']);
    $senha = $conexao->real_escape_string($_POST['senha']);
    $senhaHash = hash('sha256', $senha);

    $sql = "INSERT INTO `usuarios` (`email`, `senha`) VALUES ('$email', '$senhaHash')";

    $resultado = $conexao->query($sql);

    header('Location: ../home.php?sucesso=1', true, 301);
    exit();
    }
    ?>
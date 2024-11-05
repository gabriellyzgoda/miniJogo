<?php 
session_start();
include_once ("conexao.php");

if ($conexao->connect_errno) {
    echo "Failed to connect to MySQL: " . $conexao->connect_error;
    exit();
} else {
    $nome = $conexao->real_escape_string($_POST['nome']);
    $descricao = $conexao->real_escape_string($_POST['descricao']);

    $sql = "INSERT INTO `jogos`(`nome_jogo`, `data`, `descricao`) 
            VALUES ('$nome', '".date("Y-m-d")."','$descricao')";

    $resultado = $conexao->query($sql);

    header('Location: ../homeU.php?sucesso=1', true, 301);
    exit();
    }
    ?>
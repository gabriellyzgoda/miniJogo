<?php 
session_start();
include_once ("conexao.php");

if ($conexao->connect_errno) {
    echo "Failed to connect to MySQL: " . $conexao->connect_error;
    exit();
} else {
    $email = $conexao->real_escape_string($_POST['email']);
    $senha = $conexao->real_escape_string($_POST['senha']);

    $sql = "SELECT *
    FROM `admin`
    WHERE `nome` = '$email' AND `senha` = '".hash('sha256',$senha)."';";

    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0){ 
        $_SESSION['nome'] = $email; 
        header('Location: ../home.php', true, 301);
        exit();
    } elseif ($resultado->num_rows == 0) {
        $sql = "SELECT *
                FROM `usuarios`
                WHERE `email` = '$email' AND `senha` = '".hash('sha256',$senha)."';";

        $resultado = $conexao->query($sql);

            if ($resultado->num_rows > 0) {
                $_SESSION['email'] = $email; 
                header('Location: ../homeU.php', true, 301);
                exit();
            } 
        } else {
            $conexao->close();
            header('Location: ../index.php?erro=1', true, 301);
            exit();
        }
    }
    ?>
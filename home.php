<?php
session_start();
include_once('procedimentos/conexao.php');
if (!isset($_SESSION['nome'])) {
    header("Location: procedimentos/unauthorized.php");
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo/estiloHome.css">
    <title>Início</title>
</head>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
<header>
    <h4>Bem-vindo Administrador: <?php echo $_SESSION['nome'];?></h4>
    <a href="procedimentos/sair.php"><ion-icon name="arrow-forward-outline"></ion-icon></a>   
</header>
<body>
<div class="container">
    <h2>Cadastro de Usuário</h2>
    <form action="procedimentos/cadastroUsuario.php" method="post">
        <label>Email:</label>
        <input type="email" name="email" id="email" required>
        <label>Senha:</label>
        <input type="password" name="senha" id="senha" required>
        <button type="submit">Cadastrar</button>
    </form>
</div>
</body>
<script>
        // Verifica se o parâmetro 'sucesso' está presente na URL
        window.onload = function() {
            // Recupera o parâmetro da URL
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('sucesso') && urlParams.get('sucesso') == '1') {
                // Exibe o alerta se o cadastro foi bem-sucedido
                alert('Cadastro realizado com sucesso!');
            }
        };
    </script>
</html>
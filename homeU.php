<?php
session_start();
include_once('procedimentos/conexao.php');
if (!isset($_SESSION['email'])) {
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
    <h4>Bem-vindo Usuário: <?php echo $_SESSION['email'];?></h4>
    <a href="procedimentos/sair.php"><ion-icon name="arrow-forward-outline"></ion-icon></a>   
</header>
<body>
<div class="container">
    <h2>Cadastro de Jogos</h2>
    <form action="procedimentos/cadastroJogo.php" method="post">
        <label>Nome do jogo:</label>
        <input type="text" name="nome" id="nome" required>
        <label>Descrição:</label>
        <input type="text" name="descricao" id="descricao" required>
        <button type="submit">Cadastrar</button>
    </form>
</div>
</body>
<script>
        window.onload = function() {
            const urlParams = new URLSearchParams(window.location.search);
            if (urlParams.has('sucesso') && urlParams.get('sucesso') == '1') {
                alert('Cadastro realizado com sucesso!');
            }
        };
    </script>
</html>
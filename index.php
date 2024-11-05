<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="estilo/estiloIndex.css">
        <title>Mini Jogo</title>
</head>
<body>
<form method="post" action="procedimentos/verificaLogin.php">
    <div class="conteudo">
    <label>E-Mail: </label>
    <input type="text" name="email" id="email" size="20"><br />
    <label>Senha: </label>
    <input type="password" name="senha" id="senha" size="20"><br />
    <br>
    <input type="submit" value="Entrar" class='botao' />
    <?php if (isset($_GET['erro'])) { ?>
                            <div class="linha-erro">
                                <div class="mensagem-erro">
                                    <p>
                                        <?php
                                        if ($_GET['erro'] == 1) {
                                            echo "Usuário ou senha incorretos";
                                        } 
                                        ?>
                                    </p>
                                </div>
                            </div>
                        <?php } ?>
</form>
</div>
</body>
</html>
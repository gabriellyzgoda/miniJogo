<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logout</title>
    <link rel="icon" type="image/x-icon" href="imagens/favicon.ico">
    <script src="https://kit.fontawesome.com/1317d874ee.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="css/estiloUnauthorized.css" media="screen" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=League+Spartan:wght@100..900&display=swap');
    </style>
</head>

<body>
    <div class="principal">
        <div class="texto">
            <?php
            echo "<p>Acesso não autorizado.<br>Você não tem permissão para acessar esta página.</p>";
            ?>
        </div>

        <div class="botoes">
            <a href="../index.php"><button id="index">Ir para o Login</button></a>
        </div>
    </div>
</body>

</html>
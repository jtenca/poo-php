<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Encapsulamento</title>
</head>
<body>
    <h1>Projeto Controle Remoto</h1>
    <?php
        require_once 'ControleRemoto.php';

        $con = new ControleRemoto();

        $con->ligar();
        $con->abrirMenu();
    ?>
</body>
</html>
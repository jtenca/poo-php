<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurando Visibilidade de Atributos e Métodos</title>
</head>
<body>

    <pre>
    <?php
  
        require_once 'Caneta.php';

        $c1 = new Caneta();
        $c1->modelo = "BIC Cristal";
        $c1->tampar();
        $c1->rabiscar();

        print_r($c1);

    ?>
    </pre>
</body>
</html>
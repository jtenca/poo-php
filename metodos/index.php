<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Métodos Especiais</title>
</head>
<body>

    <pre>
    <?php
      require_once 'Caneta.php';

      $c1 = new Caneta("Compactor", "Azul", "0.7");
      /*$c1->setModelo("BIC");
      $c1->setPonta(0.5);
      //$c1->ponta = (0.5);*/

      print_r($c1);*
      //echo "Caneta ($c1->getModelo() ) e ponta ($c1->getPonta() )";
    ?>
    </pre>
</body>
</html>
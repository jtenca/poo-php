<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes e Objetos</title>
</head>
<body>
    <?php
        require_once 'Caneta.php';

        // instanciar 
        $c1 = new Caneta;
        $c1->cor = "Azul";
        $c1->ponta = 0.5;
        $c1->tampada = true; 
        $c1->tampar();

        print_r($c1);

        echo "<br>";

        $c2 = new Caneta;
        $c2->cor = "Vermelha";
        $c2->carga = 50;
        $c2->tampar();

        print_r($c2);

        /* Os dois OBJETOS vieram da mesma CLASSE, entretanto, nenhum tem relação com o outro
           São instâncias diferentes da mesma classe
        */
    ?>
</body>
</html>
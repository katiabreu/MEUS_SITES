<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula 02 - POO</title>
</head>
<body>
    <?php
        require_once 'caneta.php';
        $c1=new caneta;
        $c1->cor="Azul";
        $c1->ponta=0.5;
        $c1->tampada=false;
        $c1->tampar();
        print_r($c1);
        echo "<br>";
        $c2=new caneta;
        $c2->cor="Verde";
        $c2->carga=50;
        $c2->tampar();
        print_r($c2);
    ?>
</body>
</html>
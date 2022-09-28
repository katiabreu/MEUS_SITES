<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Aula 02 - POO</title>
</head>
<body>
    <pre>
    <?php
        require_once 'caneta.php';
        $c1=new caneta;
        $c1->modelo="Bic cristal";
        $c1->cor="Azul";
        //$c1->ponta=0.5;
        //$c1->carga=91;
        //$c1->tampada="true";
        $c1->rabiscar();
        $c1->tampar();
        print_r($c1);
    ?>
    </pre>
</body>
</html>
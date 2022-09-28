<!DOCTYPE html>
<html>
    <head>
      <title>title</title>
    </head>
    <body>
        <pre>
        <h1>Projeto Controle Remoto</h1>
        <?php
        require_once 'ControleRemoto.php';
        $c=new ControleRemoto;
        $c->ligar();
        $c->maisVolume();
        $c->abrirMenu();
        ?>
        </pre>
    </body>
</html>


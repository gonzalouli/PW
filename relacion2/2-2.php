<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 2</title>
    </head>

    <body>
    <?php

        $voto = $_POST['voto'];

        $conexion = new PDO('mysql:host=127.0.0.1;dbname=lindavista','cursophp', null);

        if($voto == "si")
            $consulta = $conexion->query('INSERT INTO votos (votos1, votos2) VALUES(1,0)');
        else  
            $consulta = $conexion->query('INSERT INTO votos (votos1, votos2) VALUES(0,1)');

        echo "<br>Se ha añadido un nuevo voto";

        $sies = $conexion->query('SELECT count(votos1) FROM votos where votos1 =1');

        $noes = $conexion->query('SELECT count(votos2) FROM votos where votos2 =0');
            
        echo "<br>Resultados: </br>";

        echo "Si: ";
        $total = $sies+$noes;
        $cant = ($sies/$total)*20;
        for($i=0; $i<$cant ; $i++){
            echo '|';
        }
        $porcent = (100*$sies)/$total;
        echo $porcent.'% <br>';


        echo 'No: ';
        $cant = ($noes/$total)*20;
        for($i=0; $i<$cant ; $i++){
            echo '|';
        }
        $porcent = (100*$noes)/$total;
        echo $porcent.'% <br>';

        echo "<div style=\"text-align: center;\">
        <form action=2-2.html>
            <input type=submit value=\"Volver a la Encuesta\" />
        </form>
        </div>;"
    ?>


    </body>
</html>
      
   

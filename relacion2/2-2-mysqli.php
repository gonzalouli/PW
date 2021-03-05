<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 2</title>
    </head>

    <body>
    <?php


        $voto = $_POST['voto'];
       
        $conexion = mysqli_connect("localhost","cursophp",null,"lindavista");
      
        if($voto == 'si')
            mysqli_query($conexion, "INSERT INTO votos (votos1, votos2) VALUES (1,0)");
        else  
            mysqli_query($conexion, "INSERT INTO votos (votos1, votos2) VALUES (0,1)");

        echo "<br>Se ha añadido un nuevo voto";

        $sies = mysqli_num_rows($conexion, "SELECT * FROM votos where votos1=1 ");

        $noes = mysqli_num_rows($conexion, "SELECT * FROM votos where votos2=1 ");
        

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
    ?>

    <div style="text-align: center;">
        <form action=2-2.html>
            <input type=submit value="Volver a la Encuesta" />
        </form>
    </div>;


    </body>
    
    
</html>
      
   

<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 5</title>
    </head>
    <body>


        <?php
        define('TAM', 10);
            $n = 1;
            echo "<table border = 1>";
                for($i = 1; $i<=TAM ; $i++)
                {   if($i % 2 == 0)
                     echo "<tr bgcolor=#bdc3d6>";
                    else
                     echo "<tr>";
                    for( $j = 1; $j <=TAM; $j++){
                        echo "<td>",($n),"</td>";
                        $n++;                    
                    }
                    echo "</tr>";
                }
            echo "</table>";
        ?>


    </body>
</html>
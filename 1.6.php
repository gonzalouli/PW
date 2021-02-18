<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 6</title>
    </head>

 
    <body>

    
        <?php

            function powt ($base , $potencia){
                return $rdo = pow($base, $potencia);
            }

            define('TAM', 4);

            echo "<table border = 1>";
            
            for($i = 1; $i<=TAM ; $i++)
            {
                echo "<tr>";
                for( $j = 1; $j<=TAM ; $j++ )
                {
                    echo "<td>".powt($i, $j)."</td>";
                }
                echo "</tr>";
            }
            
            echo "</table>"

?>


    </body>
</html>
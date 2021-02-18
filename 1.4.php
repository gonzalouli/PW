<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 4</title>
    </head>
    <body>


        <?php
            $n = 1;
            echo "<table border = 1>";
                for($i = 1; $i<=10 ; $i++)
                {   echo "<tr>";
                    for( $j = 1; $j <=10; $j++){

                        echo "<td>",($n),"</td>";
                        $n++;                    
                    }
                    echo "</tr>";
                }
            echo "</table>";
        ?>


    </body>
</html>
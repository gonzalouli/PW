<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 3</title>
    </head>

 
    <body>

    
        <?php

        echo "<table border = 1>";
        $i = 0;

        foreach (glob("./fotos/*") as $filename)
        {
            if($i % 7 ==0){
                echo "<tr>";
            }
            echo "<td> <a href=$filename>
             <img src=$filename width=\"100px\" height=\"100px\" /> </a> </td>";
            $i++;
            
        }
        echo "</tr>";
        echo "</table>";

        ?>

        <form enctype="multipart/form-data" action="1.10-subida.php" method="POST" >

        Enviar este fichero:
        <input name="archivo" type="file" />
        <input type="submit" value="Enviar fichero" />

        </form>

    </body>
</html>
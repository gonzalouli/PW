<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 3</title>
    </head>

 
    <body>

    
        <?php

        echo "<table border = 1>";

        foreach (glob("./fotos/*.jpg") as $filename){

            echo "<br> <img src=$filename width=\"100px\" height=\"100px\" /> </br>";
            
        }

        echo "</table>";

        ?>

        <form enctype="multipart/form-data" action="1.10.1.php" method="POST" >

        Enviar este fichero:
        <input name="archivo" type="file" />
        <input type="submit" value="Enviar fichero" />

        </form>

    </body>
</html>
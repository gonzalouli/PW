<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 3</title>
    </head>

 
    <body>

    
        <?php

        $euros = $_POST['euros']; 

        $libras = $euros * 0.87;

        echo $euros." euros son ".$libras."libras";
        
        ?>

    </body>
</html>
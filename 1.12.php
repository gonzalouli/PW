<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 3</title>
    </head>

 
    <body>

    
        <?php
        $opcion = $_POST['moneda'];
        $cantidad = $_POST['cantidad'];

        switch($opcion){

            case 'libra': 
                echo $cantidad." euros son ".(0.87*$cantidad)." ".$opcion."s" ;
                break;
            case 'dolar': 
                echo $cantidad." euros son ".(1.20*$cantidad)." ".$opcion."es" ;
                break;
            default:
                echo "No ha seleccionado una opcion correcta";
            
        }      



        ?>

    </body>
</html>
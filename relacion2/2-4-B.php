<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 4</title>
        <link href="2-1.css" rel="stylesheet" type="text/css">
    </head>
    <body>

   
    <?php
          
        $conexion = mysqli_connect("localhost","cursophp-ad","php.hph","lindavista");
        if(isset($_POST['submit'])){//Validacion de envio de formulario
            $peticiones = $_POST['eliminadas'];

            if(!empty($peticiones)){ // Ciclo para mostrar las casillas checked checkbox.
                foreach($peticiones as $selected){
                    $archivo = mysqli_query($conexion, "SELECT imagen from noticias where id=$selected");
                    $fila = mysqli_fetch_array($archivo);
                    unlink("./imgs/".$fila['imagen']);
                    mysqli_query($conexion, "DELETE FROM noticias where id=$selected");

                }
            }
        }
        

    
        mysqli_close($conexion);

        echo " <br>   <form action=\"2-4.php\" >
            <input type=\"submit\" value=\"Borrar noticia\" />
            </form>";

            
        
        ?>
    
    </body>
</html>
<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 1</title>
        <link href="2-1.css" rel="stylesheet" type="text/css">
    </head>
    <body>
    <h1 style= "color: blue;">Datos de la empresa</h1>
    <?php   
        $conexion =mysqli_connect("localhost","cursophp", null , "lindavista");

        if(mysqli_select_db($conexion,"lindavista")){
            
            $consulta = mysqli_query($conexion, "SELECT * FROM noticias");
            $numcol = mysqli_num_rows($consulta);

            for( $i = 0 ; $i < $numcol ; $i++ ){
                $fila = mysqli_fetch_array($consulta);
                if($i == 0){
                    echo " <table class=\"encabezado\" > 
                    <tr class = \"titulos\">
                    <th>ID</th>
                    <th>Titulo</th>
                    <th>Descripcion</th>
                    <th>Categoria</th>
                    <th>Fecha</th>
                    <th>Imagen</th>
                    </tr>";
                }
                    $filename = $fila['imagen']; //nombre de la imagen
                    $dir = "./imgs/".$filename ;  //directorio en ella, lo hago asi porque emborronaba la legibilidad en href ./imgs/filename con las comas y demás
                    echo  
                    "<tr class=\"filas\" >
                    <td>".$fila['id']."</td>
                    <td>".$fila['titulo']."</td>
                    <td>".$fila['texto']."</td>
                    <td>".$fila['categoria']."</td>
                    <td>".$fila['fecha']."</td>
                    <td> <a href=$dir>";
                    if($filename != null) //si no hay imagen da igual, porque no aparece el hipervinculo
                        echo "<img src=\"./imgs/img.png\" width=\"30px\" height=\"30px\" /> </a> </td>";
                    echo "<tr>";
            }
            echo "</table></div>";
        }else
            echo("No existe la BBDD");
            
        mysqli_close($conexion);
        echo " <br>   <form action=\"2-3.html\" >
        <input type=\"submit\" value=\"Subir una noticia\" />
        </form>";
        echo " <br>   <form action=\"2-4.php\" >
        <input type=\"submit\" value=\"Borrar una noticia\" />
        </form>";

    ?>
    </body>
</html>

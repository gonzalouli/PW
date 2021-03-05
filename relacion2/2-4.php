<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 4</title>
        <link href="2-1.css" rel="stylesheet" type="text/css">
    </head>
    <body>

    <h1 style= "color: blue;" align="center" >Datos de la empresa</h1>
    <h2 align="center" >¿Qué noticia desea eliminar?</h2>
 
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
                    <th>Borrar</th>
                    </tr>
                    <form method= \"POST\" action=\"2-4-B.php\" >";
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
                    $id = $fila['id'];
                    echo "<td>
                        <input style=\"width:30px; height:30px;\" name=\"eliminadas[]\" value=$id type=\"checkbox\"/>    
                    </td>";
                        echo "<tr>";
            }
            echo "<input type=\"submit\" name=\"submit\" value=\"Borrar noticia\" />
            </form></table>";
        }else
            echo("No existe la BBDD");
            
        mysqli_close($conexion);
    

    ?>
    </body>
</html>

<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 3</title>
    </head>
    <body>

        <?php
            
            $conexion = mysqli_connect("localhost","cursophp-ad","php.hph","lindavista");
            date_default_timezone_set('UTC');

            $titulo = $_POST['titulo'];
            $texto = $_POST['texto'];
            $categoria = $_POST['categoria'];
            $directorio = './imgs/';
            $archivo = basename($_FILES['archivo']['name']);
            $subir_archivo = $directorio.$archivo;
            $fecha = date('Y-m-j');

            // print $titulo.$texto.$categoria.$subir_archivo.$fecha;

            if(move_uploaded_file($_FILES['archivo']['tmp_name'], $subir_archivo))
                echo "El archivo es válido y se cargó correctamente.<br><br>";
            else
                echo "La subida ha fallado";
            echo "<br>";
            // mysqli_query($conexion, "INSERT INTO noticias (titulo,texto,categoria,fecha,imagen ) VALUES
            //           ('qwer', 'qwer', 'costa' , '2000-00-00', 'archivo')" );
            
            mysqli_query($conexion, "INSERT INTO noticias (titulo,texto,categoria,fecha,imagen ) VALUES
                ('$titulo', '$texto','$categoria', '$fecha' , '$archivo')" );

            // print "INSERT INTO noticias (titulo,texto,categoria,fecha,imagen ) VALUES
            // ($titulo, $texto,$categoria, $fecha , $archivo)";
            mysqli_close($conexion);

            echo " <div style=\"text-align: center;\">
            <form action=\"2-3.html\" >
            <input type=\"submit\" value=\"Volver a la subida de noticias\" />
            </form></div>   ";

            echo "    <div style=\"text-align: center;\">
            <form action=\"2-1.php\">
                <input type=\"submit\" value=\"Volver a Noticias\" />
            </form>
            </div>";
        ?>
    </body>
</html>
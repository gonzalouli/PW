<!DOCTYPE html>
<html>
    <head>
        <title>Ejercicio 7</title>
    </head>

 
    <body>

    
        <?php
            $i = 0; 
            $vector = array();
            while ($i<10){
                if($i % 2 ==0)
                {
                    $vector[] = $i; 
                }
                $i++;
                    
            }
            
            for($i = 0; $i < 10 ; $i++)
                echo "$vector[$i] <br>"

        ?>


    </body>
</html>
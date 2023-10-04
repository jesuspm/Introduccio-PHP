<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>  
    <?php       
        $taula =array();                
        for($i=0; $i < 11; $i++){
            $taula[$i]= rand(0,4);      
        }                               

        $numero = count($taula);  

        $planta =array();                
        for($i=0; $i < 9; $i++){
            $planta[$i]= rand(0,1);      
        } 
    ?>
    <ul>
            <?php
                for($e = 0;$e < 6; $e++){
                    for($i = 0; $i <$numero; $i++){
                        if($taula[$i] >0 && $taula[$i] <4 ){
                            echo('<li>Habitación '.$i.' de la planta '.$e.' té '.$taula[$i].' persones</li>');

                        }
                        else if($taula[$i] == 0 ){
                            echo('<li>Habitación '.$i.' de la planta '.$e.' està buida </li>');

                        }
                        else if($taula[$i] == 4 ){
                            echo('<li>Habitación '.$i.' de la planta '.$e.' està plena </li>');

                        }     
                    }
                    
                }
            ?>
    </ul>





</body>
</html>
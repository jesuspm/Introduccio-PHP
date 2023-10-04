<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ericsanchez_p2</title>
</head>
<body>  
    <?php       //Parte INDIVIDUAL
        $taula =array();                //Aqui declaro un array llamado taula
        for($i=0; $i < 10; $i++){
            $taula[$i]= rand(0,5);      //Aqui le voy introduciendo valores, poniendo de identificador la variable $i que esta dando vueltas
        }                               //y despues con el rand le asigno un numerl aleatoria entre el 0 y el 5

        $numero = count($taula);        //Para contar el tamaño que tiene la array
    ?>
    <ul>
            <?php
                for($i = 0; $i <$numero; $i++){
                    if($taula[$i] >0 && $taula[$i] <5 ){
                        echo('<li>La taula '.$i.' té '.$taula[$i].' comensals</li>');

                    }
                    else if($taula[$i] == 0 ){
                        echo('<li>La taula '.$i.' està buida </li>');

                    }
                    else if($taula[$i] == 5 ){
                        echo('<li>La taula '.$i.' està plena </li>');

                    }     
                }
            ?>
    </ul>

</body>
</html>
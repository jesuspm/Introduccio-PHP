<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>taulaHotel</title>
</head>
<body>
    <?php


        for($i = 0; $i <= 9; $i++){
            $taula[$i] ='Taula '.$i.' : '.random_int(0,5);

            }

        
        $longuitud = count($taula);
    
    ?>

    <div>
        <ul>
            <li>
                <?php 
                    for($i = 0; $i <= $longuitud; $i++){
                        echo $taula[$i]."<li>";
                    }
                ?>    

        </ul>
    </div>
</body>
</html>
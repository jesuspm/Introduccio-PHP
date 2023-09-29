<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>GESTIÓ HOTEL en PHP</h1>
    <?php $mesas = [
        '0' => 'La taula 0',
        '1' => 'La taula 1',
        '2' => 'La taula 2',
        '3' => 'La taula 3',
        '4' => 'La taula 4',
        '5' => 'La taula 5',
        '6' => 'La taula 6',
        '7' => 'La taula 7',
        '8' => 'La taula 8',
        '9' => 'La taula 9',
    ] ?>
    <form>
        <div>
            <ul>
                <li>
                    <?php echo $mesas["0"] . rand(0, 5); ?>
                </li>
                <li>
                    <?php echo $mesas["1"] . rand(0, 5);
                    ?>

                </li>
                <li>
                    <?php echo $mesas["2"] . rand(0, 5); ?>
                </li>
                <li>
                    <?php echo $mesas["3"] . rand(0, 5); ?>
                </li>
                <li>
                    <?php echo $mesas["4"] . rand(0, 5); ?>
                </li>
                <li>
                    <?php echo $mesas["5"] . rand(0, 5); ?>
                </li>
                <li>
                    <?php echo $mesas["6"] . rand(0, 5); ?>
                </li>
                <li>
                    <?php echo $mesas["7"] . rand(0, 5); ?>
                </li>
                <li>
                    <?php echo $mesas["8"] . rand(0, 5); ?>
                </li>
                <li>
                    <?php echo $mesas["9"] . rand(0, 5); ?>
                </li>
            </ul>
        </div>
    </form>
</body>

</html>
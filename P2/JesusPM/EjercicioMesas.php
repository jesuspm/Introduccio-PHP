<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php $mesas = [
        '1' => 'La taula 0',
        'La taula 1',
        'La taula 2',
        'La taula 3',
        'La taula 4',
        'La taula 5',
        'La taula 6',
        'La taula 7',
        'La taula 8',
        'La taula 9',
    ] ?>
    <div>
        <ul>
            <li>
                <?php echo $mesas["1"]; ?>
            </li>
        </ul>
    </div>
</body>

</html>
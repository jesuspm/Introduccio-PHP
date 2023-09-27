<!DOCTYPE html>
<html>

<body>

    <?php
    $persona = [
        'nombre' => 'Roger',
        'edad' => '40',
        'fecha' => '1983-05-12',
        'telefono' => '776549987',
        'calle' => 'Carrer de Turin,23',
        'correo' => 'roger.sobrino@iticbcn.cat',
        'trabajo' => 'si',
        'estatura' => '167'
    ]
        ?>

    <form>
        <div>
            <?php
            $titulo = "Descrivint a Roger Sobrino";
            $subtitulo = "Les dades de Roger son:";
            ?>
        </div>
        <div>
            <h1>
                <?php echo $titulo ?>
            </h1>
            <h2>
                <?php echo $subtitulo ?>
            </h2>
            <ul>
                <li>Es diu:
                    <?php echo $persona["nombre"]; ?>
                </li>
                <li>Te
                    <?php echo $persona["edad"]; ?> anys
                </li>
                <li>Va neixer l'any:
                    <?php echo $persona["edad"]; ?>
                </li>
                <li>El seu telèfon és:
                    <?php echo $persona["telefono"]; ?>
                </li>
                <li>Viu a:
                    <?php echo $persona["calle"]; ?>
                </li>
                <li>El seu mail és:
                    <?php echo $persona["correo"]; ?>
                </li>
                <li>Treballa:
                    <?php echo $persona["trabajo"]; ?>
                </li>
                <li>I medeix:
                    <?php echo $persona["estatura"]; ?>
                </li>
            </ul>
        </div>

    </form>

</body>

</html>
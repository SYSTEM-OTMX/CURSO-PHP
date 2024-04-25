<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constantes</title>
</head>
<body>
    <?php

    //constantes 
    /*
    1 no se necesita el signo de dolar $
    2 solo se define con el metodo define
    3 se asignan una unica vez
    4 el alcance o SCOPE es global se puede acceder desde cualquier lugar a las constantes
    */

    //definir constante y valor

    define('CUOTA',2000);

    $valor_cuota = CUOTA;
    echo "el valor de cuota es de: $valor_cuota";
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo "<br/>";
    echo "el valor de cueto aes de :" .CUOTA. "<br/>";
    ?>
</body>
</html>